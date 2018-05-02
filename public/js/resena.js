var titles = [
  	'Ready Player One',
	'Another Bad Movie',
];

$('#tituloPelicula').autocomplete({
	lookup: titles
});

/*
$('#tituloPelicula').autocomplete({
	serviceUrl: '/action/movies/names'
});
*/