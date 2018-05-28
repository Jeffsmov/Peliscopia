<div class="comment-main-level">
    <!--Avatar-->
   <div class="comment-avatar"><a href="/perfil/{{$comentarioUserId}}"><img src="/user/img/{{$comentarioUserId}}" alt=""></a></div>  
   <!--Contenedor comentario--> 
   <div class="comment-box">
        <div class="comment-head">
            <a href="/perfil/{{$comentarioUserId}}"><h6 class="comment-name by-autor">{{$comentarioUserName}}</h6></a>
        </div>
        <div class="comment-content">
            {{$comentario}}
        </div>                                           
   </div>                                     
</div>