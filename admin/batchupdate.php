<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/batchupdate.css">
    <header>
        <title>Mu2WIL System Admin Batch Update Page</title>
    </header>

</head>

<body>
    <main>
        <div class="logo">
            <a href="../login.php"><img width="250px" src="../img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="../jobopportunities.php">Job Opportunities</a>
            <a href="../contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist">USER
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="adduser.php">Add New Account</a>
                    <a href="enquiries.php">View Enquiries</a>
                    <a href="batchupdate.php">Batch Create</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="batchupdateform">
            <h2>Upload CSV file for batch creation</h2>
            <form action="" method="post">
                <input type="text" name="user_file" placeholder="Click to select user csv file">
                <button type="submit" class="btn1">Upload</button><br><br>
                <input type="text" name="user_file" placeholder="Click to select job csv file">
                <button type="submit" class="btn2">Upload</button><br><br>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>