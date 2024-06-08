<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="css/styles.css">

   <title>RESIK || Rekomendasi Kuliner Gresik</title>
</head>
<body>
   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">
            <img src="img/logo.png" alt="Logo"> RESIK
         </a>
         <div class="nav__menu" id="nav-menu">

            <ul class="nav__list">
               <li class="nav__item">
                  <a href="../index.php" class="nav__link active-link">Home</a>
               </li>

               <li class="nav__item">
                  <a href="#about" class="nav__link">Tempat Kuliner</a>
               </li>

            <div class="nav__close" id="nav-close">
               <i class="ri-close-line"></i>
            </div>

           <img src="img/branch-2.png" alt="" class="nav__img-1">
            <img src="img/fruit-line-1.png" alt="" class="nav__img-2">
         </div>

         <div class="nav__buttons">
            <i class="ri-moon-clear-line change-theme" id="theme-button"></i>

            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-apps-line"></i>
            </div>
         </div>
      </nav>
      
   </header>

   <!--==================== Main ====================-->
   <main class="main">
      <!--==================== Home ====================-->
      <section class="home section" id="home">
         <div class="home__container container grid">
            <div class="home__data">
               <h1 class="home__tittle">
                  Selamat Datang <br>
                  Di Website "Resik" <br>
               </h1>

               <p class="home__description">
                  Di sini kami menyediakan berbagai macam informasi rekomendasi kuliner di Gresik
                  yang bisa anda coba dan nikmati. Kami selalu merekomendasikan tempat-tempat kuliner
                  khususnya UMKM dan segala kuliner khas Gresik yang enak dan lezat.
               </p>

               <a href="../index.php" class="button">
                  Lihat Rekomendasi Sekarang!
               </a>
            </div>

            <img src="img/food.png" alt="image" class="home__img">
         </div>

         <img src="img/branch-2.png" alt="image" class="home__branch">
      </section>

      <!--==================== enjoy ====================-->
      <section class="enjoy section">
         <h2 class="section__title">Ayo Dukung Produk Lokal Dan UMKM Kita</h2>

         <div class="enjoy__container container grid">
            <article class="enjoy__card">
               <div class="enjoy__bg">

                  <img src="img/Krawu.png" alt="image" class="enjoy__img">
                  <h3 class="enjoy__tittle">Nasi Krawu</h3>
                  <span class="enjoy__subtitle">Terkenal dengan sambalnya yang pedas memiliki rasa khas petis dan sangat menggugah selera.</span>
               </div>
            </article>

            <article class="enjoy__card">
               <div class="enjoy__bg">

                  <img src="img/Krawu.png" alt="image" class="enjoy__img">
                  <h3 class="enjoy__tittle">Nasi Krawu</h3>
                  <span class="enjoy__subtitle">Terkenal dengan sambalnya yang pedas memiliki rasa khas petis dan sangat menggugah selera.</span>
               </div>
            </article>

            <article class="enjoy__card">
               <div class="enjoy__bg">

                  <img src="img/Krawu.png" alt="image" class="enjoy__img">
                  <h3 class="enjoy__tittle">Nasi Krawu</h3>
                  <span class="enjoy__subtitle">Terkenal dengan sambalnya yang pedas memiliki rasa khas petis dan sangat menggugah selera.</span>
               </div>
            </article>
         </div>
      </section>

      <!--==================== Tentang Kami ====================-->
      <section class="about section" id="about">
         <div class="about__container container grid">
            <div class="about__data">
               <h2 class="section__title">
                  Apa sih "Resik" itu?
               </h2>

               <p class="about description">
                  Kami adalah platform yang didedikasikan untuk menghadirkan informasi terbaik mengenai kuliner di Gresik. Di "Resik", kami berkomitmen 
                  untuk memberikan rekomendasi kuliner yang patut Anda coba dan nikmati. Fokus utama kami adalah mengangkat UMKM lokal dan mengenalkan 
                  berbagai kuliner khas Gresik yang enak dan lezat kepada masyarakat luas. Kami memahami bahwa setiap hidangan memiliki cerita dan keunikan 
                  tersendiri.
               </p>
               <br>
               <a href="../restaurants.php" class="button">
                  Ayo Coba Sekarang!
               </a>

               <img src="img/fruit-line-1.png" alt="image" class="about__food">
            </div>
            <img src="img/food.png" alt="image" class="about__img">
         </div>
         <img src="img/branch-1.png" alt="image" class="about__branch">
      </section>

      <!--==================== Populer ====================-->
      <section class="popular section" id="popular">
         <h2 class="section__title">
            Populer Kuliner Saat Ini
         </h2>

         <div class="populer__container container grid">
            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Roomo.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Nasi Roomo / Sego Roomo</h3>
                  <span class="populer__description">Memiliki rasa gurih, 
                                             pedas, dan dominan rempah bubur. </span>
                  <h3 class="populer__harga">Rp 7,000 - Rp 8,000</h3>
                     <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>

            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Otak.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Otak otak bandeng</h3>
                  <span class="populer__description">Memiliki rasa gurih 
                  dengan aroma daun pisang yang khas.</span>
                  <h3 class="populer__harga">Rp 16,000-Rp 59,000</h3>
                  <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>

            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Bonggolan.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Bonggolan Cireng Ikan</h3>
                  <span class="populer__description">Memiliki rasa gurih dan tekstur kenyal.</span>
                  <h3 class="populer__harga">Rp 13,500–Rp 19,800</h3>
                     <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>

            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Legen.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Es Legen</h3>
                  <span class="populer__description">Memiliki rasa manis murni 
                     seperti ada soda.</span>
                  <h3 class="populer__harga">Rp 2,500-Rp 12,000</h3>
                     <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>

            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Jubung.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Jenang Jubung</h3>
                  <span class="populer__description">Memiliki rasa 
                     kenyal, lembut, gurih, dan manis</span>
                  <h3 class="populer__harga">Rp 16,000</h3>
                     <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>

            <article class="populer__card">
               <div class="populer__bg">
                  
                  <img src="img/Krawu.png" alt="image" class="populer__img">
                  <br>
                  <h3 class="populer__tittle">Nasi Krawu / Sego Krawu</h3>
                  <span class="populer__description">Memiliki rasa khas petis dan sambal pedas.</span>
                  <h3 class="populer__harga">Rp 15,000 - Rp 25,000</h3>
                  <br>
                  <button class="populer__button button">
                     <i class="ri-more-fill"></i>
                  </button>
               </div>
            </article>
         </div>
      </section>

      <!--==================== Pemberitahuan ====================-->
      <section class="join section" id="join">
         <div class="join__container container grid">
            <div class="join__content grid">
               <div class="join__data">
                  <h2 class="section__tittle">
                     Formulir Kritik dan Saran <br>
                     untuk Pembangunan Website
                  </h2>

                  <p class="join__description">
                     Kami sangat menghargai masukan Anda dalam proses pembangunan website kami. 
                     Formulir kritik dan saran ini dirancang untuk mengumpulkan pendapat dan rekomendasi 
                     dari pengguna agar kami dapat meningkatkan kualitas dan kinerja website kami. 
                     Partisipasi Anda sangat penting bagi kami untuk menciptakan pengalaman pengguna yang 
                     lebih baik dan memenuhi kebutuhan Anda secara efektif. Terima kasih atas kontribusi 
                     dan perhatian Anda.
                  </p>
               </div>

               <form action="" class="join__form">
                  <input type="text" placeholder="Nama Anda" class="join__input" required>
                  <input type="email" placeholder="Email Anda" class="join__input" required>
                  <select class="join__input" required>
                     <option value="" disabled selected>Pilih Kategori</option>
                     <option value="Desain">Desain</option>
                     <option value="Fungsionalitas">Fungsionalitas</option>
                     <option value="Konten">Konten</option>
                     <option value="Kinerja">Kinerja</option>
                     <option value="Lainnya">Lainnya</option>
                  </select>
                  <textarea placeholder="Deskripsi Kritik/Saran" class="join__input" rows="4" required></textarea>
                  <button class="join__button button">Kirim Kritik dan Saran</button>
               </form>

               <img src="img/join-bg.png" alt="img" class="join__bg">
            </div>

            <img src="img/leaf.png" alt="image" class="join__leaf-1">
            <img src="img/leaf.png" alt="image" class="join__leaf-2">
         </div>
      </section>
   </main>

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

   <!--========== Scroll ==========-->
   <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-s-line"></i>
   </a>

   <script src="js/scrollreveal.min.js"></script>
   <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/gallary.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 60, once: false, duration: 2000,
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
        });
    </script>

</body>

</html>
