function init(){

	var debug = true;

	if(debug){
		console.log('init loaded');
	}
	
	function adjustWindow(){

	    // Get window size
	    winH = window.innerHeight;
	    winW = window.innerWidth;

	    // Keep minimum height 550
	    if(winH <= 550) {
	        winH = 550;
	    }

	    // Init Skrollr for 768 and up
	    if( winW >= 768) {

	        // Init Skrollr
	        var s = skrollr.init({
	            forceHeight: false
	        });
	    } else {

	        // BREAK SKROLLER.INIT IF THE SCREEN SIZE IS BELOW 768
	        var s = skrollr.init();
	        s.destroy();
	    }
		
		// Check for touch
	   	if(Modernizr.touch) {

			// BREAK SKROLLER.INIT IF THE SCREEN SIZE IS A TOUCH DEVICE
			var s = skrollr.init();
			s.destroy();
	   	}
	}
	
	function initAdjustWindow() {
	    return {
	        match : function() {
	            adjustWindow();
	        },
	        unmatch : function() {
	            adjustWindow();
	        }
	    };
	}
	enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false)
}

document.addEventListener("DOMContentLoaded", init);