<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link href="images/saveicon.png" rel="shortcut icon" type="image/png">
	<meta name="description" content="Mahakaruna Medical & Research foundation founded in the year 2021 as a non-profit organization with a vision of getting the care what every human deserves. For More Details: EmailUs: mmrfindia@gmail.com, CallUs: +91 7305460779, Location: No 26, Pammal Main Road, Muthamizh Nagar, Pammal, Chennai 600075 " />
	<meta name="keywords" content="Palliative care, Hospice Care, Continuous Care, In Patient Care, Respite Care, Diet & amp; Nuteition counselling, Psychological counselling, Physiotherapy, Spiritual Care, Intellectual Care" />
	<title>profilepage</title>
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/addons.css" rel="stylesheet"> -->
    <link href="css/meanmenu.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
	
</head>





<body>
    <!-- wrapper start -->
    <div class="wrapper">

        <!-- page body wrapper -->
        <div class="container-fluid page-body-wrapper">

          
            <!-- main-body -->

            <div class="bio pt-5">
                <div class="container">
                    <div class="headings">
                        <h1>Hi! Your profile</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 details">
                            <button class="btn btn-primary"><a href="insert.php" class="text-light"> ADD USER</a></button>
                            <button class="btn btn-primary"><a href="display.php" class="text-light"> FRONT</a></button>

                            <?php
                            $sql = "select * from `details`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // $id = $row['id'];
                                    // $employname = $row['employname'];
                                    // $designation = $row['designation'];
                                    echo
                                    '<button  class="btn btn-primary"><a href="update.php?updateid=' . $row['id']. '" class="text-light">Update</a></button>';
                                
                            ?>


                            <h3>Employ Name: <?php echo $row['employname']; ?></h3>
                            <br>
                            <h3>Designation: <?php echo $row['designation']; ?></h3>
                            <?php

                                }
                            }
                            
                            
                            ?>
                        </div>
                        <div class="col-6 profile-pic">
                            <br>
                            <br>
                            <br>

                            <input type="file" name="profile-pic" id="" accept="img/jpg, img/png, img/jpeg">


                        </div>
                    </div>
                </div>
            </div>

            <!-- end of main body -->

        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-addons.js"></script>
	<script src="js/script.js"></script>

</body>

</html>