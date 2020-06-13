<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<?php

    $con = mysqli_connect('localhost:3306', 'root', '', 'companydb');
    $fetch_query = "select * from employee";
    if(isset($_GET['btn'])){
        $searchrecord = $_GET['searchtxt'];
        $option = $_GET['search'];
        if($option == "id"){
            $fetch_query = "select * from amployee where EmpId = '$searchrecord'";
        }
        else if($option == "name"){
            $fetch_query = "select * from amployee where EmpName like '$searchrecord'";
        }
        else if($option == "email"){
            $fetch_query = "select * from amployee where EmpEmail = '$searchrecord'";
        }
        else if($option == "gender"){
            $fetch_query = "select * from amployee where EmpGender = '$searchrecord'";
        }
        else if($option == "qual"){
            $fetch_query = "select * from amployee where EmpQualitfication = '$searchrecord'";
        }
    }
    $execute = mysqli_query($con, $fetch_query);
    $totalrows = mysqli_num_rows($execute);

    echo "<h2>Total Employees in Company : $totalrows</h2>"


    if ($totalrows != 0) {
    ?>
        <table class="table table-border table-hover">
            <tr>
                <th>Employee Id</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Employee Gender</th>
                <th>Employee Phone Number</th>
                <th>Employee Qualification</th>
                <th>Employee Salary</th>
            </tr>
            
    <?php
            while ($records = mysqli_fetch_assoc($execute)) {
                echo "<tr>
                <td>". $records['EmpId'] ."</td>
                <td>". $records['EmpName'] ."</td>
                <td>". $records['EmpEmail'] ."</td>
                <td>". $records['EmpGender'] ."</td>
                <td>". $records['EmpPhoneNumber'] ."</td>
                <td>". $records['EmpQualitfication'] ."</td>
                <td>". $records['EmpSalary'] ."</td>
                <td><a href='Delete.php?Id=$records[EmpId]'>Delete</a></td>
                <td><a href='Edit.php?Id=$records[EmpId]'>Edit</a></td>

            </tr>";

            }
            }
            else 
            {
                echo "<h4>Table have no Record</h4>"
            }
            
    ?>
        </table>
        <button>
            <a href="EmployeeForm.html">Register Employee</a>
        </button>