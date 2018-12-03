<!DOCTYPE html>
<html>
<!-- �Joshua Zoetebier // www.joshuazoetebier.icthardenberg.nl -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pricetablehosting.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Project 4</title>
</head>
<body>
	<?php include "assets/include/header.php";?>
	<!-- pricing table -->
	<script>
												 function test(e){
													 alert(document.getElementById("selectList").value);
													 if (document.getElementById("selectList").value==="Brons"){
														document.getElementById("p1").value = 5.95;
														document.getElementById("t1").innerHTML = "1 month $5.95";
														document.getElementById("p3").value = 357.00;
														document.getElementById("t3").innerHTML = "5 years $357.00";
														document.getElementById("p2").value = 71.40;
 													 document.getElementById("t2").innerHTML = "1 year $71.40";
													}
												if (document.getElementById("selectList").value==="Silver"){
												 document.getElementById("p1").value = 7.95;
												 document.getElementById("t1").innerHTML = "1 month $7.95";
												 document.getElementById("p3").value = 477.00;
												 document.getElementById("t3").innerHTML = "5 years $477.00";
												 document.getElementById("p2").value = 95.40;
 												document.getElementById("t2").innerHTML = "1 year $95.40";
											 }
										 if (document.getElementById("selectList").value==="Goud"){
											document.getElementById("p1").value = 10.95;
											document.getElementById("t1").innerHTML = "1 month $10.95";
											document.getElementById("p3").value = 657.00 - document.getElementById("discount").innerHTML;
											document.getElementById("t3").innerHTML = "5 years $657.00";
											document.getElementById("p2").value = 131.40;
 										 document.getElementById("t2").innerHTML = "1 year $131.40";
										}
									}

	</script>
	<div id="discount" style="display:none;">6</div>

	<div class="pricing-plans">
		<div class="wrap">
			<div class="pricing-grids">
				<div class="pricing-grid1">
					<div class="price-value">
						<h2><a href="#">Silver</a></h2>
						<h5><span>$ 5,95</span> / month</h5>
						<div class="sale-box">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">10 GB HDD</a>
							</li>
							<li>
								<a href="#">512MB RAM</a>
							</li>
							<li class="whyt">
								<a href="#">1 Core</a>
							</li>
							<li>
								<a href="#">100GB dataverkeer / month</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart1">
							<a class="popup-with-zoom-anim" href="payment.php">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid2">
					<div class="price-value two">
						<h3><a href="#">Goud</a></h3>
						<h5><span>$ 10.95</span> / month</h5>
						<div class="sale-box two">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">50 GB HDD</a>
							</li>
							<li>
								<a href="#">2048MB RAM</a>
							</li>
							<li class="whyt">
								<a href="#">4 Cores</a>
							</li>
							<li>
								<a href="#">Unlimited dataverkeer / month</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart2">
							<a class="popup-with-zoom-anim" href="payment.php">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid3">
					<div class="price-value three">
						<h4><a href="#">Brons</a></h4>
						<h5><span>$ 7.95</span> / month</h5>
						<div class="sale-box three">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li class="whyt">
								<a href="#">20 GB HDD</a>
							</li>
							<li>
								<a href="#">1048MB RAM</a>
							</li>
							<li class="whyt">
								<a href="#">2 Cores</a>
							</li>
							<li>
								<a href="#">200GB dataverkeer / month</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart3">
							<a class="popup-with-zoom-anim" href="payment.php">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="clear"></div></div>
				<form id="Brons" style="text-align:center;">
					<select id="selectList" onchange="test()">
 					 	<option id="Brons" value="Brons">Brons</option>
 						<option id="Silver" value="Silver">Silver</option>
 						<option id="Goud" value="Goud">Goud</option>
 					</select>
					<fieldset>
					<label>
							<input name="product" value="5.95" type="checkbox" id="p1" onclick="totalIt()"/>
							<p id="t1" style="color:white;">1 month $5.95</p>
							 <input name="product" value="71.40" type="checkbox" id="p2" onclick="totalIt()"/>
							 <p id="t2" style="color:white;">1 year $71.40</p>
							 <input name="product" value="357.00" type="checkbox" id="p3" onclick="totalIt()"/>
							 <p id="t3" style="color:white;">5 years $357.00</p>
							 <input style="margin-top:10px;" value="$0.00" readonly="readonly" type="text" id="total"/>
					 </label>
			 </fieldset>
	 </form>
	 <script>
	 function totalIt() {
  var input = document.getElementsByName("product");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = "$" + total.toFixed(2);
}
</script>
	 </div>
			<footer><?php include "assets/include/footer.php";?></footer>
</body>
</html>
