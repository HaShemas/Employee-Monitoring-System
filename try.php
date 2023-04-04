<?php
session_start();
require_once("database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
  <link  rel="stylesheet" href="attend_style.css">
</head>
<body>
  <div class="container">
    <nav></nav>
    <main>
      <br>
      <br>
      <br>
      EMPLOYEE'S ATTENDANCE
      <br>
      <br>
      <br>
      <button class="disabled-button" disabled>TIME SCHEDULE: 4:30pm-7:30pm</button>
      <br>
      <br>
      <form method="POST" action = "" class="form">
      <input type="submit" name="submit" id="submit" value="ADD" class="btn btn-danger" style="display: flex; justify-content: space-between; margin-left: 100px;">
    <br>
  </form>
      <div style="display: flex; justify-content: space-between; margin-left: 100px;">
        <div style="text-align: left;">Daily Time Record:</div>
      </div>
      <?php
  if(isset($_SESSION['employee_id'])){
    $employee_id = $_SESSION['employee_id'];
    

    // query database for employee information based on employee ID
    $sql = "SELECT attendance_tbl.date,attendance_tbl.time_in,attendance_tbl.time_out,attendance_tbl.status,attendance_tbl.time_sched,attendance_tbl.employee_id,employee_tbl.employee_id FROM employee_tbl INNER JOIN attendance_tbl ON attendance_tbl.employee_id=employee_tbl.employee_id WHERE employee_tbl.employee_id = '$employee_id'";
    $query = mysqli_query($connection, $sql);

}

   ?>
      <table class = "table table-bordered" border="1"  width="80%" style="margin: auto;">
        <thead>
          <tr>
            <th>DATE</th>
            <th>TIME IN</th>
            <th>TIME OUT</th>
            <th>STATUS</th>
            
          </tr>

<?php
while ($row = mysqli_fetch_assoc($query)) {

$date = $row["date"];
$time_in = $row["time_in"];
$time_out = $row["time_out"];
$status = $row["status"];


?>
<tr>
<td><?php echo $date;?></td>
<td><?php echo $time_in;?></td>
<td><?php echo $time_out;?></td>
<td><?php echo $status;?></td>

</tr>
<?php
}
?>
        </thead>
        <tbody>
          <!-- add your PHP code to retrieve and display data here -->
        </tbody>
      </table>
    </main>

    <div id="sidebar">
      <img src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/image/rDtN98Qoishumwih/graphicstock-sleepy-tired-business-woman-holding-cup-of-coffee-and-yawning-while-working-in-office-exhausted-business-woman-yawning-and-drinking-coffee-at-work-vector-flat-design-illustration-square-layout_SQeBTBdILb_thumb.jpg" alt="Image" height="80" width="80" border-radius: 50%;>
      <br></br>ID: <?php echo $employee_id; ?><br></br>
      <a href="dashboard.php" class="button">HOME</a>
    </div>

    <div id="content1"></div>
    <div id="content2"><br></br><br></br></div>
    <div id="content3"></div>

    <footer></footer>
  </div>

  
</body>
</html>