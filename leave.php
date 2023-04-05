<?php
session_start();
require_once("database.php");
date_default_timezone_set('Asia/Manila');
$currentDate = date('Y-m-d'); // current date in YYYY-MM-DD format
$current_time = time();
$current_time_formatted = date('H:i:s', $current_time);
      if(isset($_SESSION['employee_id'])){
        $employee_id = $_SESSION['employee_id'];
     

        // query database for employee information based on employee ID
        $sql = "SELECT UPPER(fname) AS fname,UPPER(lname) AS lname,UCASE(SUBSTR(mname, 1, 1)) AS first_letter FROM employee_tbl WHERE employee_id = '$employee_id'";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($query);
        $fname = $row["fname"];
        $lname = $row["lname"];
        $mname = $row["first_letter"];

        $sql2 = "SELECT UPPER(fname) AS fname,UPPER(lname) AS lname,UCASE(SUBSTR(mname, 1, 1)) AS first_letter FROM employee_tbl WHERE employee_id = '11'";
        $query2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        $fname2 = $row2["fname"];
        $lname2 = $row2["lname"];
        $mname2 = $row2["first_letter"];
    } else {
        // employee ID not found in session variable, redirect to login page
        header("Location: login.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <!-- Code by Angela Delise
https://codepen.io/angeladelise/pen/YzXLdyq
  Video Tutorial: https://www.youtube.com/watch?v=68O6eOGAGqA -->
<link rel="stylesheet" href="leave.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<div class="container">
  <nav></nav>
  <main>
    <br></br>
  
    <div class="w3-container">
</div>
<form action="leave_action.php" method="POST">
<div class="w3-row-padding">
  <div class="w3-third">
  <label>Name</label>
    <input class="w3-input w3-border" name="names" readonly type="text" value="<?php echo $lname; ?>, <?php echo $fname; ?> <?php echo $mname; ?>.">
  </div>
  <div class="w3-third">
  <label>Hr</label>
    <input class="w3-input w3-border" type="text" name="hr" readonly value="<?php echo $lname2; ?>, <?php echo $fname2; ?> <?php echo $mname2; ?>.">
  </div>
  <label>Date</label>
  <div class="w3-third">
    <input class="w3-input w3-border" type="date" name="crdate" readonly value="<?php echo $currentDate; ?>">
  </div>
</div>
<br>
</br>

<div class="w3-row-padding">
  <div class="w3-third">
  <label>Inclusive Date (From)</label>
    <input class="w3-input w3-border" type="date" name="frdate" placeholder="">
  </div>
  <div class="w3-third">
  <label>Inclusive Date (To) </label>
    <input class="w3-input w3-border" type="date" name="todate" placeholder="">
  </div>
  <label>LEAVE TYPE</label>
  <div class="w3-third">
  <select name="type" id="wgtmsr" style="width: 320px; height: 35px;">
  <option value="sick">Sick</option>
  <option value="injury">Injury</option>
  <option value="emerg">Home Emergencies</option>
  <option value="medic">Medical Appointments</option>
 
</select>

  </div>
</div>
<br></br>

<textarea name="reason" placeholder="Reason/Purpose of Leave"></textarea>

<br></br>

  <button type="submit" name = "submit" value="Submit">Submit</button>
  <button type="reset" onclick="window.location.href='dashboard.php'">Cancel</button>
</form>
  </main>
  <div id="sidebar">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>EMPLOYEE ID: <?php echo $employee_id; ?><br></br>
    <a href="dashboard.php" class="button">HOME</a>
    <a href="leave_history.php" class="button">LEAVE HISTORY</a>
  
  </div>
  <div id="content1">
 
            
  </div>
  <div id="content2"><br></br><br></br></div>
  <div id="content3"></div>
  <footer>
    
  </footer>
</div>



</body>
</html>