<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $con = mysqli_connect('localhost:3306', 'root', '', 'companydb');
        $employeeId = $_GET['Id'];
        $fetch_query = "select * from employee where empId = $employeeId";
        $execute = mysqli_query($con, $fetch_query);
        $row = mysqli_fetch_assoc($execute);

    ?>
    <form action="" method="post">
        <label for="">Please Enter Your Name : </label>
        <input type="text" name="name" id="" value="<?php echo $row['EmpName'] ?>">
        <br><br>
        <label for="">Please Enter Your Email : </label>
        <input type="text" name="email" id="" value="<?php echo $row['EmpEmail'] ?>">
        <br><br>
        <label for="">Please Enter Your Gneder : </label>
        <input type="radio" name="gender" id="" value="Male" <?php if($row['EmpGender']=="Male"){echo "checked";} ?>>Male
        <input type="radio" name="gender" id="" value="Female" <?php if($row['EmpGender']=="Female"){echo "checked";} ?>>Female
        <br><br>
        <label for="">Please Enter Your Phone Number : </label>
        <input type="text" name="number" id="" value="<?php echo $row['EmpPhoneNumber'] ?>">
        <br><br>
        <label for="">Please Select Your Qualification :</label>
        <select name="qualification" id="">
            <option <?php if($row['EmpQualitfication']=="matric"){echo "selected";} ?> value="matric">Matric</option>
            <option <?php if($row['EmpQualitfication']=="intermediat"){echo "selected";} ?> value="intermediat">Intermediat</option>
            <option <?php if($row['EmpQualitfication']=="bachelors"){echo "selected";} ?> value="bachelors">Bachelors</option>
            <option <?php if($row['EmpQualitfication']=="master"){echo "selected";} ?> value="master">Master</option>
        </select>
        <br><br>
        <label for="">Please Enter Your Salary : </label>
        <input type="text" name="salary" id="" value="<?php echo $row['EmpSalary'] ?>">
        <br><br>

        <input type="submit" name="savebtn" id="" value="Save">

    </form>
</body>
</html>