<?php

    /*$conn = mysqli_connect("localhost", "root", "","parakram");
    session_start();
    if(!isset($_SESSION['name']))
    header("location:/web/");*/
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    	<title> <?php /* $arr = explode(' ',trim($_SESSION['name'])); echo ucfirst($arr[0]); */?> | feel free</title>
    	<!-- Custom Theme files -->
    	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    	<!-- Custom Theme files -->
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <style type="text/css">
    	input{
    		min-width:100% !important;
    	}
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="height: 50px">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">feel free</a>
			</div>
			<ul class="nav navbar-nav ">
				<li ><a href="#">rafg</a></li>
				<li><a href="#" title="Change Setting"><img src="p.png" style="height: 30px;width:30px"></a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">

			<div class="col-sm-5">
				<div class="container-fluid">
					<form>
						<div class="form-group">
							<label for="cmn">Contact Number</label>
							<input type="tel" class="form-control" id="cmn" >
						</div>

						<div class="form-group">
							<label for="city">City</label>
							<select class="form-control" id="city">
								<option id="Mumbai">Mumbai</option>
								<option id="Delhi">Delhi</option>
								<option id="Banglore">Banglore</option>
								<option id="Pune">Pune</option>
								<option id="Kolkata">Kolkata</option>
								<option id="Chennai">Chennai</option>
								<option id="Ahmedabad">Ahmedabad</option>
								<option id="Noida">Noida</option>
								<option id="Vishakapatnam">Vishakapatnam</option>
								<option id="Hyderabad">Hyderabad</option>
								<option id="National">National</option>
								
							</select>
						</div> 

						<div class="form-group">
							<label for="city">Select Profession</label>
							<select class="form-control" id="profession">
								
								<option id="Faishon Designing Career">Faishon Designing Career</option>
								<option id="Journalism">Journalism</option>
								<option id="Social Worker">Social Worker</option>
								<option id="Surgeon">Surgeon</option>
								<option id="Education">Education</option>
								<option id="Banking">Banking</option>
								<option id="Airhostess">Airhostess</option>
								<option id="Modelling">Modelling</option>
								<option id="Sports">Sports</option>
								<option id="Government Jobs"> Government Jobs</option>
							</select>
						</div> 
						<div class="form-group">
							<label for="cmn">Emergency Number (1<sup>st</sup>)</label>
							<input type="tel" class="form-control" id="cmn" >
						</div>
						<div class="form-group">
							<label for="cmn">Emergency Number(2<sup>nd</sup>)</label>
								<input type="tel" class="form-control" id="cmn" >
							</div>


							<button type="submit" class="al-ok">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-sm-2"></div>
				<div clas="col-sm-5">
					<div class="container-fluid">
						<div id="help"></div>
					</div>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function(){

		$.ajax({
			type:"GET",
			url:"",
			dataType:"json",
			sucess:function(data,status,xhr){
				var max=data.length;
				var i=0;
				var x="<dl>";
				for(i=0;i<max;i++){
					x=x+"<dt>"+data[i].key+"</dt><dd>"+data[i].val+"</dd>";
				}
				x=x+"</dl>";
				$("help").text(x);
			}
		});

	});
		</script>
	</body>
	</html>