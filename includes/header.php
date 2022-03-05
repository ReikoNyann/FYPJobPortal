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

      <?php if (strlen($_SESSION['userid']==0)) {?>
        <div>
        <ul class="nav2 navbar-nav2" id="nav2">

<li>
            <a href="login.php">Log In</a> </li>


</ul>
            </div><?php } ?>
            
    </nav>

</div>
  <!--NAVIGATION END--> 

  </div>

<!--USER OPTION COLUMN START-->

<?php /* 
User Signed in top right drop down menu unable to implement yet. 
Please fix if possible. 
Function example @ https://bpsim.synology.me/jobportal/
(Boon)


<div class="user-option-col">

  <div class="thumb">

    <div class="dropdown">
<?php if ($_SESSION['userstatus']==1) {?>

<?php
     $userid= $_SESSION['userid'];
     $usertype= $_SESSION['usertype'];
     $userstatus= $_SESSION['userstatus'];

     $sql = "SELECT * FROM WILUSER WHERE UserID ='$userid'";
     $result = mysqli_query($conn, $sql);
     if($result-> num_rows > 0){
         $row = mysqli_fetch_assoc($result);
       ?>
           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="<?php echo $row->UserPhoto;?>" width="40" height="40" ></button>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
     <?php if ($_SESSION['usertype']==1)
     {  ?>    
<li><a href="admin/adduser.php">Add New Account</a></li>
<li><a href="admin/enquiries.php">New Enquiries</a></li>
<li><a href="admin/batchupdate.php">Batch Create</a></li> <?php } ?>
<?php else if ($_SESSION['usertype']==2)
     {  ?>    
<li><a href="admin/approvallist.php">List of Approvals</a></li>
<li><a href="admin/enquiries.php">View Enquiries</a></li><?php } ?>
<?php else if ($_SESSION['usertype']==3)
     {   ?>  
<li><a href="employer/editprofile.php">Edit Profile</a></li>
<li><a href="employer/addjob.php">Add Job Offer</a></li><?php } ?>
<?php else if ($_SESSION['usertype']==4)
     {  ?>    
<li><a href="student/editprofile.php">Edit Profile</a></li>
<li><a href="student/application.php">Job Application</a></li><?php } ?>






        <li><a href="reset.php">Change Password</a></li>


        <li><a href="logout.php">Log off</a></li>

      </ul>
<?php } ?>
    </div>

  </div>

 

</div>




*/?>

<!--USER OPTION COLUMN END--> 
</header>

