@php 
$reviewFecha = date('Y-m-d', strtotime($reviewFecha));
@endphp
<img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/user/img/{{$reviewAutorId}}">

<div class="col-md-10 row">
    <div class="head">
        <div class="row">
            <div class="col-md-12"> <a href="/perfil/{{$reviewAutorId}}" class="stronger"><strong>{{$reviewAutorName}}</strong></a> <a href="/perfil/{{$reviewAutorId}}/reviews" class="more-reviews">(Más reviews)</a> <a href="/search/1?fecha='{{$reviewFecha}}'"><span class="more-reviews pull-right">{{$reviewFecha}}</span></a></div>
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
    <div id="comments-container" class="form-group col-md-12 text-right more-reviews">
        <div class="comments-list">
        	@php
        	foreach($comentarios as $comentario){
	        	@endphp
				@component('comment', [ 'comentario' => $comentario->comment,
                                        'comentarioUserId' => $comentario->idUser,
                                        'comentarioUserName' => User::find($comentario->idUser)->name])
				@endcomponent
			@php } @endphp
        </div>
    </div>

</div>