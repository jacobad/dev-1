function movie_search(event){
	event.preventDefault();
    
	var query = $('input[name=street]').val();

	$.getJSON('https://api.themoviedb.org/3/search/movie?api_key=2ee2c5b569240ea2a2a879dd9c8a822c&query='+query, show_movie);

}

function show_info(event){
	event.preventDefault();
	var query = $(this).data('id');
	console.log(query);
	$.getJSON('https://api.themoviedb.org/3/movie/'+query+'?api_key=2ee2c5b569240ea2a2a879dd9c8a822c',show_movieDetails);

}

function show_companies(id){
	
    
	var query = $(this).data('companies');
	$.getJSON('https://api.themoviedb.org/3/company/'+query+'?api_key=2ee2c5b569240ea2a2a879dd9c8a822c&query=', show_companiesDetails);

}
