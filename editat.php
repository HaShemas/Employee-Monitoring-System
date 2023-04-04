<?php
require_once('database.php');
session_start();
$id=$_GET['attendance_id'];
$crt=$_POST['time'];
    if(isset($_SESSION['employee_id'])){
        $employee_id = $_SESSION['employee_id'];

        // query database for employee information based on employee ID
        $sql = "SELECT * FROM time_tbl WHERE employee_id = '$employee_id'";
        $query = mysqli_query($connection, $sql);
        // retrieve employee's id
        $row = mysqli_fetch_assoc($query);
        $e_id = $row["employee_id"];
        $end = $row["end_time"];
       
        
        if($crt<$end){
            $to_status = 'Early';
            $status = 'Present';
    }
        if($crt==$end){
            $to_status = 'On-Time';
            $status = 'Present';
        }
        if($crt>$end){
            $to_status = 'Late';
            $status = 'Present';
    }
    }


mysqli_query($connection,"UPDATE attendance_tbl SET time_out='$crt', to_status='$to_status' WHERE attendance_id='$id'");
header('location:attendance.php');

?>