<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "password";
$db = "sms_2023";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
 die("Database connection failed: ".$dbconnect->connect->connect_error);
}

?>

<table border="1" allign="center">
<tr>
  <!--<td>ID</td>-->
  <td>PACKAGE NAME</td>
  <td>START TIME</td>
  <td>EXPIRY TIME</td>
  <td>PACKAGE ID</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "select package_name, start_time, expiry_time,package_id_id FROM command_subscriptions,product_package_package WHERE command_subscriptions.package_id_id = product_package_package.kms_package_id ORDER BY package_id_id;")
or die(mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
 echo
 "<tr>
  <td>{$row['package_name']}</td>
  <td>{$row['start_time']}</td>
  <td>{$row['expiry_time']}</td>
  <td>{$row['package_id_id']}</td>
  </tr>\n";

}

?>

</table>
</body>
</html>
