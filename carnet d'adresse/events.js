var tabInfo = [];

showContact();

function change(){
	$('#contact-form').css('display','block');
	$('contact-form').data('mode', 'add');

}


function saveContact (){
	var titre = $('select[name=title]').val();
	var lastName = $('input[name=lastName]').val();
	var firstName = $('input[name=firstName]').val();
	var phone = $('input[name=phone]').val();
	var mode = $('#contact-form').data('mode');

	


	var info = {titre:''+titre+'',lastName : ''+lastName+'',firstName : ''+firstName+'',tel : ''+phone+''};
	console.log('mode',$('#contact-form').data('mode'));
	
	if($('#contact-form').data('mode') == 'add'){

		tabInfo.push(info);
	} else{
		editContact();
		var index = $('#contact-details').data('id');
		tabInfo[index] = info;

	}


	var json = JSON.stringify(tabInfo);
	console.log(json);
	window.localStorage.setItem('contact', json);

	showContact();
	
	


}

function showContact(){
	var showInfo = window.localStorage.getItem('contact');
	tabInfo = JSON.parse(showInfo);
	if (tabInfo == null) {
		tabInfo = [];
	}
	$('#address-book').html('<ul>');
	for(i=0;i< tabInfo.length ;i++){
		
		$('#address-book ul').append('<li data-id="'+i+'"><a href="#">'+tabInfo[i].lastName+' '+tabInfo[i].firstName+'</a></li>');

	}





}

function showInfo(){
	console.log('work');

	var query = $(this).data('id');
	$('#contact-details').data('id', query);
	console.log(query);
	$('#contact-details').removeClass('hide');
	$('#contact-details h3').html(tabInfo[query].titre+''+tabInfo[query].lastName+' '+tabInfo[query].firstName);
	$('#contact-details p').html(tabInfo[query].tel);

	
}




function editContact(){
	$('#contact-form').data('mode','edit');

	var query = $('#contact-details').data('id');
	
	console.log(query);

	change();


	var titre = tabInfo[query].titre;
	var lastName = tabInfo[query].lastName;
	var firstName = tabInfo[query].firstName;
	var tel = tabInfo[query].tel;

	$('select[name=title]').val(titre);
	$('input[name=lastName]').val(lastName);
	$('input[name=firstName]').val(firstName);
	$('input[name=phone]').val(tel);



	
}



function deleteContact(){
	$('#address-book ul').empty();
	tabInfo=[]
	
	window.localStorage.removeItem('contact');
}