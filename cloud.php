<!DOCTYPE html>
<html>
<!-- �Joshua Zoetebier // www.joshuazoetebier.icthardenberg.nl -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pricetablecloud.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Project 4</title>
</head>
<body>
<?php include "assets/include/header.php";?>
	<!-- pricing table -->
	<script>
	                       $(document).ready(function() {
	                       $('.popup-with-zoom-anim').magnificPopup({
	                           type: 'inline',
	                           fixedContentPos: false,
	                           fixedBgPos: true,
	                           overflowY: 'auto',
	                           closeBtnInside: true,
	                           preloader: false,
	                           midClick: true,
	                           removalDelay: 300,
	                           mainClass: 'my-mfp-zoom-in'
	                       });

	                       });
	</script>
	<div class="pricing-plans">
		<div class="wrap">
			<div class="pricing-grids">
				<div class="pricing-grid1">
					<div class="price-value">
						<h2><a href="#">Oranje</a></h2>
						<h5><span>$ 6,00</span> / month</h5>
						<div class="sale-box">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">100 GB Cloud opslag</a>
							</li>
						</ul>
						<div class="cart1">
							<a class="popup-with-zoom-anim" href="payment.php">Betaal nu</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid2">
					<div class="price-value two">
						<h3><a href="#">Groen</a></h3>
						<h5><span>$ 10.00</span> / month</h5>
						<div class="sale-box two">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">1 TB Cloud opslag</a>
							</li>
						</ul>
						<div class="cart2">
							<a class="popup-with-zoom-anim" href="payment.php">Betaal nu</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid3">
					<div class="price-value three">
						<h4><a href="#">Geel</a></h4>
						<h5><span>$ 4,00</span> / month</h5>
						<div class="sale-box three">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">10 GB Cloud opslag</a>
							</li>
						</ul>
						<div class="cart3">
							<a class="popup-with-zoom-anim" href="payment.php">Betaal nu</a>
						</div>
					</div>
				</div>
				<div class="clear"></div></div></div>
			<footer><?php include "assets/include/footer.php";?></footer>
</body>
</html>
