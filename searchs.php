<?php
session_start();
require_once("database.php");

?>
 <table class="table table-bordered" border="1" style="width: 100%; table-layout: auto;">
        <thead>
        <tr>
            <th>Employee ID</th>
            <th>Password</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Time Schedule</th>
            <th> ACTION</th>  
          </tr>
        </thead>
        <tbody>
        <?php mysqli_data_seek($query2, 0); // reset query pointer ?>
          <?php while ($row2 = mysqli_fetch_assoc($query2)) { ?>
          <tr>
          <td><?php echo $row2["employee_id"];?></td>
          <td><?php echo $row2["password"];?></td>
            <td><?php echo $row2["fname"];?></td>
            <td><?php echo $row2["mname"];?></td>
            <td><?php echo $row2["lname"];?></td>
            <td><?php echo $row2["phone_number"];?></td>
            <td><?php echo $row2["email"];?></td>
            <td><?php echo $row2["time_sched"];?></td>
            <td>
            <a href="#edit<?php echo $row2['employee_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row2['employee_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
              <?php include('hr_action.php'); ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php 
      include('hr_action.php'); 
      ?>