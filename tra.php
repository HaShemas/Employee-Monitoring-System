<?php
require_once('database.php');
session_start();
if(isset($_SESSION['employee_id'])){
    $employee_id = $_SESSION['employee_id'];

    // query database for employee information based on employee ID
    $sql = "SELECT employee_id FROM employee_tbl WHERE employee_id = '$employee_id'";
    $query = mysqli_query($connection, $sql);
    
    // retrieve employee's time schedule
    $row = mysqli_fetch_assoc($query);
    $e_id = $row["employee_id"];
    echo "Employee ID: $e_id <br>";
}

 else {
    echo "Employee ID is not set";
}
?>
