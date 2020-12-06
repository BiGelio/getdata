<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr style="background:#CCC">
    <th>No</th>
    <th>Name</th>
    <th>ID</th>
    <th>phone</th>
    <th>Sex</th>
    <th>Date of birth</th>
    <th>Job</th>
    <th>address</th>
    <th>isMember</th>
    <th>paid</th>
    <th>status</th>
    <th colspan="2">Actions</th>

  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->id."</td>";
  echo "<td>".$row->phone."</td>";
   echo "<td>".$row->sex."</td>";
  echo "<td>".$row->date_of_birth."</td>";
  echo "<td>".$row->job."</td>";
   echo "<td>".$row->address."</td>";
  echo "<td>".$row->isMember."</td>";
  echo "<td>".$row->paid."</td>";
  echo "<td>".$row->status."</td>";
  echo "<td ><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "<td ><a href='updatedata?id=".$row->id."'>Edit</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>

</body>
</html>
