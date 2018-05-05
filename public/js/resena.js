/*

	var titles = [
	  	'Ready Player One',
		'Another Bad Movie',
	];

	$('#tituloPelicula').devbridgeAutocomplete({
		lookup: titles
	});

*/

$('#tituloPelicula').devbridgeAutocomplete({
	serviceUrl: '/get/peliculas',
	type: 'get',
	dataType: 'json',
    transformResult: function(response) {
        return {
            suggestions: $.map(response, function(dataItem) {
                return { value: dataItem.name, data: dataItem.id };
            })
        };
    }
});