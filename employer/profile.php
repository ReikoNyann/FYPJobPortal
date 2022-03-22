<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM company WHERE CompanyID = $uid";
        //connect DB and sql query
        $result = mysqli_query($conn,$sql);
        //fetch results 
        $row = mysqli_fetch_assoc($result);
        
    } else{
        echo 'Failed connecting to database';
    }

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/employer/employerdash.css">
    <link rel="stylesheet" href="../css/employer/employerprofile.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Employer Profile Page</title>
    </header>
</head>

<body>
    <div class="logo">
            <a href="dashboard.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="../jobopportunities.php">Job Opportunities</a>
            <a href="../contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo $row['PersonInCharge']; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="profile.php">View Profile</a>
                    <a href="addNewJob.php">Add New Job</a>
                    <a href="viewapplicant.php">View Applicants</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="profile">
            <div class="details">
                <h2><?php echo $row['CompanyName'] ?></h2>
                <div class="displaypic">
                    <?php 
                        //check if logo is uploaded into database
                        if ($row['CompanyLogo'] == NULL){
                            //if no logo display
                            echo '<img width ="200px" height="auto" src="../img/imageplaceholder.jpg" placeholder="company logo here">';
                            
                        }else{
                            echo '<img width="250px" height="250px" src="../uploads/employer'.$row['CompanyLogo'].'">';
                        }
                    ?>
                </div>
                
                <h3>Contact Details</h3>
                <p>Email: <?php echo $row['CompanyEmail'] ?></p>
                <p>Contact Number: <?php echo $row['ContactNumber'] ?></p>
                <p>Address: <?php echo $row['CompanyAddress'] ?></p>
            </div>
            <div class ="companyinfo">
                <div class="editbutton">
                <button type="button" class="editbtn"><a href="employeredit.php">Edit Profile</a></button>
                </div>
                <h3>About</h3>
                <p><?php echo $row['CompanyProfile']?></p>
                <h3>Our Goal</h3>
                <p><?php echo $row['Goals']?></p>
                <h3>Our Vision</h3>
                <p><?php echo $row['Vision']?></p>
            </div>
        </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>

</html>