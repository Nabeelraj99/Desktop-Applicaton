
<?php   include"slicing.php" ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                     <?php 
                                    include"connect.php";
                                    $query="select id from patient_record where status='unchecked'";
                                    $run3=mysqli_query($con,$query);
                                       $row=mysqli_num_rows($run3); 
                                    
                                     ?>
 
                    
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row;  ?></h3>
                                <span class="widget-title2" ><a href="record-patients.php" style="color: white">Patients Qeue</a> <i class="fa fa-check" aria-hidden="true"></i></span>
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