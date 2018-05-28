<img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/pelicula/portada/{{$peliculaId}}">

<div class="col-md-10 row">
    <div class="head">
        <div class="row">
            <div class="col-md-12"> <a href="/movie/{{$peliculaId}}">{{$peliculaName}}</a> <a href="/movie/{{$peliculaId}}/reviews" class="more-reviews">(Más reviews)</a><a href=""></a> </div>
        </div>

        <div class="row">
            <div class="col-md-12"> <a href="/perfil/{{$reviewAutorId}}" class="more-reviews">{{$reviewAutorName}}</a> <a href="/perfil/{{$reviewAutorId}}/reviews" class="more-reviews">(Más reviews)</a> <a href="/search/1?fecha='{{$reviewFecha}}'"><span class="more-reviews pull-right">{{$reviewFecha}}</span></a></div>
        </div>
    </div>
    <div class="cont-reseña">
        <div class="row">
            <div class="col-md-12">Rating: {{$reviewRating}}</div>
        </div>

        <div class="row">
            <div class="col-md-12">{{$review}}</div>
        </div>
    </div>
    <br>
    <div class="row btnLike">
        <a href="#" class="like"><img title="Like" class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs icon-small" src="/img/like-peliscopia.png"></a>
        <p>{{$reviewLikeCounts}}</p>
    </div>
    <div class="form-group  has-feedback">
        <label class="control-label" for="inputSuccess2">Comenta</label>
        <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
        <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
        <span id="inputSuccess2Status" class="sr-only">(success)</span>
    </div>
	<div id="comments-container" class="form-group col-xs-12 row text-right more-reviews">
        <div class="comments-list">
        	@php
        	for($i=0;$i<1;$i++){

	        	$comentario = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat';

	        	@endphp
				@component('comment', [ 'comentario' => $comentario,
                                        'comentarioUserId' => 2,
                                        'comentarioUserName' => "Jeffsmov"])
				@endcomponent
			@php } @endphp
        </div>
    </div>

</div>