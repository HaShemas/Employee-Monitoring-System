<!-- /.modal --><!-- Modal -->
<div class="modal fade" id="view<?php echo $row['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Employee Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
          $views="SELECT * FROM employee_tbl 
                  INNER JOIN leave_tbl ON leave_tbl.employee_id=employee_tbl.employee_id 
                  WHERE employee_tbl.employee_id = '".$row['employee_id']."'
                  ORDER BY leave_tbl.leave_id DESC";
          $res = mysqli_query($connection, $views);
           $leave_request = mysqli_fetch_assoc($res)
        ?>
        <!-- Insert code to display leave request details here -->
        <p>Employee ID: <?php echo $leave_request['employee_id']; ?></p>
        <p>First Name: <?php echo $leave_request['fname']; ?></p>
        <p>Middle Name: <?php echo $leave_request['mname']; ?></p>
        <p>Last Name: <?php echo $leave_request['lname']; ?></p>
        <p>Phone #: <?php echo $leave_request['phone_number']; ?></p>
        <p>Emial: <?php echo $leave_request['email']; ?></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>