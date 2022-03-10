<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/adduser.css">
    <header>
        <title>Mu2WIL System Admin Add User page</title>
    </header>

</head>

<body>
    <main>
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
                    <a href="adduser.php">Add New Account</a>
                    <a href="enquiries.php">View Enquiries</a>
                    <a href="batchupdate.php">Batch Create</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="adduserform">
            <h2>Create a new account for new user</h2>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Name"><br><br>
                <input type="text" name="company_name" placeholder="Company Name"><br><br>
                <input type="email" name="email" placeholder="Email Address"><br><br>
                <input type="password" name="password" placeholder="Password">
                <button>Generate Password</button><br><br>
                <button name="submit">Submit</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="../contact.php">Contact Us</a>
    </footer>
</body>

</html>