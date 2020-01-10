<?php

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"formdb");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		display: flex;
  		flex-direction: row;
        background-color: #ffb3ff;
  	}
  	.form-row{
  		width: 100vw;
  	}
  	.i1{
  		height: 35px;
  		width: 110px;
  	}
  	h3{
  		text-align: center;
  		padding: 13px 0px;
  	}
  	label{
  		font-size: 25px;
  		
   		font-family: sans-serif;

  	}
  	button{
  		position: relative;
  		left:45vw;
  		
  	}
  </style>
</head>
<body>
<form action="profiledb.php" method="post">
	<h3>Personal details</h3>
  <div class="form-row" style="border: 1px solid black; padding: 0 40px;">
	    <div class="form-group col-md-3 col-lg-5 col-sm-6 " >
	      <label for="inputEmail4"><b>First name</b></label>
	      <input type="text" class="form-control" name="fname" placeholder="fname" required>
	    </div>
	    <div class="form-group col-md-3 col-lg-5 col-sm-6">
	      <label for="inputPassword4"><b>Last Name</b></label>
	      <input type="text" class="form-control" name="lname" placeholder="lname" required>
	    </div>
	    <div class="form-group col-md-3 col-lg-2 col-sm-6">
	      <label><b>Sex</b></label><br>
	      <select class="i1 form-control" name="sex">
	      	<option name="sex">male</option>
	      	<option name="sex">female</option>
	      </select>
	    </div>
	    <div class="form-group col-md-6 col-lg-6 col-sm-6">
	      <label for="inputPassword4" ><b>Email</b></label>
	      <input type="email" class="form-control" name="email" placeholder="email" required>
	    </div>
		<div class="form-group col-md-6 col-lg-6 col-sm-6">
		  <label for="inputAddress"><b>Address</b></label>
		  <input type="text" class="form-control" name="address" placeholder="address" required>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-4 col-sm-6">
		  <label for="inputAddress"><b>State</b></label>
		   <select class="form-control" onchange="myfun(this.value)" name="state">
              <option name="state">select any 1</option>

              <?php
                  $q= "select * from degree ";
                  $result = mysqli_query($con,$q);
                  while ($rows=mysqli_fetch_array($result)) {
                    ?>
                    <option name="state" value="<?php
                         echo $rows['mid'];
                         
                      ?>
">
                      <?php
                         echo $rows['degrees'];
                         
                      ?>
                    </option>
                  <?php  
                     }
              ?>
            </select>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-4 col-sm-6">
		  <label for="inputAddress"><b>City</b></label>
		  <select class="form-control" id="dataget" name="city">
                    <option name="city">choose any 1</option>
          </select>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-4 col-sm-6">
		  <label for="inputAddress"><b>DOB</b></label>
		  <input type="date" class="form-control" name="dob" required>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-3 col-sm-6">
		  <label for="inputAddress"><b>Religion</b></label><br>
		  <select class="i1 form-control" name="religion">
		  	<option name="religion">Hindu</option>
		  	<option name="religion">Muslim</option>
		  	<option name="religion">Catholic</option>
		  	<option name="religion">Jain</option>
		  	<option name="religion">Budha</option>
		  </select>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-3 col-sm-6">
		  <label for="inputAddress" style="color: rgb(0,0,0)"><b>Age</b></label>
		  <input type="number" class="form-control" name="age" required>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-3 col-sm-6">
		  <label for="inputAddress"><b>Marital</b></label><br>
		  <select class="i1 form-control" name="marital" >
		  	<option name="marital">Single</option>
		  	<option name="marital">Married</option>
		  	<option name="marital">Divorced</option>
		  	<option name="marital">Widowed</option>
		  </select>
	  
	  	</div>
	  	<div class="form-group col-md-6 col-lg-3 col-sm-6">
		  <label for="inputAddress"><b>Height</b></label>
		  <input type="number" class="form-control" name="height" placeholder="height in inch" required>
	  
	  	</div>
	  	


  </div>
  		<h3>Educational Details</h3>
  		<div class="form-row" style="border: 1px solid black; padding: 0 30px;">
  			<div class="form-group col-md-6 col-lg-6 col-sm-6">
		  		<label for="inputAddress"><b>DEGREE</b></label>
		  		<input type="text" class="form-control" name="education" placeholder="degree" required>
	  
	  		</div>
	  		<div class="form-group col-md-6 col-lg-6 col-sm-6">
		  		<label for="inputAddress"><b>Institution</b></label>
		  		<input type="text" class="form-control" name="institution" placeholder="Institution" required>
	  
	  		</div>
  		</div>
  		<h3>Service Details</h3>
  		<div class="form-row" style="border: 1px solid black; padding: 0 30px;">
  			<div class="form-group col-md-6 col-lg-6 col-sm-6">
		  		<label for="inputAddress"><b>Occupation</b></label>
		  		<input type="text" class="form-control" name="occupation" placeholder="occupation" required>
	  
	  		</div>
	  		<div class="form-group col-md-6 col-lg-6 col-sm-6">
		  		<label for="inputAddress"><b>Annual income</b></label>
		  		<input type="number" class="form-control" name="income" placeholder="annual income" required>
	  
	  		</div>

  		</div>	
  		<h3>Family details</h3>
  		<div class="form-row" style="border: 1px solid black; padding: 0 30px;">
  			<div class="form-group col-md-3 col-lg-3 col-sm-6">
		  		<label for="inputAddress">Fathers occupation</label>
		  		<input type="text" class="form-control" name="foccupation" placeholder="father occupation" required>
	  
	  		</div>
	  		<div class="form-group col-md-3 col-lg-3 col-sm-6">
		  		<label for="inputAddress">Mother occupation</label>
		  		<input type="text" class="form-control" name="moccupation" placeholder="mother occupation" required>
	  
	  		</div>
	  		<div class="form-group col-md-3 col-lg-3 col-sm-6">
		  		<label for="inputAddress">No of Brothers</label>
		  		<input type="number" class="form-control" name="brother" placeholder="no of brothers" required>
	  
	  		</div>
	  		<div class="form-group col-md-3 col-lg-3 col-sm-6">
		  		<label for="inputAddress">No Of Sisters</label>
		  		<input type="number" class="form-control" name="sister" placeholder="no of sisters" required>
	  
	  		</div>

  		</div>-->
  		<button>submit</button>
</form>

  <script type="text/javascript">
      function myfun(datavalue){
        $.ajax({
          url: "statecity.php",
          type: "POST",
          data:{ datapost:datavalue},
          success: function(result){
            $('#dataget').html(result);
          }
          });



      }
    </script>
  
				
</body>
</html>