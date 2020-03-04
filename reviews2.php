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
  <td>PACKAGE_NAME</td>
  <td>BASE_PRICE</td>
  <td>CORPORATE_PRICE</td>
  <td>STATUS</td>
  <td>DOCUMENT</td>
  <td>UPDATED_TIME</td>
  <td>PACKAGE_TYPE_ID</td>
  <td>KMS_PACKAGE_ID</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM product_package_package")
or die(mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
 echo
 "<tr>
  <td>{$row['id']}</td>
  <td>{$row['package_name']}</td>
  <td>{$row['base_price']}</td>
  <td>{$row['corporate_price']}</td>
  <td>{$row['status']}</td>
  <td>{$row['document']}</td>
  <td>{$row['update_time']}</td>
  <td>{$row['package_type_id']}</td>
  <td>{$row['kms_package_id']}</td>
  </tr>\n";

}

?>

</table>
</body>
</html>
