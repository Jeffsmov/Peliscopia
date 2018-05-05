
function isEmailValid(email){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

$('#btnLogin').on('click', function() {

    var fail = false;

    $("#formLogin").validate({
    	highlight: function(element) {
        	$(element).addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
    	}, 
    	unhighlight: function(element) {
        	$(element).removeClass('no-margin').removeClass('alert-danger').closest("div").removeClass('has-error');
    	},
    	errorPlacement: function(element) {
	        $(element).remove();
    	}
    });

    var email = $("#idEmailLogin").val();

    if(!isEmailValid(email)){
        $("#idEmailLogin").addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
        fail=true;
    }

    if($("#formLogin").valid());{
        if(!fail) $("#formLogin").submit();
    }

});


$('#idEmailLogin').change(function(){

    var email = $(this).val();

    if(isEmailValid(email)){
        $(this).removeClass('no-margin').removeClass('alert-danger').closest("div").removeClass('has-error');
    }
    else{
        $(this).addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
    }

});

