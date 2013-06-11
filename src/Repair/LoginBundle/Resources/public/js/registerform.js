

$(document).ready(function() {
	
	
	// validate register form on keyup and submit
	$("#registerform").validate({
	  rules: {
                    username:{
					required:true,
					lettersonly:true
					}, 					
                    last_name:{
					required:true,
					lettersonly:true
					},
		logins:{
				required:true

			},
		select: {
				required:true
			}, 
		
			phone:{
					  required:true,
					  number:true,
					  minlength:10
					},
                    email: {
                        required: true,
                        email: true
                    },
					qualification:"required",
					address:"required",
					postal_code:
					{
					 required: true,
					 number:true	
					},
					about:"required",
                    txtCaptcha:"required",
                    agree: "required"
                },
                messages: {
                    username: {
					required:"Please enter your username.",
					lettersonly:"Please enter valid username."
					},
                    last_name:{
				      required:"Please enter your lastname.",
					  lettersonly:"Please enter valid lastname."
					  },
		logins:{
				required:"Please select your login type."
			},
		select:{
				required:"Please select the affliate."
			},
					phone:{
					   required:"Please enter your phone number.",
					   minlength:"Phone number must be 10 numbers.",
					   number:"Please enter valid phone number"
					},
					email: "Please enter a valid email address.",
					qualification:"Please select your qualification.",
					address:"Please fill out your address.",
					postal_code:
					{
					 required:"Please provide your postal code.",
					 number:"Please enter valid postal code."
					},
					about:"Please mention few words about yourself.",
					txtCaptcha:
					{
					required:"Please enter the captcha.",
					equalTo: "#imgCaptcha"
                    },
                    agree: "Please accept our policy."					
                }
	 });	
	 });

