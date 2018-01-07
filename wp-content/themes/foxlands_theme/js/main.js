'use strict';

$(window).load(function () {
	// IE SPECIFIC STYLES
	function addIEClasses() {
		var isIE = /*@cc_on!@*/false || !!document.documentMode;
		var isEdge = !isIE && !!window.StyleMedia;

		if (isIE || isEdge) {
			$('body').addClass('ie-styles');
		}
	}

	addIEClasses();

	$("#menu-toggle").click(function (event) {
		event.preventDefault();
		$(this).toggleClass("open");
		$('.mobile-menu').stop().slideToggle(350);
	});

	$('.mh').matchHeight();

	// plugins here

	// $(".multiselect select").dropkick({
	// 	mobile: false
	// });
});