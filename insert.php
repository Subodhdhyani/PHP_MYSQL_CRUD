<?php
include "connection.php";

$a1 = $_REQUEST['id'];
$b1 = $_REQUEST['name'];
$c1 = $_REQUEST['email'];
$d1 = $_REQUEST['mobile'];
$e1 = $_REQUEST['age'];
$f1 = $_REQUEST['address'];

$sql="Insert into student(id,name,email,mobile,age,address) values ('$a1','$b1','$c1','$d1','$e1','$f1');";
$result =mysqli_query($conn,$sql);
if(!$result)
{ 
    echo "Not Inserted".mysqli_error($conn);
  
}/*
else
{
    echo "Inserted successfully";
}*/

mysqli_close($conn);
?>