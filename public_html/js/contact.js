
(function(){

	unMash( ['uk','o.','.c','er','oin','inj','art','@m','in','rt','ma'], 'mailto', 'emailPlaceholder');

})();

function unMash( arrParts, hrefType, targetClass ){

	var content = '';
	
	for(i = arrParts.length - 1; i >= 0; i--){
		content += arrParts[i];
	}
	
	var elemPlaceholder = document.getElementsByClassName(targetClass)[0];
	var elemAnchor = document.createElement('a');

	if( typeof elemPlaceholder === 'object' ){
		elemPlaceholder.innerHTML = "";

		elemAnchor.href = hrefType + ':' + content;
		elemAnchor.innerHTML = content;
		elemPlaceholder.appendChild(elemAnchor);
	}

}
