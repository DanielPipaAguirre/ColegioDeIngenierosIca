
<?php require 'header/doctype.php';?>
<link rel="stylesheet" href="public/css/quienes_somos.css">

<?php require 'header/title.php';
      require 'header.php';?>





    <section class="caja">
        <section class="subcaja">
        <nav class="menu1">
                <input type="checkbox" id="togglemenu" checked />
                <label for="togglemenu" class="togglemenu"><h3 class="cat">Categorias</h3></label>
                <ul>    
                        <li class="tudo"><a>Historia</a></li>
                        <li class="so-lazer"><a>Visión y Misión</a></li>
                        <li class="so-dependencias"><a>Principios y Objetivos</a></li>
                        <li class="so-salas"><a>Simbolos</a></li>
                        <li class="so-lazer"><a>Himno</a></li>
    
                </ul>
        </nav>
    </section>
        <section class="image-gallery"> 
        <ul class="meta" style="position: relative; text-align: center;">
            <span class="subtitle" style="color: #990000;font-size: 20px;">Coro</span>
            <br>
            <p align="center" class="dropcap">
                Somos el Colegio de Ingenieros<br>
                Somos constructores del Perú<br>
                Trabajando ¡juntos! lograremos (bis)<br>
                Desarrollo y paz en el Perú (bis) <br>
            </p>
            <span class="subtitle" style="color: #990000;font-size: 20px;">Estrofa</span>
            <br>
            <p align="center" class="dropcap">
                Los desiertos ¡siempre! cultivamos<br>
                Convertimos agua en ¡viva luz!<br>
                sin cesar, los andes traspasamos<br>
                dando real sustento a multitud <br>
                ¡Vida de los pueblos mejoramos<br>
                y el futuro de la juventud! <br>
            </p>
            <p align="center" class="dropcap"><b>Somos el Colegio....(coro)</b> </p>
            <p align="center" class="dropcap">
                Nueva ciencia y técnica aplicamos<br>
                con prudencia y mucha rectitud<br>
                ¡Con cuidado! al mar lo cosechamos<br>
                conservamos ipuro! el aire azul<br>
                y peruana selva disfrutamos<br>
                ¡sin dañar su vida en plenitud! <br>
            </p>
            <p align="center" class="dropcap"><b>Somos el Colegio....(coro)</b> </p>
        </ul>


       <section class="audio">
           <section class="letra1"> <img src="public/audios/audio.svg" class="logo">

            </section>

           <div class="letra">
                <div class="arreglo">
                        <p>Audio MP3</p>
                </div>
                <div class="arreglo1">
                    <a href="http://www.cip-trujillo.org/img/institucion/hinno_cip/audio.mp3" style="color: #2196f3;" download="public/audios/audio.mp3">Ver<a>
                    <a href="public/audios/audio.mp3" style="color: #2196f3;" download="public/audios/audio.mp3">Descargar</a>
                <div>
            </div>
            
       </section>
      
       
       <section class="video">
       <section class="video1"><img src="public/videos/video.svg" class="logo"></section>
       <div class="letra2">
                <div class="arreglo">
                        <p>Video CIP</p>
                </div>
                <div class="arreglo1">
                    <a href="http://www.cip-trujillo.org/img/institucion/hinno_cip/video_2019.mp4" style="color: #2196f3;" download="public/videos/video_2019.mp4">Ver<a>
                    <a href="public/videos/video_2019.mp4" style="color: #2196f3;" download="public/videos/video_2019.mp4">Descargar</a>
                    
                <div>
            </div>
       </section>
       

     </section>
     </section>         
        <script src="public/js/jquery.js"></script>
        <script src="public/js/quienes_somos.js"></script>

              <script type="text/javascript" >
                $(document).ready(function(){
              $(".tudo").click(function(){
                  $(".salas, .lazer, .dependencias").show();
              });
            
              $(".so-dependencias").click(function(){
                  $(".salas, .lazer").fadeOut(0);
                  $(".dependencias").show();
              });
            
              $(".so-salas").click(function(){
                  $(".dependencias, .lazer").fadeOut(0);
                  $(".salas").show();
              });
            
            $(".so-lazer").click(function(){
                  $(".dependencias, .salas").fadeOut(0);
                  $(".lazer").show();
              });
          });
          </script>
          <?php require 'footer.php';?>
<script src="public/js/nav.js"></script>

</html>