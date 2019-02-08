
$('#submitCN').on('click',client);

function client(){
	console.log('la');                         
var client = $('#customerName').val();
$.getJSON('http://10.10.109.52/api_back/customer.php?keyword='+client+'&api_key=aze',showClient);

}

 $.getJSON('http://10.10.109.33/apiback/customer.php?id=103&api_key=aze',show);
$.getJSON('http://10.10.109.33/apiback/office.php',show);
$.getJSON('http://10.10.109.33/apiback/office.php',show);
$.getJSON('http://10.10.109.33/apiback/employees.php',show);



function show (response){
console.log(response);
}

show();


function showClient(response){
	event.preventD

	console.log('la',response);
}