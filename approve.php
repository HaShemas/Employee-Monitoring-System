<?php
session_start();
require_once('database.php');
if (isset($_GET['employee_id'])) {
    $id = $_GET['employee_id'];
    if (isset($_SESSION['employee_id'])) {
        
        $employee_id = $_SESSION['employee_id'];

        // query database for leave request based on employee ID
        $sql = "SELECT employee_id FROM leave_tbl";
        $query = mysqli_query($connection, $sql);

        // retrieve employee's id
        $row = mysqli_fetch_assoc($query);
        
        $status = "approved";

        // check if e_id is not null before executing UPDATE query
        if ($id !== null) {
            mysqli_query($connection,"UPDATE leave_tbl SET le_status='$status' WHERE employee_id='$id'");
            header('location:leave-admin.php');
        } else {
            echo "No leave request found for employee ID: $employee_id";
        }
    } else {
        echo "Session variable 'employee_id' not set.";
    }
}
?>