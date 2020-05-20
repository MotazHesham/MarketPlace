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

	/* function change img preview when edit item ... before upload page */
	$('#upload').change(function(){
	    var input = this;
	    var url = $(this).val();
	    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
	    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
	     {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	           $('#img').attr('src', e.target.result);
	        }
	       reader.readAsDataURL(input.files[0]);
	    }
	    else
	    {
	      $('#img').attr('src', 'Uploads/empty.jpg');
	    }
	});

});	