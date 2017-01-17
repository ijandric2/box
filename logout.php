<?php
/*
Author: Marino Glazar
Website: http://www.glazar.net/
*/

session_start();
if(session_destroy()) // Izbrisite sve sesije
{
header("Location: prijava.php"); // Preusmjeravanje na pocetnu stranicu
}
?>