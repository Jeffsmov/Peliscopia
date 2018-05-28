$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    $('#changepic').on('change', function(){

    	var file = this.files[0];
        
        var e = $('#changepic');

        if (file.size > 16777216) {
            e.wrap('<form>').closest('form').get(0).reset();
            e.unwrap();
            alert('El tamaño maximo de subida es 15mb');
            return;
        }

        /*
	        var reader = new FileReader();

		    reader.onload = function(e) {
	      		$('#tempImg').attr('src', e.target.result);
		    }

	    	reader.readAsDataURL(file);

	    	var img = document.getElementById('tempImg'); 
			var width = img.width;
			var height = img.height;

			var max = ((width > height) ? width : height);
			var min = ((width > height) ? height : width);

			//Max is 100%, min should be atleast 80%

			if((min/max)<.70){
				alert('La foto debe de ser rectangular');
	            return;
			}
		*/

    	$('#changepic').closest('form').submit();

    });

});