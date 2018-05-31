@php 
$reviewFecha = date('Y-m-d H:i', strtotime($review->created_at));
$like = (App\like::where([['idReview',$review->id], ['idUser', session('id')]])->first()) ? 'red' : 'blue';
$reviewLikeCounts = (App\like::countLikes($review->id));
@endphp
<img class="col-md-2 img-responsive vcenter pull-left hidden-sm hidden-xs" src="/pelicula/portada/{{$pelicula->id}}">

<div class="col-md-10 row">

    <div class="head">
        <div class="row">
            <div class="col-md-12"> <a href="/movie/{{$pelicula->id}}" class="stronger">{{$pelicula->name}}</a></div>
        </div>

        <div class="row">
            <div class="col-md-12"> <a href="/perfil/{{$autor->id}}" class="stronger"><strong>{{$autor->name}}</strong></a><a href="/reseña/{{$review->id}}"><span class="more-reviews pull-right">{{$reviewFecha}}</span></a></div>
        </div>
        @php
        if(session('tipo')==1){
        @endphp
        <form action="/action/review/delete" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$review->id}}">
            <button class="reviewDelete pull-right">X</button>
        </form>
        @php } @endphp

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
        <div class="col-xs-1 pull-right text-right reviewCount col-xs-offset-right-1"><span>{{$reviewLikeCounts}}</span></div>
        <div class="normal like-button {{$like}} col-xs-1 pull-right text-right"><span class="glyphicon glyphicon-thumbs-up"></span></div>
        <input type="hidden" value="{{$review->id}}">
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