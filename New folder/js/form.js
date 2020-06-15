$(function(){

	$("#username_error_msg").hide();
	$("#password_error_msg").hide();
	$("#pass_again_error_msg").hide();
	$("#email_error_msg").hide();
	
	var error_username = false;
	var error_pass = false;
	var error_pass_again = false;
	var error_email = false;


	$("#username").focusout(function(){
		check_username();
	});

	$("#password").focusout(function(){
		check_password();
	});
	
	$("#password_again").focusout(function(){
		check_pass_again();
	});

	$("#email").focusout(function(){
		check_email();
	});



	function check_username(){
		var username_length = $("#username").val().length;
		if(username_length < 5 || username_length > 20){
			$("#username_error_msg").html("Should be between 5-20 characters");
			$("#username_error_msg").show();
			error_username = true;

		}else{
			$("#username_error_msg").hide();
		}
	}

	function check_password(){
		var pass_length = $("#password").val().length;
		if(pass_length < 5){
			$("#password_error_msg").html("Should be min. 5 characters");
			$("#password_error_msg").show();
			error_pass = true;

		}else{
			$("#password_error_msg").hide();
		}
	}

	function check_pass_again(){
		var password = $("#password").val();
		var pass_again = $("#password_again").val();
		
		if(password != pass_again){
			$("#pass_again_error_msg").html("Not mathced...");
			$("#pass_again_error_msg").show();
			error_pass_again = true;

		}else{
			$("#pass_again_error_msg").hide();
		}
	}


	function check_email(){
		var pattern = RegExp(/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})/);
		if(pattern.test($("#email").val())){
			$("#email_error_msg").hide();
		}else{
			$("#email_error_msg").html("Invalid Email Address...");
			$("#email_error_msg").show();
			error_email = true;
		}

	}



	$("#myform").submit(function(){
		var error_username = false;
		var error_pass = false;
		var error_pass_again = false;
		var error_email = false;


		if(error_username == false && error_pass == false && error_pass_again == false && error_email == false){
			return true;
		}else{
			return false;
		}



	});




});