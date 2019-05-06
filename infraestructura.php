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
                <li class="tudo" id="all"><a>Presentación del Cip</a></li>
                <li class="so-lazer" id="conference-room"><a>Salón de Conferencias</a></li>
                <li class="so-dependencias" id="audience"><a>Auditorio</a></li>
                <li class="so-salas" id="party-room"><a>Salón de Fiestas</a></li>
                <li class="so-lazer" id="local-countryside"><a>Local Campestre</a></li>
                <li class="so-dependencias" id="sports-slab"><a>Losa Deportiva</a></li>
                <li class="so-salas" id="swimming-pool"><a>Piscina</a></li>
            </ul>
        </nav>
    </section>
    <section class="image-gallery"> 
        <ul class="galeria">
                <!-- Lista de Dependencias -->
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/1.jpg" class="galeria__img">
                </li>
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/3.jpg" class="galeria__img">
                </li>
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/1.jpg" class="galeria__img">
                </li>
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/4.jpg" class="galeria__img">
                </li>
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/8.jpg" class="galeria__img">
                </li> 
                <li class="galeria__item dependencias">
                    <img src="public/img/infraestructura/15.jpg" class="galeria__img">
                </li>
                
                <!-- Lista de Lazer -->
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/4.jpg" class="galeria__img">
                </li>
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/8.jpg" class="galeria__img">
                </li> 
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/15.jpg" class="galeria__img">
                </li>
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/12.jpg" class="galeria__img">
                </li>
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/13.jpg" class="galeria__img">
                </li>
                <li class="galeria__item lazer">
                    <img src="public/img/infraestructura/14.jpg" class="galeria__img">
                </li>

                <!-- Lista de salas -->
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/5.jpg" class="galeria__img">
                </li>
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/6.jpg" class="galeria__img">
                </li>
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/7.jpg" class="galeria__img">
                </li>
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/4.jpg" class="galeria__img">
                </li>
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/10.jpg" class="galeria__img">
                </li>
                <li class="galeria__item salas">
                    <img src="public/img/infraestructura/11.jpg" class="galeria__img">
                </li>
            </ul>
                
            </section>
     </section>         
<script src="public/js/jquery.js"></script>
<script src="public/js/infraestructura.js"></script>
<?php require 'footer.php';?>
<script src="public/js/nav.js"></script>

</html>