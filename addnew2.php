<?php
// Check if form is submitted
require_once("database.php");
session_start();
if(isset($_POST['submit'])){
    $id = $_POST['employee_id'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    
    
    // Insert data into database
    //$query = "INSERT INTO employee_tbl (employee_id,password,fname, mname,lname, phone_number, email,time_sched,status) VALUES ('$id','$password','$fname','$mname', '$lname', '$phone', '$email','$time_sched','1')";
    $query = "INSERT INTO employee_tbl (employee_id,password,fname,mname,lname,phone_number,email,status) 
              VALUES ('$id','$password','$fname','$mname','$lname','$phone','$email','1')";
    $result = mysqli_query($connection, $query);

    $query2 = "INSERT INTO time_tbl (start_time,end_time,employee_id) 
              VALUES ('$start_time','$end_time','$id')";
    $result2 = mysqli_query($connection, $query2);
    
    header('location:employee-admin.php');
    // Check if data is inserted successfully
    if($result&&$result2) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>