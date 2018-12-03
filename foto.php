<!DOCTYPE html>
<html>
<!-- �Joshua Zoetebier // www.joshuazoetebier.icthardenberg.nl -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/slider.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Project 4</title>
</head>
<body>
	<?php include "assets/include/header.php";?>
	<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/first.jpg" style="width:100%;height:512px;">
</div>

<div class="mySlides fade">
  <img src="img/second.jpg" style="width:100%;height:512px;">
</div>

<div class="mySlides fade">
  <img src="img/three.jpg" style="width:100%;height:512px;">
</div>

<div class="mySlides fade">
  <img src="img/four.jpg" style="width:100%;height:512px;">
</div>

<div class="mySlides fade">
  <img src="img/five.jpg" style="width:100%;height:512px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
	<span class="dot"></span>
	<span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
			<footer><?php include "assets/include/footer.php";?></footer>
</body>
</html>
