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

            <!-- header start like menu -->
            <header>
                
                    <div class="head-nav">
                        <div class="container">
                            <div class="">
                                <nav class="menu">
                                    <ul class="justify-content-between">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="#">About Us</a>
                                            <ul class="cr-dropdown-menu">
                                                <li><a href="about.html">Who are We</a></li>
                                                <li><a href="consultantlist.html">Our Consultants</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="#">Education</a>
                                            <ul class="cr-dropdown-menu">
                                                <li><a href="blogs.html">Blogs</a></li>
                                                <li><a href="videogallery.html">Awereness Videos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gallery</a>
                                            <ul class="cr-dropdown-menu">
                                                <li><a href="news&events.html">News & Events</a></li>
                                                <li><a href="gallery.html">Photo Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="volunteer.html">Volunteer</a></li>
                                    </ul>

                                </nav><!-- //Main naviagtion -->

                                <!-- Mobile Menu -->
                                <div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sm mean-container"></div><!-- //Mobile Menu -->
                            </div>
                        </div>
                    </div>
                

            </header>
            <!-- header end -->
            <!-- main-body -->

            <div class="bio pt-5">
                <div class="container">
                    <div class="headings">
                        <h1>Hi! To All Our Employ's profile</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 details">
                           

                            <?php
                            $sql = "select * from `details`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // $id = $row['id'];
                                    // $employname = $row['employname'];
                                    // $designation = $row['designation'];
                                   
                                
                            ?>


                            <h3>Let me introduce the backbone power of the company Mr<?php echo $row['employname']; ?> and his respective designation <?php echo $row['designation']; ?></h3>
                            <?php

                                }
                            }
                            
                            
                            ?>
                        </div>
                        <!-- <div class="col-6 profile-pic">
                            <br>
                            <br>
                            <br>

                            <input type="file" name="profile-pic" id="" accept="img/jpg, img/png, img/jpeg">


                        </div> -->

                    </div>
                </div>
                <button class="btn btn-primary"><a href="index.php" class="text-light"> Back-End</a></button>
            </div>

            <!-- end of main body -->

        </div>

    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-addons.js"></script>
	<script src="js/script.js"></script>

</body>

</html>