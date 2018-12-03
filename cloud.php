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
												 function test(e){
													 alert(document.getElementById("selectList").value);
													 if (document.getElementById("selectList").value==="Geel"){
														document.getElementById("p1").value = 4.00;
														document.getElementById("t1").innerHTML = "1 month $4.00";
														document.getElementById("p3").value = 240.00;
														document.getElementById("t3").innerHTML = "5 years 48.00";
														document.getElementById("p2").value = 48.00;
 													 document.getElementById("t2").innerHTML = "1 year $240.00";
													}
												if (document.getElementById("selectList").value==="Oranje"){
												 document.getElementById("p1").value = 6.00;
												 document.getElementById("t1").innerHTML = "1 month $6.00";
												 document.getElementById("p3").value = 360.00;
												 document.getElementById("t3").innerHTML = "5 years $360.00";
												 document.getElementById("p2").value = 72.00;
 												document.getElementById("t2").innerHTML = "1 year $72.00";
											 }
										 if (document.getElementById("selectList").value==="Groen"){
											document.getElementById("p1").value = 10.00;
											document.getElementById("t1").innerHTML = "1 month $10.00";
											document.getElementById("p3").value = 600.00 - document.getElementById("discount").innerHTML;
											document.getElementById("t3").innerHTML = "5 years $600.00";
											document.getElementById("p2").value = 120.00;
 										 document.getElementById("t2").innerHTML = "1 year $120.00";
										}
									}

	</script>
	<div class="discount1">
	<p id="discount" style="display:none;">5</p>
	</div>
	</div>
	<div class="pricing-plans">
		<div class="wrap">
			<div class="pricing-grids">
				<div class="pricing-grid1">
					<div class="price-value">
						<h2><a href="#">Oranje</a></h2>
						<h5><span>$ 4,00</span> / month</h5>
						<div class="sale-box">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li>
								<a href="#">10 GB HDD</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart1">
							<a>Add to cart</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid2">
					<div class="price-value two">
						<h3><a href="#">Groen</a></h3>
						<h5><span>$ 10.95</span> / month</h5>
						<div class="sale-box two">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li>
								<a href="#">50 GB HDD</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart2">
							<a>Add to cart</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid3">
					<div class="price-value three">
						<h4><a href="#">Geel</a></h4>
						<h5><span>$ 7.95</span> / month</h5>
						<div class="sale-box three">
							<span class="on_sale title_shop"></span>
						</div>
					</div>
					<div class="price-bg">
						<ul>
							<li>
								<a href="#">20 GB HDD</a>
							</li>
							<li class="whyt">
								<a href="#">Full Support</a>
							</li>
						</ul>
						<div class="cart3">
							<a href="payment.php">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="clear"></div></div>
				<form id="Brons" style="text-align:center;">
					<select id="selectList" onchange="test()">
 					 	<option id="Geel" value="Geel">Geel</option>
 						<option id="Oranje" value="Oranje">Oranje</option>
 						<option id="Groen" value="Groen">Groen</option>
 					</select>
					<fieldset>
					<label>
							<input name="product" value="4.00" type="checkbox" id="p1" onclick="totalIt()"/><p id="t1" style="color:white;">1 month $4.00</p>
							 <input name="product" value="48.00" type="checkbox" id="p2" onclick="totalIt()"/><p id="t2" style="color:white;">1 year $48.00</p>
							 <input name="product" value="240.00" type="checkbox" id="p3" onclick="totalIt()"/><p id="t3" style="color:white;">5 years $240.00</p>
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
