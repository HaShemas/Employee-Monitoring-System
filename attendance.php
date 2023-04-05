<?php
session_start();
require_once("database.php");

if(isset($_SESSION['employee_id'])){
    $employee_id = $_SESSION['employee_id'];

    // query database for employee information based on employee ID
    $sql = "SELECT attendance_tbl.attendance_id, attendance_tbl.date, attendance_tbl.time_in,attendance_tbl.ti_status, attendance_tbl.time_out, attendance_tbl.statuses, attendance_tbl.employee_id 
    FROM employee_tbl 
    INNER JOIN attendance_tbl ON attendance_tbl.employee_id=employee_tbl.employee_id 
    WHERE employee_tbl.employee_id = '$employee_id'
    ORDER BY attendance_tbl.attendance_id DESC";   
    $query = mysqli_query($connection, $sql);
    $row2 = mysqli_fetch_assoc($query);

    $sql2="SELECT start_time,end_time,employee_id FROM time_tbl WHERE employee_id =  '$employee_id'";
    $query2 = mysqli_query($connection, $sql2);
    //retrieve employee's time schedule
    $row = mysqli_fetch_assoc($query2);
    $start_time = $row["start_time"];
    $end_time = $row["end_time"];
    
   
}
?>


<!DOCTYPE html>
<html>
<head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="attend_style.css">
</head>
  <div class="container">
    <nav></nav>
    <main style="height: 100%;">
      <br>
      <br>
      <br>
      EMPLOYEE'S ATTENDANCE
      <br>
      <br>
      <br>
      <button class="disabled-button" disabled>TIME SCHEDULE: <?php echo $start_time; ?> - <?php  echo $end_time;?></button>
      <br>
      <br>
      <form method="POST" action="" class="form">
      <span ><a href="#addnew" name = "save" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus" style = "margin-left: 1px;"></span> Time In</a></span>
      <br>
      <br>
      
      <br>
     <br>
    
      <br>
      </form>
      
      <div style="display: flex; justify-content: space-between; margin-left: 50px;">
        <div style="text-align: left;">Daily Time Record:</div>
        <br>
      <br>
      </div>
      <table class="table table-bordered" border="1" style="width: 100%; table-layout: auto;">
        <thead>
          <tr>
            <th>DATE</th>
            <th>TIME IN</th>
            <th>TIME OUT</th>
            <th>STATUS</th>
            <th> ACTION</th>  
          </tr>
        </thead>
        <tbody>
          <?php mysqli_data_seek($query, 0); // reset query pointer ?>
          <?php while ($row = mysqli_fetch_assoc($query)) { ?>
          <tr>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["time_in"];?></td>
            <td><?php echo $row["time_out"];?></td>
            <td><?php echo $row["statuses"];?></td>
            
            <td> 
              <a 
              <?php
           

              if(($row['time_out'])=='00:00:00') { // check if time out has NOT been updated
                if(($row2['ti_status'])=="Absent") { // check if time out has been updated
                  echo '<button type="button" class="btn btn-default" disabled>OUT</button>';
                }
                else{?>
                  href="#edit<?php echo $row["attendance_id"]; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Time Out</a>
                  <?php include('add_modal.php'); ?>
              <?php
                }
              }
                if(($row['time_out'])!='00:00:00') { // check if time out has been updated
                echo '<button type="button" class="btn btn-default" disabled>Time Out Already Recorded</button>';
              }
          ?>
          </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php include('add_modal.php'); ?>
    </main>

    <div id="sidebar" style="height: auto;">
      <img src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width="80" style="border-radius: 50%;">
      <br></br>EMPLOYEE ID: <?php echo $employee_id; ?><br></br>
      <a href="dashboard.php" class="button">HOME</a>
          </div>
    <div id="content1"></div>
    <div id="content2"><br></br><br></br></div>
    <div id="content3"></div>

    <footer></footer>
    
  </div>
</body>
</body>
</html>