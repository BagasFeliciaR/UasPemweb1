<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #5c4ac7;
	  }
	  </style>
 

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> 
  
</head>

<body>
<header class="header" id="header">
            <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="img/logo.png" alt="Logo"> RESIK
            </a>
            <div class="nav__menu" id="nav-menu">

                <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link active-link">Home</a>
                </li>

                <li class="nav__item">
                    <a href="#about" class="nav__link">Tentang Kami</a>
                </li>

                <li class="nav__item">
                    <a href="#join" class="nav__link">Kritik</a>
                </li>

                <?php
                if (empty($_SESSION["user_id"])) // if user is not login
                {
                    echo '<li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>';
                } else {
                    echo '<li class="nav__item"><a href="your_orders.php" class="nav__link">My Orders</a></li>';
                    echo '<li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>';
                }
                ?>

                </ul>

                <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
                </div>

                <img src="img/branch-2.png" alt="" class="nav__img-1">
                <img src="img/fruit-line-1.png" alt="" class="nav__img-2">
            </div>
            </nav>

        </header>

<div style=" background-image: url('img/kota\ gresik.png');">

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>
  

<div class="pen-title">
  <
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Login to your account</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta">Belum Punya Akun?<a href="registration.php" style="color:#5c4ac7;"> Buat Akun</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
  <div class="container-fluid pt-3">
	<p></p>
  </div>


   
   <!--==================== Footer ====================-->
   <footer class="footer">
      <div class="footer__container container grid">
         <div>
            <a href="#" class="footer__logo">
               <img src="img/footer_logo.png" alt="logo">Resik
            </a>

            <p class="footer__description">
               Makan Sehat, Hidup Sehat, Hidup Bahagia <br>
               Dengan Kuliner Khas Gresik.
            </p>
         </div>

         <div class="footer__data grid">
            <div>
               <h3 class="footer__title">RESIK</h3>

               <ul class="footer_links">
                  <li>
                     <a href="" class="footer__link">FAQs</a>
                  </li>
                  <li>
                     <a href="" class="footer__link">Tentang Kami</a>
                  </li>
                  <li>
                     <a href="" class="footer__link">Hubungi Kami</a>
                  </li>
               </ul>
            </div>

            <div>
               <h3 class="footer__title">Berita</h3>

               <ul class="footer_links">
                  <li>
                     <a href="" class="footer__link">Fitur</a>
                  </li>
                  <li>
                     <a href="" class="footer__link">Produk</a>
                  </li>
                  <li>
                     <a href="" class="footer__link">Bergabung</a>
                  </li>
               </ul>
            </div>

            <div>
               <h3 class="footer__title">Sosial Media</h3>

               <div class="footer__sosial">
                  <a href="https://www.facebook.com/" target="_blank" class="footer__sosial-link">
                     <i class="ri-facebook-box-fill"></i>
                  </a>

                  <a href="https://www.instagram.com/" target="_blank" class="footer__sosial-link">
                     <i class="ri-instagram-fill"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <span class="footer__copy">
         &#169; All Rights Reserved By RESIK
      </span>
   </footer>
       


</body>

</html>
