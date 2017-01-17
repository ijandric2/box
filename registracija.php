
<html>
<head>
<link rel="stylesheet" href="izgled.css" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='http://www.degraeve.com/lowcoststarwarscostumes/darthvader.gif' />
</head>
<body>
    <?php
	require('db.php');
    // ako je korisnik odabrao submit unesi podatke u bazu
    if (isset($_REQUEST['ime'])){
		$username = stripslashes($_REQUEST['ime']); // izbrisi backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['pass']);
		$password = mysqli_real_escape_string($con,$password);

        $query = "INSERT into `korisnici` (ime, pass) VALUES ('$username', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Uspješno ste se registrirali</h3><br/>Kliknite ovdje za prijavu <a href='prijava.php'>Prijava</a></div>";
			

        }
    }else{
?>
<div class="header">
<header>
	<a href="index.php">Početna</a>
	<a href="prijava.php">Prijava</a>
	<a href="registracija.php">Registracija</a>
</header>
</div>
<div>
	<h1>Dobrodošli u Darth box</h1>
	<p class="tekst">Pohranite svoje datoteke kod nas</p>
</div>
<div>
	<form class="forma" name="registration" action="" method="post">
	<br>
	Username:<br>
	<input type="text" name="ime"><br><br>
	Pass:<br>
	<input type="password" name="pass" ><br><br>
	<input class="gumb" type="submit" value="Registriraj se"><br><br>
	<br><br>
	</form>
 </div>
 <div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.8060286062514!2d15.942652315982691!3d45.81514297910666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ4JzU0LjUiTiAxNcKwNTYnNDEuNCJF!5e0!3m2!1shr!2shr!4v1482429856150" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
  
 <footer>
	<p>copyright bla bla<p/>
</footer>


</div>
    <?php } ?>
</body>
</html>