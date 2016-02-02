

/**	
 * Initialising function that makes the email address revealable
 * This is all just to obfuscate my email address and make it a bit less discoverable for simple bots
 */
(function(){

	var elemPlaceholder = document.getElementById('emailPlaceholder'),
		emailAddress = reverseConcat( ['uk','o.','.c','er','oin','inj','art','@m','in','rt','ma'] );

	if( elemPlaceholder === null ){
		return;
	}

	elemPlaceholder.textContent = 'Show email address';

	elemPlaceholder.addEventListener( 'click', function(){

		// Create a new anchor element with a mailto href
		var elemAnchor = document.createElement('a');
		elemAnchor.href = 'mailto:' + emailAddress;
		elemAnchor.textContent = emailAddress;

		// Blank the placeholder and append the new anchor elements
		elemPlaceholder.textContent = '';
		elemPlaceholder.appendChild(elemAnchor);
	});

})();



/**	
 * Concatenates an array of strings in reverse order 
 *
 * @param {array} arrParts Array of strings that need concatenating in reverse order 
 *
 * @return {string} The resulting string
 */
function reverseConcat( arrParts ){

	var strReturn = '';
	
	// Iterate backwards over the array, building a string
	for(i = arrParts.length - 1; i >= 0; i--){
		strReturn += arrParts[i];
	}
	
	return strReturn;

}
