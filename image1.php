<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-color: khaki;
  	}
  	img{
  		width: 50%;
  		height: 300px;
  		padding: 0px 50px;

  	}
  	.article-container{
  		padding:0px 30px;
  	}
  	.text-center{
  		font-weight: 13px;
  		font-size: 28px;
  	}

  </style>
</head>
</head>
<body>
	<form action="image1.php" method="POST">
		<h2 >Search any one</h2>
		<input type="text" name="search">
		<button name="search_submit">Search</button>
	</form>
	<div class="article-container " >
		<?php
		$sql = "select * from photos";
		$result = mysqli_query($con,$sql);
		$res = mysqli_num_rows($result);
		if($res > 0){
			echo "<div  style='border:1px solid red' class='img1'>";
			while($row=mysqli_fetch_assoc($result)){

				echo "
				
				<p class='text-center'>".$row['image_text']."</p>
				
				";
				
				echo "<img src='images/".$row['image']."' class='img-fluid' >";
				
			}
			echo "</div>";
		}
		?>
	</div>

</body>
</html>