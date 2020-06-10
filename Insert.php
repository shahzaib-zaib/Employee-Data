<?php

        $con = mysqli_connect("localhost:3306", "", "", "companydb");
        if (isset($_POST["savebtn"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $number = $_POST["number"];
            $qualification = $_POST["qualification"];
            $salary = $_POST["salary"];

            $insert_query = "insert into employee(EmpName, EmpEmail, EmpGender, EmpPhoneNumber, EmpQualification, EmpSalary)
            value ('$name', '$email', '$gender', '$number', '$qualification', '$salary')";


            $execute = mysqli_query($con, $insert_query);

            if ($execute == true) {
                echo "<script>
                    alert('Data saved Successfully');
                </script>";
            } else {
                echo "<script>
                    alert('Data not saved Successfully');
                </script>";
            }
        }

    ?>