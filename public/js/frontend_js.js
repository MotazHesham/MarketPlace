$(document).ready(function(){
	"use strict";

	//navbar scrolling animation
	$(window).on("scroll",function()
	{
		if($(document).scrollTop() > 50	){
			$('nav').addClass('nav-scrolling');
			$('.nav-item').css({'margin':'15px auto', 'margin-left':'65px'});
			$('.navbar-brand').css("font-size","30px");
		}else{
			$('nav').removeClass('nav-scrolling');
			$('.nav-item').css({'margin':'28px auto', 'margin-left':'55px'});
			$('.navbar-brand').css("font-size","38px")
		}
	});

});	