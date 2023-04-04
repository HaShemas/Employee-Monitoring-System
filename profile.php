<?php
session_start();
require_once("database.php");

      if(isset($_SESSION['employee_id'])){
        $employee_id = $_SESSION['employee_id'];
     

        // query database for employee information based on employee ID
        $sql = "SELECT * FROM employee_tbl WHERE employee_id = '$employee_id'";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($query);

    } else {
        // employee ID not found in session variable, redirect to login page
        header("Location: login.php");
        exit();
    }
    
?>
<?php

// If the user is not logged in, redirect to the login page

// If the user clicked the logout button, destroy the session and redirect to the login page
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
  <style>
  
    </style>
<body>

<head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <link  rel="stylesheet" href="prof_style.css">

</head>

<div class="container">
  <nav></nav>
  <main>
    <br>
    <br>
    <br>
    EMPLOYEE'S INFORMATION
    <br>
    <br>
    <br>
    <br>
    <br>  
    <br>
    <div style="display: flex; justify-content: space-between; margin-left: 100px;">
  <div style="text-align: left;">First Name:</div>
  <div style="text-align: center;">Last Name:</div>
  <div style="text-align: right;margin-right: 80px;">Middle Name:</div>
</div>
<br>
<div style="display: flex; justify-content: space-between; margin-left: 100px;">
  <div style="text-align: left;"><?php echo $row['fname'] ?></div>
  <div style="text-align: center;"><?php echo $row['lname'] ?></div>
  <div style="text-align: right;margin-right: 120px;"><?php echo $row['mname'] ?></div>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="display: flex; justify-content: space-between; margin-left: 100px;">
  <div style="text-align: left;">Phone Number:</div>
  <div style="text-align: center;">Email:</div>
  <div style="text-align: right;margin-left: 200px;"></div>
</div>
<br>
<div style="display: flex; justify-content: space-between; margin-left: 100px;">
  <div style="text-align: left;"><?php echo $row['phone_number'] ?></div>
  <div style="text-align: center;"><?php echo $row['email'] ?></div>
  <div style="text-align: right;margin-left: 70px;"></div>
</div>
   
    
  </main>
  <div id="sidebar">
  <form method="post">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br> ID: <?php echo $row['employee_id'] ?><br></br>
    <a href="dashboard.php" class="button">HOME</a>
    <input type="submit" name="logout" value="LOGOUT" class="button"></a>
    </form>
  </div>
  <div id="content1">
 
            
  </div>
  <div id="content2"><br></br><br></br></div>
  <div id="content3"></div>
  <footer>
    
  </footer>
</div>
<div>
  
</div>



</body>
</html>
