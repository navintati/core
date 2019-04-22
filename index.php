<?php

// include "config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Student Form </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<form action="details_sub.php" method="POST" enctype="multipart/form-data" >
				<fieldset>

				<!-- Form Name -->
				<legend>Student Form</legend>
				<hr />
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput"> Name: </label>  
					<input name="name" class="form-control" id="" type="text" placeholder="Name">
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput"> Div: </label>  
					<input name="div" class="form-control" id="" type="text" placeholder="DIV">
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="textinput"> DOB: </label>  
					<input name="dob" class="form-control" id="" type="date" placeholder="DOB">
				</div>

				<div class="form-group row2">
					<label class="col-md-4 control-label" for="textinput"> Subject: </label>  <br />
					<input type="text" name="subject[0]" id="subject_0" placeholder="Subject"> 
					<input type="button" id="btnmore" value="Add">
				</div>				

				<!-- File Button --> 
				<div class="form-group">
					<label class="col-md-4 control-label" for="filebutton">Image Upload</label>
					<input name="file" class="input-file" id="file" type="file">
				</div>

				<!-- <div class="form-group row2">
					<label class="col-md-4 control-label" for="textinput"> Subject: </label>  
					<input type="text" name="subject[0]" id="subject_0" placeholder="Subject">
					<input type="button" id="btnmore" value="Add">
				</div> -->


				</fieldset>

				<!-- Button -->
				<div class="form-group">
					<!-- <label class="col-md-4 control-label" for="singlebutton">Submit</label> -->
					<!-- <button name="Submit" class="btn btn-primary" id="singlebutton">Submit</button> -->
					<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
				</div>

			</form>

		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){
	var count = 1;
	$('#btnmore').click(function(){
		$('.row2').append('<div class="form-group" id="subject_rem_'+count+'"><label></label><input type="text" name="subject['+count+']" id="subject_'+count+'" value="" placeholder="Subject "/><input type="button" onclick="removeField('+count+');" id="removefield_'+count+'" value="Remove"></div>');
		count++;
	});
	/*$('#removefield').click(function(){
		alert('dasd');
	});*/
});
function removeField(id) {
	$('#subject_rem_'+id).remove();
}
</script>

</body>
</html>
