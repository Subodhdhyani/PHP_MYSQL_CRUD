<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <style>
        table {
            background-color: rgb(155, 222, 232);
        }
    </style>
</head>

<body>
    <table align="center" height="500" width="500">
        <thead>
            <tr>
                <td colspan="2" align="center"><strong>Update Student Registration</strong></td>
            </tr>
        </thead>
       <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
            <tbody>
          <?php
          //select query to fetch
          include "connection.php";
           $a = $_GET['idd'];
           $select = "Select * from student where id = $a";
           $showdata =mysqli_query($conn,$select);
           $arraydata =mysqli_fetch_assoc($showdata);

           //update query
           include "connection.php";
           if(isset($_POST['update'])){
            $acc = $_GET['idd'];//same as select to fetch which id update but name change also check with same name $a
            $b1 = $_REQUEST['name'];
            $c1 = $_REQUEST['email'];
            $d1 = $_REQUEST['mobile'];
            $e1 = $_REQUEST['age'];
            $f1 = $_REQUEST['address'];
            $sql= "Update student set name='$b1', email='$c1', mobile =$d1, age =$e1, address= '$f1' where id =$acc";
            
            $result =mysqli_query($conn,$sql);
           }
          ?>



                <tr>
                    <td><label for="id">Roll No</label></td>
                    <td><input type="number" id="id" name="id" value="<?php echo $arraydata['id'];?>"></td>
                </tr>
                <tr>
                    <td><label for="name">Enter Name</label></td>
                    <td><input type="text" id="name" name="name" value="<?php echo $arraydata['name'];?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email Address</label></td>
                    <td><input type="email" id="email" name="email" value="<?php echo $arraydata['email'];?>"></td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number</label></td>
                    <td><input type="number" id="mobile" name="mobile" value="<?php echo $arraydata['mobile'];?>"></td>
                </tr>
                <tr>
                    <td><label for="age">Age</label></td>
                    <td><input type="number" id="age" name="age" value="<?php echo $arraydata['age'];?>"></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><input type="text" id="address" name="address" value="<?php echo $arraydata['address'];?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
                </tr>
            </tbody>
       </form>
    </table>

</body>

</html>