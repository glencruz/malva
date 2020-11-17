function Registrar(){
	alert("entro");
    //

        var fecinicioop = $("#fecinicioop").val();
      var fecfinop=$("#fecfinop").val();
      var data='fecinicioop='+fecinicioop+'&fecfinop='+fecfinop;

    //

	event.preventDefault();

	var $submitBtn = $(this).find('button[type="submit"]');
	var action = $(this).attr('action');
	var $form = $(this);

	$alert = $(this).find('.alert');
	$submitBtn.prop('disabled', true);
	

	var data = $form.serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});

	
	//Registrar el usuario
	jQuery.ajax({
	    type: "POST",
	    url: action,
	    data :  {
	        'data': data,
            'recaptcha': grecaptcha.getResponse(),
	    },
	    dataType: 'json',
	    async: true
    
    }).done(function(response){

    	console.log(response);
        
        if(response.status == "success"){
            
            $('.hide-on-submit').hide();

            $('.show-on-submit').show();

            $submitBtn.prop('disabled', false);
            
        }
        else if(response.status == "error"){
            
            $alert.show();
            $alert.html(response.msg).show();
            $submitBtn.prop('disabled', false);


            $(".form-section").height( $(window).height() - $(".banner").height() - 120 );
            
        
        }else{
            
            $submitBtn.prop('disabled', false);
        }
    }).fail(function(response) {
        console.log(response);
    });
}






