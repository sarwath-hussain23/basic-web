<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $employname=$_POST['employname'];
    $designation=$_POST['designation'];

    $sql = "insert into `details`(employname,designation) 
    values('$employname','$designation')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted succesfull";
        // header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>add users
        
    </title>
</head>

<body>
    <div class="container my-5">
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" name="employname" id="name" class="form-control" >

            <label for="role">Desigmation:</label>
            <input type="text" name="designation" id="role" class="form-control" >
            <button type="submit" name="submit" class="btn btn-primary" class="text light">Submit</button>

        </form>
    </div>

   




</body>










</html>