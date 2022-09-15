<?php include"slicing2.php" ?>
        <div class="page-wrapper">
            <div class="content">
                
				<div class="row">



					  <form method="post" action="manage_medicine.php">

<div class="container">
    <div class="row">

       
        <div class="form-group" style="margin-left: 840px;">

<input name="search" class="form-control" type="text" style="height: 34px; width: 200px; " maxlength="64" placeholder="Search by Name" />


</div>
<button type="submit"  name="btn" class="btn  btn-lg" style="background-color: #5AA3D0;color: white; float: right; height: 40px">Search</button>
    </div>
</div>
</form>






					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Nature</th>
										<th>Grade</th>
										<th>Symptom</th>
										<th>Description</th>
										<th>Location</th>
										<th >Edit</th>
										<th >Delete</th>
									</tr>
								</thead>


<tbody>

 <?php
          include"connect.php";

if (isset($_POST['btn'])) 
{

$search=$_POST['search'];


$select2="select*from add_med where med_name like '%$search%' ";
}
else{
    $select2="select*from add_med ";
}
$run=mysqli_query($con,$select2);
while ($data2=mysqli_fetch_array($run))
 { 

  
    ?>  




                                                                              


									<tr>
										<td>
											<?php echo $data2['med_name'] ?>
											
										</td>
										<td>
											<?php echo $data2['med_nature'] ?>
											
										</td>
										<td>
											<?php echo $data2['med_grade'] ?>
											
										</td>
										<td>
											<?php echo $data2['med_symp'] ?>

											
										</td>
										<td>
											<?php echo $data2['med_desc'] ?>
											
										</td>
										<td>
											<?php echo $data2['med_loc'] ?>
											
										</td>
										<td ><button style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 12px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  width: 90px;
   "><a  style="color: white"  href="edit_med.php?id=<?php echo $data2['id']?>">Edit</a></button></td>
                                      <td><button style="background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
 
  cursor: pointer;"><a style="color: white" href="del_med.php?id=<?php echo $data2['id']?>">Delete</a></button></td>
									</tr>

									<?php 
									}
									 ?>
								</tbody>
									
									
								
								
								
									
									
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
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