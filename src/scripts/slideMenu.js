
var debug = true;

if(debug){
	console.log('slidemenu loaded');
}

function initEventHandlers() {
	console.log('initing event handlers');
	/* 
		Document query selector doesn't return an array. Use array.prototype method for each. 
		Select every data-openselector and bind an evenlistener to it.
	*/
  Array.prototype.forEach.call( document.querySelectorAll('[data-openselector]'), bindToggleOpen );
}

function bindToggleOpen( element ) {
	element.addEventListener( 'click', toggleOpen );
}

function toggleOpen(){
	var openElement = document.querySelector( this.dataset.openselector );
	
	this.classList.toggle('open');
	openElement.classList.toggle('open');
	document.body.classList.toggle('noScroll');
}

document.addEventListener("DOMContentLoaded",  initEventHandlers);