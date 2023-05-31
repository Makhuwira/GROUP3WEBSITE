<?php
//require_once("db_connection.php");
include('assets.php');
$post_to_assets_table = "INSERT INTO assets (ID,Asset_Name,Date_Acquired,Price)
                  VALUES ('$number','$name','$date','$price')"; 

 mysqli_query($conn, $post_to_assets_table);

 /*echo "<h3>The following data has been stored in a database successfully";
 
            echo nl2br("\nAsset Number: $number\n Asset Name: $name\n "
                . "Date Acquired: $date\n Price: $price");*/
        
//mysqli_close($conn);

header('Location: asset_list.php');
?>