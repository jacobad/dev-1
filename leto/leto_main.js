function position(pos) {

	console.log(pos);
    var location = pos.coords.latitude.toFixed(2)+','+pos.coords.longitude.toFixed(2);
    console.log(location);
	var movieId = "52340";
	var date= new Date()


	$.ajax({
	    url: "https://api.internationalshowtimes.com/v4/showtimes?movie_id="+movieId+"&countries=FR&location="+location+"&time_to="+date+"&distance=50",
	    type: "GET",
	    dataType: "json",
	    data: {
	        "countries": "FR",
	    },
	    headers: {
	        "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
	    },
	})
	.done(displayShowTimes)

	.fail(function(error) {
	    console.log("HTTP Request Failed");
	})


}


if(navigator.geolocation) {
	
    console.log('il y a la géoloc');
    
    navigator.geolocation.getCurrentPosition(position);
    
} else {

  console.log('Pas de geoloc');
}


function displayShowTimes(response) {

	console.log(response);
    
    var showtimes = [];
    
    
    for(var i = 0; i < response.showtimes.length; i++) {
    	var seance = splitSeance(response.showtimes[i].start_at);
    	
       	var test = true;
        for (var j = 0; j < showtimes.length; j ++) {
            
            if (showtimes[j].cineId == response.showtimes[i].cinema_id) {
                
                    showtimes[j].show.time.push(seance.hour);
                    showtimes[j].show.url.push(response.showtimes[i].booking_link);
                    test = false;
                
                }
            }
            
            if (test == true) {
                showtimes.push({
                cineId :  response.showtimes[i].cinema_id,
                show : {
                      		time : [seance.hour],
                     		 url : [response.showtimes[i].booking_link]
                   	   } 
                });
            }
    
    }
    
    console.log('nouveau tab',showtimes);
      buildTableWithShow(showtimes);
	    
}

function buildTableWithShow(showtimes) {

	var table = $('<table>');
    
    table.append('<tr><td>cinema</td><td>horaire des scéance d\'aujourd\'hui</td></tr>');
    
	for (var k = 0; k < showtimes.length; k++) {
    
    	var tr = $('<tr>');
        tr.append('<td id="'+showtimes[k].cineId+'">'+showtimes[k].cineId+'</td>');
        
        var td = $('<td>');
        
        for(var l = 0; l < showtimes[k].show.time.length; l++) {
         
            td.append('<a href="'+showtimes[k].show.url[l]+'">'+showtimes[k].show.time[l]+'</a> ')
        
        }
        
        tr.append(td);

        table.append(tr);
    
    }

	$('#target2').html(table);
	for(var m = 0; m < showtimes.length; m ++) {
    
    	getCineWithId(showtimes[m].cineId);

    
    }

}

function getCineWithId(cineId) {
	jQuery.ajax({
    url: "https://api.internationalshowtimes.com/v4/cinemas/"+cineId,
    type: "GET",
    data: {
        "countries": "FR",
    },
    headers: {
        "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
    },
    })
    .done(function(response) {
    
        console.log('place',response);
        

        
        $('#'+response.cinema.id).html('<h3>'+response.cinema.name+'</h3> <p>'+response.cinema.location.address.display_text+'</p>');


    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("HTTP Request Failed");
    })



}

