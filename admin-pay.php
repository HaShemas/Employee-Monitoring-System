<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row2['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">PAY</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$pay=mysqli_query($connection,"SELECT * FROM employee_tbl WHERE employee_tbl.employee_id='".$row2['employee_id']."'");
					$prow=mysqli_fetch_array($pay);
				?>
				<div class="container-fluid">
				<form method="POST" action="pay.php?employee_id=<?php echo $prow['employee_id']; ?>">
                <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Employee ID:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id" class="form-control" readonly value="<?php echo $prow['employee_id']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Year:</label>
						</div>
						<div class="col-lg-10">
                        <select id="yearDropdown" name="year" class="form-control" style="width: 445px; height: 35px;">
                        <option value="">Year</option>
                        <script>
                        for (var i = 2023; i >= 1900; i--) {
                            document.write('<option value="' + i + '">' + i + '</option>');
                        }
                        </script>
                        </select>
                        <input type="hidden" name="selectedYear" id="selectedYear"  class="form-control">
                        
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
                    </select>
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Month:</label>
						</div>
						<div class="col-lg-10">
                        <select id="monthDropdown" name="month" style="width: 445px; height: 35px;">
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
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Select:</label>
						</div>
						<div class="col-lg-10">
                        <select id="half" name="half" style="width: 445px; height: 35px;">
                        <option value="">Half</option>
                        <option value="una">1st Half</option>
                        <option value="duha">2nd Half</option>
                        
                        </select>
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Earnings:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="earnings" class="form-control">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Health Insurance:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="health" class="form-control" >
						</div>
					</div>
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">TAX:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="tax" class="form-control">
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