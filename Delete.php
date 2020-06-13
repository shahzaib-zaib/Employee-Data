<?php

    $con = mysqli_connect('localhost:3306', 'root', '', 'companydb');
    $id = $_GET['id'];
    $delete_query = "delete FROM employee WHERE EmpId = $id";
    $execute = mysqli_query($con, $delete_query);

    if ($execute == true) {
        echo "<script>
                alert('Data Delete Successfully');
                window.location.href = 'Read.php';
              </script>"
    } else {
        echo "<script>
                alert('Data Not Delete');
                window.location.href = 'Read.php';
              </script>"
    }
    

?>
