<?php include "slicing2.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">




<?php 
      include "connect.php";
      if (isset($_POST['btn']))
      {
        $mname=$_POST['name'];
        $mnature=$_POST['nature'];
        $mgrade=$_POST['grade'];
        $msymptom=$_POST['symp'];
        $mdescription=$_POST['desc'];
        $mlocation=$_POST['loc'];

        $insert="insert into add_med(med_name,med_nature,med_grade,med_symp,med_desc,med_loc) value('$mname','$mnature','$mgrade','$msymptom','$mdescription','$mlocation')";
        //insert query: insert into tablename(colname,colname,)values('colvalue','colvalue')
        $res=mysqli_query($con,$insert);

        if($res)
        {
            echo"<script >
        
        swal({
  title: 'Medicine has Added',
  icon: 'success',
  button: 'Well Done!',
});
    </script>";
        }
        

}
     ?>

















                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Medicine</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Medicine Name </label>
                                        <input class="form-control" type="text" name="name" required="">
                                    </div>
                                </div>
                               
                              
                             
                               
								
                                
								<div class="col-sm-12">
									<div class="row">
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											
												<label>Nature</label>
												<select class="form-control" name="nature" required="">
                                                    <option required="">Select</option>

													<option required="">Cold</option>
													<option required="">Warm</option>
                                                    <option required="">Mixed</option>
												</select>
											

										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											 <div class="form-group">
                                                <label>Grade</label>
                                                <select class="form-control" name="grade" required="">
                                                    <option required="" >Select</option>

                                                    <option required="">First</option>
                                                    <option required="">Second</option>
                                                    <option required="">Third</option>
                                                </select>


                                            </div> 

                                            

										</div>
										
										
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Symptoms </label>
                                        <textarea rows="4" cols="50" name="symp" required=""></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Description</label>
                                         <textarea rows="4" cols="50" name="desc" required=""></textarea>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <textarea rows="4" cols="50" name="loc" required=""></textarea>
                                    </div>
                                </div>
                                
                            </div>
                          
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="btn"  style="margin-right: 430px" type="submit">Add Medicine</button>
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
</body>


<!-- add-patient24:07-->
</html>
