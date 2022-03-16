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
        $folder = "../uploads/".$filename;
        $insert = "UPDATE student SET StudentPhoto = '$filename' WHERE StudentID = $uid";
        $inresult = mysqli_query($conn, $insert);
        if(move_uploaded_file($tempname, $folder)){
            $msg = "";
            $msg = "Uploaded successfully";
        } else {
            echo "Failed upload";
        }
    }

    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $contactno = $_POST['contact'];
        $profile = $_POST['profile'];
        $education = $_POST['education'];
        $skill = $_POST['skill'];
        $workex = $_POST['workexperience'];
        $updatedata = "UPDATE student SET StudentEmail = '$email', StudentContactDetails = '$contactno', StudentProfile = '$profile', StudentEducation = '$education', StudentSkills = '$skill', StudentWorkExperience = '$workex' WHERE StudentID = $uid";
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

    if(isset($_POST['UploadResume'])){
        $filename=$_FILES["file"]["name"];
        $temp_name=$_FILES["file"]["temp_name"];
        $path = "../uploads/".$filename;
        $insert = "UPDATE student SET StudentResume = '$filename' WHERE StudentID = $uid";
        $inresult = mysqli_query($conn, $insert);
        if(move_uploaded_file($temp_name, $folder)) {
            $msg = "";
            $msg = "Uploaded Resume successfully";
        } else {
            echo "Failed upload";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/studentprofile.css">
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

    <div class="photo">
        <form action = "" method = "post" enctype= "multipart/form-data">
            <?php
                echo '<img width="250px" height="250px" src="../uploads/'.$row['StudentPhoto'].'">';
            ?><br>
            Upload an image file:<br>
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
                <label><h3>Education: </h3><textarea name="education" rows="6"><?php echo $row['StudentEducation'] ?></textarea></label><br>
                <label><h3>Work Experience: </h3><textarea name="workexperience" rows="6"><?php echo $row['StudentWorkExperience'] ?></textarea></label><br>
                <label><h3>Skill: </h3><textarea name="skill" rows="6"><?php echo $row['StudentSkills'] ?></textarea></label><br>
            </div>
        </div>
        </form>      
    </div>

    <div class="resume">
        <form action = "" method = "post" enctype= "multipart/form-data">
            <?php
                echo '<img width="250px" height="250px" src="../uploads/'.$row['StudentResume'].'">';
            ?><br>
            Upload Resume<br>
            <input type="submit" name="UploadResume" value="Upload">
        </form>
    </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contact.php">Contact Us</a>
    </footer>

</body>

<!-- <script type="text/javascript">
    function showImg(obj) {
        var files = obj.files
        getImgsByFileReader(document.getElementById("imgContainer"), files)
    }

    function getImgsByUrl(files) {
        var elements = ''
        for (var i = 0; i < files.length; i++) {
            var url = window.URL.createObjectURL(files[i])
            elements += "<img src='" + url + "' style='width: 40px; height: 40px; vertical-align: middle; margin-right: 5px;' />"
        }
        return elements
    }
    // use fileReader to upload file
    function getImgsByFileReader(el, files) {
        for (var i = 0; i < files.length; i++) {
            let img = document.createElement('img')
            img.setAttribute('style', 'width: 40px; height: 40px; vertical-align: middle; margin-right: 5px;')
            el.appendChild(img)
            var reader = new FileReader()
            reader.onload = function (e) {
                img.src = e.target.result
            }
            reader.readAsDataURL(files[i])
        }
    }
</script> -->

</html>