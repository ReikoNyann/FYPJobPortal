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
        <title>Student Profile Page</title>
    </header>
</head>

<body>
    <div class="logo">
  
    <a href="#"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
    </div>
    <div class="navbar">
        <a href="../jobopportunities.php">Job Opportunities</a>
        <a href="../contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist"><?php echo $row['StudentName']; ?>
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="application.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="StudentProfile">
        <div class="details">
            <h2><?php echo $row['StudentName'] ?></h2>
            <div class="displaypic">
                <?php
                    //check if photo is uploaded into database
                    if ($row['StudentPhoto'] == NULL){
                        //if no student photo display
                        echo '<img width = "200px" height="auto" src="../img/personplaceholder.png" placeholder="student photo here">';
                    } else {
                        echo '<img width = "250px" height="250px" src="../uploads/student/dp/'.$row['StudentPhoto'].'">';
                    }
                ?>
            </div>

            <h3>Contact Details</h3>
            <p>Email: <?php echo $row['StudentEmail'] ?></p>
            <p>Contact Number: <?php echo $row['StudentContactNumber'] ?></p>
        </div>

        <div class="studentinfo">
            <div class="editbutton">
                <button type="button" class="editbtn"><a href="editprofile.php">Edit Profile</a></button>
            </div>
            <h3>About</h3>
            <p><?php echo $row['StudentProfile']?></p>
            <h3>Education</h3>
            <p><?php echo $row['StudentEducation']?></p>
            <h3>Work Experience</h3>
            <p><?php echo $row['StudentWorkExperience']?></p>
            <h3>Skills/Knowledge</h3>
            <p><?php echo $row['StudentSkills']?></p>
            <h3>Resume</h3>
            <?php
                    if($row['StudentResume'] == NULL) {
                        echo 'Please upload your resume';
                    } else {
                        echo 'src="../uploads/student/resume'.$row['StudentResume'].'">';
                    }
                ?>    
        </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>

</html>