
<?php
include_once('header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		textarea{

		}
	</style>
</head>
<body>
<div class="container" >
		<div class="row">
			<div class="col-md-8" style="border: 1px solid ;background-color: #F0EAD6; float: right;">
			
				<h3><b>Contact Form</h3>
			
			<h4>PLEASE ENTER YOUR QUERY. OUR TEAM WILL GET TO YOU AS SOON AS POSSIBLE.</h4>
			<hr class="light">
			<form action="contact1.php" method="post" name="form1">
						<div class="form-group">
							<label><strong>Name</strong></label>
							<input type="text" name="name" class="form-control" required >
						</div>
						<div class="form-group">
							<label><strong>Query</strong></label>
							<textarea cols="60" rows="4" name="query" required></textarea>
							
						</div>
						<div class="form-group">
							<label><strong>Email</strong></label>
							<input type="email" name="email" class="form-control" required >
						</div>
						  

						<button class="btn btn-primary" type="submit">submit</button>
			</form>
		</div>
		</div>
	</div>
</body>
</html>
<?php
include_once('footer.php');
?>