<?php
	require_once('database.php');
	
	$id=$_GET['employee_id'];
	$password=$_POST['password'];
	$firstname=$_POST['fname'];
	$middlename=$_POST['mname'];
	$lastname=$_POST['lname'];
	$pn=$_POST['phone_number'];
	$address=$_POST['email'];
	$start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $day_week = $_POST['day_week'];
	
	
	mysqli_query($connection,"UPDATE employee_tbl SET password='$password', fname='$firstname',mname='$middlename', lname='$lastname', phone_number='$pn', email='$address' where employee_id='$id'");
	mysqli_query($connection,"UPDATE time_tbl SET start_time='$start_time', end_time='$end_time' WHERE employee_id='$id'");

	header('location:employee-admin.php');

?>