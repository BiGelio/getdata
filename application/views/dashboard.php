<!DOCTYPE html>
<html lang="en">
<head>
  <title>save data using Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
<body>
<div class="container">
<h1 align="center">Adding new user</h1>
 	<div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
	<div class="form-group">
      <label for="email">phone:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter phone" name="course">
    </div>
    <div class="form-group">
      <label for="email">password:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter password" name="course">
    </div>
    <div class="form-group">
      <label for="email">Re-type password:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter password" name="course">
    </div>
    <div class="form-group">
      <label for="email"> position:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter position" name="course">
    </div>
    <input type="button" class="btn btn-primary" value="add user" id="butsave">
</div>

<script type="text/javascript">

// Ajax post
$(document).ready(function() 
{
$("#butsave").click(function() 
{
var name = $('#name').val();
var email = $('#email').val();
var course = $('#course').val();

	if(name!="" && email!="" && course!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php/AjaxController/savedata'); ?>",
		dataType: 'html',
		data: {name: name, email: email,course:course},
		success: function(res) 
		{
			if(res==1)
			{
			alert('Data saved successfully');	
			}
			else
			{
			alert('Data not saved');	
			}
			
		},
		error:function()
		{
		alert('data not saved');	
		}
		});
	}
	else
	{
	alert("pls fill all fields first");
	}

});
});
</script>
</body>
</html>