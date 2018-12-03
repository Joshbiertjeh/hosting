<!DOCTYPE html>
<html>
<!-- �Joshua Zoetebier // www.joshuazoetebier.icthardenberg.nl -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/contact.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Project 4</title>
</head>
<body>
	<?php include "assets/include/header.php";?>
  <div class="container">
  <div style="text-align:center">
    <h1>Contact</h1>
  </div>
  <div class="row">
    <div class="column">
      <h2>Contactgegevens</h2>
      <br>
      <p>Bedrijfsnaam: Colicss<p>
        <br>
        <p>Straatnaam: Herenstraat 24</p>
          <br>
          <p>Postcode: 7776 AG, Slagharen</p>
            <br>
            <p>Telefoon-nummer: 06-12412498</p>
              <br>
              <p>KVK: 05076893</p>
    </div>
    <div class="column">
      <form action="/action.php">
        <label for="fname">Voornaam:</label>
        <input type="text" id="fname" name="firstname" placeholder="Voornaam..">
        <label for="lname">Achternaam:</label>
        <input type="text" id="lname" name="lastname" placeholder="Achternaam..">
        <label for="country">Country</label>
        <label for="lname">Email:</label>
        <input type="text" id="lname" name="lastname" placeholder="Email..">
        <label for="subject">Subject</label>
        <textarea id="Bericht" name="subject" placeholder="Bericht.." style="height:170px"></textarea>
        <input type="submit" value="Verzenden">
      </form>
    </div>
  </div>
</div>
	<footer><?php include "assets/include/footer.php";?></footer>
</body>
</html>
