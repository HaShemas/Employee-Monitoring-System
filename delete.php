<?php
    require_once('database.php');
    $id=$_GET['id'];
    mysqli_query($connection,"UPDATE employee_tbl SET status='0' WHERE employee_id='$id'");
    header('location:employee-admin.php');
?>