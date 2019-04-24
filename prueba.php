<?php require 'header/doctype.php';?>
    <link rel="stylesheet" href="public/css/asamblea_departamental.css">
    <link rel="stylesheet" href="public/css/swiper.min.css">
    <link rel="stylesheet" href="public/css/slither.css"> 
    <?php require 'header/title.php';
      require 'header.php';?>

  <section class="cont">

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(public/img/1p.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(public/img/2p.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(public/img/3p.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(public/img/5p.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(public/img/6p.jpg)"></div>
    
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <section>

  <!-- Swiper JS -->
  <script src="public/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
  <?php require 'footer.php';?>
<script src="public/js/nav.js"></script>