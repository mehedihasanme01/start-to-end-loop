<?php
error_reporting(0);
$result = '';

if (isset($_POST['btn'])){
    require_once 'SwitchClass.php';

    $switchclass = new SwitchClass();
    $result = $switchclass->myLogic($_POST);


}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="jumbotron">
    <div class="card mt-auto">
        <div class="card-body m-auto">
            <h2><i>Find odd/even numbers</i></h2>
            <sub><i>from your given starting & ending number!</i></sub>
            <br/>
            <br/>
            <form action="" method="post" class="form-group">
                <table>
                    <tr>
                        <th>Enter First Number &nbsp;&nbsp; </th>
                        <td><input type="number" name="first_number" class="form-control" value="<?php echo $_POST['first_number']; ?>"> </td>
                    </tr>

                    <tr>
                        <th>Enter Sec Number &nbsp;&nbsp; </th>
                        <td><input type="number" name="sec_number" class="form-control" value="<?php echo $_POST['sec_number']; ?>"> </td>

                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="radio" name="radio_btn" value="odd">odd
                            <input type="radio" name="radio_btn" value="even">even
                        </td>
                    </tr>

                    <tr>
                        <th>Expected Result </th>
                        <td><textarea class="form-control"><?php echo $result; ?></textarea></td>


                    <tr>
                        <th></th>
                        <td><input type="submit" name="btn" class="form-control btn btn-success" value="Submit"> </td>

                    </tr>


                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
