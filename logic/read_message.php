<?php
require('config/config.php');
require('config/database.php');
//session_start();

$query="SELECT * FROM customer_message";

//getresults
$result=mysqli_query($conn, $query);
//Fetch data
$posts=mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);
//free result
mysqli_free_result($result);

mysqli_close($conn);

 ?>
 
 


 