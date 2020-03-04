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
  <td>ID</td>
  <td>START_TIME</td>
  <td>EXPIRY_TIME</td>
  <td>UPDATED_TIME</td>
  <td>PACKAGE_ID</td>
  <td>PRODUCT_ID</td>
  <td>STB_ID</td>
  <td>SPECIAL_RECHARGE</td>
  <td>IS_SUBSCRIPTION</td>
  <td>TXN_ID</td>
  <td>IS_SUBSCRIBED</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM command_subscriptions")
or die(mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
 echo
 "<tr>
  <td>{$row['id']}</td>
  <td>{$row['start_time']}</td>
  <td>{$row['expiry_time']}</td>
  <td>{$row['updated_time']}</td>
  <td>{$row['package_id_id']}</td>
  <td>{$row['product_id_id']}</td>
  <td>{$row['stb_id_id']}</td>
  <td>{$row['special_recharge']}</td>
  <td>{$row['is_subscription']}</td>
  <td>{$row['txn_id']}</td>
  <td>{$row['is_subscribed']}</td>
  </tr>\n";

}

?>

</table>
</body>
</html>
