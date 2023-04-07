<?php
session_start();
require_once('database.php');

if(isset($_SESSION['employee_id'])){
  $employee_id = $_SESSION['employee_id'];

  $sql = "SELECT * FROM payroll_tbl WHERE  employee_id= '$employee_id'";
  $query = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($query);
  
}
if(isset($_POST['submit'])){
   
    

// Get employee ID from employee_tbl based on criteria
    //$earnings = $_POST["earnings"];
    //$health = $_POST["health"];
   // $tax = $_POST["tax"];
   // $id = $_POST["id"];
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

  $sql2 = "SELECT * FROM payroll_tbl WHERE employee_id='$employee_id' AND year='$selectedYear' AND month='$mth' AND half='$hlf'";
    $query2 = mysqli_query($connection, $sql2);
    if(mysqli_num_rows($query2) == 0) {
    } 
    else {
    $row2 = mysqli_fetch_assoc($query2);
    $earnings = $row2["earnings"];
    $health = $row2["health"];
   $tax = $row2["tax"];

   $taxes = $tax + $health;
   $total = $earnings-$taxes;

   
  }
}

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="payslip.css">
  <!-- Code by Angela Delise
https://codepen.io/angeladelise/pen/YzXLdyq
  Video Tutorial: https://www.youtube.com/watch?v=68O6eOGAGqA -->

</head>

<div class="container">
  <nav></nav>
  <main style = "width: auto; height: 500px;">
    <br></br>
  
    <div class="w3-container">
  
</div>

<div class="w3-row-padding">
<div class="w3-third">
  <label>YEAR</label>
  <form method="POST" action="" >
  <select id="yearDropdown" name="year" style="width: 320px; height: 35px;">
    <option value="">Year</option>
    <script>
      for (var i = 2023; i >= 1900; i--) {
        document.write('<option value="' + i + '">' + i + '</option>');
      }
    </script>
  </select>
  


  </div>
  
  <div class="w3-third">
  <label>MONTH</label>
  <select name="month" id="month" style="width: 320px; height: 35px;">
  <option value="">Month</option>
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>
  </div>
  <label>SELECT</label>
  <div class="w3-third">
  <select name="halves" id="halves" style="width: 320px; height: 35px;">
  <option value="una">1st Half</option>
  <option value="duha">2nd Half</option>
  
</select>
  </div>
</div>
<br></br>

<input type="hidden" name="selectedYear" id="selectedYear">
  <button name="submit" type="submit">View</button>

<br></br>
<script>
  var yearDropdown = document.getElementById("yearDropdown");
  var selectedYearInput = document.getElementById("selectedYear");
  yearDropdown.addEventListener("change", function() {
    var selectedYear = yearDropdown.value;
    if (selectedYear !== "") {
      selectedYearInput.value = selectedYear;
    }
  });
</script>
<div class="w3-row-padding">
  <div class="w3-third">
  <label>Total Earnings</label>
    <input class="w3-input w3-border" type="" placeholder="" value="<?php echo isset($total) ? $total : '0';?>"readonly>
  </div>
  <div class="w3-third">
  <label>Total Deductions</label>
    <input class="w3-input w3-border" type="" placeholder=""value="<?php echo isset($taxes) ? $taxes : '0';?>"readonly>
  </div>
</div>
</form>
<br></br>
<div class="row" style="display: flex; flex-wrap: wrap;">
  <div class="container" style="border: ridge; width: 50%; height: 200px;display: flex; flex-direction: column;">
    <h2>Earnings</h2>
    <p style="vertical-align: top; "><?php echo isset($earnings) ? $earnings : '0';?></p>
  </div>
  <div class="container" style="border: ridge; width: 50%; height: auto; display: flex; flex-direction: column;">
    <h2>Deductions</h2>
    <p style="vertical-align: top; padding-right: 350px;">TAX: <?php echo isset($tax) ? $tax : '';?></p>
    <p style="vertical-align: top; padding-right: 350px;">HEALTH: <?php echo isset($health) ? $health : '';?></p>
  </div>
</div>
  </main>
  <div id="sidebar">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>EMPLOYEE ID: <?php echo $employee_id;?><br></br>
   
    <a href="dashboard.php" class="button">HOME</a>
   
  
  </div>
  <div id="content1">
 
            
  </div>
  <div id="content2"><br></br><br></br></div>
  <div id="content3"></div>
</div>



</body>
</html>