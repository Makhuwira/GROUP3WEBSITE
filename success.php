<?php
require_once("db_connection.php");


$select_from_db = 'SELECT ID, Asset_Name, Date_Acquired, Price FROM assets';
   //mysql_select_db('group_3_assets');
  // $retval = mysql_query( $sql, $conn );
   $retval = mysqli_query($conn, $post_to_assets_table);
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "ASSET NUMBER :{$row['ID']}  <br> ".
         "ASSET NAME : {$row['Asset_Name']} <br> ".
         "DATE ACQUIRED : {$row['Date_Acquired']} <br> ".
         "PRICE : {$row['Price']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
   ?>