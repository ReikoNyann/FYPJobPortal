<?php
    include '../config.php';
    session_start();

    if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']
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
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/studentprofile.css">
    <header>
        <title>Student Profile Page</title>
    </header>
</head>

<body>
    <div class="logo">
  
    <a href="../index.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
    </div>
    <div class="navbar">
        <a href="../jobopportunities.php">Job Opportunities</a>
        <a href="../contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist">USER
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="application.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <!-- <div class="imgArea">
        <h2>Student Profile</h2>
        <a href="../student/editprofile.php"><button>Edit profile</button></a> 
    </div>

    <div class="StudentProfileForm">
        <form action="" method="post">
            <h3>Education</h3><br>
            <input type="text" name="education" placeholder="Education" /><br>
            <h3>Work experience</h3><br>
            <input type="text" name="Work experience" placeholder="Work experience" /><br>
            <h3>Skills/Knowledge</h3><br>
            <input type="text" name="Skills/Knowledge" placeholder="Skills/Knowledge" /><br>
        </form>      
    </div> -->

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
                        echo '<img width = "250px" height="250px" src="../uploads/'.$row['StudentPhoto'].'">';
                    }
                ?>
            </div>

            <h3>Contact Details</h3>
            <p>Email: <?php echo $row['StudentEmail'] ?></p>
            <p>Contact Number: <?php echo $row['StudentContactDetails'] ?></p>
        </div>

        <div class="studentinfo">
            <div class="editbutton">
                <button type="button" class="editbtn"><a href="editprofile.php">Edit Profile</a></button>
            </div>
            <h3>About</h3><br>
            <p><?php echo $row['StudentProfile']?></p>
            <h3>Education</h3><br>
            <p><?php echo $row['StudentEducation']?></p>
            <h3>Work Experience</h3><br>
            <p><?php echo $row['StudentWorkExperience']?></p>
            <h3>Skills/Knowledge</h3><br>
            <p><?php echo $row['StudentSkills']?></p>
        </div>

        <div class="studentresume">
            <div class="viewresume">
                <?php
                    if($row['StudentResume'] == NULL) {
                        echo 'No resume';
                    } else {
                        echo 'src="../uploads/'.$row['StudentResume'].'">';
                    }
                ?>    
            </div>
        </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>

</body>

</html>