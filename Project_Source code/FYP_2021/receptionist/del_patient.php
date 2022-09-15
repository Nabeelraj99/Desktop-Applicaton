<?php  

	include "connect.php";

	$uid = $_GET['id'];

	$delete = "delete from patient_record where id = '$uid'";//"delete from tablename where condition"
	$res = mysqli_query($con, $delete);
	if(!$res)
	{
		echo mysqli_error($con);
	}
	else
	{
		header("location:record-patients.php");
	}
?>