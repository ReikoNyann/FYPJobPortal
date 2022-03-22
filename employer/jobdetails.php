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

    if(isset($_POST['btn_update'])){
        if(isset($_POST['update'])){
            foreach($_POST['update'] as $updateid){
                $type = $_POST['type_'.$updateid];
                $title = $_POST['title_'.$updateid];
                $postdate = $_POST['postdate_'.$updateid];
                $closedate = $_POST['closedate_'.$updateid];
                $res = $_POST['res_'.$updateid];
                $criteria = $_POST['criteria_'.$updateid];
                $location = $_POST['location_'.$updateid];
                $salary = $_POST['salary_'.$updateid];
                $duration = $_POST['duration_'.$updateid];
                $industryID = $_POST['industryID_'.$updateid];
                $companyID = $_POST['companyID_'.$updateid];

                if($type != '' && $title != '' && $postdate != '' && $closedate != '' && $res != '' && $criteria != '' && $location != '' && $salary != '' && $duration != '') {
                    $updatejob = "UPDATE job SET 
                    JobType='".$type."', JobTitle='".$title."', JobPostDate='".$postdate."', JobCloseDate='".$closedate."', RoleResponsibility='".$res."', JobCriteria='".$criteria."', JobLocation='".$location."', JobSalary='".$salary."', JobDuration='".$duration."'
                    WHERE JobID=".$updateid;
                    mysqli_query($conn, $updatejob);
                }
            }
            $alert = '<div class="alert alert-success" role="alert">Job records successfully updated</div>';
        }
    } 
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/employer/employerdash.css">
    <!-- <link rel="stylesheet" href="../css/employer/jobdetail.css"> -->
    <header>
        <title>Mu2WIL Job Details Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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

        <div class="container">
            <h1>Update job</h1>
            <form method="post" action="">
            <p><input type="submit" value="Update select job records" class="btn btn-success" name="btn_update"></p>
            <table class="table">
                <tr style='background: whitesmoke;'>
                    <th><input type='checkbox' id='checkAll'>Check</th>
                    <!-- <th>Job ID</th> -->
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
                <?php
                $query = "SELECT * FROM job";
                $r = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($r)){
                    $id = $row['JobID'];
                    $type = $row['JobType'];
                    $title = $row['JobTitle'];
                    $postdate = $row['JobPostDate'];
                    $closedate = $row['JobCloseDate'];
                    $res = $row['RoleResponsibility'];
                    $criteria = $row['JobCriteria'];
                    $location = $row['JobLocation'];
                    $salary = $row['JobSalary'];
                    $duration = $row['JobDuration'];
                    $industryID = $row['IndustryID'];
                    $companyID = $row['CompanyID'];
                ?>
                    <tr>
                        <td><input type='checkbox' name='update[]' value='<?= $id ?>'></td>
                        <td><input type='text' name='type_<?= $id ?>' value='<?= $type ?>'></td>
                        <td><input type='text' name='title_<?= $id ?>' value='<?= $title ?>'></td>
                        <td><input type='text' name='postdate_<?= $id ?>' value='<?= $postdate ?>'></td>
                        <td><input type='text' name='closedate_<?= $id ?>' value='<?= $closedate ?>'></td>
                        <td><input type='text' name='res_<?= $id ?>' value='<?= $res ?>'></td>
                        <td><input type='text' name='criteria_<?= $id ?>' value='<?= $criteria ?>'></td>
                        <td><input type='text' name='location_<?= $id ?>' value='<?= $location ?>'></td>
                        <td><input type='text' name='salary_<?= $id ?>' value='<?= $salary ?>'></td>
                        <td><input type='text' name='duration_<?= $id ?>' value='<?= $duration ?>'></td>
                        <td><input type='text' name='industryID_<?= $id ?>' value='<?= $industryID ?>'></td>
                        <td><input type='text' name='companyID_<?= $id ?>' value='<?= $companyID ?>'></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            </form>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                //check/uncheck all
                $('#checkAll').change(function(){
                    if($(this).is(':checked')){
                        $('input[name="update[]"]').prop('checked',true);
                    }else{
                        $('input[name="update[]"]').each(function(){
                            $(this).prop('checked',false);
                        });
                    }
                });
                //checkbox Click
                $('input[name="update[]"]').click(function(){
                    var total_checkboxes = $('input[name="update[]"]').length;
                    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

                    if(total_checkboxes_checked == total_checkboxes){
                        $('#checkAll').prop('checked',true);
                    }else{
                        $('#checkAll').prop('checked',false);
                    }
                });
            });
        </script>
    
    </main>

    <!-- <footer>
        <p>Copyright 2022, Team Yuen Yuen</p>
    </footer> -->
</body>

</html>