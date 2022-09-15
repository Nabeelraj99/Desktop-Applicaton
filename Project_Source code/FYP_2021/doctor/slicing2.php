<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
        <script src="assets/js/sweetalert.min.js"></script>

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="dashboard_2.php" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Mosinclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                   
                  
              
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="add_new_rep.php">Add Receptionist</a>
						
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
          
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Doctor</li>
                        <li>
                            <a href="dashboard_2.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                          <li>
                            <a href="pending_checkups.php"><i class="fa fa-heartbeat"></i> <span>Pending Checkups</span></a>
                        </li>
                        <li>
                            <a href="patient_record.php"><i class="fa fa-user-o"></i> <span>Patient Record</span></a>
                        </li>
                        <li>
                            <a href="add_new_rep.php"><i class="fa fa-user-o"></i> <span>Add Receptionist</span></a>
                        </li>
                          <li>
                            <a href="manage_rep.php"><i class="fa fa-user-o"></i> <span>Manage Receptionists</span></a>
                        </li>
                         
                        <li>
                            <a href="add_medicine.php"><i class="fa fa-wheelchair"></i> <span>Add Medicine</span></a>
                        </li>
                        
                        <li>
                            <a href="manage_medicine.php"><i class="fa fa-user-md"></i> <span>Manage Medicine </span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>