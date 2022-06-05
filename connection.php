<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="Crud";

$conn =mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
    echo "Not connected".mysqli_connect_error();
   
    
}
/*
else{
    echo "Connected successfully";
}*/
//mysqli_close($conn);
?>