<?php 

	require "config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Student List </title>
	<!-- <link rel="stylesheet" href=""> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
<div class="container">
	<table class="table">
	    <thead>
	      <tr>
	        <th>Name</th>
	        <th>Div</th>
	        <th>DOB</th>
	        <th>Subjects</th>
	        <th>Photo</th>
	        <th>Date</th>
	        <th>EDIT</th>
	        <th>DELETE</th>
	      </tr>
	    </thead>
	<?php

		$query = "SELECT * FROM register";
		$res = mysqli_query($con, $query);
		while ($rest=mysqli_fetch_object($res)) {
			// echo "<pre>"; print_r($rest);
			$subject = explode(',' ,$rest->std_subjects);
			// echo "<pre>"; print_r($subject); die();

	?>
	    <tbody>
	      <tr>
	        <td><?php echo $rest->std_name; ?></td>
	        <td><?php echo $rest->std_div; ?></td>
	        <td><?php echo $rest->std_dob; ?></td>
		        <td>
	        <?php for ($i=0; $i <= $subject; $i++) { 
	        	 // echo $subject[$i];
	        	echo $i; die;
	         } ?>
	        </td>
	        <td> <img src="<?php echo $rest->std_photo; ?>" height="50" width="50" alt=""> </td>
	        <td><?php echo $rest->create_on; ?></td>
	        <td><button class="btn btn-warning btn-xs" type="">Edit</button></td>
	        <td><button class="btn btn-danger btn-xs" type="">Delete</button></td>
	      </tr>
	    </tbody>

	<?php } ?>

	</table>
</div>
	<!-- <img src="" alt=""> -->

</body>
</html>