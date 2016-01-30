function init(){
	enquire.register("screen and (min-width : 768px)", initAdjustWindow(), false);
	initEventHandlers();

	if (typingText !=null) {
		frameLooper();
	}
	loadWayPoint();
}

function loadWayPoint(){
	var hamburger_btn = document.querySelector('.hamburger-menu'),
			machine_btn = document.querySelector('.machine_btn'),
			home_btn = document.querySelector('.home_btn'),

			waypoint = new Waypoint({
	  		element: document.querySelector('.defaultPage'),
	  		handler: function() {
	    		hamburger_btn.classList.toggle("black");
					machine_btn.classList.toggle("black");
					home_btn.classList.toggle("black");
	  		},
  			offset: 100
			});
};


document.addEventListener("DOMContentLoaded", init);
