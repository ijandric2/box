<?php

include("auth.php"); //ukljuci auth.php na svim korisnickim stranicama ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="izgled.css" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='http://www.degraeve.com/lowcoststarwarscostumes/darthvader.gif' />
</head>
<body>
<div class="header">
<header>
	<a href="index.php">Početna</a>
    <a href="dashboard.php">Dash</a>
	<a href="prijava.php">Prijava</a>
	<a href="registracija.php">Registracija</a>
    <a href="logout.php">Logout</a>
</header>
</div>
<div class="opis">
	<h1>Dobrodosli <?php echo $_SESSION['ime']; ?>!</h1>
	<p >
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus dolor vitae elit pellentesque ornare. Donec sit amet augue felis. Nam porta velit gravida aliquet sodales. Vestibulum pulvinar mauris tempus, placerat metus nec, iaculis mi. In hac habitasse platea dictumst. Suspendisse nec velit id nisi imperdiet suscipit eget rhoncus turpis. Morbi volutpat est tellus, a mollis lectus suscipit ut. Curabitur nisl risus, finibus sed porttitor ac, consequat sit amet ex. Maecenas porttitor ultrices metus vel euismod.
    </p>
 
</div>
<div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.8060286062514!2d15.942652315982691!3d45.81514297910666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ4JzU0LjUiTiAxNcKwNTYnNDEuNCJF!5e0!3m2!1shr!2shr!4v1482429856150" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
    <footer>
	<p>copyright bla bla<p/>
</footer>

</body>
</html>