<?php
    include 'config.php';
    if(isset($_POST['request'])){
        $request = $_POST['request'];

        $query = "SELECT * FROM job INNER JOIN industry ON jobs.IndustryID, industry.IndustryID = '$request'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
    }
?>

<table class="table">
    <?php

        if($count){

    ?>
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

        <?php
    }else{
        echo "No record found";
    }
        
        ?>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_array($result)){

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
<?php
}
?>