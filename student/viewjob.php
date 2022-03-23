<?php
    include '../config.php';
    session_start();
    if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //declare login userID
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM student WHERE StudentID = $uid";
        //connect DB and sql query
        $result = mysqli_query($conn, $sql);
        //fetch results
        $row = mysqli_fetch_assoc($result);
    } else {
        echo 'Failed connecting to database';
    }

     

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main/navbar.css">
    <link rel="stylesheet" href="/css/student/studentprofile.css">
    <header>
        <title>Job Opportunities</title>
    </header>
</head>

<body>
    <div class="logo">
  
    <a href="/student/studentdash.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
    </div>
    <div class="navbar">
        <a href="job.php">Job Opportunities</a>
        <a href="contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist"><?php echo '<span style="font-size:15px; font-family:Segoe UI; font-weight:bold;">' . $row['StudentName'] . '</span>'; ?>
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="viewapplication.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="jobdetails">
        <?php 
            $jid = $_GET['view'];   
            $view = "SELECT job.*, company.*, industry.IndustryName FROM ((job INNER JOIN company on job.CompanyID = company.CompanyID) INNER JOIN industry ON job.IndustryID = industry.IndustryID) WHERE JobID = $jid";
            $viewjob = mysqli_query($conn, $view);
            $row = mysqli_fetch_assoc($viewjob);
        ?>
        <div class="topleft">
            <h2><?php echo $row['JobTitle']; ?></h2>
            <h3 id="cname"><?php echo $row['CompanyName']; ?></h3>
            <h3 id="location"><?php echo $row['JobLocation']; ?></h3>
            <p>Job Type: <?php echo $row['JobType']; ?></p>
            <?php 
                $count = "SELECT COUNT(*) as application FROM application WHERE JobID = $jid";
                $getcount = mysqli_query($conn,$count);
                $number = mysqli_fetch_assoc($getcount);
                echo $number['application'].' applications';
            ?>
        </div>
        <div class="topright">
            <div class="applybtn">
            <?php 
                echo '<form action="application.php?id=">';
                echo '<input type="hidden" name="apply" value="'.$jid.'">';
                echo '<input type="submit" value="Apply Now">';
                echo '</form>';
            ?>
            </div>
            <div class="dates">
                <p>Posted On: <?php echo $row['JobPostDate']; ?></p>
                <p>Close On: <?php echo $row['JobCloseDate']; ?></p>
                <p id="salary">$<?php echo $row['JobSalary']; ?></p>
            </div>
        </div>
        <div class="roles">
            <h4>Roles & Responsibilites</h4>
            <?php echo $row['RoleResponsibility']; ?>
            <h4>Job Criteria</h4>
            <?php echo $row['JobCriteria']; ?>
        </div>
        <div class="companydetails">
            <?php 
            if ($row['CompanyLogo'] == NULL){
                //if no student photo display
                   echo '<img width = "200px" height="auto" src="../img/personplaceholder.png" placeholder="No Company Photo">';
            } else {
                    echo '<img width = "250px" height="250px" src="../uploads/employer/dp/'.$row['CompanyLogo'].'">';
            } ?>
            <h3><?php echo $row['CompanyName']; ?></h3>
            <?php echo $row['CompanyProfile']; ?>
            <div class="testimonial">
            <?php 
                echo '<form action="testimonial.php?id=">';
                echo '<input type="hidden" name="testimonial" value="'.$row['CompanyID'].'">';
                echo '<input type="submit" value="Click here for Testimonial">';
                echo '</form>';
            ?>
            </div>
        </div>
    </div>
    

    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>
</body>
</html>