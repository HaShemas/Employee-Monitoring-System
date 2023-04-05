<?php
require_once("database.php");
session_start();
// Check if the form has been submitted
        $frdate = $_POST["frdate"];
        $todate = $_POST["todate"];
        $reason = $_POST["reason"];
        $crdate = $_POST["crdate"];
        $lestatus = "pending";
        $sick_value = "sick"; 
        $inj = "injury";
        $emerg = "emerg";
        $medic = "medic";
    echo $frdate;
if(isset($_SESSION['employee_id'])){
    $employee_id = $_SESSION['employee_id'];

    // query database for employee information based on employee ID
    $sql = "SELECT * FROM employee_tbl WHERE employee_id = '$employee_id'";
    $query = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($query);
        $e_id = $row["employee_id"];


    if ($_POST["type"] == $sick_value) {
        $sick_text = "Sick";
        
    }
    elseif ($_POST["type"] == $inj) {
        $sick_text = "Injury";
    
    }
    elseif ($_POST["type"] == $emerg) {
        $sick_text = "Home Emergencies";
        
    }
    elseif ($_POST["type"] == $medic) {
        $sick_text = "Medical Appointments";
        
    }
    else {
        // The "Sick" option is not selected
        echo "Option not selected";
    }
    }

mysqli_query($connection, "INSERT INTO leave_tbl (leave_id, le_date, fr_date,to_date, le_type, reason, le_status,employee_id) VALUES ('null', '$crdate', '$frdate','$todate','$sick_text','$reason','$lestatus','$e_id')");
header('location:leave_history.php');
?>