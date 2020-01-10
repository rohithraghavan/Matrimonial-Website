<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:matrilog.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-color: #c32143
    }
 
    h1{
      text-transform: uppercase;
    }
    .jumbotron{
      background-color: #787878
    }
    .modal-dialog h3{
      padding:5px;
      padding-left: 60px;
    }
    .c1{
      padding: 0px auto;
      padding-top: 30px;
    }
    .c2{
      width: 100vw;
      height: 60vw;
    }
    .container {
      position: relative;
      width: 100%;
     
      }

    
    .container .btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background-color: #555;
      color: white;
      font-size: 20px;
      padding: 12px 24px;
      border-radius: 5px;
      
      }
      .container .btn:hover{
        background-color: green;
      }
      .container img{
        
      }
      .container a{
        text-decoration: none;
        color:white;
      }
      

     
   
  </style>
    }
   
 
</head>
<body >
 
	 <div class="jumbotron ">
      <nav>
        <a class="navbar-brand"><img src="logo.png" ></a>
      </nav>
      <h1 class="text-center col-sm-12">NAMASTE <?php echo $_SESSION['username'] ?> </h1>
      <div class="modal-dialog" style="border: 1px solid;">
        <h3>GREAT TO SEE YOU TODAY!!!</h3>
      </div>
  
      <div class="modal-content c1 text-center" style="background-color: grey;">
        <h4 >Looks like you are looking for a long term relationship??</h4>
        <h4 ><b><h3>RIGHT...</b></h3> let us help you find good matches..</h4>
      </div>
	

 	</div>

    <div class="container">
        <img src="car1.jpg" alt="Snow" style="width:100%">
        <button class="btn"><a href="profile.php" target="_blank">Complete your Profile</a></button>
    </div>
     

</body>
</html>