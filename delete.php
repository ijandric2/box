<?php
require('db.php');
include("auth.php");

$username = $_SESSION["ime"];
$id=$_GET["id"];
mysqli_query($con,"DELETE FROM file Where id = $id");

header ("location:dashboard.php")
    
   

?>


