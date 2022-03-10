<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/testimonial.css">
    <header>
        <title>Mu2WIL Testimonial</title>
    </header>

</head>

<body>
    <main>
        <div class="logo">
            <a href="index.php"><img width="250px" src="img/Murdoch_University_extended_logo.png" alt="logo"></a>
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
                    <a href="student/application.php">View Applications</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>
        </div>

        <div class="testimonialform">
            <h2>MU2WIL Testimonial</h2>
            <form action="" method="post">
                <label>Enter Title: </label>
                <input type="text" name="title" placeholder="Title"><br>
                <label>Upload an image (optional): </label>
                <input type="file" name="file"><br>
                <label>Description: </label>
                <input type="text" name="title" placeholder="Description"><br><br>
                <button name="submit" class="btn">Submit</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="contractus.html">Contact Us</a>
    </footer>
</body>

</html>