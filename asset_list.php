<?php
include_once 'db_connection.php';
$result = mysqli_query($conn,"SELECT ID, Asset_Name, Date_Acquired, Price FROM assets");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Data retrieved</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<h1> Data retrieved from database</h1>
  <table border="1px">
  
  <tr>
    <td>Asset Number</td>
    <td>Asset Name</td>
    <td>Date Acquired</td>
    <td>Price</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["Asset_Name"]; ?></td>
    <td><?php echo $row["Date_Acquired"]; ?></td>
    <td><?php echo $row["Price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>