<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/jobopportunities.css">
    <header>
        <title>Mu2WIL Job Opportunity Page</title>
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
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>

        <br>

        <div class="job_opportunities_form">
            <form action="" method="post">
                <h2>Search jobs that you are interested in</h2><br>
                 <input type="text" placeholder="Search" />
                <button>Search</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contact.php">Contact Us</a>
    </footer>
</body>

</html>