

var Map = function (){



$('#map_image a').on('mouseenter',this.colorpath.bind(this));


}
Map.prototype.colorpath = function(event){

	var id = event.currentTarget.id.replace('region-','');
	$('#list-'+id).addClass('is-active');
	console.log($('list-'+id));
}