$(document).ready(function(){
	"use strict";

	/* function to sure that you want delete the item*/
	$('.confirm').on("click",function ()
	{
		return confirm("Are You Sure Delete ?");
	});

	$('#order_now').click(function() {
	   $('html, body').animate({
        	scrollTop: $("#order_form").offset().top
    	}, 1000);
	});
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

	$('.minus-btn').on('click', function(e) {
		var product_id = $(this).data('productid');
	    var cart_id = $(this).data('cartid');
	    var input = $('#quantity_' + product_id + ' input').val();
	 	var total_price_of_product =$('#total-price-of-product_' + product_id + ' span').html();
	 	var product_price =$('#product-price_' + product_id).html();

	 	if(input == 1){
	 		$('#quantity_' + product_id + ' input').val(1);
	 		$.ajax({
		 		url:'/update/quantity/'+(1)+'/'+product_id+'/'+cart_id,
		 		method:'GET'
		 	});
	 		$('#total-price-of-product_' + product_id + ' span').html(parseInt(total_price_of_product));
	 	}else if(input > 1){
	 		$('#quantity_' + product_id + ' input').val(parseInt(input)-1);
	 		$.ajax({
		 		url:'/update/quantity/'+(parseInt(input)-1)+'/'+product_id+'/'+cart_id,
		 		method:'GET'
		 	});
	 		$('#total-price-of-product_' + product_id + ' span').html((parseInt(total_price_of_product)) - parseInt(product_price));
	 	}
	 	clc_cart_price();
	});

	$('.plus-btn').on('click', function(e) {
	    var product_id = $(this).data('productid');
	    var cart_id = $(this).data('cartid');
	    var input = $('#quantity_' + product_id + ' input').val();
	    var total_price_of_product =$('#total-price-of-product_' + product_id + ' span').html();
	    var product_price =$('#product-price_' + product_id).html();

	 	$('#quantity_' + product_id + ' input').val(parseInt(input)+1);	
	 	$.ajax({
	 		url:'/update/quantity/'+(parseInt(input)+1)+'/'+product_id+'/'+cart_id,
	 		method:'GET'
	 	});
	 	$('#total-price-of-product_' + product_id + ' span').html((parseInt(total_price_of_product)) + parseInt(product_price));
	 	clc_cart_price();
	});

	clc_cart_price();
	function clc_cart_price(){
		var price = 0;
		$('.total-price-of-product span').each(function(){
			price += parseInt($(this).html());
		});
		$('.total_price_cart span').html(price+'.00');
		$('#total-price-hidden-input').val(price+'.00');
	}

	//send comment using ajax
	$('.comment_form').on('submit',function(event){
		event.preventDefault(); //prevent default action 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = $(this).serialize(); //Encode form elements for submission
		$.ajax({
			url:post_url,
			method:request_method,
			data:form_data,
			success:function(){
				$('#written_comment').val("");
			}
		})
	})

	//view comments with ajax
	function fetch_comments(){
		var item_id = $('#fetch_comments').data('itemid');
		$.ajax({
			url:"/comments/fetch/" + item_id,
			method:"get",
			success:function(data){
				$('#fetch_comments').html(data);
			}
		})
	}
	fetch_comments();

	setInterval(function(){
			fetch_comments();
		}, 4000);
	

});	