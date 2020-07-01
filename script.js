/* runs login */

$(document).ready(function(){
	$('#login').click(function(){
		
		$('#loading').fadeIn();
		
		setTimeout(function(){
			
			///$('#loading').fadeOut();
			
			// Check to see if password is hunter2
			if($('#password').val().indexOf('hunter') == -1){
				// error message appears
				window.alert("We didn't recognize that username or password. If you've forgotten, please reset your account now.");
				// $('#loading').fadeOut();
				// redirects back to index
				window.location.href= "/";
				
			}else{
				
				
				
				var last = $('#username').val().substring($('#username').val().indexOf('#')+1);
				var amt = $('#password').val().replace('hunter','');
				
				
				
				location.href = "/account/index2.php"
				//location.href = "/account?a=" + btoa(amt) + "&l=" + btoa(last);
				
				}
				
			
			}, 2500);
		

	});
});



