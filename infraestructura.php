
<?php require 'header/doctype.php';?>
<link rel="stylesheet" href="public/css/infraestructura.css">

<?php require 'header/title.php';
      require 'header.php';?>





    <section class="caja">
        <section class="subcaja">
        <nav class="menu1">
                <input type="checkbox" id="togglemenu" checked />
                <label for="togglemenu" class="togglemenu"><h3 class="cat">Categorias</h3></label>
                <ul>    
                        <li class="tudo"><a>Presentación del Cip</a></li>
                        <li class="so-lazer"><a>Salón de Conferencias</a></li>
                        <li class="so-dependencias"><a>Auditorio</a></li>
                        <li class="so-salas"><a>Salón de Fiestas</a></li>
                        <li class="so-lazer"><a>Local Campestre</a></li>
                        <li class="so-dependencias"><a>Losa Deportiva</a></li>
                        <li class="so-salas"><a>Piscina</a></li>
    
                </ul>
        </nav>
    </section>
        <section class="image-gallery"> 
             <ul class="galeria">
                        <li class="galeria__item dependencias">
                            <img src="public/img/infraestructura/1.jpg" class="galeria__img">
                        </li>
                        <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/3.jpg" class="galeria__img">
                            </li> 
                        <li class="galeria__item lazer">
                                <img src="public/img/infraestructura/4.jpg" class="galeria__img">
                            </li>
                        <li class="galeria__item salas">
                                <img src="public/img/infraestructura/5.jpg" class="galeria__img">
                            </li>
                        <li class="galeria__item salas">
                                <img src="public/img/infraestructura/6.jpg" class="galeria__img">
                            </li>
                        <li class="galeria__item salas">
                                <img src="public/img/infraestructura/7.jpg" class="galeria__img">
                            </li>
                        <li class="galeria__item lazer">
                                <img src="public/img/infraestructura/8.jpg" class="galeria__img">
                            </li> 
                        <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/1.jpg" class="galeria__img">
                            </li>
               
                        <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/4.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/10.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/11.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/12.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/13.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/14.jpg" class="galeria__img">
                            </li>
                            <li class="galeria__item dependencias">
                                <img src="public/img/infraestructura/15.jpg" class="galeria__img">
                            </li>
                </ul>
                
              </section>
     </section>         
        <script src="public/js/jquery.js"></script>
        <script src="public/js/infraestructura.js"></script>

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