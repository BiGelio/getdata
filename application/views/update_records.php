

<!DOCTYPE html>
<html>
<head>
<title>Members registration form</title>
</head>

<body>
  <?php
  $i=1;
  foreach($data as $row)
  {
 } ?>
  <form method="post">
    <table width="100%" border="1" cellspacing="0" cellpadding="2">
  <tr>
    <td width="230">full name </td>
    <td ><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
  </tr>
  <tr>
    <td>ID </td>
    <td><input type="text" name="id" value="<?php echo $row->id; ?>"/></td>
  </tr>
  <tr>
    <td>Phone </td>
    <td><input type="text" name="phone" value="<?php echo $row->phone; ?>"/></td>
  </tr>
  <tr>
    <td>Sex </td>
    <td><input type="text" name="sex" value="<?php echo $row->sex; ?>"/></td>
  </tr>
  <tr>
    <td>Date of birth </td>
    <td><input type="text" name="date_of_birth" value="<?php echo $row->date_of_birth; ?>"/></td>
  </tr>
  <tr>
    <td>Job </td>
    <td><input type="text" name="job" value="<?php echo $row->job; ?>"/></td>
  </tr>
  <tr>
    <td>Address </td>
    <td><input type="text" name="address" value="<?php echo $row->address; ?>"/></td>
  </tr>
  <tr>
    <td>Upload photo </td>
    <td><input type="file" name="file"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="update record"/></td>
  </tr>
</table>

  </form>
  
</body>
</html>