

<?php
 require_once('database.php');
 session_start();
if(isset($_SESSION['hr_id'])){
	$hr_id = $_SESSION['hr_id'];
    

$sql = "SELECT * FROM hr_tbl WHERE hr_id = '$hr_id'";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);
$hrid =$row['hr_id'];
}
   $id=$_GET['id'];  
    mysqli_query($connection,"UPDATE employee_tbl SET status='0', hr_id=$hrid WHERE employee_id='$id'");
    header('location:employee-admin.php');

?>