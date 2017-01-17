<?php

include("auth.php"); //include auth.php file on all secure pages 
require('db.php');
$sesija =$_SESSION["ime"];
$ime = $_FILES['fileToUpload']['name'];
$image = addslashes (file_get_contents($_FILES['fileToUpload']['tmp_name']));


if ((isset($_POST["submit"])) and (isset($_FILES['fileToUpload']))) {
    
	mysqli_query($con,"insert into file (fileIme, file1, korisnik) values('$ime','$image','$sesija')");
}

header("location:dashboard.php")
?>
