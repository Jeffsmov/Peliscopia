@php 
$comFecha = date('Y-m-d H:i', strtotime($comentario->created_at));
@endphp

<div class="row" id="comId{{$comentario->id}}">

  <!--Avatar-->
  <div class="col-lg-2 col-md-3 col-sm-3 hidden-xs"><a href="/perfil/{{$comentario->idUser}}"><img class="img-responsive" src="/user/img/{{$comentario->idUser}}" alt=""></a></div>  
    <!--Contenedor comentario--> 

  <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 row">

    <div class="comment-head row">
      <a href="/perfil/{{$comentario->idUser}}" class="col-xs-6 text-left">
        <h4><strong>{{App\User::find($comentario->idUser)->name}}</strong></h4>
      </a>
      <h6 class="col-xs-6 text-right more-reviews">{{$comFecha}}</h6>
      @php
      if(session('tipo')==1){
      @endphp
      <form action="/action/comment/delete" method="post">
        {{csrf_field()}}
        <input type="hidden" value="{{$comentario->id}}" name="id">
        <button class="commentDelete btn btn-danger">X</button>
      </form>
      @php } @endphp
    </div>

    <div class="pull-left comment">{{$comentario->comment}}</div>  

  </div>    

</div>
<br>