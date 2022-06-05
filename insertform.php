<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>
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
                <td colspan="2" align="center"><strong>Student Registration</strong></td>
            </tr>
        </thead>
        <form method="post" action="insert.php" enctype="multipart/form-data" autocomplete="off">
            <tbody>
                <tr>
                    <td><label for="id">Roll No</label></td>
                    <td><input type="number" id="id" name="id" value=""></td>
                </tr>
                <tr>
                    <td><label for="name">Enter Name</label></td>
                    <td><input type="text" id="name" name="name" value=""></td>
                </tr>
                <tr>
                    <td><label for="email">Email Address</label></td>
                    <td><input type="email" id="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td><label for="mobile">Mobile Number</label></td>
                    <td><input type="number" id="mobile" name="mobile" value=""></td>
                </tr>
                <tr>
                    <td><label for="age">Age</label></td>
                    <td><input type="number" id="age" name="age" value=""></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><input type="text" id="address" name="address" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="submit"></td>
                </tr>
            </tbody>
        </form>
    </table>

</body>

</html>