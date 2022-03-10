<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <header>
        <title>Mu2WIL Contract Us Page</title>
    </header>
</head>

<body>
    <main>
        <div class="logo">
            <a href="login.php"><img width="250px" src="img/Murdoch_University_extended_logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <a href="jobopportunities.php">Job Opportunities</a>
            <a href="contact.php">Contact Us</a>
            <div class="dropdown">
                <button class="droplist">USER
                    <i class="togglelist"></i>
                </button>
                <div class="contentlist">
                    <a href="profile.php">View Profile</a>
                    <!-- <a href="addNewJob.php">View Applications</a> -->
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>

        <br>
        <h2>CONTRACT US</h2><br>
        <h3>Enquiries will take 1-3 working days to be answered. Kindly select the right category for the
            enquiry that you are looking to make. Responds will be email linked to the account.
        </h3>

        <div class="contact_form">
            <form action="" method="post">
                <h1>ENQUIRIES FORM</h1>
                <label>What are you enquiring about? <input type="text" name="contract_type"></label><br><br><br><br>
                <label>Type in your enquiries here: <input type="text" name="enquiries"></label><br><br><br><br><br><br>
                <button name="submit" class="btn">Submit Enquiries</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contact.php">Contact Us</a>
    </footer>
</body>

</html>