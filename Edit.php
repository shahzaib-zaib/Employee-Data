<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $con = mysqli_connect('localhost:3308', 'root', '', 'companydb');
        $employeeId = $_GET['Id'];
        $employeename = $_GET['name'];
        $employeeemail = $_GET['email'];
        $employeegender = $_GET['gen'];
        $employeenumber = $_GET['num'];
        $employeequal = $_GET['qual'];
        $employeesalary = $_GET['sal'];

    

    ?>
    <form action="" method="post">
        <label for="">Please Enter Your Name : </label>
        <input type="text" name="name" id="" value="<?php echo "$employeename" ?>">
        <br><br>
        <label for="">Please Enter Your Email : </label>
        <input type="text" name="email" id="" value="<?php echo "$employeeemail" ?>">
        <br><br>
        <label for="">Please Enter Your Gneder : </label>
        <input type="radio" name="gender" id="" value="Male" <?php if($employeegender=="Male"){echo "checked";} ?>>Male
        <input type="radio" name="gender" id="" value="Female" <?php if($employeegender=="Female"){echo "checked";} ?>>Female
        <br><br>
        <label for="">Please Enter Your Phone Number : </label>
        <input type="text" name="number" id="" value="<?php echo "$employeenumber" ?>">
        <br><br>
        <label for="">Please Select Your Qualification :</label>
        <select name="qualification" id="">
            <option <?php if($employeequal=="matric"){echo "selected";} ?> value="matric">Matric</option>
            <option <?php if($employeequal=="intermediat"){echo "selected";} ?> value="intermediat">Intermediat</option>
            <option <?php if($employeequal=="bachelors"){echo "selected";} ?> value="bachelors">Bachelors</option>
            <option <?php if($employeequal=="master"){echo "selected";} ?> value="master">Master</option>
        </select>
        <br><br>
        <label for="">Please Enter Your Salary : </label>
        <input type="text" name="salary" id="" value="<?php echo "$employeesalary" ?>">
        <br><br>

        <input type="submit" name="savebtn" id="" value="Save">

    </form>
</body>
</html>