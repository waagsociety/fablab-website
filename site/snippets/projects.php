<section class="projects grid-view left">
	<div class="grid-sizer"></div>
<!-- 	<svg version="1.1" id="girdbutton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
	<rect class="st0" width="19" height="19"/>
	<rect y="21" class="st0" width="19" height="19"/>
	<rect x="21" class="st0" width="19" height="19"/>
	<rect x="21" y="21" class="st0" width="19" height="19"/>
	</svg> -->
	<!-- Projects loaded with Javascript -->
</section>


<script type="text/javascript">
	var myHeaders = new Headers();

	var myInit = { method: 'GET',
	               headers: myHeaders,
	               mode: 'no-cors',
	               cache: 'default' };

	var myRequest = new Request(<?php echo $page->api()->text() ?>,myInit);

	fetch(myRequest,myInit)
	.then(function(response) {
	  return response.json()
	})
	.then(function(json) {
	  json.map(function( projects, index ){


	    console.log(projects.project.title);

	    var li = document.createElement('li'),
	        descriptionContainer = document.createElement('div'),
	        descriptionTitleContainer = document.createElement('h1'),
	        descriptionBodyContainer = document.createElement('p'),
	        projectLink = document.createElement('a'),
	        moreLessons = document.createElement('a'),
	        projectContainer = document.querySelector('.projects');

	    
	    li.classList.add("projectItem");

	    if( !index ) li.classList.add("active"); // Element 0 receives class active

	    projectLink.classList.add("btn");
	    moreLessons.classList.add("btn");
	    projectLink.classList.add("btn-2");
	    moreLessons.classList.add("btn-2");

	    li.style.backgroundImage = "url('" + projects.project.icon + "')";

	    descriptionTitleContainer.innerHTML = projects.project.title;
	    descriptionBodyContainer.innerHTML = projects.project.teaser;
	    projectLink.innerHTML = "View project";
	    moreLessons.innerHTML = "More projects";
	    projectLink.href = projects.project.url;
	    moreLessons.href = "https://www.openthings.wiki/tag/48";
	    projectContainer.appendChild(li);
	    li.appendChild( descriptionContainer );

	    descriptionContainer.appendChild( descriptionTitleContainer );
	    descriptionContainer.appendChild( descriptionBodyContainer );
	    descriptionContainer.appendChild( projectLink );
	    descriptionContainer.appendChild( moreLessons );
	  });

		loadMasonry();
	})

	.catch(function(ex) {
	  console.log('parsing failed', ex)
	})
</script>