<?php
 session_start();
//Database Configuration File
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
 

      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $sql = "SELECT * FROM WILUSER WHERE UserEmail ='$email' AND UserPassword = '$password'";
      $result = mysqli_query($conn, $sql);
      if($result-> num_rows > 0){
          $row = mysqli_fetch_assoc($result);
        

$_SESSION['userstatus']=$row->UserStatus;
$usertype=$row->UserType;
?>
<?php /* CHecking User Status to prevent checkin.

if($_SESSION['userstatus']==1){
  if($_SESSION['userstatus']==0){
     echo "<script>alert('Sorry, your account is inactive. If you are newly register user, please wait for our administrator review.')</script>";
 } 
 else if ($_SESSION['userstatus']==2){
     echo "<script>alert('Congratulation! Your account have been approved! We will activate your account soon.')</script>";
 } 
 else if ($_SESSION['userstatus']==3){
     echo "<script>alert('Your account have been banned or deleted. Please contact us if you believe it is a mistake.')</script>";
 }}
 else */ ?><?php

$_SESSION['userid']=$row->UserID;
$_SESSION['username']=$row->UserName;
$_SESSION['usertype']=$row->UserType;


 if ($usertype==1) {
   header("Location: admin/dashboard.php");
      }
  else if ($usertype==2) {
    header("Location: admin/dashboard.php");
      }    
      else if ($usertype==3) {
        header("Location: employer/dashboard.php");
          }
          else if ($usertype==4) {
            header("Location: student/studentdash.php");
              }
  } else {
echo "<script>alert('Email or Password is wrong!');</script>";
 
  }
}

 

?>

<!doctype html>

<html>

<head>

<title>User LogIn | mu2Wil Portal</title>

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

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>



<body>
    <main>
<!--HEADER START-->


<!--BURGER NAVIGATION SECTION START-->

<!--BURGER NAVIGATION SECTION END-->

<div  class="navbar"> 

  <!--NAVIGATION START-->

  <div class="navigation-col">

    <nav class="navbar navbar-inverse">



      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav" id="nav">

          <li><a href="index.php"><img src="img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
          </li>
          <li><a href="jobopportunities.php">Job Opportunities</a>
          </li>
          <li><a href="contact.php">Contact Us</a>



          </li>


        </ul>

      </div>

    </nav>

  </div>

  <!--NAVIGATION END--> 

</div>
  <!--HEADER END--> 

 



  

  <!--MAIN START-->

  <div class="loginform">
            <h2>mu2Wil LOGIN </h2>
            <form action="" method="post">
            <label>Email: <input type="email" name="email"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember-me">Keep me signed in</label>
            <button name="submit" class="btn">Login</button>
        </form> 
        </div>

  <!--MAIN END--> 

  

  <!--FOOTER START-->
  <?php include('includes/footer.php');?>
  <!--FOOTER END--> 

</div>


</body>

</html>

