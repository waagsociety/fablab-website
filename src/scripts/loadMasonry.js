function loadMasonry(){
	var elem = document.querySelector('.projects');
	var msnry = new Masonry( elem, {
	  // options
	  itemSelector: '.projectItem'
	});

	// element argument can be a selector string
	//   for an individual element
	var msnry = new Masonry( '.projects', {
	  columnWidth: '.grid-sizer',
		itemSelector: '.projectItem',
		percentPosition: true
	});
}
