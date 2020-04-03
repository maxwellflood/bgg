
(function(){


}());


setTimeout(function(){


	// Get Current URL

	var currentUrl;

	function getCurrentUrl(){
		currentUrl = window.location.pathname;
		console.log(currentUrl);
	}

	getCurrentUrl();

	//Mix it up

	if(currentUrl === '/games'){
		console.log('Hello');
		var containerEl = document.querySelector('.games-container');
		var mixer = mixitup(containerEl);
	}

	// Waypoints

	// var waypoint = new Waypoint({
	// 	element: document.getElementById('wp-01'),
	// 	handler: function(direction) {
	// 		console.log("Waypoint triggered going" + direction);
	// 	},
	// 	context: document.getElementById('wp-01'),
	// 	offset: '50%'
	// });


	// Fade In

	AOS.init({
		offset: 0,
		duration: 400,
		easing: 'ease-in-cos',
		delay: 50,
	});

	// Mobile Menu
	var menuBtn = $('.mobile-menu-button'),
			mobileMenu = $('#nav-menu');

	menuBtn.click(function(){
		mobileMenu.toggleClass('show-mobile-menu');
	});


	// lazy load
	echo.init({
		offset: 10000,
		throttle: 250,
		unload: false,
		callback: function (element, op) {
			console.log(element, 'has been', op + 'ed');
		}
	});


},1000);
