<?php
include"connection.php";

$sql ="Select * from student";
$result = mysqli_query($conn,$sql);

//check no of rows in db
$num = mysqli_num_rows($result);

//fetch row if it is greater than 0
if($num>0)
{
    
   while($row = mysqli_fetch_assoc($result)) 
   {
      echo "id is".$row['id']."nameis".$row['name'];//same as all other
      echo "<br>";
   }
  
}




mysqli_close($conn);
?>