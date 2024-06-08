<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  
{
	header('location:login.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Pesanan Anda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
	<link href="css/styles.css" rel="stylesheet">
<style type="text/css" rel="stylesheet">
	


.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}

/* 
table { 
	width: 750px; 
	border-collapse: collapse; 
	margin: auto;
	
	}

/* Zebra striping */
/* tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #404040; 
	color: white; 
	font-weight: bold; 
	
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	
	} */ 


@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* table { 
	  	width: 100%; 
	}

	
	table, thead, tbody, th, td, tr { 
		display: block; 
	} */
	
	
	/* thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; } */
	
	/* td { 
		
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		
		position: absolute;
	
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	} */

}







	</style>

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
                    <a href="/Tentang Kami/index1.php" class="nav__link">Tentang Kami</a>
                </li>

                <li class="nav__item">
                    <a href="restaurants.php" class="nav__link">Tempat Kuliner</a>
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
        <div class="page-wrapper">
       
           
    
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
                        <div class="col-xs-12">
                          </div>
                        <div class="col-xs-12">
                            <div class="bg-gray">
                                <div class="row">
								
							<table class="table table-bordered table-hover">
						  <thead style = "background: #404040; color:white;">
							<tr>
							
							  <th>Barang</th>
							  <th>Jumlah</th>
							  <th>Harga</th>
							   <th>Status</th>
							     <th>Tanggal</th>
								   <th>Status</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  
						  
							<?php 
				
						$query_res= mysqli_query($db,"select * from users_orders where u_id='".$_SESSION['user_id']."'");
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="6"><center>Kamu Masih Belum Memesan Sesuatu. </center></td>';
														}
													else
														{			      
										  
										  while($row=mysqli_fetch_array($query_res))
										  {
						
							?>
												<tr>	
														 <td data-column="Item"> <?php echo $row['title']; ?></td>
														  <td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
                                          <td data-column="price">Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></td>
                                          <td data-column="status"> 
                                             <?php 
                                                $status = $row['status'];
                                                if ($status == "" or $status == "NULL") {
                                             ?>
                                                <button type="button" class="btn btn-info"><span class="fa fa-bars"  aria-hidden="true" ></span> Tunggu Sebentar</button>
                                             <?php 
                                                }
                                                if ($status == "in process") {
                                             ?>
                                                <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span> Sedang Dalam Proses</button>
                                             <?php
                                                }
                                                if ($status == "closed") {
                                             ?>
                                                <button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true"></span> Mohon Ambil</button> 
                                             <?php 
                                                } 
                                                if ($status == "rejected") {
                                             ?>
                                                <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Dibatalkan</button>
                                             <?php 
                                                } 
                                             ?>
                                          </td>
														  <td data-column="Date"> <?php echo $row['date']; ?></td>
														   <td data-column="Action"> <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
															</td>
														 
												</tr>
												
											
														<?php }} ?>					
							
							
										
						
						  </tbody>
					</table>
						
					
                                    
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
<?php
}
?>