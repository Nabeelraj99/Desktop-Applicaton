<?php include "slicing2.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">




<?php 

  include "connect.php";
    $uid = $_GET['id'];

    $select = "select * from add_med where id = '$uid'";
    $run = mysqli_query($con,$select);
    $data = mysqli_fetch_array($run);
      if (isset($_POST['btn']))
      {
        $mname=$_POST['name'];
        $mnature=$_POST['nature'];
        $mgrade=$_POST['grade'];
        $msymptom=$_POST['symp'];
        $mdescription=$_POST['desc'];
        $mlocation=$_POST['loc'];


        $update= "update add_med set med_name='$mname', med_nature='$mnature', med_grade='$mgrade', med_symp='$msymptom', med_desc='$mdescription', med_loc= '$mlocation' where id='$uid'";

        $res= mysqli_query($con,$update);

      }


 ?>















                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Medicine</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Medicine Name </label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $data['med_name'] ?>">
                                    </div>
                                </div>
                               
                              
                             
                               
								
                                
								<div class="col-sm-12">
									<div class="row">
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											
												<label>Nature</label>
												<select class="form-control" name="nature" >
                                                    <option><?php echo $data['med_nature']?></option>

													<option>Cold</option>
													<option>Warm</option>
                                                    <option>Mixed</option>
												</select>
											

										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											 <div class="form-group">
                                                <label>Grade</label>
                                                <select class="form-control" name="grade" >
                                                    <option><?php echo $data['med_grade'] ?></option>

                                                    <option>First</option>
                                                    <option>Second</option>
                                                    <option>Third</option>
                                                </select>


                                            </div> 

                                            

										</div>
										
										
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Symptoms </label>
                                        <textarea rows="4" cols="50" name="symp"> <?php echo $data['med_symp']; ?></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Description</label>
                                         <textarea rows="4" cols="50" name="desc"><?php echo $data['med_desc']; ?></textarea>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <textarea rows="4" cols="50" name="loc"><?php echo $data['med_loc']; ?></textarea>
                                    </div>
                                </div>
                                
                            </div>
                          
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="btn"  style="margin-right: 430px" type="submit">Edit Medicine</button>
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
  title: 'Medicine has Edited',
  icon: 'success',
  button: 'Done',
});
    </script>";
           
           
            }
     
    

 ?>
</body>


<!-- add-patient24:07-->
</html>
