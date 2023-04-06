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
					FROM leave_tbl
					INNER JOIN employee_tbl ON leave_tbl.employee_id = employee_tbl.employee_id
					WHERE employee_tbl.employee_id = '".$row2['employee_id']."'
					ORDER BY leave_id DESC";
					$res = mysqli_query($connection, $views);				
					?>

				<div class="container-fluid">
					<table class="table">
					<thead>
						<tr>
						
						<th>DATE</th>					
						<th>DATE FROM</th>
						<th>DATE TO</th>
						<th>LEAVE TYPE</th>
						<th>REASON/S</th>
						<th>STATUS</th>
						</tr>
					</thead>
					<tbody>
				
				<?php
				
					while ($rows = mysqli_fetch_assoc($res)) {?>
						
						<tr>
					<td><?php echo $rows["le_date"];?></td>
					<td><?php echo $rows["fr_date"];?></td>
					<td><?php echo $rows["to_date"];?></td>
					<td><?php echo $rows["le_type"];?></td>
					<td><?php echo $rows["reason"];?></td>
					<td><?php echo $rows["le_status"];?></td>
					
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