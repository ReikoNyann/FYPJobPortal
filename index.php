
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
    <header>
        <title>Welcome to Mu2WIL</title>
    </header>
    </head>
<body>
    <main>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#"><img src="img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a></li>
                </ul>
            </nav>
        </div>
        <div class="chooselogin">
            <h2>MU2WIL PORTAL</h2>
            <h3>Please select your user type</h3>
            <ul>
                <li><a href="student/login.php">Current Murdoch Student</a></li>
                <li><a href="employer/login.php">Employers</a></li>
                <li><a href="admin/login.php">Administrators</a></li>
            </ul>
        </div>
    </main>
        <footer>
            <p>Copyright 2022, Team Yuen Yuen</p>
            <a href="#">Contact Us</a>
        </footer>
    </body>
</html>
=======
<?php
session_start();
include('config.php');
error_reporting(0);

if ($_SESSION['usertype']==1) {
  header("Location: admin/dashboard.php");
        }
    else if ($_SESSION['usertype']==2) {
      header("Location: admin/dashboard_portal.php");
        }    
        else if ($_SESSION['usertype']==3) {
          header("Location: employer/dashboard.php");
            }
            else if ($_SESSION['usertype']==4) {
              header("Location: student/studentdash.php");
                }  ?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">
    <title>Welcome to MU2WIL</title>

    <!--HEADER CSS-->

    <link href="css/header.css" rel="stylesheet" type="text/css">

    <!--CUSTOM CSS-->

    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!--BOOTSTRAP CSS-->

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!--COLOR CSS-->

    <link href="css/color.css" rel="stylesheet" type="text/css">

    <!--RESPONSIVE CSS-->

    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!--OWL CAROUSEL CSS-->

    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

    <!--FONTAWESOME CSS-->

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--SCROLL FOR SIDEBAR NAVIGATION-->

    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">





    <!--GOOGLE FONTS-->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet'
        type='text/css'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--HEADER START-->
<?php include_once('includes/header.php');?>
<!--HEADER END-->

<!--MAIN START-->



<div class="loginform">
    <h1>HOME PAGE</h1>

    <h2>Project purpose</h2>
    The aim of this project is to provide a web portal for employers from government agencies and businesses to offer
    their various WIL opportunities for Murdoch’s university students. Students that are interested in the WIL
    opportunities can use this portal to look for one and also sign up for a mailing list to gather information about
    new job offers. This platform also serves as a one stop point of contact for employers and current students which
    will be directed to the WIL managers that are in-charge of the program.
    <h2>Background of the client’s business/organisation</h2>
    Peter Cole who is the Discipline of Information Technology as well as a senior lecturer in the School of Information
    Technology in Murdoch University is our client. As the client, he will be our main source in collecting the
    requirements that need to be met for this project. There will be at least two meetings to ensure understanding and
    approval before the development phase.


</div>

</main>

<!--MAIN END-->
<!--FOOTER START-->
<?php include_once('includes/footer.php');            ?>

