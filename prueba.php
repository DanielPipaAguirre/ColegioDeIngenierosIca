<?php require 'header/doctype.php';?>
    <link rel="stylesheet" href="public/css/asamblea_departamental.css">
    <link rel="stylesheet" href="public/css/swiper.min.css">
    <link rel="stylesheet" href="public/css/slither.css"> 
    <?php require 'header/title.php';
      require 'header.php';?>


  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/3)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/4)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/5)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/6)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/7)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/8)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/9)"></div>
      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/10)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

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
