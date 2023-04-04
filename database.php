<?php


$servername = "localhost";
$username = "root";
$password = "";
$databasename = "try";

$connection = mysqli_connect($servername,$username,$password,$databasename);

if (!$connection){
  die ("Can't connect to database ". mysqli_connect_error());

}

//echo "Succesfully connected to database: ".$databasename."<br/>";

/*
$servername = "localhost";
$username = "jumillauser";
$password = "jebjumilla";
$databasename = "jumillaDB"*/
 ?>
