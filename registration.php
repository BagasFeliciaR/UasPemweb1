<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if(empty($_POST['firstname']) || 
   	    empty($_POST['lastname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "Semua Bidang Harus Diisi!";
		}
	else
	{
	
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  
       	
          echo "<script>alert('Password Tidak Sesuai');</script>"; 
    }
	elseif(strlen($_POST['password']) < 6)  
	{
      echo "<script>alert('Password Hrus Diatas >=6');</script>"; 
	}
	elseif(strlen($_POST['phone']) < 10)  
	{
      echo "<script>alert('Nomor Telepon Invalid!');</script>"; 
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
          echo "<script>alert('Invalid email address!');</script>"; 
    }
	elseif(mysqli_num_rows($check_username) > 0) 
     {
       echo "<script>alert('Username Telah Digunakan!');</script>"; 
     }
	elseif(mysqli_num_rows($check_email) > 0) 
     {
       echo "<script>alert('Email Sudah Digunakan!');</script>"; 
     }
	else{
       
	 
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
	mysqli_query($db, $mql);
	
		 header("refresh:0.1;url=login.php");
    }
	}

}


?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Registration</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> </head>
<body>
<div style=" background-image: url('img/kota\ gresik.png')">
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
         <div class="page-wrapper">
            
               <div class="container">
                  <ul>
                    
                    
                  </ul>
               </div>
            
            <section class="contact-page inner-page">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12">
                        <div class="widget" >
                           <div class="widget-body">
                            
							  <form action="" method="post">
                                 <div class="row">
								  <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">User-Name</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">First Name</label>
                                       <input class="form-control" type="text" name="firstname" id="example-text-input"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Last Name</label>
                                       <input class="form-control" type="text" name="lastname" id="example-text-input-2"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email Address</label>
                                       <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Phone number</label>
                                       <input class="form-control" type="text" name="phone" id="example-tel-input-3"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" class="form-control" name="password" id="exampleInputPassword1"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Confirm password</label>
                                       <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2"> 
                                    </div>
									 <div class="form-group col-sm-12">
                                       <label for="exampleTextarea">Delivery Address</label>
                                       <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                    </div>
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="Register" name="submit" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>
                  
						   </div>
           
                        </div>
                     
                     </div>
                    
                  </div>
               </div>
            </section>
            
      
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
         
         </div>
       
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>