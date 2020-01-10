<?php
include_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<label><strong>upload image</strong></label><br>
		<input type="file" name="image"><br>
		<input type="textarea" name="image_text">
		<button type="submit" name="upload">upload</button>
	</form>
	<?php
	$msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
   

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
	?>
</body>
</html>