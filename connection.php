<?php
$server="localhost:3306";
$username="root";
$password="";
$db="authentication";

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
      die("Error : " . $con->connect_error);
   }
   
?>