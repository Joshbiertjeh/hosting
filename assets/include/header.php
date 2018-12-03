<!DOCTYPE html>
<html>
<!-- �Joshua Zoetebier // www.joshuazoetebier.icthardenberg.nl -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/extra.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Project 4</title>
</head>
<body>
	<!-- Begin header -->
	<script>
	function myFunction() {
	   var x = document.getElementById("myTopnav");
	   if (x.className === "topnav") {
	       x.className += " responsive";
	   } else {
	       x.className = "topnav";
	   }
	}
	</script>
	<div class="background">
	<img src="img/achtergrond.jpg" style="z-index:-1;">
	</div>
	<div class="topnav" id="myTopnav">
		<a class="active" href="index.php">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Hosting <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="hosting.php">Hostingpakketten</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Cloud <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="cloud.php">Cloudpakketten</a>
			</div>
		</div><a href="contact.php">Contact</a> <a href="klanten.php">Klanten</a> <a href="social.php">Social</a> <a href="foto.php">Foto`s</a> <a class="icon" href="javascript:void(0);" onclick="myFunction()" style="font-size:15px;">&#9776;</a>
		<div class="right"><a href="#"><i class="fa fa-shopping-cart"> Cart</i></a></div>
	</div>
	<script type="text/javascript" id="cookieinfo" src="https://cookieinfoscript.com/js/cookieinfo.min.js" data-bg="black" data-fg="#FFFFFF" data-link="#F1D600" data-cookie="CookieInfoScript" data-text-align="left" data-close-text="Got it!"></script>
</body>
</html>
