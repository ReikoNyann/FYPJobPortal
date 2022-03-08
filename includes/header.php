<!--BURGER NAVIGATION SECTION START-->

<!--BURGER NAVIGATION SECTION END-->

<div class="menu">

    <!--NAVIGATION START-->

    <div class="navigation-col">

        <nav class="navbar navbar-inverse">



            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav" id="nav">

                    <li><a href="index.php"><img src="img/Murdoch_University_extended_logo.png" alt="logo" height="60"
                                class="logo"></a>
                    </li>
                    <li><a href="jobopportunities.php">Job Opportunities</a>
                    </li>
                    <li><a href="contact.php">Contact Us</a>
                </ul>

            </div>
            <!--NAVIGATION END-->
            <!--USER OPTION COLUMN START-->

            <div>
                <ul class="nav navbar-nav" id="nav2">
                    <?php 
            $usertype = $_SESSION['usertype'];
            if (!(($usertype==1)OR($usertype==2)OR($usertype==3)OR($usertype==4))) {?>
                    <li>
                        <a href="login.php" >Log In</a>
                    </li> <?php 
            }{?><?php 
            if ($usertype==1)  {?>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true"> <img
                                    src="<?php echo $_SESSION['userphoto'];?>" height="60"></button>
                            <div class="dropdown-content">

                                <a href="admin/adduser.php">Add New Account</a>
                                <a href="admin/enquiries.php">New Enquiries</a>
                                <a href="admin/batchupdate.php">Batch Create</a>

                                <a href="reset.php">Change Password</a>


                                <a href="logout.php">Log off</a>


                            </div>
                    </li><?php } ?><?php 
            if ($usertype==2)  {?>
                    <li>
                        <div class="dropdown">


                            <button class="dropbtn" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true"> <img
                                    src="<?php echo $_SESSION['userphoto'];?>" height="60"></button>
                            <div class="dropdown-content">

                                <a href="admin/approvallist.php">List of Approvals</a>
                                <a href="admin/enquiries.php">View Enquiries</a>

                                <a href="reset.php">Change Password</a>


                                <a href="logout.php">Log off</a>


                            </div>
                    </li><?php } ?><?php 
            if ($usertype==3)  {?>
                    <li>
                        <div class="dropdown">


                            <button class="dropbtn" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true"> <img
                                    src="<?php echo $_SESSION['userphoto'];?>" height="60"></button>
                            <div class="dropdown-content">
                                <a href="employer/editprofile.php">Edit Profile</a>
                                <a href="employer/addjob.php">Add Job Offer</a><a href="reset.php">Change
                                    Password</a>


                                <a href="logout.php">Log off</a>


                            </div>
                    </li><?php } ?><?php 
            if ($usertype==4)  {?>
                    <li>
                        <div class="dropdown">


                            <button class="dropbtn" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true"> <img
                                    src="<?php echo $_SESSION['userphoto'];?>" height="60"></button>
                            <div class="dropdown-content">


                                <a href="student/editprofile.php">Edit Profile</a>
                                <a href="student/application.php">Job Application</a>
                                <a href="reset.php">Change Password</a>


                                <a href="logout.php">Log off</a>


                            </div>
                    </li>
                    <?php } ?>
                </ul>
            </div><?php } ?>
        </nav>

    </div>

</div>

</div>

<!--USER OPTION COLUMN END-->
</header>