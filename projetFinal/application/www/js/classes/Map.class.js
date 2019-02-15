 

var Map = function (){

this.id = null;

$('#map_image a').on('mouseenter',this.colorpath.bind(this));
$('#map_list a').on('mouseover',this.colorlist.bind(this));


}
Map.prototype.colorpath = function(event){

	this.id = event.currentTarget.id.replace('region-','');

	var color = document.querySelectorAll('.is-active');
	for(i=0;i<color.length;i++){
		color[i].classList.remove('is-active');
	}
	$('#list-'+this.id).addClass('is-active');
	$('#region-'+this.id).addClass('is-active');
	console.log($('list-'+this.id));
}

Map.prototype.colorlist = function (event){

	console.log(event.currentTarget)

	this.id = event.currentTarget.id.replace('list-','');
	//$('#region-'+this.id).addClass('is-active');


	var color = document.querySelectorAll('.is-active');
	for(i=0;i<color.length;i++){
		color[i].classList.remove('is-active');
	}
		var region = document.getElementById('region-'+this.id);
	region.classList.add('is-active');
	$('#list-'+this.id).addClass('is-active');
	console.log($('#region-'+this.id));
}