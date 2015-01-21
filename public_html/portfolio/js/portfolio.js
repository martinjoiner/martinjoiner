
var params = {};
params.currentActiveSlide = -99;
params.slideHeight = 400;
params.headerHeight = 280;


$( document ).scroll(function() {
	updateScrollPos();
});


function updateCurrentSlide( activeSlide ){
	params.currentActiveSlide = activeSlide;
	deactivateAllSlides();
  	$( "#slide" + activeSlide ).addClass( 'active' );
}

function deactivateAllSlides(){
	$( ".slide" ).removeClass( 'active' );
}

function updateScrollPos(){

	var scrollPos = $(this).scrollTop() - params.headerHeight;
	var activeSlide = Math.round( scrollPos / params.slideHeight );

	if( activeSlide !== params.currentActiveSlide ){
		updateCurrentSlide(activeSlide);
	}

	window.setTimeout( updateScrollPos, 50 );
}

updateScrollPos();

