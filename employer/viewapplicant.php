<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM application WHERE CompanyID = $uid";
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
    <link rel="stylesheet" href="../css/signup.css">
    <header>
        <title>Mu2WIL View Application Page</title>
    </header>

</head>

<body>
    <main>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../index.php"><img src="../img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
                    </li>
                </ul>
            </nav>
        </div>

        <h4>Application ID: </h4>
        <?php echo $row['ApplicationID']; ?><br />
        <h4>Apply Date: </h4>
        <?php echo $row['ApplyDate']; ?><br />
        <h4>Apply Status: </h4>
        <?php echo $row['ApplyStatus']; ?><br />
        <h4>Job ID: </h4>
        <?php echo $row['JobID']; ?><br />
        <h4>Student Apply ID: </h4>
        <?php echo $row['StudentID']; ?><br />

    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>