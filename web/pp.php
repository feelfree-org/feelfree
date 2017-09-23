<?php
    $conn = mysqli_connect("localhost", "root", "","parakram");
    session_start();
if(!isset($_SESSION['name']))
    header("location:/web/");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>  <?php $arr = explode(' ',trim($_SESSION['name'])); echo ucfirst($arr[0]);?> | feel free</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat New Login Form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!--alertify-->
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 
<link href="css/al-ok.css" rel='stylesheet' type='text/css'>
<link href="alertify/css/alertify.min.css" rel='stylesheet' type='text/css'>
<link href="alertify/css/themes/default.min.css" rel='stylesheet' type='text/css'>

<!--Google Fonts-->
<script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/valid.js"></script>
<script>$(document).ready(function(c) {
	$('.sinup-close').on('click', function(c){
		$('.setting').fadeOut('slow', function(c){
	  		$('.setting').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- navbar -->
<style>
nav{
	width: 100%;
	padding:0px;
	position:fixed;
	background-color:#333;
	min-height:50px;position:fixed;
	top:0;
	left:0;
}
.a{
	padding:15px;
	padding-top:14px;
	height:100%;
	color:#999;
	font-family:sans-serif;
	font-size:1.2em;
}
.a:hover{
	
	cursor: pointer;
	color: #ccc;
}
.f:hover{
	background-color:#444;
}
</style>
  <nav>
	<span style="float:left;margin-left:10px;" class="a f">feel free</span>
	<span style="float:right;margin-right:15px;padding: 0;padding-top: 10px"class="a" id="t" >
          <img src="p.png" style="height:30px;width:30px" title="Change Setting" ><span class="b">Save</span></span>
	<span style="float:right;margin-right:10px" class="a">raghvendra</span>
  </nav>
<!--//navbar-->
<!--login start here-->
<script>
$(document).ready(function(){
   $("input").attr("disabled", true);
   $(".b").css({"dispaly":"none"});
});
</script>
<div class="login">
	<h2>Login</h2>
	<form method="POST" action=".">
		<input type="email" class="user active" value="User Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User email';}" name="email"/>
		<input type="password" class="lock active" value="User Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Password';}"/ name="password">
		<div class="check" >
 		<input type="checkbox" name="checkbox" style="margin-left:-30px" onclick="showPassword()" autocomplete="off"><span style="color:#555"> View Password</span>
 		</div>
	</form>
	<div class="forgot">
		 
 		  <div class="login-para">
 			<p><a href="#"> Forgot Password? </a></p>
 		 </div>
		<div class="clear"> </div>
	</div>
	<div class="login-bwn">
	   <input type="submit" value="Log in" />
	</div>
	<div class="login-bottom">
		<h3>Or Login with</h3>
		
	 <div class="social-icons">
		<div class="button">
			
			<a class="go" href="#" style="width:100%"><i class="anc-go"> </i><span>Google+</span></a>
			
		</div>
		<h4>Don,t have an Account? <a href="register.html"> Register Now!</a></h4>
	</div>
  </div>
</div>
<script>
function showPassword() {
    
    var key_attr = $('.lock').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('.lock').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('.lock').attr('type', 'password');
        
    }
    
}

	$("input[type='submit']").click(function(){
		if(validateEmail($('input[type="email"]').val()) && $('input[type="email"]').val()!='')
			{

				$.ajax({
    			type:"POST",
    			url:"/web/php/login.php",
    			data:{
    				
    				email:$("input[nae='email']").val(),
    				pwd:$("input[name='password']").val(),
    				
    			},
    			dataType:"html",
    			success:function(result){
    				if(result!='1')
    					{
    						alertify.alert("Invalid Credential",result);
    						change();
    					}
    				else{
    					alertify.alert("Login Sucessfull !!","Redirecting to Profile Page.");
    					change();
    					setTimeout(function(){ window.location = "/web/profile.php"; }, 1000);
    				}
    			},
    			error:function(xhr){
    				alertify.alert("Error ","Error Occured : "+ xhr.status+ " "+ xhr.statusText+".");
    				change();

    			}

    		});
    		
			}
		else{
			alertify.alert("Login Error","Not a valid email.");
			change();
		}
		return;

	});

</script>
<script type="text/javascript" src="alertify/alertify.min.js"></script>
<!--login end here-->
</body>
</html>
