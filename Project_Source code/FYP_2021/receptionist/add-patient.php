<?php   include"slicing.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">


                        <?php 
      include "connect.php";
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
      

        $select="select*from patient_record";
            $run= mysqli_query($con,$select);
            $fetch= mysqli_fetch_array($run);

            if($fetch['p_id']==$patient_id){?>

            <span style="color:red"><?php echo "Already Exist" ?></span>
            <?php 
                                    
                                        }
            else{

        $insert="insert into patient_record(p_id,p_name,age,weight,number,date,p_fee,dob,gender,address,status) value('$patient_id','$patient_name','$patient_age','$patient_weight','$patient_number','$patient_date','$patient_fee','$patient_dob','$patient_gender','$patient_address','unchecked')";
        //insert query: insert into tablename(colname,colname,)values('colvalue','colvalue')
        $res=mysqli_query($con,$insert);

    

                    }                    


                                    
        
        
         }   
            


     ?>









                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">


                                        <label>Patient ID</label>
                                        <input class="form-control" required="" type="text" name="p_id" placeholder="Patient ID">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name</label>
                                        <input class="form-control" required="" type="text" name="p_name" placeholder="Patient Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input class="form-control" required="" type="number" name="p_age" placeholder="Age">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input class="form-control" required="" type="number" name="p_weight" placeholder="Weight">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control" required="" type="number" name="p_number" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input class="form-control" required="" type="Date" name="p_date" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Fee </label>
                                        <input class="form-control" required="" type="number" name="p_fee" placeholder="Patient Fee">
                                    </div>
                                </div>
                                
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input class="form-control" required="" type="Date" name="p_dob" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" required="" name="p_gender" value="Male" class="form-check-input" >Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" required="" name="p_gender" value="Female" class="form-check-input"  >Female
											</label>
										</div>
									</div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<textarea rows="4" cols="20" type="text" required="" class="form-control " name="p_address" placeholder="Address"></textarea>
											</div>
										</div>
										
										
										</div>
										
										
									</div>
								
                               
                              
                            </div>
                          
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="btn">Create Patient</button>
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
if( isset($res))
        {
            echo"<script >
        
        swal({
  title: 'Patient has Added',
  icon: 'success',
  button: 'Well Done!',
});
    </script>";
        }


     ?>

  

</body>


<!-- add-patient24:07-->
</html>
