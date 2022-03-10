<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/sa_dashboard.css">
    <header>
        <title>Mu2WIL System Admin dashboard Page</title>
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

        <br>

        <h2>Welcome, System Admin</h2><br>

        <div>
            <form action="" method="post">
                <label>No. of account creation requests received:</label><br>
                <button class="view_account">View list for pending account creation</button>
            </form>

            <form action="" method="post">
                <label>No. of enquiries received:</label><br>
                <button class="view_enquiries">View enquiries</button>
            </form>
        </div>

    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>