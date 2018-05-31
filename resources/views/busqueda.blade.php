<!Doctype html>
<html>
<head>
	<title>Busqueda</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" href="/img/logo[S].png"/>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/principalstyle.css">
    <link rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	@component('navbar', [  'idUser' => session('id'),
                        'nameUser' => session('name')])
	@endcomponent

<!-- Header -->
    <header class="container main-header ">
        <!-- 
        <div class="jumbotron">
            <div class="row">
                <img class="img-responsive col-md-2 hidden-xs hidden-sm" src="/img/Logo Peliscopia.png">
                <h3 class="col-md-10">Da tu opinion, se un experto en cine en la comunidad m&aacute;s grande en latinoamerica!</h3>
            </div>
            <div class="row">
                <a class="btn btn-danger pull-right col-md-2 col-xs-offset-right-1 text-center">Crea una reseña&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
            </div>
        </div>
        -->
    </header>
<!-- Fin Header -->

	<div class="container-fluid text-center main-container">

		<div class="row content">

			<div class="container main-busqueda col-md-7 col-md-offset-2">
                @php
                for($i=0;$i<3;$i++){ @endphp
            	@component('busquedaUsuario', ['user' => App\User::find(session('id'))])
                @endcomponent
                @php } @endphp
        	</div>

			
		</div>
	</div>

<!-- Footer -->
    <footer class="container-fluid footer text-center navbar-fixed-bottom">
        <span>Peliscopia &copy;</span>
    </footer>
<!-- Footer -->

	<script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>