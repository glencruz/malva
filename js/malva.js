$(function(){


});

var rootUrl = $('meta[name="root-url"]').attr('content');
$(".toggle").click(function(){
	$(this).toggleClass("active");


	if ($(".collapse").hasClass("active")) {

		$(".collapse").css("height", "0px");

		if ( !$("header").hasClass("scroll") ) {
			$('.bars').removeClass('white');
		}

	}else{

		$(".collapse").height( $(window).height() );
		$('.bars').addClass('white');

		
	}

	$(".collapse").toggleClass("active");

});


$('.links a').click(function(e){
	e.preventDefault();

	$(".collapse").css("height", "0px");
	$('.collapse').removeClass("active");
	$(".toggle").toggleClass("active");
	toSection = this.hash;
	

	if ( $(""+toSection).length > 0 ) {
	

		$('html, body').animate({
        	scrollTop: $(toSection).offset().top - 100
	    }, 800, function(){
	    });
	}else {
	
		window.location = $(this).attr("href")
	}
	

});







$bandera = 0;
$offsetslider = 0;
$translateX = 0;
$posts = $('#slider-posts').attr("posts");
$scroll =  ( $(".preview-post").innerWidth() / 10 ) + 3;

$(window).resize(function(){
	$scroll =  ( $(".preview-post").innerWidth() / 10 ) + 3;
	$('#slider-posts').css("transform", "translateX(0rem)");
	$offsetslider = 0;
	$translateX = 0;
});


$('#offset-right').click(function(){
	console.log("oawdawd")
	if ($offsetslider < $posts - 2 ) {
		$translateX += $scroll;
		$offsetslider ++;
		$('#slider-posts').css("transform", "translateX(-"+$translateX+"rem)");
		
	}

});

$('#offset-left').click(function(){
	console.log("oawdawd")
	if ($offsetslider > 0 ) {
		$translateX -= $scroll;
		$offsetslider --;
		$('#slider-posts').css("transform", "translateX(-"+$translateX+"rem)");
		
	}
});
$(window).scroll(function(){
	if( $(this).scrollTop() > 100 ){
		$('.header').addClass('scroll');

		$('.bars').addClass('white');
		
	}else{
		$('.header').removeClass('scroll');
		$('.bars').removeClass('white');
	}
})


//parte 2

$offsetslider2 = 0;
$translateX2 = 0;
$posts2 = $('#slider-posts2').attr("posts");
$scroll2 =  ( $(".preview-post2").innerWidth() / 10 ) + 3;

$(window).resize(function(){
	$scroll =  ( $(".preview-post2").innerWidth() / 10 ) + 3;
	$('#slider-posts2').css("transform", "translateX(0rem)");
	$offsetslider2 = 0;
	$translateX2 = 0;
});


$('#offset-right2').click(function(){
	console.log("oawdawd")
	if ($offsetslider2 < $posts2 - 2 ) {
		$translateX2 += $scroll2;
		$offsetslider2 ++;
		$('#slider-posts2').css("transform", "translateX(-"+$translateX2+"rem)");
		
	}

});

$('#offset-left2').click(function(){
	console.log("oawdawd")
	if ($offsetslider2 > 0 ) {
		$translateX2 -= $scroll;
		$offsetslider2 --;
		$('#slider-posts2').css("transform", "translateX(-"+$translateX2+"rem)");
		
	}
});
/*$('#bar').click(function(){	
	
	if($bandera<1){
		$bandera = 1;
	}else{
		$bandera = 0;
	}
	if($bandera>0){
		$('header').css({"margin-left": "50%","width":"50%"});
	}else{
		$('#header').css({"margin-left": "0%","width":"100%"});
	}
	
})*/




$('#contact-form').on('submit', function( event ){
	
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
});



if( $('.lottie-animation').length > 0 ){

	$('.lottie-animation').one('isVisible', animate);


	$(window).on('scroll', function(){
		$('.lottie-animation').each(function(){
			
			if( isInViewPort( $(this) ) ){
				$(this).trigger('isVisible');
			}

		});
	});

	$(document).ready(function(){
		$('.lottie-animation').each(function(){
			
			if( isInViewPort( $(this) ) ){
				$(this).trigger('isVisible');
			}

		});
	});
}




function animate( ){
	
	let path = rootUrl+'anim/'+$(this).attr('data-animation-name')+'.json';
	

	var animate = lottie.loadAnimation({
        container: $(this).get(0), // the dom element that will contain the animation
        renderer: 'svg',
        loop: $(this).attr('data-loop'),
        autoplay: true,
        name: "patrimonia",
        path: path
    });

    animate.setSpeed(0.8);
}

function isInViewPort ( element ) {

	
	if( $(element).length == 0 ) return false;

	var elementTop = $(element).offset().top;
	var elementBottom = elementTop + $(element).outerHeight();
	var viewportTop = $(window).scrollTop() ;
	var viewportBottom = viewportTop + $(window).height() ;
	return elementBottom > viewportTop && elementTop < viewportBottom;
};