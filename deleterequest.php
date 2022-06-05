<?php
include ("connection.php");

$a = $_GET['idd'];
$sql="Delete from student where id = '$a'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Successfully";
}else{
    echo "Not";
}
mysqli_close($conn);

?>