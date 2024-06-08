<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Tempat Kuliner</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/styles.css" rel="stylesheet"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"> 

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
                    <a href="/Tentang Kami/index1.php" class="nav__link">Tentang Kami</a>
                </li>

                <li class="nav__item">
                    <a href="#" class="nav__link">Tempat Kuliner</a>
                </li>

                <?php
                if (empty($_SESSION["user_id"])) // if user is not login
                {
                    echo '<li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>';
                } else {
                    echo '<li class="nav__item"><a href="your_orders.php" class="nav__link">Pesananku</a></li>';
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
        <div class="page-wrapper" >
            <div class="top-links" style="
                     padding-top: 60px;
                    padding-bottom: 30px;">
                <div class="container">
                    <ul class="row links">
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#">Pilih Restoran</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Pilih Kuliner Favoritmu</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Pesan Dan Ambil</a></li>
                    </ul>
                </div>
            </div>
            <div class="inner-page-hero bg-image" data-image-src="img/kota\ gresik.png">
                <div class="container"> </div>
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">     
                    </div>
                </div>
            </div>
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								<?php $ress= mysqli_query($db,"select * from restaurant");
									      while($rows=mysqli_fetch_array($ress))
										  {
													
						
													 echo' <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
															<div class="entry-logo">
																<a class="img-fluid" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Food logo"></a>
															</div>
															<!-- end:Logo -->
															<div class="entry-dscr">
																<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																
															</div>
															<!-- end:Entry description -->
														</div>
														
														 <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
																<div class="right-content bg-white">
																	<div class="right-review">
																		
																		<a href="dishes.php?res_id='.$rows['rs_id'].'" class="btn btn-purple">View Menu</a> </div>
																</div>
																<!-- end:right info -->
															</div>';
										  }
						
						
						?>
                                    
                                </div>
                
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