<!DOCTYPE html>
<html>
<head>
<title>Login form</title>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/login.css">

<script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/login.js"></script>
</head>

<body>
  <div class="main">
    <form method="post">
    
<div class=""><p><?php echo @$error; ?></p></div>
<div class=""><p>Enter Your Email </p><input type="text" name="email"/></div>
<div class=""><p>Enter Your Password </p><input type="password" name="pass"/></div>
<div class=""><input type="submit" name="login" value="Login"/></div>
</div>

	</form>
</body>
</html>