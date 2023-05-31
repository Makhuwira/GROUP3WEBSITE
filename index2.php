<?php
/*comment*/
echo "Hello World";

$firstname = "Elvis";
$lastname = "Seyama";
$age = 18;
$clients = array("Francis","John", "Amos");

echo PHP_EOL.$firstname.PHP_EOL;
echo $lastname;

echo $age;
//print($clients);
//var_dump($clients);

//if

/*if ($age = 17)
{
    echo "register client";
}
else if ($age > 60)
{
    echo "you cannot register";
}
else
{
echo "you are underage";
}*/

foreach($clients as $client)
{
  echo $client."\t";  
}
?>

