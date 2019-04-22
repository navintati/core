<?php

// include "config.php";

require "config.php";

// echo "<pre>"; print_r($_POST); echo "</pre>"; die();

$name = $_POST['name'];
$div = $_POST['div'];
$dob = $_POST['dob'];
$sub = implode(',', $_POST['subject']);
$photo = $_FILES['file'];

$filename = $photo['name'];
$fileerror = $photo['error'];
$filetmp = $photo['tmp_name'];

$fileext = explode('.', $filename);

$filecheck = strtolower(end($fileext));

$filetype = array('jpg','jpeg','png');

if (in_array($filecheck, $filetype)) {
	
	$destinate = 'uploads/'.rand().$filename;
	move_uploaded_file($filetmp, $destinate);

	$query = "INSERT INTO register (std_name,std_div,std_dob,std_subjects,std_photo) VALUES ('$name','$div','$dob','$sub','$destinate')";

	$res = mysqli_query($con, $query);

}

header('Location: index.php');

?>