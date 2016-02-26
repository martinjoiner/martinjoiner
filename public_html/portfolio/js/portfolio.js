
/** Global parameters */
params = {
	"currentActiveSlide": -99,
	"slideHeight": 400,
	"headerHeight": 280
};


/**
 * Ensures only 1 slide on the page has the class 'active'
 *
 * @param {integer} activeSlide The number slide to be active (0 - x)
 */
function setActiveSlide( activeSlide ){

	params.currentActiveSlide = activeSlide;

	$(".slide").each( function(){ 

		var slideID = "slide" + activeSlide;

		if( $(this).attr('id') === slideID ){
			$(this).addClass( 'active' );
		} else {
			$(this).removeClass( 'active' );
		}
	});

}


function updateScrollPos(){

	var scrollPos = $(this).scrollTop() - params.headerHeight;
	var activeSlide = Math.round( scrollPos / params.slideHeight );

	if( activeSlide !== params.currentActiveSlide ){
		setActiveSlide(activeSlide);
	}

}


$( document ).scroll(function() {
	updateScrollPos();
});


/** Initialise the page */
updateScrollPos();
