$(document).ready(function() {

var formModal = $('.cd-user-modal'),
		formLogin = formModal.find('#cd-login'),
		mainNav = $('.main-nav');

	$('#login').click(function() {		
		var username=$("#username").val();
		var password=$("#password").val();
		//alert(username+'mid'+password);return false;
		var dataString = 'username='+username+'&password='+password;
		//alert(dataString);
		if($.trim(username).length>0 && $.trim(password).length>0) 	{
			$.ajax({
			type: "POST",
			url: "ajaxlogin.php",
			data: dataString,
			cache: false,
			//beforeSend: function(){ $("#login").val('Connecting...');},
				success: function(response){
					//alert(response);
					if (response == 1) {
						window.location.href = "index.php";
					}
					else {
						//alert("Unsuccess");
						formLogin.find('password').toggleClass('has-error').next('span').toggleClass('is-visible');
					}
				}	
			});		
		}	
		return false;
	});
	$('#signup').click(function() {
		var sp-username = $("#signup-username").val();
		var sp-email = $("#signup-email").val();
		var sp-password = $("#signup-password").val();
		
		alert("hi");
		return false;
	});
});
