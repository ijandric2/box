<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="izgled.css" type="text/css" />
<link rel='shortcut icon' type='image/x-icon' href='http://www.degraeve.com/lowcoststarwarscostumes/darthvader.gif' />
</head>
<body>
<script></script>
<div class="header">
<header>
	<a href="index.php">Početna</a>
    <a href="logout.php">Logout</a>
</header>
</div>
<div class="opis">
	<h1>Dobrodosli <?php echo $_SESSION['ime']; ?>!</h1>
	<p >
        ovo je vaša stranica
    </p>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
   Izaberite file:</br></br>
    <input class="gumb" type="file" name="fileToUpload" id="fileToUpload">
    <input class="gumb" type="submit" value="Upload" name="submit"></br></br>
</form>
<?php
include 'file.php';
?>
 
</div>
</body>
</html>