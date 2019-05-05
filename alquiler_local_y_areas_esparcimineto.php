<?php require 'header/doctype.php';?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="public/css/alquiler_local_y_areas_esparcimiento.css">
<link rel="stylesheet" href="public/css/swiper.min.css">
    <link rel="stylesheet" href="public/css/slither.css"> 
<?php require 'header/title.php';
      require 'header.php';?>
<!-- cuerpo -->
<section class="cont">

  <!-- CIVIL - AGRONOMIA -->
  
    <div class="swiper-container">
    <h1 class="civ_agro">CIVIL - AGRONOMIA</h1>
      <div class="swiper-wrapper">
      
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/1p.jpg">
          </div>
          <div class="details">
            <h3>ING.Ponce Manzuelos Armando Ricardo<br><span class="cap">Cap.Agronomia</span><br><span class="cod">Cod.14256</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Palomino Gallegos Percy Antonio<br><span class="cap">Cap.Agronomia</span><br><span class="cod">Cod.24104</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Hernandez Castillo Antonio Floriestan<br><span class="cap">Cap.Civil</span><br><span class="cod">Cod.27623</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Olaechea Gameros Ysaias Cesar<br><span class="cap" >Cap.Civil</span><br><span class="cod">Cod.39555</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Ordoñez Fuentes Luis Alberto<br><span class="cap">Cap.Civil</span><br><span class="cod">Cod.64667</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Huayta Coneslla Julio Cesar<br><span class="cap">Cap.Civil</span><br><span class="cod">Cod.73655</span></h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imgBX">
           <img src="public/img/6p.jpg">
          </div>
          <div class="details">
            <h3>ING.Campos Aybar Ysela Karina<br><span class="cap">Cap.Civil</span><br><span class="cod">Cod.74146</span></h3>
          </div>
        </div>
      </div>

    <div class="swiper-pagination"></div>
  </div>
  <section>

  <script src="public/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 500,
        modifier: 2,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
<!-- fin del cuerpo -->
<?php require 'footer.php';?>
<script src="public/js/nav.js"></script>