<?php 

$con=mysqli_connect("localhost","root","","receptionist");//hostname,db user,db user pass, db name
if(!$con)
{
	echo mysqli_error($con);
}


 ?>