<?php
require_once('database.php');
session_start();

// Get employee ID from employee_tbl based on criteria

    $crt=$_POST['time1'];
    $crd=$_POST['date1'];
    if(isset($_SESSION['employee_id'])){
        $employee_id = $_SESSION['employee_id'];

        // query database for employee information based on employee ID
        $sql = "SELECT * FROM time_tbl WHERE employee_id = '$employee_id'";
        $query = mysqli_query($connection, $sql);
        // retrieve employee's id
        $row = mysqli_fetch_assoc($query);
        $e_id = $row["employee_id"];
        $start = $row["start_time"];
        
       
        
        if($crt<$start){
            $ti_status = 'Early';
            $status = 'Present';
           
        
    }
        if($crt==$start){
            $ti_status = 'On-Time';
            $status = 'Present';
           
        
        }
        if($crt>$start){
            $ti_status = 'Late';
            $status = 'Present';
            
    }
    }
    mysqli_query($connection, "INSERT INTO attendance_tbl (employee_id, date, time_in,ti_status, statuses) VALUES ('$e_id', '$crd', '$crt','$ti_status','$status')");
    header('location:attendance.php');
    // Insert attendance record with employee ID
   
?>