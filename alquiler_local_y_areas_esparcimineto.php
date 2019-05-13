<?php require 'header/doctype.php';?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="public/css/alquiler_local_y_areas_esparcimiento.css"> 
<?php require 'header/title.php';
      require 'header.php';?>
<!-- cuerpo -->
<section>
  <section class="btns">
    <div class="contents">
      <div class="box-button">
        <button class="btn-success" onclick="mostrarform1(true)"><i class="fa fa-plus-circle"></i> Salon de Conferencias</button>
        <button class="btn-success" onclick="mostrarform2(true)"><i class="fa fa-plus-circle"></i> Auditorio</button>
        <button class="btn-success" onclick="mostrarform3(true)"><i class="fa fa-plus-circle"></i> Salon de Fiestas</button>
        <button class="btn-success" onclick="mostrarform4(true)"><i class="fa fa-plus-circle"></i> Local Campestre</button>
        <button class="btn-success" onclick="mostrarform5(true)"><i class="fa fa-plus-circle"></i> Losa Deportiva</button>
        <button class="btn-success" onclick="mostrarform6(true)"><i class="fa fa-plus-circle"></i> Piscina</button>
      </div>
    </div>
  </section>
  <!-- SALA DE CONFERENCIAS -->
  <div class="conference_room" id="aconference_room">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://fastoffice.mx/wp-content/uploads/2018/07/sala-de-conferencia.jpg' alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://fastoffice.mx/wp-content/uploads/2018/07/sala-de-conferencia.jpg' alt=''>
        </figure>
      </section>  
    </main>
  </div>
  
  <!-- AUDITORIO -->
  <div class="audience_room" id="aaudience_room">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://cdn.pixabay.com/photo/2017/08/07/12/10/auditorium-2603163_1280.jpg' alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://cdn.pixabay.com/photo/2017/08/07/12/10/auditorium-2603163_1280.jpg' alt=''>
        </figure>
      </section>
    </main>
  </div>
  
  <!-- SALON DE FIESTAS -->
  <div class="party_room" id="aparty_room">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=f8d09f68f5e30fd6c7ab06071b35a26b' alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1462539405390-d0bdb635c7d1?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=a9360b2fc92a0d33997592b4f97bfaf6' alt=''>
        </figure>
      </section>
    </main>
  </div>
  
  <!-- LOCAL CAMPESTRE -->
  <div class="local_country" id="alocal_country">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=f8d09f68f5e30fd6c7ab06071b35a26b' alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1462539405390-d0bdb635c7d1?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=a9360b2fc92a0d33997592b4f97bfaf6' alt=''>
        </figure>
      </section>
    </main>
  </div>
  
  <!-- LOSA DEPORTIVA -->
  <div class="sports_slab" id="asports_slab">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=f8d09f68f5e30fd6c7ab06071b35a26b' alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://images.unsplash.com/photo-1462539405390-d0bdb635c7d1?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=a9360b2fc92a0d33997592b4f97bfaf6' alt=''>
        </figure>
      </section>
    </main>
  </div>
  
  <!-- PISCINA -->
  <div class="swimming_pool" id="aswimming_pool">
    <main class="main-content">
      <section class="article">
        <figure class="article-image">
          <img src='https://cdn.pixabay.com/photo/2013/02/09/04/23/swimmers-79592_1280.jpg alt=''>
        </figure>
      </section>
      <section class="article">
        <figure class="article-image">
          <img src='https://cdn.pixabay.com/photo/2013/02/09/04/23/swimmers-79592_1280.jpg' alt=''>
        </figure>
      </section>
    </main>
  </div>
</section>
<!-- fin del cuerpo -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="public/js/nav.js"></script>
<script type="text/javascript" src="public/js/alquiler_local.js"></script>