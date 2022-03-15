<?php
    include '../config.php';
    session_start();
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

    if(isset($_FILES['resume'])){
        $errors = array();
        $resumename = $_FILES['resume']['name'];
        $tempresume = $_FILES['resume']['tmp_name'];
        $extensions = array("pdf","docx", "doc");
        if(in_array($file_ext,$extensions)=== false){
            $errors[] = "Extension not allowed, please choose a PDF or DOCX file.";
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"uploads/student/resume/".$resumename);
            echo "<script>
            alert('resume uploaded');
            </script>";
        }else{
            echo "<script>
            alert('There is an error updating your profile.');
            </script>";
        }
    }

    /*(isset($_POST['uploadres'])){
        $resumename=$_FILES["resume"]["name"];
        $tempresume_name=$_FILES["resume"]["tmp_name"];
        $path = "../uploads/student/resume/".$resumename;
        $insert2 = "UPDATE student SET StudentResume = '$resumename' WHERE StudentID = $uid";
        $inresult2 = mysqli_query($conn, $insert2);
        if(move_uploaded_file($tempresume_name, $path)) {
            echo "<script>
            alert('Your Resume has been uploaded');
            location = 'profile.php';
            </script>";
        } else {
            
            /*echo "<script>
            alert('An error occured');
            location = 'editprofile.php';
            </script>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }*/ 
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

    <div class="photo">
        <form action = "" method = "post" enctype= "multipart/form-data">
            <?php
                echo '<img width="250px" height="250px" src="../uploads/student/dp/'.$row['StudentPhoto'].'">';
            ?><br>
            Upload an image file:<br>
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>

    <div class="StudentProfileForm">
        <form action="" method="post">
            <div class = "contactpart">
                <h3>Contact Details</h3>
                <label>Email: <input size="20" type='text' name='email' id='email' value="<?php echo $row['StudentEmail'] ?>"/></label><br> 
                <label>Contact Number: <input size="20" type='text' name='contact' id='contact' value="<?php echo $row['StudentContactNumber'] ?>"/></label><br> 
            </div>

            <div class = "detailspart">
                <input class="updatebtn" type="submit" value="Update Profile" name="update">
                <label><h3>Education: </h3><textarea name="education" rows="6"><?php echo $row['StudentEducation'] ?></textarea></label><br>
                <label><h3>Profile: </h3><textarea name="profile" rows="6"><?php echo $row['StudentProfile'] ?></textarea></label><br>
                <label><h3>Work Experience: </h3><textarea name="workexperience" rows="6"><?php echo $row['StudentWorkExperience'] ?></textarea></label><br>
                <label><h3>Skill: </h3><textarea name="skill" rows="6"><?php echo $row['StudentSkills'] ?></textarea></label><br>
                <label><h3>Resume: </h3></label>
                <div class="resume">
            <form action = "" method = "post" enctype= "multipart/form-data">
            
            Upload Resume<br>
            <input type="file" name="resume">
            <input type="submit" name="uploadres" value="Upload">
        </form>
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