
$('#btnRegistro').on('click', function() {

    var fail = false;

    $("#formRegistro").validate({
    	highlight: function(element) {
        	$(element).addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
    	}, 
    	unhighlight: function(element) {
        	$(element).removeClass('no-margin').removeClass('alert-danger').closest("div").removeClass('has-error');
    	},
    	errorPlacement: function(element) {
	        $(element).addClass('small');
    	},
    	rules: {
			prodid: {
				required: true,
				maxlength: 10
			},
			email: {
				required: true,
				email: true,
				rangelength:[6,50]
			},
			nombre: {
				required: true,
				rangelength:[5,20]
			},
			pass: {
				required: true,
				rangelength:[5,20]
			},
			confirm: {
				equalTo: "#idPassword",
				required: true,
				rangelength:[5,20]
			}
		}
    });

    var email = $("#idEmailRegistro").val();

    if(!isEmailValid(email)){
        $("#idEmailRegistro").addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
        fail=true;
    }

    if($("#formRegistro").valid());{
        if(!fail) $("#formRegistro").submit();
    }

});

$('#idEmailRegistro').change(function(){

    var email = $(this).val();

    if(isEmailValid(email)){
        $(this).removeClass('no-margin').removeClass('alert-danger').closest("div").removeClass('has-error');
    }
    else{
        $(this).addClass('no-margin').addClass('alert-danger').closest("div").addClass('has-error');
    }

});

