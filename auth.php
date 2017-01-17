<?php
session_start();
if(!isset($_SESSION["ime"])){
header("Location: prijava.php");
exit(); }
?>
