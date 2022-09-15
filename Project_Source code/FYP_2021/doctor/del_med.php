<?php
ob_start();


	include "connect.php";

	$uid = $_GET['id'];

	$delete = "delete from add_med where id = '$uid'";//"delete from tablename where condition"
	$res = mysqli_query($con, $delete);
	
	if($res)
        {
            echo"<script >
        
        swal({
  title: 'Medicine has Deleted',
  icon: 'success',
  button: 'Done',
});
    </script>";
           header("location:manage_medicine.php");
           ob_end_flush();
           
            }

      
    
	
?>


