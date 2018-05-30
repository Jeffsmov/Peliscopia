var navigationFn = {
    goToSection: function(id) {
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 500);
    }
}

function writeComment(name, id, date, content, comId){
	var strcm = '';

	strcm +='<div class="row" id="comId'+comId+'">';

	strcm +='<div class="col-lg-2 col-md-3 col-sm-3 hidden-xs"><a href="/perfil/'+id+'"><img class="img-responsive" src="/user/img/'+id+'" alt=""></a></div>';

	strcm +='<div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 row">';

	strcm +='<div class="comment-head row">';
	strcm +='<a href="/perfil/'+id+'" class="col-xs-6 text-left">';
	strcm +='<h4><strong>'+name+'</strong></h4>';
	strcm +='</a>';
	strcm +='<h6 class="col-xs-6 text-right">'+date+'</h6>';
	strcm +='</div>';

	strcm +='<div class="pull-left comment">'+content+'</div>';

	strcm +='</div>';

	strcm +='</div> <br>';

	return strcm;
}

$(document).ready( function(){

	$('.commentArea').val("");
	$('.commentArea').bind("enterKey", function(e){

		var commentArea = $(this);

		var review = $(commentArea).val();
		var id = $(commentArea).siblings('input').first().val();
		var commentSection = $('#reviewCommentList'+id);
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			url: "/action/comment",
			type : "post",
			method: "POST",
			data: {
				_token: CSRF_TOKEN,
			    content : review,
			    review : id
			},
			dataType: 'json',
			async : false
		}).done(function(data){
		    
		    var str = writeComment(data.name, data.com.idUser, data.date, data.com.comment, data.com.id);

		    $(str).appendTo(commentSection);

		    $(commentArea).val("");

		    navigationFn.goToSection('#comId'+data.com.id);

		}).fail(function(){
		    //la respuesa es incorrecta
		}).always(function(){
		    //indpendiente si fue correcta o incorrecta
		});
	});
	$('.commentArea').keyup( function(e){
		if(e.keyCode == 13)
		{
			var comAr = $(this);
			if($(comAr).val().trim()!=""){
				$(this).trigger("enterKey");
			}
		}
	});

	$('.like-button').on("click", function(){
		var like_button = $(this);
		var id = $(like_button).siblings('input').first().val();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			url: "/action/like",
			type : "post",
			method: "POST",
			data: {
				_token: CSRF_TOKEN,
			    review : id
			},
			dataType: 'json',
			async : false
		}).done(function(data){

			$(like_button).toggleClass('blue');
			$(like_button).toggleClass('red');

			$(like_button).siblings('.reviewCount').first().children('span').text(data.count);

		}).fail(function(){
		    //la respuesa es incorrecta
		}).always(function(){
		    //indpendiente si fue correcta o incorrecta
		});
	});

	$('#fav').on("click", function(){
		var fav_button = $(this);
		var id = $(fav_button).siblings('input').first().val();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			url: "/action/fav",
			type : "post",
			method: "POST",
			data: {
				_token : CSRF_TOKEN,
			    peli : id
			},
			dataType: 'json',
			async : false
		}).done(function(data){

			$(fav_button).toggleClass('grey-color');
			$(fav_button).toggleClass('red-color');

		}).fail(function(){
		    //la respuesa es incorrecta
		}).always(function(){
		    //indpendiente si fue correcta o incorrecta
		});
	});

	$('#reviewScore').on("change", function(){
		var score_button = $(this);
		var score = $(score_button).val();
		var id = $(score_button).siblings('input').first().val();
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
			url: "/action/score",
			type : "post",
			method: "POST",
			data: {
				_token : CSRF_TOKEN,
			    peli : id,
			    score: score
			},
			dataType: 'json',
			async : false
		}).done(function(data){

		}).fail(function(){
		    //la respuesa es incorrecta
		}).always(function(){
		    //indpendiente si fue correcta o incorrecta
		});
	})

});
