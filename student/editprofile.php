<?php
    include '../config.php';
    session_start();
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM student WHERE StudentID = '$uid'";
        //connect DB and sql query
        $result = mysqli_query($conn, $sql);
        //fetch results
        $row = mysqli_fetch_assoc($result);
    } else {
        echo 'Failed connecting to database';
    }

    // upload photo
    if(isset($_POST['submit'])){
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "../uploads/student/dp/".$filename;
        $insert = "UPDATE student SET StudentPhoto = '$filename' WHERE StudentID = $uid";
        $inresult = mysqli_query($conn, $insert);
        if(move_uploaded_file($tempname, $folder)){
            echo "<script>alert('Upload successful')
            window.location.href='editprofile.php'</script>";
        } else {
            echo "<script>alert('Failed Upload')</script>";
        }
    }
    //update profile
    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $contactno = $_POST['contact'];
        $profile = $_POST['profile'];
        $education = $_POST['education'];
        $skill = $_POST['skill'];
        $workex = $_POST['workexperience'];
        $profile2 = str_replace("'","''", $profile);
        $education2 = str_replace("'","''", $education);
        $skill2 = str_replace("'","''", $skill);
        $workex2 = str_replace("'","''", $workex);
        //insert data into database
        $updatedata = "UPDATE student SET StudentEmail = '$email', StudentContactNumber = '$contactno', StudentProfile = '$profile2', StudentEducation = '$education2', StudentSkills = '$skill2', StudentWorkExperience = '$workex2' WHERE StudentID = $uid";
        if(mysqli_query($conn, $updatedata)){
            echo "<script>
            alert('Your profile have been updated!');
            location = 'profile.php';
            </script>";
        } else {
            echo "<script>
            alert('There is an error updating your profile.');
            location = 'profile.php';
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main/navbar.css">
    <link rel="stylesheet" href="/css/student/editprofile.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Student_edit Page</title>
    </header>
</head>

<body>
    <div class="logo">
        <a href="studentdash.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
    </div>
    <div class="navbar">
        <a href="job.php">Job Opportunities</a>
        <a href="../contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="droplist"><?php echo '<span style="font-size:15px; font-family:Segoe UI; font-weight:bold;">' . $row['StudentName'] . '</span>'; ?>
                <i class="togglelist"></i>
            </button>
            <div class="contentlist">
                <a href="profile.php">View Profile</a>
                <a href="application.php">View Applications</a>
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </div>

    <div class="photo">
        <form action = "" method = "post" enctype= "multipart/form-data">
            <?php
                echo '<img width="250px" height="250px" src="../uploads/student/dp/'.$row['StudentPhoto'].'">';
            ?><br>
            <b>Upload an image file:</b><br>
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload" class="upload">
        </form>
    </div>

    <div class="StudentProfileForm">
        <form action="" method="post">
            <div class = "contactpart">
                <h3>Contact Details</h3>
                <label><b>Email:</b> <input size="20" type='text' name='email' id='email' value="<?php echo $row['StudentEmail'] ?>"/></label><br> 
                <label><b>Contact Number:</b> <input size="20" type='text' name='contact' id='contact' value="<?php echo $row['StudentContactNumber'] ?>"/></label><br> 
            </div>

            <div class = "detailspart">
                <input class="updatebtn" type="submit" value="Update Profile" name="update">
                <label><h3>Education: </h3><textarea name="education" rows="6"><?php echo $row['StudentEducation'] ?></textarea></label><br>
                <label><h3>Profile: </h3><textarea name="profile" rows="6"><?php echo $row['StudentProfile'] ?></textarea></label><br>
                <label><h3>Work Experience: </h3><textarea name="workexperience" rows="6"><?php echo $row['StudentWorkExperience'] ?></textarea></label><br>
                <label><h3>Skill: </h3><textarea name="skill" rows="6"><?php echo $row['StudentSkills'] ?></textarea></label><br>
            </div>
            
    </div>
        </div>
        </form>      
    </div>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>
</html>