<?php
session_start();
require_once('database.php');

if (isset($_GET['leave_id'])) {
    $leave_id = $_GET['leave_id'];

    // query database to check if the leave request exists
    $sql = "SELECT leave_id FROM leave_tbl WHERE leave_id = '$leave_id'";
    $query = mysqli_query($connection, $sql);

    // check if leave request exists
    if (mysqli_num_rows($query) > 0) {
        $status = "approved";
        mysqli_query($connection, "UPDATE leave_tbl SET le_status = '$status' WHERE leave_id = '$leave_id'");
        header('location: leave-admin.php');
    } else {
        echo "No leave request found for Leave ID: $leave_id";
    }
} else {
    echo "No Leave ID provided.";
}
?>