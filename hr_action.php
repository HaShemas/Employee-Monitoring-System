<!-- ADD-->
<?php
if(isset($_SESSION['hr_id'])){
	$hr_id = $_SESSION['hr_id'];
 

$sql = "SELECT * FROM hr_tbl WHERE hr_id = '$hr_id'";
$query = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($query);
}
?>
<div class="modal fade" id="addnew2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Employee</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew2.php" class = "form">
                <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Employee ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id = "employee_id"name="employee_id" required>
						</div>
					</div>
                    <div style="height:10px;"></div>
                <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id = "password"name="password" required>
						</div>
					</div>
                    <div style="height:10px;"></div>
                <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">First Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id = "fname"name="fname" required>
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id = "mname"name="mname" required>
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="lname" name="lname" required >
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Phone Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" id = "phone_number" name="phone_number" required value="">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="email" name="email"  value=""required>
							<input type="hidden" class="form-control" id="hr" name="hr"  value="<?php echo $row['hr_id']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Start Time:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="start_time" placeholder="HH:MM:SS" required>
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">End Time:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="end_time"  value="" placeholder="HH:MM:SS" required>
						</div>
					</div>
                </div> 
				</div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>				</form>
                </div>
				
            </div>
        </div>
    </div>
 
   <!-- Delete -->
<div class="modal fade" id="del<?php echo $row2['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
            </div>
            <div class="modal-body">
			
            <?php
                $del=mysqli_query($connection,"SELECT * FROM employee_tbl WHERE employee_id='".$row2['employee_id']."'");
                $drow=mysqli_fetch_array($del);
            ?>
            <div class="container-fluid">
			
                <h5><center>Are you sure to delete <strong><?php echo ucwords($drow['fname'].' '.$drow['lname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row2['employee_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
				
            </div>
			</form>
        </div>

    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row2['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($connection,"SELECT * FROM employee_tbl INNER JOIN time_tbl ON employee_tbl.employee_id=time_tbl.employee_id WHERE employee_tbl.employee_id='".$row2['employee_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?employee_id=<?php echo $erow['employee_id']; ?>">
                <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Employee ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="employee_id" class="form-control" readonly value="<?php echo $erow['employee_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="password" class="form-control" value="<?php echo $erow['password']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="fname" class="form-control" value="<?php echo $erow['fname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="mname" class="form-control" value="<?php echo $erow['mname']; ?>">
							<input type="text" class="form-control" id="hr" name="hr"  value="<?php echo $row['hr_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lname" class="form-control" value="<?php echo $erow['lname']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Phone Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="phone_number" class="form-control" value="<?php echo $erow['phone_number']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="email" name="email" class="form-control" value="<?php echo $erow['email']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Start Time</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="start_time" class="form-control" value="<?php echo $erow['start_time']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">End Time</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="end_time" class="form-control" value="<?php echo $erow['end_time']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
	<!-- View -->
	
    <div class="modal fade" id="view<?php echo $row2['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     
	<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Daily Time Record:</h4></center>
                </div>
                <div class="modal-body" style="width: 100%;">
				<?php
					$views="SELECT *
					FROM attendance_tbl
					INNER JOIN employee_tbl ON attendance_tbl.employee_id = employee_tbl.employee_id
					WHERE employee_tbl.employee_id = '".$row2['employee_id']."'
					ORDER BY attendance_id DESC";
					$res = mysqli_query($connection, $views);
								
					?>    
				<div class="container-fluid">
				
				Employee: <?php echo $row2["fname"];?>  <?php echo $row2["lname"];?>
					<br>
					<br>
					
					<table class="table">
					<thead>
						<tr>
						<th>DATE</th>					
						<th>TIME IN</th>
						<th>TIME IN STATUS</th>
						<th>TIME OUT</th>
						<th>TIME OUT STATUS</th>
						<!--<th>STATUS</th>-->
						</tr>
					</thead>
					<tbody>
				
				<?php
				
					while ($row = mysqli_fetch_assoc($res)) {?>

						<tr>
					<td><?php echo $row["date"];?></td>
					<td><?php echo $row["time_in"];?></td>
					<td><?php echo $row["ti_status"];?></td>
					<td><?php echo $row["time_out"];?></td>
					<td><?php echo $row["to_status"];?></td>
					<!--<td><?php //echo $row["statuses"];?></td>-->
					
					</tr>
					<?php } 	
					?>
				</tbody>
				</table>
				</div>			  		
					
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> OK</button>
                    
                </div>
				
					
            
        </div>
    </div>
<!-- /.modal -->