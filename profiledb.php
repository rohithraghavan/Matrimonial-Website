<?php

$con = mysqli_connect("localhost","root","","authentication");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$sex=$_POST["sex"];
$email = $_POST["email"];
$address= $_POST["address"];
$dob = $_POST["dob"];
$religion = $_POST["religion"];
$age = $_POST["age"];
$marital = $_POST["marital"];
$height = $_POST["height"];
$education = $_POST["education"];
$institution = $_POST["institution"];
$occupation = $_POST["occupation"];
$income= $_POST["income"];
$foccupation = $_POST["foccupation"];
$moccupation= $_POST["moccupation"];
$brother = $_POST["brother"];
$sister = $_POST["sister"];
$sql="insert into customer(Firstname,Lastname,Sex,Email,Address,DOB,Religion,Age,mari,Height,Degree,
Institution,Occupation,Annualincome,Fatheroccupation,Motheroccupation,Brothers,Sisters) values('$fname',
'$lname','$sex','$email','$address','$dob','$religion','$age','$marital','$height','$education',
'$institution','$occupation','$income','$foccupation','$moccupation','$brother','$sister')";
mysqli_query($con,$sql);
if($con->query($sql) == TRUE){
      echo "Record Inserted";
      header('location:profile.php');

}else{
      echo($con->error);
}
?>
<script type="text/javascript">
	alert("record inserted")
</script>







	


	




