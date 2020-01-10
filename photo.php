<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "authentication");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO photos (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      echo $msg;
    }else{
      $msg = "Failed to upload image";
      echo $msg;
    }
  }
 // $result = mysqli_query($db, "SELECT * FROM photos");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  
</style>
  <link rel="stylesheet" type="text/css" href="custom.css">
	<title></title>
	<script src="myscripts.js"></script>
	<script type="text/javascript">
		
	</script>
  <style type="text/css">
    body{
      background-color: khaki;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">

    <button class="navbar-toggler " data-toggle="collapse" data-target="#collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse"> 
      <a class="navbar-brand"><img src="logo.png" style="height: 50px"></a>
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matrireg.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matrilog.php">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
      </ul>
    </div>

  </nav>



<div id="content" class="text-center" style="border: 1px solid red">
 <!-- <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>-->
  <form method="POST" action="photo.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <h3><b>Please upload a photo which will be seen by others</b></h3>
    <br><br>
    <div>
      <input type="file" name="image">
    </div><br><br><br>
    <div>
      <textarea 
        id="text" 
        cols="60" 
        rows="4" 
        name="image_text" 
        placeholder="Say something about this image..."></textarea>
    </div><br><br><br>
    <div>
      <button type="submit" name="upload">POST</button>
    </div>
  </form>
</div>


   

    <!--CSS CARDS-->
  <div class="container-fluid padding">
     <div class="row padding" class="c2">
       <div col-md-4 col-sm-12 col-lg-4 style=" padding: 10px 20px 10px 100px;" >
         <div class="card"><img class="card-img-top" src="./images/car3.jpg">
           <div class="card-body">
            <h4 class="card-title">Sharad & Priyanka
            </h4>
            <p class="card-text">Trusted as always</p>
           </div>
         </div>
       </div>
       <div col-md-4 col-sm-12 col-lg-4 style=" padding: 10px 20px 10px 100px;">
         <div class="card"><img class="card-img-top" src="./images/car2.jpg">
           <div class="card-body">
            <h4 class="card-title">Dev & Shreya
            </h4>
            <p class="card-text">Safe and Secure.</p>
           </div>
         </div>
       </div>
       <div col-md-4 col-sm-12 col-lg-4 style=" padding: 10px 20px 10px 100px;">
         <div class="card"><img class="card-img-top" src="./images/car1.jpg">
           <div class="card-body">
            <h4 class="card-title">Amit & Laxmi
            </h4>
            <p class="card-text">We are happy</p>
           </div>
         </div>
       </div>
     </div>

  </div>

  <!--- connect-->
  <br>
  <br>
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-12">
        <h2>Connect with us....</h2>
      </div>
      <div class="col-12 social padding">
        
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-google"></a>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer style="display: flex;flex-direction: column;">
    <div class="container-fluid padding">
      <div class="row text-center">
         <div class="col-md-4">
          <img src="logo.png">
          <hr class="light">
          <p>Contact : 8767408258</p>
          <p>EMAIL US :abc@gmail.com</p>
          <p>Street : Banglore</p>
          <p>Zip Code : 400098</p>
         </div>
         <div col-md-8>
          <hr class="light">
          <h5>Our Query Hours</h5>
          <hr class="light">
          <p>Monday : 9am-5pm</p>
          <p>Saturday : 10am-4pm</p>
          <p>Sunday : <b>Closed</p>
         </div>
         <div class="col-lg-12 col-xg-12">
          <hr class="light">
          <h5>&copy; jeevansangni.com</h5>
         </div>
      </div>
    </div>
  </footer>
</body>
</html>