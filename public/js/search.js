$(document).ready( function(){

	$('.search-text').bind("enter-key", function(e){
		var textArea = $(this);
		var value = $(textArea).val();
		var what = $('#searchWhat').val();
		var from = $('#searchFrom').val();
		var to = $('#searchTo').val();

		$('#formValue').val(value);
		$('#formWhat').val(what);
		$('#formFrom').val(from);
		$('#formTo').val(to);

		$('#searchForm').submit();
	});

	$('#searchWhat').change(function(){
		if($('#searchWhat').val()!=7){
			$('#fecha-fecha').show();
			$('#searchFrom').show();
			$('#searchTo').show();
			return;
		}

		$('#fecha-fecha').hide();
		$('#searchFrom').val("").hide();
		$('#searchTo').val("").hide();
	});

	$('.search-text').keyup( function(e){
		if(e.keyCode == 13)
		{
			$(this).trigger("enter-key");
		}
	});
});