<?php   include"slicing2.php" ?>
      
        <div class="page-wrapper">
            <div class="content">

  
                
				<div class="row">
                    
                        <h4 class="page-title">Manage Receptionist</h4>
                   
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
     


									<tr>
										<th>User Name</th>
										<th>Password </th>
									    <th>Edit</th>

                                        <th>Delete</th>

                                        
									</tr>
								</thead>

                                <?php 
                                include  "connect.php";

                                $select="select*from login";
                                $run= mysqli_query($con, $select);

                                while($data=mysqli_fetch_array($run))
                                {


                                 ?>

                            
                                <tr>

                                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""><?php echo $data['user_name'] ?></td>
                                    <td><?php echo $data['password'] ?></td>
                                     <td ><button style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 12px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  width: 90px;
   "><a  style="color: white"  href="edit_rep.php?id=<?php echo $data['id']?>">Edit</a></button></td>
                                      <td><button style="background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  
  cursor: pointer;"><a style="color: white" href="del_rep.php?id=<?php echo $data['id']?>">Delete</a></button></td>
                                   
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