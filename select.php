
<?php 
session_start();
require_once("database.php");
          if(isset($_SESSION['hr_id'])){
            $hr_id = $_SESSION['hr_id'];
         
        
        $sql = "SELECT * FROM hr_tbl WHERE hr_id = '$hr_id'";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($query);
          }
          if(isset($_POST["bt"])){
            $_SESSION['id'] = $_POST['employee_id'];
    $_SESSION['fname'] = strtoupper($_POST["fname"]);
    $_SESSION['lname'] = strtoupper($_POST["lname"]);
          }
          ?>
<!DOCTYPE html>
<html>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<form action="" method="POST">
<div class="w3-row-padding">
<div>
  <label>Employee ID</label>
    <input class="w3-input w3-border" name="employee_id" readonly type="text" value="<?php echo $_SESSION['id']; ?>">
  </div>
  <br>
  <div class="w3-third">
  <label>Name</label>
    <input class="w3-input w3-border" name="names" readonly type="text" value="<?php echo $_SESSION['lname']; ?>, <?php echo $_SESSION['fname'];?>">
  </div>
  <div class="w3-third">
  <label>Inclusive Date (From)</label>
    <input class="w3-input w3-border" type="date" name="frdate" placeholder="">
  </div>
  <div class="w3-third">
  <label>Inclusive Date (To) </label>
    <input class="w3-input w3-border" type="date" name="todate" placeholder="">
  </div>
  
  <br>
  <br>
  <br>
<br>

  <button type="submit" name = "show" value="show">Show</button>
  <br>
<br>
        </form>
        <?php
if (isset($_POST['show'])) {
    $ids = $_POST['employee_id'];
    $frdate = $_POST['frdate'];
    $todate = $_POST['todate'];

    $sql3 = "SELECT * FROM attendance_tbl WHERE employee_id = $ids AND date >= '$frdate' AND date <= '$todate'";
    $result = mysqli_query($connection, $sql3);
    
        if (mysqli_num_rows($result) > 0) {
        // Fetch the data
        ?>
        <table class="table table-bordered" border="" style="width: 100%; table-layout: auto;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time In</th>
                    <th>Time In Status</th>
                    <th>Time Out</th>
                    <th>Time Out Status</th>
                </tr>
            </thead>
            <tbody>
            
                <?php while ($row3 = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row3["date"]; ?></td>
                        <td><?php echo $row3["time_in"]; ?></td>
                        <td><?php echo $row3["ti_status"]; ?></td>
                        <td><?php echo $row3["time_out"]; ?></td>
                        <td><?php echo $row3["to_status"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "No records found.";
    }
}
?>
  </main>
  
  <div id="sidebar">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>HR ID: <?php echo $hr_id; ?><br></br>
    <a href="dashboard-admin.php" class="button">HOME</a>
    <a href="attendance-admin.php" class="button">BACK</a>
  
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