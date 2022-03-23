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

    if(isset($_POST['submit'])){
        $type = $_POST['type'];
        $title =  $_POST['title'];
        $pdate = $_POST['postdate'];
        $cdate =  $_POST['closedate'];
        $location = $_POST['location'];
        $salary =  $_POST['salary'];
        $duration =  $_POST['duration'];
        $criteria = $_POST['criteria'];
        $res = $_POST['res'];
        $industry = $_POST['industry'];
        $company = $_POST['company'];

        $sql = "INSERT INTO job (JobType, JobTitle, JobPostDate, JobCloseDate, RoleResponsibility, JobCriteria, JobLocation, JobSalary, JobDuration, IndustryID, CompanyID) VALUES ('$type', '$title', '$pdate', '$cdate', '$res', '$criteria', '$location', '$salary', '$duration', '$industry', '$company')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('You are added job successfully!')</script>";
            header("Location: dashboard.php");
        }else{
            echo "<script>alert('Error 404')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/employer/employerdash.css">
    <!-- <link rel="stylesheet" href="../css/employer/addNewJob.css"> -->
    <header>
        <title>Mu2WIL Add New Job Offer</title>
    </header>

</head>

<body>
    <main>
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

        <div class="signupform">
            <h2>Add New Job Offer</h2>
            <form action="" method="post">
                <label>Job Type<input type="text" name="type"></label><br>
                <label>Job Title<input type="text" name="title"></label><br>
                <label>Job Location<input type="text" name="location"></label><br>
                <label>Job Post Date<input type="text" name="postdate"></label><br>
                <label>Job Close Date<input type="text" name="closedate"></label><br>
                <label>Job Salary<input type="text" name="salary"></label><br>
                <label>Job Duration<input type="text" name="duration"></label><br>
                <label>Job Criteria<input type="text" name="criteria"></label><br>
                <label>Job responsibility<input type="text" name="res"></label><br>
                <label>Industry<input type="text" name="industry"></label><br>
                <label>Company<input type="text" name="company"></label><br><br>
                <button name="submit" class="btn">Add Offer</button>
            </form>
        </div>

    </main>
    <!-- <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contractus.html">Contact Us</a>
    </footer> -->
</body>

</html>