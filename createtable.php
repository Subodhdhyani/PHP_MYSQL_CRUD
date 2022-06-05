<?php
include "connection.php";

$sql ="Create table student( id int Not Null Primary Key,name varchar(20),
email varchar(20), mobile int , age int, address varchar(20));";
$result =mysqli_query($conn,$sql);
if($result)
{
echo "Table created successfully";
}
else
{
    echo "Table Not Created". mysqli_error();
}
mysqli_close($conn);
?>


