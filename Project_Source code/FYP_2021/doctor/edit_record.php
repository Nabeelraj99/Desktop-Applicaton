<?php   include"slicing2.php";

 ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Patient Detail</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">


                        <?php 
      include "connect.php";
    $uid = $_GET['id'];

    $select = "select * from patient_record where id = '$uid'";
    $run = mysqli_query($con,$select);
    $data = mysqli_fetch_array($run);
      if (isset($_POST['btn']))
      {
        $patient_id=$_POST['p_id'];
        $patient_name=$_POST['p_name'];
        $patient_age=$_POST['p_age'];
        $patient_weight=$_POST['p_weight'];
        $patient_number=$_POST['p_number'];
        $patient_date=$_POST['p_date'];
        $patient_fee=$_POST['p_fee'];
        $patient_dob=$_POST['p_dob'];
        $patient_gender=$_POST['p_gender'];
        $patient_address=$_POST['p_address'];
        $patient_status=$_POST['p_status'];
        $symptom= $_POST['symp'];
        $prescription= $_POST['presc'];


        $update="update patient_record set p_id='$patient_id',p_name='$patient_name',age='$patient_age',weight='$patient_weight',number='$patient_number',date='$patient_date',p_fee='$patient_fee',dob='$patient_dob',gender='$patient_gender',address='$patient_address',symp='$symptom',presc='$prescription',status='$patient_status' where id = '$uid'";
       
        $res = mysqli_query($con,$update);
        
    
  }

     ?>
        
  










                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient ID</label>
                                        <input class="form-control" type="text" readonly name="p_id" value="<?php echo $data['p_id']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name</label>
                                        <input class="form-control" type="text" name="p_name" value="<?php echo $data['p_name']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input class="form-control" type="number" name="p_age" value="<?php echo $data['age']?>">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input class="form-control" type="number" name="p_weight" value="<?php echo $data['weight']?>">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control" type="number" name="p_number" value="<?php echo $data['number']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input class="form-control" type="Date" name="p_date" value="<?php echo $data['date']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Fee </label>
                                        <input class="form-control" type="number" name="p_fee" value="<?php echo $data['p_fee']?>">
                                    </div>
                                </div>
                                
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input class="form-control" type="Date" name="p_dob" value="<?php echo $data['dob']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input class="form-control" readonly type="text" name="p_gender" value="<?php echo $data['gender']?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="p_gender" value="Male" class="form-check-input" >Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="p_gender" value="Female" class="form-check-input"  >Female
											</label>
										</div>
									</div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<textarea rows="4" cols="50" type="text" class="form-control" name="p_address"><?php echo $data['address']?></textarea>
											</div>
										</div>
										
										
										</div>
										
										
									</div>
                                    <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Symptoms</label>
                                                <textarea type="text" class="form-control" required="" rows="4" cols="50"  name="symp"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Prescription</label>
                                                <textarea type="text" class="form-control" required="" rows="4" cols="50" name="presc"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        </div>
                                        
                                        
                                    </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" type="text" readonly value="<?php echo $data['status']?>">
                                    </div>
                                </div>
                               
                              
                            </div>
                            <div class="form-group">
                                
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="p_status" required="" id="patient_active" value="Checked" checked>
									<label class="form-check-label" for="patient_active">
									checked
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="p_status" required="" id="patient_inactive" value="Unchecked">
									<label class="form-check-label" for="patient_inactive">
									unchecked
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="btn">Patient Checked</button>
                            </div>
                        </form>
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
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>

<?php 
if(isset($res))
        {
            echo"<script >
        
        swal({
  title: 'Patient has Checked',
  icon: 'success',
  button: 'Done',
});
    </script>";
            header("location:record-patients.php");
           
            }
        else
        {
            echo mysqli_error($con);
        }
    

 ?>

</body>


<!-- add-patient24:07-->
</html>
