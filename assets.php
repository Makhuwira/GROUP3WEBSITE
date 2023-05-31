<html>
   
   <head>
      <title>Asset Register</title>
   </head>
   
   <body>
      <?php
         
require_once("db_connection.php");

/*if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}*/
//asset details
//$number = $name = $date = $price = "";


	//This page should not be accessed directly. Need to submit the form.
$number = ($_POST['asset_number']);
$name = ($_POST['asset_name']);
$date = ($_POST['date']);
$price = ($_POST['price']);


         // define variables and set to empty values
        // $number = $name = $date = $price = "";
         
         
      ?>
   
      <h2>Asset Registration</h2>
      
      <form method = "post" action = "post.php">
         <table>
            <tr>
               <td>Asset No:</td> 
               <td><input type = "text" name = "asset_number"></td>
            </tr>
            
            <tr>
               <td>Asset Name:</td>
               <td><input type = "text" name = "asset_name"></td>
            </tr>
            
            <tr>
               <td>Date Acquired:</td>
               <td><input type = "date" name = "date"></td>
            </tr>
            
            <tr>
               <td>Price:</td>
               <td><input type = "text" name = "price"></td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Save"> 
               </td>
            </tr>
         </table>
      </form>
      
    
      
   </body>
</html>