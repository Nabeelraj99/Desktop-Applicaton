<?php   include"slicing.php" ?>
      
        <div class="page-wrapper">
            <div class="content">

                <?php 
  
    
    ?>

                
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Patient ID</th>
										<th>Patient Name</th>
									
										<th>Age</th>
										<th>Weight</th>
                                        <th>Mobie Number</th>
                                        <th>Date</th>
                                        <th>Patient Fee</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Status</th>






										<th class="text-right">Edit</th>

                                        
									</tr>
								</thead>

                              <?php 

          include"connect.php";
    $select="select*from patient_record where status='unchecked'";//"select colname,colname,colname, from tablename,select * from tablename where condition"
    $res=mysqli_query($con,$select);
    while($data=mysqli_fetch_array($res))
    {
        
    

?>   
                                <tr>

                                    <td><?php echo $data['p_id'] ?></td>
                                    <td><?php echo $data['p_name'] ?></td>
                                    <td><?php echo $data['age'] ?></td>
                                    <td><?php echo $data['weight'] ?></td>
                                    <td><?php echo $data['number'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td><?php echo $data['p_fee'] ?></td>
                                    <td><?php echo $data['dob'] ?></td>
                                    <td><?php echo $data['gender'] ?></td>
                                    <td><?php echo $data['address'] ?></td>
                                    <td><?php echo $data['status'] ?></td>
                            
                                    <td>        <button style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;"><a style="color: white" href="edit_patient.php?id=<?php echo $data['id']?>">Edit</a></button></td>
                                    

                                </tr>
                                <?php
}

?>
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
            
        </div>
		
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>