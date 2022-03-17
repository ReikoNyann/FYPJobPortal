<?php
    include '../config.php';
    session_start();
    if(isset($_SESSION['uid']) && !empty($_SESSION['uid'])){
        //echo $_SESSION['uid']; //check userid captured
        //declare login userid 
        $uid = $_SESSION['uid'];
        //get data from table
        $sql = "SELECT * FROM admin WHERE AdminID = $uid";
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
        <link rel="stylesheet" href="../css/admin/saapprovallist.css">
    <header>
        <title>Mu2WIL System Admin Approval List Page</title>
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
                <button class="droplist"><?php echo $row['AdminName']; ?>
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="addaccount.php">Add New Accounts</a>
                    <a href="enquiries.php">View Enquiries</a>
                    <a href="batchupdate.php">Batch Create</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- <h2>Welcome, System Admin <?php echo $row["AdminName"] ?></h2><br> -->
        <h2>Approval List</h2><br>

        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        
    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
    </body>
</html>


