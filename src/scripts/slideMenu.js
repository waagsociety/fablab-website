function initEventHandlers(){  
  var hamburgerBtn = document.querySelector(".hamburger-menu");
  hamburgerBtn.addEventListener("click", toggleMenu);  
};

function toggleMenu(){
  var slideMenu = document.querySelector(".slide-menu"),      
      body = document.getElementsByTagName("BODY")[0];

  this.classList.toggle('open');
  slideMenu.classList.toggle('open');
  body.classList.toggle('noScroll');
};

window.onresize=function(){
  toggleMenu();
}

document.addEventListener("DOMContentLoaded",  initEventHandlers);