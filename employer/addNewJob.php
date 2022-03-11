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
    <link rel="stylesheet" href="/css/employerdash.css">
    <link rel="stylesheet" href="css/addNewJob.css">
    <header>
        <title>Mu2WIL Add New Job Offer</title>
    </header>

</head>

<body>
    <main>
    <div class="logo">
            <a href="/employer/dashboard.php"><img width="250px" src="/img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="/jobopportunities.php">Job Opportunities</a>
            <a href="/contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist"><?php echo $row['PersonInCharge']; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="/employer/profile.php">View Profile</a>
                    <a href="/employer/viewapplicant.php">View Applicants</a>
                    <a href="/logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="signupform">
            <h2>Add New Job Offer</h2>
            <form action="" method="post">
                <input type="text" name="title" placeholder="Title"><br><br>
                <input type="text" name="publisher" placeholder="Publisher">
                <input type="text" name="location" placeholder="Location"><br><br>
                <input type="text" name="post_date" placeholder="Post Date">
                <input type="text" name="close_date" placeholder="Close Date"><br><br>
                <input type="text" name="type" placeholder="Type">
                <input type="text" name="salary_range" placeholder="Salary Range"><br><br>
                <input type="text" name="roles_and_responsibility" placeholder="Roles and Responsibility"><br><br>
                <input type="text" name="eligible_criteria" placeholder="Eligible Criteria"><br><br>
                <button name="submit" class="btn">Add Offer</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contractus.html">Contact Us</a>
    </footer>
</body>

</html>