
<?php include "slicing2.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <?php 
                                    include"connect.php";
                                    $query="select id from patient_record where status='unchecked'";
                                    $run3=mysqli_query($con,$query);
                                       $row=mysqli_num_rows($run3); 
                                    
                                     ?>
 
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row; ?></h3>
                                <span class="widget-title4"><a href="pending_checkups.php" style="color: white">Pending Checkups</a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                       <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                         <?php 
                                    include"connect.php";
                                    $query="select id from patient_record where status='checked'";
                                    $run3=mysqli_query($con,$query);
                                       $row=mysqli_num_rows($run3); 
                                    
                                     ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row; ?></h3>
                                <span class="widget-title2"> <a href="patient_record.php" style="color: white">Total Patients</a><i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <?php 
                                    include"connect.php";
                                    $query="select id from login";
                                    $run3=mysqli_query($con,$query);
                                       $row=mysqli_num_rows($run3); 
                                    
                                     ?>
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php echo $row; ?></h3>
								<span class="widget-title1"><a href="manage_rep.php" style="color: white;">Total Receptionists </a><i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                 
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                         <?php 
                                    include"connect.php";
                                    $query="select id from add_med";
                                    $run3=mysqli_query($con,$query);
                                       $row=mysqli_num_rows($run3); 
                                    
                                     ?>
                        
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row; ?></h3>
                                <span class="widget-title3"> <a href="manage_medicine.php" style="color: white">Total Medicine </a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
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
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>