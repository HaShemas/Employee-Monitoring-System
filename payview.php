<?php

$year = $_POST["selectedYear"];
echo $year;

require_once('database.php');
session_start();

if(isset($_SESSION['employee_id'])){
    $hid = $_SESSION['employee_id'];
    
}
// Get employee ID from employee_tbl based on criteria
    $earnings = $_POST["earnings"];
    $health = $_POST["health"];
    $tax = $_POST["tax"];
    $id = $_POST["id"];
    $selectedYear = $_REQUEST['year'];
    $jan = "January";
    $feb = "February";
    $mar = "March";
    $apr = "April";
    $may = "May";
    $jun = "June";
    $jul = "July";
    $aug = "August";
    $sept = "September";
    $oct = "October";
    $nov = "November";
    $dec = "December";
    $fst = "una";
    $duha = "duha";
    
    if ($_REQUEST["halves"] != ""){

        if ($_REQUEST["halves"] == $fst) {
            $hlf = "1st Half";
            
        }
        if ($_REQUEST["halves"] == $duha) {
            $hlf = "2nd Half";
            
        }
    }
   
    if ($_REQUEST["month"] != ""){
        if ($_REQUEST["month"] == $jan) {
            $mth = "January";
            
        }
        elseif ($_REQUEST["month"] == $feb) {
            $mth = "February";
        
        }
        elseif ($_REQUEST["month"] == $mar) {
            $mth = "March";
            
        }
        elseif ($_REQUEST["month"] == $apr) {
            $mth = "April";
            
        }
        elseif ($_REQUEST["month"] == $may) {
            $mth = "May";
            
        }
        elseif ($_REQUEST["month"] == $jun) {
            $mth = "June";
            
        }
        elseif ($_REQUEST["month"] == $jul) {
            $mth = "July";
            
        }
        elseif ($_REQUEST["month"] == $aug) {
            $mth = "August";
            
        }
        elseif ($_REQUEST["month"] == $sept) {
            $mth = "September";
            
        }
        elseif ($_REQUEST["month"] == $oct) {
            $mth = "October";
            
        }
        elseif ($_REQUEST["month"] == $nov) {
            $mth = "November";
            
        }
        elseif ($_REQUEST["month"] == $dec) {
            $mth = "December";
            
        }
        
    }
    
    //mysqli_query($connection, "INSERT INTO payroll_tbl VALUES ('null', '$earnings', '$health','$tax','$selectedYear','$mth','$hlf','$id','$hid')");
    //header('location:payroll.php');
   


?>