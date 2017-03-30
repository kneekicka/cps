jQuery(document).ready(function($){
	// Mask for the phone number on contacts
	$('input[name=your-tel]').mask('+38-000-000-0000');

	//slider init
	$('.slider').slick({
		'autoplay': true,
		'autoplaySpeed': 4000,
		'arrows': false,
		'dots': true,
		'infinite': true
	});

	// Sub-menu opening and closing on hover
	$(".menu-item-has-children").on("mouseenter", openMenu);
	$(".menu-item-has-children").on("mouseleave", closeMenu);

	function openMenu(){
		$(".over-wrapper .sub-menu").slideDown();
		clearTimeout(debounce);
	}

	function closeMenu(){
		debounce = setTimeout(closeMenu,400);
	}

	var debounce;
	var closeMenu = function(){
	    $(".over-wrapper .sub-menu").slideUp();
	    clearTimeout(debounce);
	}

	//Check if the search field is empty
	if($(".over-wrapper .form-control.input-sm").val() !== ""){
		$(".over-wrapper .form-control.input-sm").val("");
	}

	//Checking and adding active class to menu
	if(window.location.href.indexOf("news_post") > -1) {
       $(".menu-item-139, .menu-item-58").addClass("current-menu-item");
    }
	if(window.location.href.indexOf("blog_post") > -1) {
       $(".menu-item-140, .menu-item-41").addClass("current-menu-item");
    }
	if(window.location.href.indexOf("team_member") > -1) {
       $(".menu-item-156, .menu-item-28").addClass("current-menu-item");
    }
	if(window.location.href.indexOf("practice") > -1) {
       $(".menu-item-177, .menu-item-175").addClass("current-menu-item");
    }

});