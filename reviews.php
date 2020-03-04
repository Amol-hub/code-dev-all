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
  <td>id</td>
  <td>is_product</td>
  <td>start_time</td>
  <td>expiry_time</td>
  <td>updated_time</td>
  <td>package_id_id</td>
  <td>product_id_id</td>
  <td>stb_id_id</td>
  <td>special_recharge</td>
  <td>is_subscription</td>
  <td>txn_id</td>
  <td>is_subscribed</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM command_subscriptions")
or die(mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
 echo
 "<tr>
  <td>{$row['id']}</td>
  <td>{$row['is_product']}</td>
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
