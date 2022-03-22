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

    if(isset($_POST['update'])){
        $type = $_POST['type'];
        echo "$type";
        $title = $_POST['title'];
        $pdate = $_POST['postdate'];
        $cdate = $_POST['closedate'];
        $res = $_POST['res'];
        $criteria = $_POST['criteria'];
        $location = $_POST['location'];
        $salary = $_POST['salary'];
        $duration = $_POST['duration'];

        // $about2 = str_replace("'", "''", $about);
        // $goal2 = str_replace("'", "''", $goals);
        // $vision2 = str_replace("'", "''", $vision);
        // $data = "UPDATE job SET JobType='$type' ,JobTitle='$title' ,JobPostDate='$pdate' ,JobCloseDate='$cdate' ,RoleResponsibility='$res' ,JobCriteria='$criteria' ,JobLocation='$location' ,JobSalary='$salary' ,JobDuration='$duration'";
        // $update = mysqli_query($conn, $data);
        // if ($update){
        //     echo "<script>
        //     alert('Your job have been updated!');
        //     </script>";
        // }else{
        //     echo $data;
        //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        //     echo "<script>
        //     alert('There is an error updating your job.')
        //     </script>";
        // }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/employer/employerdash.css">
    <link rel="stylesheet" href="../css/employer/jobedit.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <header>
        <title>Employer job edit Page</title>
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

        <?php 
            $sql = "SELECT * FROM job";
            $r = mysqli_query($conn, $sql);
            $re = mysqli_fetch_assoc($r);
        ?>

        <div class="jobform">
            <form action = "" method ="post">
                <label>Job ID: <input size="20" type='text' name='id' value="<?php echo $re['JobID'] ?>"/></label><br> 
                <label>Job Type: <input size="20" type='text' name='type' value="<?php echo $re['JobType'] ?>"/></label><br> 
                <label>Job Title: <input type='text' name='title' id='contact' value="<?php echo $re['JobTitle'] ?>" /></label><br> 
                <label>Post Date: <input type='date' name='postdate' value="<?php echo $re['JobPostDate'] ?>" /></label><br> 
                <label>Close Date: <input type='date' name='closedate' value="<?php echo $re['JobCloseDate'] ?>" /></label><br> 
                <label>Role Responsibility: <input type='text' name='res' value="<?php echo $re['RoleResponsibility'] ?>" /></label><br> 
                <label>Criteria: <input type='text' name='criteria' value="<?php echo $re['JobCriteria'] ?>" /></label><br> 
                <label>Location: <input type='text' name='location' value="<?php echo $re['JobLocation'] ?>" /></label><br> 
                <label>Salary: <input type='text' name='salary' value="<?php echo $re['JobSalary'] ?>" /></label><br> 
                <label>Duration: <input type='text' name='duration' value="<?php echo $re['JobDuration'] ?>" /></label><br> 
                
                <input class="updatebtn" type="submit" value="Update Job Offer" name="update">      
            </form>
        </div>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer>

</body>

</html>