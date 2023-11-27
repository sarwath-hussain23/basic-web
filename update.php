<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `details` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$employname=$row['employname'];
$designation=$row['designation'];




if (isset($_POST['submit'])) {
    $employname=$_POST['employname'];
    $designation=$_POST['designation'];
    
    
    $sql = "update `details` set employname='$employname',designation='$designation'
    where id=$id";


    
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Updated succesfull";
        header('location:index.php');

    } else {
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <title>update</title>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid page-body-wrapper">
            <!-- the Editing contant -->
            <div class="update-list">
            <div class="container">
                    <div class="headings">
                        <h1>Hi! Your Happy Update to Ur profile</h1>
                    </div>
                    <div class="row">
                        <div class="col-6 details">
                                <form action=""  method="post" enctype="multipart/form-data">
                                    <div class=".col-12 form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" name="employname" id="name" class="form-control" value=<?php echo $employname?>>

                                        <label for="role">Desigmation:</label>
                                        <input type="text" name="designation" id="role" class="form-control" value=<?php echo $designation?>>

                                        <button type="submit" name="submit" class="btn btn-primary" class="text light">Submit</button>

    
                                    </div>
                                 </form>
                           
                            

                        </div>
                         <div class="col-6 profile-pic">
                            <br>
                            <br>
                            <br>
                        
                            <!-- <input type="file" name="profile-pic" id="" accept="img/jpg, img/png, img/jpeg"> -->


                        </div> 
                    </div>
                </div>
            </div>

            <!-- end of editing content -->

        </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>

