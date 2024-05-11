$(document).ready(function(){
	// $("#sort").on('change',function(){
	// 	this.form.submit();

	// })*/

	// Get Product Price based on Size
	$(".getPrice").change(function(){
		var size = $(this).val();
		var product_id = $(this).attr("product-id");
		$.ajax({
			headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			url:'/get-attribute-price',
			data:{size:size,product_id:product_id},
			type:'post',
			success:function(resp){
				if(resp['discount']>0){
					$(".getAttributePrice").html("<span class='pd-detail__price'>GHC"+resp['final_price']+"</span><span class='pd-detail__discount'>("+resp['discount_percent']+"% OFF)</span><del class='pd-detail__del'>GHC"+resp['product_price']+"</del>");
				}else{
					$(".getAttributePrice").html("<span class='pd-detail__price'>GHC"+resp['final_price']+"</span>");
				}
			},error:function(){
			}
		});
	});

	// Add to Cart
	$("#addToCart").submit(function(){
		 $(".loader").show();
		var formData = $(this).serialize();
		$.ajax({
			headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			url:'/add-to-cart',
			type:'post',
			data:formData,
			success:function(resp){
				 $(".loader").hide();
				$(".totalCartItems").html(resp['totalCartItems']);
				$("#appendCartItems").html(resp.view);
				$("#appendMiniCartItems").html(resp.minicartview);

				// alert(resp['message']);
				if(resp['status']==true){
					$('.print-success-msg').show();
					$('.print-success-msg').delay(3000).fadeOut('slow');
					$('.print-success-msg').html("<div class='success'><span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>"+resp['message']+"</div>");
				}else{
					alert(resp['message']);
					$('.print-error-msg').show();
					$('.print-error-msg').delay(3000).fadeOut('slow');
					$('.print-error-msg').html("<div class='alert'><span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>"+resp['message']+"</div>");
				}
			},error:function(){
				 $(".loader").hide();
				alert("Error");
			}
		})
	});

	// Update Cart Items Quantity
	$(document).on('click','.updateCartItem',function(){
		if($(this).hasClass('fa-plus')){
			//Get Qty
			var quantity = $(this).data('qty');
			// Increase the Qty by 1
			new_qty = parseInt(quantity)+1;
		}
		if($(this).hasClass('fa-minus')){
			//Get Qty
			var quantity = $(this).data('qty');
			// Check Qty is atleast 1
			if(quantity<=1){
				alert("Item Quantity must be 1 or greater!");
				return false;
			}
			// Increase the Qty by 1
			new_qty = parseInt(quantity)-1;
		}
		var cartid = $(this).data('cartid');
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			data:{cartid:cartid,qty:new_qty},
			url:'/update-cart-item-qty',
			type:'post',
			success:function(resp){
				$(".totalCartItems").html(resp.totalCartItems);
				// alert(resp);
				if(resp.status==false){
					alert(resp.message);
				}
				$("#appendCartItems").html(resp.view);
				$("#appendMiniCartItems").html(resp.minicartview);
			},error:function() {
				alert("Error");
			}
		});
	});

	// Delete Cart Item
	$(document).on('click','.deleteCartItem',function(){
		var cartid = $(this).data('cartid');
		var page = $(this).data('page');
		var result = confirm("Are you sure you want to delete this Cart Item?");
		if(result){
		$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		data:{cartid:cartid},
	    		url:'/delete-cart-item',
	    		type:'post',
	    		success:function(resp){
	    			$(".totalCartItems").html(resp.totalCartItems);
	    			$("#appendCartItems").html(resp.view);
	    			$("#appendMiniCartItems").html(resp.minicartview);
	    			if(page=="Checkout"){
	    				window.location.href="/checkout";
	    			}
	    		},
	    		error:function(){
	    			alert("Error");
	    		}
			});	
		}
	});

	// Empty Cart
	$(document).on('click','.emptyCart',function(){
		var result = confirm("Are you sure you want to empty your Cart?");
		if(result){
		$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		url:'/empty-cart',
	    		type:'post',
	    		success:function(resp){
	    			$(".totalCartItems").html(resp.totalCartItems);
	    			$("#appendCartItems").html(resp.view);
	    			$("#appendMiniCartItems").html(resp.minicartview);
	    		},
	    		error:function(){
	    			alert("Error");
	    		}
			});	
		}
	});

	// Registration Form Validation
	$("#registerForm").submit(function(){
		 $(".loader").show();
		var formData = $("#registerForm").serialize();
		// alert(formData); return false;
		$.ajax({
			url:'/user/register',
			type:'post',
			data:formData,
			success:function(data){
				if(data.type=="validation"){
					 $(".loader").hide();
					$.each(data.errors, function (i,error) {
						$('#register-'+i).attr('style','color:red');
						$('#register-'+i).html(error);
						setTimeout(function(){
							$('#register-'+i).css({
								'display':'none'
							})
						}, 4000);
					});
				}else if(data.type=="success"){
					 $(".loader").hide();
					$("#register-success").attr('style','color:green');
					$("#register-success").html(data.message);
				}
			},error:function(){
				alert("Error");
			}
		});
	});

	// Login form validation
	$("#loginForm").submit(function(){
		var formData = $(this).serialize();
		$.ajax({
			headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		url:"/user/login",
	    		type:'post',
	    		data:formData,
	    		success:function(resp){
	    			if(resp.type=="error"){
						$.each(resp.errors, function (i,error) {
							$('.login-'+i).attr('style','color:red');
							$('.login-'+i).html(error);
							setTimeout(function(){
								$('.login-'+i).css({
									'display':'none'
								})
							}, 4000);
						});
	    			}else if(resp.type=="inactive"){
	    				$("#login-error").attr('style','color:red');
	    				$("#login-error").html(resp.message);
	    			}else if(resp.type=="incorrect"){
	    				$("#login-error").attr('style','color:red');
	    				$("#login-error").html(resp.message);
	    			}else if(resp.type=="success"){
	    				window.location.href=resp.redirectUrl;
	    			}
	    		},error:function(){
	    			alert("Error");
	    		}
		})
	});

	// Forgot form validation
	$("#forgotForm").submit(function(){
		 $(".loader").show();
		var formData = $(this).serialize();
		$.ajax({
			headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		url:"/user/forgot-password",
	    		type:'post',
	    		data:formData,
	    		success:function(resp){
	    		$(".loader").hide();
	    			if(resp.type=="error"){
						$.each(resp.errors, function (i,error) {
							$('.forgot-'+i).attr('style','color:red');
							$('.forgot-'+i).html(error);
							setTimeout(function(){
								$('.forgot-'+i).css({
									'display':'none'
								})
							}, 4000);
						});
	    			}else if(resp.type=="success"){
	    				$(".forgot-success").attr('style','color:green');
						$(".forgot-success").html(resp.message);
	    			}
	    		},error:function(){
	    		$(".loader").hide();
	    			alert("Error");
	    		}
		})
	});

	// Reset Password form validation
	$("#resetPwdForm").submit(function(){
		 $(".loader").show();
		var formData = $(this).serialize();
		$.ajax({
			headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		url:"/user/reset-password",
	    		type:'post',
	    		data:formData,
	    		success:function(resp){
	    			 $(".loader").hide();
	    			if(resp.type=="error"){
						$.each(resp.errors, function (i,error) {
							$('.reset-'+i).attr('style','color:red');
							$('.reset-'+i).html(error);
							setTimeout(function(){
								$('.reset-'+i).css({
									'display':'none'
								})
							}, 4000);
						});
	    			}else if(resp.type=="success"){
	    				$(".reset-success").attr('style','color:green');
						$(".reset-success").html(resp.message);
	    			}
	    		},error:function(){
	    			 $(".loader").hide();
	    			alert("Error");
	    		}
		})
	});

	// Account Form Validation
	$("#account-success").hide();
	$("#accountForm").submit(function(){
		 $(".loader").show();
		var formData = $(this).serialize();
		// alert(formData); return false;
		$.ajax({
			url:'/user/account',
			type:'post',
			data:formData,
			success:function(data){
				if(data.type=="validation"){
					 $(".loader").hide();
					$.each(data.errors, function (i,error) {
						$('#account-'+i).attr('style','color:red');
						$('#account-'+i).html(error);
						setTimeout(function(){
							$('#account-'+i).css({
								'display':'none'
							})
						}, 4000);
					});
				}else if(data.type=="success"){
					 $(".loader").hide();
					$("#account-success").attr('style','color:green');
					$("#account-success").html(data.message);
				}
			},error:function(){
				alert("Error");
			}
		});
	});

	// User Update Password  Validation
	$("#password-success").hide();
	$("#password-error").hide();
	$("#passwordForm").submit(function(){
		 $(".loader").show();
		var formData = $(this).serialize();
		// alert(formData); return false;
		$.ajax({
			url:'/user/update-password',
			type:'post',
			data:formData,
			success:function(data){
				if(data.type=="error"){
					$(".loader").hide();
					$("#password-success").hide();
					$.each(data.errors, function (i,error) {
						$('#password-'+i).attr('style','color:red');
						$('#password-'+i).html(error);
						setTimeout(function(){
							$('#password-'+i).css({
								'display':'none'
							})
						}, 4000);
					});
				}else if(data.type=="incorrect"){
					$(".loader").hide();
					$("#password-success").hide();
					$("#password-error").attr('style','color:red');
					$("#password-error").html(data.message);
				}else if(data.type=="success"){
					$(".loader").hide();
					$("#password-error").hide();
					$("#password-success").attr('style','color:green');
					$("#password-success").html(data.message);
				}
			},error:function(){
				$(".loader").hide();
				alert("Error");
			}
		});
	});

	// Apply Coupon
	$(document).on('click','#applyCoupon',function(){
		var user = $(this).attr("user");
		if(user==1){
			// Do Nothing
		}else{
			alert("Please login to apply Coupon!");
			return false;
		}
		var code = $("#code").val();
		$.ajax({
			headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
			type:'post',
			data:{code:code},
			url:'/apply-coupon',
			success:function(resp){
				if(resp.status==false){
					// alert(resp.message);
					$('.print-error-msg').show();
					$('.print-error-msg').delay(4000).fadeOut('slow');
					$('.print-error-msg').html("<div class='alert'>"+resp['message']+"</div>");
				}else if(resp.status==true){
					// alert(resp.message);
					if(resp.couponAmount>0){
						$(".couponAmount").text("GHC"+resp.couponAmount);
					}else{
						$(".couponAmount").text("GHC0");
					}
					if(resp.grand_total>0){
						$(".grandTotal").text("GHC"+resp.grandTotal);
					}
					$('.print-success-msg').show();
					$('.print-success-msg').delay(4000).fadeOut('slow');
					$('.print-success-msg').html("<div class='success'>"+resp['message']+"</div>");

					$(".totalCartItems").html(resp.totalCartItems);
	    			$("#appendCartItems").html(resp.view);
	    			$("#appendMiniCartItems").html(resp.minicartview);
				}
			},error:function(){
				alert("Error");
			}
		});
	});

	// Save Delivery Address
	$(document).on('click','#deliveryForm',function(){
		$(".loader").show();
		var formData = $("#deliveryAddressForm").serialize();
		$.ajax({
			headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
			url: '/save-delivery-address',
			type: 'post',
			data: formData,
			success: function(resp){
				// alert(resp);
				if(resp.type=="error"){
					$(".loader").hide();
					$.each(resp.errors,function(i,error){
						$('#delivery-'+i).attr('style','color:red');
						$('#delivery-'+i).html('error');
						setTimeout(function(){
							$('#delivery-'+i).css({
								'display':'none'
							});
						},3000);
					});
				}else{
					$(".loader").hide();
					$("#deliveryAddressForm").trigger('reset');
					$(".deliveryText").text("ADD NEW DELIVERY ADDRESS");
					$("#deliveryAddresses").html(resp.view);
					window.location.href = "checkout";
				}
			}, error:function(){
				$(".loader").hide();
				alert("Error");
			}
		})
	});

	// Edit Delivery Address
		$(document).on('click','.editAddress',function(){
				var addressid = $(this).data('addressid');
				$.ajax({
						headers: {
		        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    		},
					data:{addressid:addressid},
					url:'/get-delivery-address',
					type:'post',
					success:function(resp){
						// alert(resp);
						$(".deliveryText").text("EDIT DELIVERY ADDRESS");
						$('[name=delivery_id]').val(resp.address['id']);
						$('[name=delivery_name]').val(resp.address['name']);
						$('[name=delivery_address]').val(resp.address['address']);
						$('[name=delivery_city]').val(resp.address['city']);
						$('[name=delivery_state]').val(resp.address['state']);
						$('[name=delivery_country]').val(resp.address['country']);
						$('[name=delivery_pincode]').val(resp.address['pincode']);
						$('[name=delivery_mobile]').val(resp.address['mobile']);
					},error:function(){
						alert("Error");
					}
				});
				
			});
	});
	
	// Delete Delivery Address
	$(document).on('click','.deleteAddress',function(){
		if(confirm("Are you sure you want to remove this Address?")){
			var addressid = $(this).data('addressid');
			$.ajax({
				headers: {
	        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
				data:{addressid:addressid},
				url:'/remove-delivery-address',
				type:'post',
				success:function(resp){
					// alert(resp);
					$("#deliveryAddresses").html(resp.view);
					window.location.href = "checkout";
				},error:function(){
				alert("Error");
				}
		});
	}

});

// Set Default Delivery Address
$(document).on('click','.setDefaultAddress',function(){
	var addressid = $(this).data('addressid');
	$.ajax({
		headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
		data:{addressid:addressid},
		url:'/set-default-delivery-address',
		type:'post',
		success:function(resp){
			// alert(resp);
			$("#deliveryAddresses").html(resp.view);
			window.location.href = "checkout";
		},error:function(){
			alert("Error");
		}
	});

});

function addSubscriber(){
	var subscriber_email = $("#subscriber_email").val();
	// alert(subscriber_email);
	var mailFormat = /\S+@\S+\.\S+/;
	if (subscriber_email.match(mailFormat)) {

	}else{
		alert("Please enter valid Email!");
		return false;
	}
	$.ajax({
		headers: {
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type:'post',
		url:'add-subscriber-email',
		data:{subscriber_email:subscriber_email},
		success:function(resp){
			if(resp=="exists"){
				alert("Your email already exists for Newsletter Subscription");
			}else if(resp=="saved"){
				alert("Thank you for Subscribing to our Newsletter");
			}
		},error:function(){
			alert("Error");
		}
	});
}




