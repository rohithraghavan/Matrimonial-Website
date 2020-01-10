<?php
$server="localhost:3306";

$username="root";
$password="";
$db="authentication";
$con=mysqli_connect($server,$username,$password,$db);
if (!$con) {
	die("error:" .$con->connect_error);
}
$name=$_POST['name'];
$query=$_POST['query'];
$email=$_POST['email'];
$sql="insert into contact(name,query,email) values ('$name','$query','$email')";

if($con->query($sql) == TRUE){
      echo "query has been sent";
      header('location:profile.php');
   }else{
      echo($con->error);
   }
?>