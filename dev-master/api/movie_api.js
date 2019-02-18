function show_movie(response){
	console.log(response);
	$('#target').empty();
	$('#target').append('<ul>')
	for(i = 0;i < response.results.length; i++){
		$('#target').append('<li class="show" data-id="'+response.results[i].id+'" data-companies="'+response.results[i].id+'">'+response.results[i].title+'</li>');

	}
}


function show_movieDetails (response){
	console.log(response);



	const url_img = 'https://image.tmdb.org/t/p/w185_and_h278_bestv2';
		$('#target2').empty();
		$('#target2').append('<img src="'+url_img+response.backdrop_path+'" />');
		$('#target2').append('<p>'+response.title+'</p>');
		$('#target2').append('<p>'+response.overview+'</p>');
		$('#target2').append('<ul>');
		for(var i = 0; i < response.production_companies.length; i++) {
    
    	show_companiesDetails(response.production_companies[i].id);
        
    }
    
		

}


function show_companiesDetails (response){
	

		console.log(response);
	$('#target2 ul').append('<li><a href="'+response.homepage+'" id="'+response.id+'">'+response.name+'</li></a>');
    

	
	
}