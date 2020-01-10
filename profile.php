<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	{
  		
  	}
  	body{
  		background: url(./images/image2.jpg);
  		background-size: cover;
  		background-repeat: no-repeat;
  		background-position: center;
  	}
  	.container{
  		float: right;
  		padding-left: 180px;
  		display: flex;
  		flex-direction: column;
  	}
  	.sidenav {
	  height: 100%;
	  width: 0;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  transition: 0.5s;
	  padding-top: 60px;
	}
	.sidenav a {
	  padding: 8px 8px 8px 32px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display:block;
	  transition: 0.3s;
	}
	.sidenav a:hover {
  		color: #f1f1f1;
	}
	.sidenav .closebtn {
	  position: absolute;
	  top: 0;
	  right: 25px;
	  font-size: 36px;
	  margin-left: 50px;
}	
	h2{
		background-color: #fffccc;
		padding: 5px 0px;
	}
	label{
		font-size: 24px;
	}
	#txtHint{
		font-size: 22px;
		font-weight: 5px;
	}
	
  </style>
</head>
<body>
	
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="profile2.php">Edit Profile</a>
	  <a href="photo.php">Upload Photo</a>
	 <!-- <a href="sirtable.php">View Profile</a>     --->
	  <a href="contact.php">Contact</a>
	  <a href="googlemaps.php">View our Location</a>
	  <a href="image1.php">Search Partner</a>
	</div>

	


	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Dashboard</span>

	

</body>
</html>

<script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}
		function closeNav() {
  			document.getElementById("mySidenav").style.width = "0";
		}
</script>
