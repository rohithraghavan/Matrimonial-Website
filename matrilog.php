<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <style type="text/css">
   	body{
   		background: url(images.jfif) no-repeat center center fixed;
   		background-size: cover;
   	}
   	.main-section{
   		margin:0 auto;
   		margin-top: 130px;
   		padding: 0px;

   	}	
   	.modal-content{
   		background-color: #3b4652;
   		opacity: .95;
   		padding: 0 18px;
   		box-shadow: 0px 0px 4px #848484;
   	}
   	.user-img{
   		margin-top: -50px;
   		margin-bottom: 35px;
   	}
   	.user-img img{
   		height: 100px;
   		width: 100px;
   		border-radius: 5px;
   		box-shadow: 0px 0px 2px #848484;
   	}
   	.form-group{
   		margin-bottom: 25px;
   	}
   	.form-group input{
   		height: 40px;
   		border-radius: 5px;
   		border: 0;
   		font-size: 18px;
   		padding-left: 54px;
   	}
   	.form-group::before{
   		font-family: 'Font Awesome\ 5 Free';
   		content:"\f007";
   		position: absolute;
   		margin-top: 33px;
   		font-size: 22px;
   		color: #555e60;
   		left: 28px;
   		padding-top: 4px;

   	}
   	.form-group:last-of-type::before{
   		content: "\f023";
   	}
   	button{
   		width: 35%;
   		margin-top: 10px;
   		margin-bottom: 25px;
   	}
   	.btn{
   		background-color: green!important;
   		font-size: 19px;
   	}
   	.btn:hover{
   		background-color: #25a890;
   	}
   	.forgot {
   		padding-bottom: 13px;
   		font-size: 19px;


   	}
   	.forgot a{
   		text-decoration: none;
   	}
   	h3{
	   		color: white;}
	.c1{
   		padding-left: 160px;
	}
	label{
		font-size: 20px;
	}
   		
   	
  </style>
	



</head>
<body>
	<div class="modal-dialog c1" >
		<marquee behavior=slide direction="left" scrollamount="15">
			<h3>LOGIN PAGE</h3>
		</marquee>
	</div>
	<div class="modal-dialog text-center" >
		<div class="col-sm-8 main-section"  >
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="avatar.png" class="rounded-circle">
				</div>
			
					<form action="matrivali.php" method="post">
						<div class="form-group">
							<label><strong>Username</strong></label>
							<input type="text" name="username" class="form-control" placeholder="Enter Username" required >
						</div>
						<div class="form-group">
							<label><strong>Password</strong></label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password"required >
						</div>
						<button class="btn btn-primary" type="submit">Login</button>
					</form>
					<div class="col-12 forgot">
						<a href="#">Forgot Password??</a>
					</div>
					<div class="col-12 forgot" >
						<a href="index.php">NOT REGISTERED-->Register Here!!</a>
					</div>
				
				
			</div>
		</div>
	
	</div>

</body>
</html>