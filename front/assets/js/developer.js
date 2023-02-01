$(document).ready(function(){
		$("#carrierRegister").validate({
		
			rules:{
				name:{
					required:true,
					minlength:3
				},
				email:{
					required:true,
					email:true	
				},
				mobile:{
					required:true,
					number:true,
					minlength:10,
					maxlength:12
				
				},
				password:{
					required:true,
					minlength:5
				},
				address:{
					required:true,
					minlength:5
				},
				lince_no:{
					required:true,
				},
				insurance_no:{
					required:true
				},
				company_name:{
					required:true
				},
				company_email:{
					required:true
				},
				it_is_owned_corporate:{
					required:true,
				}
			},
			messages:{
				name:{
					required:"Please enter your name",
					minlength:"Please enter 3 characters name"
				},
				email:{
					required:"Please enter correct name",
					email:true	
				},
				mobile:{
					required:"Please enter correct mobile no",
					number:true,
					minlength:"Please enter 10 digit mobile no",
					maxlength:"Max 12 digit mobile no"
				},
				address:{
					required:"Please enter your address",
					minlength:"Please enter 10 characters address"
				},
				lince_no:{
					required:"Please enter your lince no",
				},
				insurance_no:{
					required:"Please enter your insurance no"
				},
				
				company_name:{
					required:"Please enter your company name"
				},
				company_email:{
					required:"Please enter your company email"
				},
				
				full_address:{
					required:"Please enter your owned corporate",
				},
			}
	});
});


$(document).ready(function(){

	$("#userRegister").validate({
	
		rules:{
			name:{
				required:true,
				minlength:3
			},
			email:{
				required:true,
				email:true	
			},
			mobile:{
				required:true,
				number:true,
				minlength:10,
				maxlength:12
			
			},
			password:{
				required:true,
				minlength:5
			},
			address:{
				required:true,
				minlength:5
			},
			office_no:{
				required:true,
				number:true,
				minlength:10,
				maxlength:12
			},
			anb_no:{
				required:true
			},
			full_address:{
				required:true,
				minlength:10
			}
		},
		messages:{
			name:{
				required:"Please enter your name",
				minlength:"Please enter 3 characters name"
			},
			email:{
				required:"Please enter correct name",
				email:true	
			},
			mobile:{
				required:"Please enter correct contact no",
				number:true,
				minlength:"Please enter 10 digit contact no",
				maxlength:"Max 12 digit contact no"
			},
			address:{
				required:"Please enter your address",
				minlength:"Please enter 10 characters address"
			},
			office_no:{
				required:"Please enter your address",
				minlength:"Please enter 10 digit office contact no",
				maxlength:"Max 12 digit office contact no"
			},
			anb_no:{
				required:"Please enter your Abn no"
			},
			full_address:{
				required:"Please enter your address",
				minlength:"Please enter 10 characters full address"
			},
		}
	});
	
});

$(document).ready(function(){
	$("#contactForm").validate({
	
		rules:{
			name:{
				required:true,
				minlength:3
			},
			email:{
				required:true,
				email:true	
			},
			subject:{
				required:true	
			},
			mobile:{
				required:true,
				number:true,
				minlength:10,
				maxlength:12
			
			},
			message:{
				required:true,
				minlength:10
			}
		},
		messages:{
			name:{
				//required:"Please enter you name",
				minlength:"Please enter 3 characters name"
			},
			email:{
				//required:"Please enter correct name",
				email:true	
			},
			subject:{
				required:"Please enter your subject"
			},
			mobile:{
				//required:"Please enter correct mobile no",
				number:true,
				minlength:"Please enter 10 digit mobile no",
				maxlength:"Max 12 digit mobile no"
			},
			message:{
					//required:"Please enter password",
					minlength:"Please enter at lest 10 character "
			},
		}
	});
});
