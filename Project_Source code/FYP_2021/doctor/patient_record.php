<?php   include"slicing2.php" ?>

      
       

 <div class="page-wrapper">


            <div class="content">
 
        <div class="row">
              <form method="post" action="patient_record.php">

<div class="container">
    <div class="row">
       
        <div class="form-group" style="margin-left: 840px;">

<input name="search" class="form-control" type="text" style="height: 34px; width: 200px; " maxlength="64" placeholder="Search by id" />

</div>
<button type="submit" name="btn" class="btn  btn-lg" style="background-color: #5AA3D0;color: white; height: 40px">Search</button>
    </div>
</div>
</form>


          <div class="col-md-12">
            <div class="table-responsive">

              <table class="table table-border table-striped custom-table datatable mb-0" id="myTable">




                <thead>
                                     



                  <tr>

                    <th>Patient ID</th>
                    <th>Patient Name</th>
                  
                    <th>Age</th>
                    <th>Weight</th>
                                        <th>Mobile Number</th>
                                        <th>Date</th>
                                        <th>Patient Fee</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Symptoms</th>
                                        <th>Prescription</th>
                                        <th>Status</th>






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


$select2="select*from patient_record where p_id like '%$search%' and status='checked' ";
}
else{
    $select2="select*from patient_record where status='checked'";
}
$run=mysqli_query($con,$select2);
while ($data2=mysqli_fetch_array($run))
 { 

  
    ?>  

      <tr>

                                    <td><?php echo $data2['p_id'] ?></td>
                                    <td><?php echo $data2['p_name'] ?></td>
                                    <td><?php echo $data2['age'] ?></td>
                                    <td><?php echo $data2['weight'] ?></td>
                                    <td><?php echo $data2['number'] ?></td>
                                    <td><?php echo $data2['date'] ?></td>
                                    <td><?php echo $data2['p_fee'] ?></td>
                                    <td><?php echo $data2['dob'] ?></td>
                                    <td><?php echo $data2['gender'] ?></td>
                                    <td><?php echo $data2['address'] ?></td>
                                    <td><?php echo $data2['symp'] ?></td>
                                    <td><?php echo $data2['presc'] ?></td>

                                    <td><?php echo $data2['status'] ?></td>
                                    <td><button style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;"><a style="color: white" href="manage_record.php?id=<?php echo $data2['id']?>">Edit</a></button></td>
                                     <td><button style="background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;"><a style="color: white" href="del_patient.php?id=<?php echo $data2['id']?>">Delete</a></button></td>
                                    

                                </tr>
                                 <?php
}

?>
                </tbody>
              </table>

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