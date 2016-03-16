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

  function isTouchDevice() { return 'ontouchstart' in window || !!(navigator.msMaxTouchPoints);}
  if (isTouchDevice()) {
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
