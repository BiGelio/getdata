<!DOCTYPE html>
<html>
<head>
<title>Student Registration form</title>
</head>

<body>
  <div class="container">
    <form action="register" method="post">
    <div class=""><p><?php echo @$error; ?></p></div>
    <div class=""><p>Full Name</p><input type="text" name="name"/></div>
    <div class=""><p>Email</p><input type="text" name="email"/></div>
    <div class=""><p>Password</p><input type="password" name="pass"/></div>
    <div class=""><p>Password</p><input type="password" name="pass"/></div>
    <div class=""><p>Mobile</p><input type="text" name="mobile"/></div>
    <div class=""><p>Position</p><select name="position">
    <option value="">Select position</option>
    <option>Manager</option>
    <option>Data collector</option>
    <option>IT</option>
  </select></div>
     <div class=""><input type="submit" name="register" value="Register Me"/></div>

    </form>
  </div>
</body>
</html>