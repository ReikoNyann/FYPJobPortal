<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main/jobopportunities.css">
    <header>
        <title>Mu2WIL Job Opportunity Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style type="text/css">
            body {
                margin: 0;
                padding: 0;
                font-family: "Helvetica", sans-serif;
            }
            .filters{
                margin-left: 10%;
                margin-top: 2%;
                margin-bottom: 2%;
            }
        </style>
    </header>

</head>

<body>
    <main>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#"><img src="img/Murdoch_University_extended_logo.png" alt="logo" class="logo"></a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="job_opportunities_form">
            <form action="" method="post">
                <h2>Search jobs that you are interested in</h2><br>
                    <input type="text" placeholder="Search" />
                <button>Search</button>
            </form>
        </div>

        <div class="filters">
            <span>Fetch results by &nbsp;</span>
            <select name="fetchval" id="fetchval">
                <option value="" disabled="" selected="">Select job by industry</option>
                <option value="Agriculture; plantations;other rural sectors">Agriculture; plantations;other rural sectors</option>
                <option value="Basic Metal Production">Basic Metal Production</option>
                <option value="Chemical industries">Chemical industries</option>
                <option value="Commerce">Commerce</option>
                <option value="Construction">Construction</option>
                <option value="Education">Education</option>
                <option value="Financial services; professional services">Financial services; professional services</option>
                <option value="Food; drink; tobacco">Food; drink; tobacco</option>
                <option value="Forestry; wood; pulp and paper">Forestry; wood; pulp and paper</option>
                <option value="Health services">Health services</option>
                <option value="Hotels; tourism; catering">Hotels; tourism; catering</option>
                <option value="Mining (coal; other mining)">Mining (coal; other mining)</option>
                <option value="Mechanical and electrical engineering">Mechanical and electrical engineering</option>
                <option value="Media; culture; graphical">Media; culture; graphical</option>
                <option value="Oil and gas production; oil refining">Oil and gas production; oil refining</option>
                <option value="Postal and telecommunications services">Postal and telecommunications services</option>
                <option value="Public service">Public service</option>
                <option value="Shipping; ports; fisheries; inland waterways">Shipping; ports; fisheries; inland waterways</option>
                <option value="Textiles; clothing; leather; footwear">Textiles; clothing; leather; footwear</option>
                <option value="Transport (including civil aviation; railways; road transport)">Transport (including civil aviation; railways; road transport)</option>
                <option value="Transport equipment manufacturing">Transport equipment manufacturing</option>
                <option value="Utilities (water; gas; electricity)">Utilities (water; gas; electricity)</option>
            </select>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Job ID</th>
                        <th>Job Type</th>
                        <th>Job Title</th>
                        <th>Job Post Date</th>
                        <th>Job Close Date</th>
                        <th>Role Responsibility</th>
                        <th>Job Criteria</th>
                        <th>Job Location</th>
                        <th>Job Salary</th>
                        <th>Job Duration</th>
                        <th>Industry ID</th>
                        <th>Company ID</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $query = "SELECT * FROM job";
                        $r = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($r)){
                    ?>

                    <tr>
                        <td><?php echo $row['JobID']?></td>
                        <td><?php echo $row['JobType']?></td>
                        <td><?php echo $row['JobTitle']?></td>
                        <td><?php echo $row['JobPostDate']?></td>
                        <td><?php echo $row['JobCloseDate']?></td>
                        <td><?php echo $row['RoleResponsibility']?></td>
                        <td><?php echo $row['JobCriteria']?></td>
                        <td><?php echo $row['JobLocation']?></td>
                        <td><?php echo $row['JobSalary']?></td>
                        <td><?php echo $row['JobDuration']?></td>
                        <td><?php echo $row['IndustryID']?></td>
                        <td><?php echo $row['CompanyID']?></td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#fetchval").on('change', function(){
                    var value = $(this).val();
                    //alert(value);

                    $.ajax({
                        url:"fetch.php",
                        type:"POST",
                        data:'request=' + value,
                        beforeSend:function(){
                            $(".container").html("<span>Working...</span>");
                        },
                        success:function(data){
                            $(".container").html(data);
                        }
                    });
                });
            });
        </script>
    </main>

    <!-- <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
        <a href="#">Contact Us</a>
    </footer> -->
</body>

</html>