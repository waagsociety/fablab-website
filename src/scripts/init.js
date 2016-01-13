function init(){
	enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false);
	initEventHandlers();
	// frameLooper();
}


document.addEventListener("DOMContentLoaded", init);