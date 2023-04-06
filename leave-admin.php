<?php
session_start();
require_once("database.php");

if(isset($_SESSION['hr_id'])){
    $hr_id = $_SESSION['hr_id'];

    $sql = "SELECT * FROM employee_tbl INNER JOIN leave_tbl ON
    employee_tbl.employee_id=leave_tbl.employee_id INNER JOIN hr_tbl ON leave_tbl.hr_id=hr_tbl.hr_id
     WHERE employee_tbl.employee_id=leave_tbl.employee_id AND leave_tbl.hr_id=$hr_id
      AND leave_tbl.le_status = 'pending'";
  $query = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($query);
  
  }
?>

<!DOCTYPE html>
<html>

<body>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <!-- Code by Angela Delise
https://codepen.io/angeladelise/pen/YzXLdyq
  Video Tutorial: https://www.youtube.com/watch?v=68O6eOGAGqA -->
  <link href="prof_style.css" rel="stylesheet">

</head>

<div class="container">

  <nav></nav>
  <main style="width: 130%; height: auto;">
  <form method="GET" action="approve.php">
    <br></br>
    <br></br>
    LEAVE REQUESTS
    <br></br>
    <br></br>
    <br></br>
    <table class="table table-bordered" border="1" style="width: 100%; table-layout: auto;">
        <thead>
          <tr>
          <th>EMPLOYEE ID</th>
            <th>DATE</th>
            <th>DATE FROM</th>
            <th>DATE TO</th>
            <th>LEAVE TYPE</th>
            <th>REASON/S</th>
            <th>STATUS</th> 
            
          </tr>
        </thead>
        <tbody>
        <?php mysqli_data_seek($query, 0); // reset query pointer ?>
<?php while ($row = mysqli_fetch_assoc($query)) { ?>
  <tr>
    <td><?php echo $row["employee_id"];?></td>
    <td><?php echo $row["le_date"];?></td>
    <td><?php echo $row["fr_date"];?></td>
    <td><?php echo $row["to_date"];?></td>
    <td><?php echo $row["le_type"];?></td>
    <td><?php echo $row["reason"];?></td>
    
    <td>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#view<?php echo $row['employee_id']; ?>">
        <span class="glyphicon glyphicon-eye-open"></span> View
      </button>
      <button type="reset" class="btn btn-warning" onclick="window.location.href='approve.php?employee_id=<?php echo $row['employee_id']; ?>'">
        <span class="glyphicon glyphicon-ok"></span> Approve
      </button>
      <button type="reset" class="btn btn-danger" onclick="window.location.href='disapprove.php?employee_id=<?php echo $row['employee_id']; ?>'">
        <span class="glyphicon glyphicon-remove"></span> Disapprove
      </button>
      
      <?php include('view.php'); ?>
    </td>
  </tr>
<?php } ?>
        </tbody>
      </table>
      </form>
  </main>
  <div id="sidebar">
    <img src = "https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width= "80" border-radius: 50%;>
    <br></br>HR ID: <?php echo $hr_id ?><br></br>
    <a href="dashboard-admin.php" class="button">HOME</a>
    <a href="e-list.php" class="button">EMPLOYEE'S LEAVE HISTORY</a>
    
  
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