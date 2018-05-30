@php 
$reviewFecha = date('Y-m-d', strtotime($review->created_at));
@endphp
<a href="/perfil/{{$autor->id}}"><img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/user/img/{{$autor->id}}"></a>

<div class="col-md-10 row">
    
    <div class="head">
        <div class="row">
            <div class="col-md-12"> <a href="/perfil/{{$autor->id}}" class="stronger"><strong>{{$autor->name}}</strong></a> <a href="/perfil/{{$autor->id}}/reviews" class="more-reviews">(Más reviews)</a> <a href="/search/1?fecha='{{$reviewFecha}}'"><span class="more-reviews pull-right">{{$reviewFecha}}</span></a></div>
        </div>
    </div>


    <div class="cont-reseña">
        <div class="row">
            <div class="col-md-12">Rating: {{$review->score}}</div>
        </div>
        <div class="row">
            <div class="col-md-12">{{$review->content}}</div>
        </div>
    </div>
    <br>

    <div class="row">
        <input type="hidden" value="{{$review->id}}">
        <div class="col-xs-1 pull-right text-right reviewCount col-xs-offset-right-1"><span>{{$reviewLikeCounts}}</span></div>
        <div class="normal col-xs-1 pull-right text-right"><span class="glyphicon glyphicon-thumbs-up"></span></div>
    </div>

    <div class="form-group has-feedback col-xs-12">
        <label class="control-label" for="inputSuccess2">Comenta</label>
        <input type="hidden" class="reviewid" value="{{$review->id}}">
        <input type="text" class="form-control commentArea" id="inputSuccess2" placeholder="Comentario..." aria-describedby="inputSuccess2Status">
    </div>

    <div id="comments-container" class="form-group col-md-12 text-right more-reviews">
        <div class="comments-list" id="reviewCommentList{{$review->id}}">
        	@php
            if($comentarios!=null){
        	foreach($comentarios as $comentario){
	        	@endphp
				@component('comment', [ 'comentario' => $comentario])
				@endcomponent
			@php } }@endphp
        </div>
    </div>

</div>