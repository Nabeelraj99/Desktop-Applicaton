<?php
ob_start();

  include "connect.php";

  $uid = $_GET['id'];

  $delete = "delete from login where id = '$uid'";//"delete from tablename where condition"
  $res = mysqli_query($con, $delete);
  
  if($res)
        {
            
           header("location:manage_rep.php");
           ob_end_flush();
            }


      
    
  
?>


