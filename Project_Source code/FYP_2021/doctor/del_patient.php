<?php

ob_start();
	include "connect.php";

	$uid = $_GET['id'];

	$delete = "delete from patient_record where id = '$uid'";//"delete from tablename where condition"
	$res = mysqli_query($con, $delete);
	
	if($res)
        {
            echo"<script >
        
        swal({
  title: 'Patient has Deleted',
  icon: 'success',
  button: 'Done',
});
    </script>";
           header("location:patient_record.php");
           ob_end_flush();
            }

      
    
	
?>


