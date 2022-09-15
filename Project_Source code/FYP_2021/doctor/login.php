<?php session_start();

ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Hospital Website Design Tutorial</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    
    .login-form {
    width: 400px;
    margin: 70px 200px 0px 0px;
    font-size: 15px;
    float: right;
}
.login-form form {
    margin-bottom: 15px;
    background: #F5F8FD;
    box-shadow:  2px 2px 2px 2px rgba(0.2, 0.2, 0.2, 0.2);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
  </style>
    
  <script src="assets/js/sweetalert.min.js"></script>
    

</head>
<body>
    

<!-- header section starts  -->

<header>

<div class="container" style="margin-top:20px;  ">

     <a href="..\homepage.php"><h2 style="color: #007BFF"> Home Page </h2></a>

    

</div>

</header>

<!-- header section ends  -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="container" >

    <div class="row min-vh-100 align-items-center text-center text-md-left">

        <div class="col-md-6 pr-md-5" data-aos="zoom-in" style=" margin: 0px 0px 100px 30px">
            <img src="Doctors-bro.svg" width="100%" alt="">
        </div>

<?php 
include"connect.php";

if(isset($_POST['btn']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $select1 = "select * from login_doc where user_name = '$user' and password = '$pass'";
    $res = mysqli_query($con, $select1);
    $data = mysqli_fetch_array($res);
    
    if($data['user_name'] == $user && $data['password'] == $pass)
    {
        

    $_SESSION['name'] = $data['id'];
        
        header("location:dashboard_2.php");
        ob_end_flush();
    }
    else{
echo"<script >
        
        swal({
  title: 'Enter Correct User name or Password ',
  icon: 'warning',
  button: 'Done',
});
    </script>";

    }
    

}

 ?>


      
        

    <div class="login-form" style=" margin: -100px 0px 0px 70px;  ">
    <form  method="post">
        <img src="assets/img/doc.jpg"; style="height: 50; width: 200px; margin-left: 65px ">
        <h2 class="text-center"></h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="btn" class="btn btn-primary btn-block">Log in</button>
        </div>
              
    </form>
   
</div>
    

    </div>

</div>


</section>



<!-- home section ends -->

<!-- about section start  -->



















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- custom js link  -->
<script src="js/main.js"></script>


<script>

AOS.init({
    duration:1000,
    delay:400
});

</script>

</body>
</html>