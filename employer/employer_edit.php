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
    //upload logo
    if(isset($_POST['submit'])){
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "../uploads/".$filename;
        $insert = "UPDATE company SET CompanyLogo = '$filename' WHERE CompanyID = $uid";
        $inresult = mysqli_query($conn, $insert);
        if(move_uploaded_file($tempname, $folder)){
            $msg = "";
            $msg = "Uploaded successfully";
        }else{
            echo "Failed upload";
        }
    }

    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $contactno = $_POST['contact'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $goals = $_POST['goals'];
        $vision = $_POST['vision'];
        $updatedata = "UPDATE company SET CompanyEmail = '$email', ContactNo = '$contactno', CompanyAddress = '$address', CompanyProfile ='$about', Goals = '$goals', Vision ='$vision' WHERE CompanyID = $uid";
        if (mysqli_query($conn, $updatedata)){
            
            echo "<script>
            alert('Your profile have been updated!');
            location ='profile.php';
            </script>";
        }else{
            echo "<script>
            alert('There is an error updating your profile.')
            location ='employer_edit.php';
            </script>";
        }

    
    }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/employerdash.css">
    <link rel="stylesheet" href="/css/employerprofile.css">
    <link rel="stylesheet" href="/css/employeredit.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Employer_edit Page</title>
    </header>
</head>

<body>
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

        
        <div class="photo">
            <form action = "" method="post" enctype="multipart/form-data">
                <?php 
                    echo '<img width="250px" height="250px" src="/uploads/'.$row['CompanyLogo'].'">';
                ?><br>
                Upload an image file:<br>
                <input type="file" name="file">
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>
        <div class="employeeform">
            <form action = "" method ="post">
                <div class ="contactpart">
                <h3>ContactDetails</h3>
                <label>Email: <input size="20" type='text' name='email' id='email' value="<?php echo $row['CompanyEmail'] ?>"/></label><br> 
                <label>Contact Number: <input type='text' name='contact' id='contact' value="<?php echo $row['ContactNo'] ?>" /></label><br> 
                <label>Address: <input size="40" type='text' name='address' id='address' value='<?php echo $row['CompanyAddress'] ?>' /></label><br> 
                </div>
                <div class="detailspart">
                <input class="updatebtn" type="submit" value="Update Profile" name="update">
                <label><h3>About:</h3><textarea name="about" rows ="6" ><?php echo $row['CompanyProfile'] ?></textarea></label><br>
                <label><h3>Goals:</h3><textarea name="goals" rows ="6" ><?php echo $row['Goals'] ?></textarea></label><br> 
                <label><h3>Visions:</h3><textarea name="vision" rows ="6" ><?php echo $row['Vision'] ?></textarea></label><br>      
            </div>
                
            </form>
        </div>


    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>
</html>