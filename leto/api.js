console.log('test');

$.ajax({
    url: "https://api.internationalshowtimes.com/v4/movies/52340",
    type: "GET",
    dataType: "json",
    data: {
        "countries": "FR",
    },
    headers: {
        "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
    },
})
.done(show_info)
.fail(function(error) {
    console.log("HTTP Request Failed");
});

function show_info(response){
    console.log("HTTP Request Succeeded: ");
    console.log(response);
    $('#target').append('<h1>'+response.movie.title+'</h1>');
    $('#target').append('<img src="'+response.movie.poster_image_thumbnail+'"/>');

    $('#target').append('<ul>');
    
    $('#target ul').append('<li>date de sortie :'+dateUsToFrench(response.movie.release_dates.FR[0].date)+'</li>');
    $('#target ul').append('<li>de :'+response.movie.crew[0].name+'</li>');
    for(i=0;i<response.movie.cast.length;i++){
        $('#target ul').append('<li>avec:'+response.movie.cast[i].name+'</li>');
    }
    $('#target ul').append('<li>genre:'+response.movie.genres[0].name+'</li>');
    $('#target ul').append('<li>distributeur:</li>')
    $('#target ul').append('<li>synopsys:'+response.movie.synopsis+'</li>');
    

    $('#target').append('<iframe src="'+response.movie.trailers[0].trailer_files[0].url+'"/>');
   

}


