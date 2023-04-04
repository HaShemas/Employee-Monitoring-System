<!-- Add New -->
<?php
$token = uniqid();
$_SESSION['token'] = $token;
date_default_timezone_set('Asia/Manila');
$currentDate = date('Y-m-d'); // current date in YYYY-MM-DD format
$current_time = time();
$current_time_formatted = date('H:i:s', $current_time);

?>
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Time In</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="date1" readonly value="<?php echo $currentDate; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Time-In:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="time1" readonly value="<?php echo $current_time_formatted; ?>">
						</div>
					</div>
                    
                </div> 
				</div>
                <div class="modal-footer">
  <form method="POST">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
    <button type="submit" id="startBtn" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
   
  </form>
</div>

				
            </div>
        </div>
    </div>
	<!-- Edit -->
	
    <div class="modal fade" id="edit<?php echo $row['attendance_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Time Out</h4></center>
                </div>
				<?php
					$edit=mysqli_query($connection,"SELECT * FROM attendance_tbl WHERE attendance_id='".$row['attendance_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="editat.php?attendance_id=<?php echo $erow['attendance_id']; ?>">
				
				<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="id" readonly value="<?php echo $erow['attendance_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="date" readonly value="<?php echo $currentDate; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Time-Out:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="time" readonly value="<?php echo $current_time_formatted; ?>">
						</div>
					</div>
                    
                </div> 
				</div>
                <div class="modal-footer">
  <form method="POST">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
	<button type="save" id="startBtn" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
   
  </form>
</div>