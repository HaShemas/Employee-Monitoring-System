
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
<body>
<head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <link  rel="stylesheet" href="dash_style.css">
</head>

<div class="container">
  <nav></nav>
  <main>
    <br></br>
    <br></br>
    
    <br></br>
    <button class="button-86" role="button">Click to view tasks</button>
    
    
    
  </main>
  <div id="sidebar">
  <form method="post">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>HR ID: <?php echo $row['employee_id']?><br></br>
    <a href="profile-admin.php" class="button">PROFILE</a>
    <a href="employee-admin.php" class="button">EMPLOYEE LIST</a>
    <input type="submit" name="logout" value="LOGOUT" class="button"></a>
   </form>
  </div>
  <div id="content1">
            
  </div>
  <div id="content2"><br></br><br></br>TASKS DONE</div>
  <div id="content3"></div>
  <footer>
    <br></br>
    
  OUR MISSION IS TO BRING CREATIVE PROJECTS TO LIFE WHILE EARNING. 
  </footer>
</div>



</body>
</html>