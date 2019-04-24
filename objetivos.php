<?php require 'header/doctype.php';?>
<link rel="stylesheet" href="public/css/estilos.css">
    <?php require 'header/title.php';
      require 'header.php';?>
    
    <section class="edit">
        <div class="textos">
           <h1 class="titulo">OBJETIVOS DEL CIP</h1>
        </div>
        <div class="sesgoabajo"></div>
    </section>
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <h2 class="sobre-nosotros">OBJETIVOS</h2>
                <p class="parrafo">El Propósito permanente del CIP es representar, promover, normar, controlar y defender el desarrollo de la Ingeniería Peruana y el ejercicio profesional de los Ingenieros.<br>
                    Consecuentemente con dicho propósito, el CIP reconoce y norma sus actividades con principios tales como :</p>
                <ul class="edi">
                        <li>Autonomía institucional, autogobierno y participación de los ingenieros 
                            en todos los niveles e instancias de decisión institucional, capacitación 
                            permanente de los ingenieros y la superación profesional, primacía de la persona 
                            humana y sus derechos, dignidad tolerancia e igualdad entre sus integrantes; la 
                            responsabilidad social y la solidaridad como valores esenciales. Afirmación de la paz, 
                            derecho a la vida y a la justicia social como valores centrales de la sociedad, y promover 
                            la gestión empresarial de los Ingenieros en el país.</li>
                 </ul>
                 <p class="parrafo">El CIP, como consecuencia de los principios que reconoce, no admite ninguna discriminación 
                     entre sus miembros ni desarrolla actividad proselitista no institucional.</p>
                <p class="parrafo"><strong>Con relación al País :</strong></p>
                        <ul class="edi">
                                <li>Impulsar su independencia y desarrollo tecnológico mediante el rescate, la acumulación, la modernización y 
                                    divulgación de las experiencias y prácticas de la Ingeniería.</li>
                                <li>Interactuar permanentemente con la sociedad, mediante el cotejo y análisis de sus principales problemas, 
                                    proponiendo soluciones.</li>
                                <li>Contribuir al desarrollo económico y social del Perú , propiciando políticas de aprovechamiento racional y
                                     prioritarios de los recursos y tecnologías nacionales.</li>
                                <li>Asesorar al Estado y a la sociedad civil, a los poderes públicos y a las instituciones, en asuntos de interés nacional.</li>
                                <li>Defender el patrimonio histórico y cultural de nuestro pueblo.</li>
                                <li>Defender los recursos naturales y productivos y su racional explotación.</li>
                        </ul><br>
                        <p class="parrafo"><strong>Con relación a la Ingeniería :</strong></p>
                        <ul class="edi">
                                <li>Promover y normar el ejercicio de la Ingeniería conforme a la moral, la ciencia, la técnica y la función social 
                                    que a la profesión le corresponde.</li>
                                <li>Defender el prestigio de la Ingeniería y la dignidad de su ejercicio.</li>
                                <li>Auspiciar y promover la investigación en las diversas especialidades de la Ingeniería.</li>
                                <li>Divulgar y publicar los avances, obras y trabajos de sus autores con especial referencia a la realidad nacional.</li>
                        </ul><br>
                        <p class="parrafo"><strong>Con relación a los Ingenieros :</strong></p>
                        <ul class="edi">
                                <li>Cautelar los intereses generales de la profesión y los derechos de los Ingenieros en el ejercicio de la misma en todo el país.</li>
                                <li>Promover el perfeccionamiento y desarrollo profesional de sus integrantes.</li>
                                <li>Fomentar el desarrollo de una conciencia profesional y a la vinculación y solidaridad en los Ingenieros.</li>
                                <li>Velar porque el ejercicio de la Ingeniería se realice conforme a la profesión.</li>
                                <li>Defender un justo nivel de vida y adecuadas condiciones de trabajo de los ingenieros.</li>
                                <li>Propender a la seguridad y previsión social de sus miembros y familiares</li>
                                <li>Promover el rol de los ingenieros en la actividad empresarial del país.</li>
                        </ul><br>
                        <p class="parrafo"><strong>Con relación a la Formación Profesional :</strong></p>
                        <ul class="edi">
                                <li>Velar y Coadyuvar al logro de una orientación y formación profesional adecuada, coordinando con los centros educativos y 
                                    con las universidades.</li>
                                <li>Fortalecer las relaciones científicas, tecnológicas y culturales con instituciones afines.</li>
                                <li>Contribuir al logro de una formación gerencial y empresarial de los ingenieros.</li>
                        </ul><br>
                
        
                        
    </main>
    <?php require 'footer.php';?>
    <script>
            var el = document.querySelectorAll('.controllers li');
        for (let i = 0; i < el.length; i++) {
          el[i].onmouseover = function() {
            var c = 0;
            while (c < el.length) {
              el[c++].className = 'slide';
            }
            el[i].className = 'slide active';
          };
        }
        
        const $button5 = document.getElementById('button5'),
              $button4 = document.getElementById('button4'),
              $button3 = document.getElementById('button3'),
              $button2 = document.getElementById('button2'),
              $button1 = document.getElementById('button1'),
              $text = document.getElementById('text'),
              $text2 = document.getElementById('text2'),
              $text3 = document.getElementById('text3'),
              $text4 = document.getElementById('text4'),
              $text5 = document.getElementById('text5'),
              $header = document.querySelector('.sub-container'),
              $ini = document.querySelector('.link'),
              $bell = document.getElementById('bell'),
              $minmenu = document.getElementById('min-menu');
              $minmenu.classList.remove('menu-is-active');
        
        $button1.addEventListener('mouseover', (event) => {
              $text.innerHTML = "HISTORIA, MISION Y VISION ";
              $text2.innerHTML = "CONSEJO DIRECTIVO DEPARTAMENTAL";
              $text3.innerHTML = "ASAMBLEA DEPARTAMENTAL";
              $text4.innerHTML = "IEPI";
              $text5.innerHTML = "INSTITUTO DE BIENESTAR DEL INGENIERO";
              $minmenu.classList.remove('add-menu');
              $minmenu.classList.remove('menu-is-active');
              document.querySelector('.sub-container').classList.add('is-active');
            });
        $button2.addEventListener('mouseover', (event) => {
              $text.innerHTML = "COLEGIACION";
              $text2.innerHTML = "PAGO DE HABILIDAD";
              $text3.innerHTML = "CERTIFICACION DE HABILIDAD";
              $text4.innerHTML = "ISS";
              $text5.innerHTML = "BUSQUEDA DE COLEGIADOS";
              document.querySelector('.sub-container').classList.add('is-active');
              $minmenu.classList.add('add-menu');
              $ini.classList.remove('ini');
            });
        $button3.addEventListener('mouseover', (event) => {
              $text.innerHTML = "INGENIERIA AGRONOMA";
              $text2.innerHTML = "INGENIERIA MECANICA Y ELECTRICA";
              $text3.innerHTML = "INGENIERIA AMBIENTAL Y SANITARIA";
              $text4.innerHTML = "INGENIERIA CIVIL";
              $text5.innerHTML = "INGENIERIA INDUSTRIAL Y SISTEMAS";
              document.querySelector('.sub-container').classList.add('is-active');
              $minmenu.classList.remove('add-menu');
              $minmenu.classList.remove('menu-is-active');
              $ini.classList.remove('ini');
            });
        $button4.addEventListener('mouseover', (event) => {
              $text.innerHTML = "EVENTOS CIP";
              $text2.innerHTML = "EVENTOS RECOMENDADOS";
              $text3.innerHTML = "NOTICIAS RECIENTES";
              $text4.innerHTML = "VIDEO SEMANAL";
              $text5.innerHTML = "NUESTROS CONVENIOS";
              document.querySelector('.sub-container').classList.add('is-active');
              $minmenu.classList.remove('add-menu');
              $minmenu.classList.remove('menu-is-active');
              $ini.classList.remove('ini');
            });
        $button5.addEventListener('click', (event) => {
                $bell.classList.toggle('notify');
            });    
        //REPARAR EL HOVER DEL SUB-MENU
        // $header.addEventListener('mouseout', (event) => {
        //       //console.log(event);
        //       document.querySelector('.sub-container').classList.remove('is-active');
        //     });
        $text2.addEventListener('click', (event) => {
             $minmenu.classList.toggle('menu-is-active');
            });    
        var actual = 0;
                    function puntos(n){
                        var ptn = document.getElementsByClassName("punto");
                        for(i = 0; i<ptn.length; i++){
                            if(ptn[i].className.includes("activo")){
                                ptn[i].className = ptn[i].className.replace("activo", "");
                                break;
                            }
                        }
                        ptn[n].className += " activo";
                    }
                    function mostrar(n){
                        var imagenes = document.getElementsByClassName("image");
                        for(i = 0; i< imagenes.length; i++){
                  //className devuelve texto
                  //include permite saber si una palabra esta dentro del texto
                            if(imagenes[i].className.includes("actual")){
                                imagenes[i].className = imagenes[i].className.replace("actual", "");
                                break;
                            }
                        }
                        actual = n;
                        imagenes[n].className += " actual";
                        puntos(n);
                    }
                    
                    function siguiente(){
                        actual++;
                        if(actual > 2){
                            actual = 0;
                        }
                        mostrar(actual);
                    }
                    function anterior(){
                        actual--;
                        if(actual < 0){
                            actual = 2;
                        }
                        mostrar(actual);
                    }
        //Set interval llama a una funcion cada velocidad segundos
            var velocidad = 3000;
            var play = setInterval("siguiente()", velocidad);
        
          const $burger = document.getElementById("burger"),
          $menu = document.getElementById("menu"),
          $containerlogo= document.getElementById("container-logo");
          $burger.addEventListener('click', function() {
              $menu.classList.toggle('is-responsive')
            $containerlogo.classList.toggle('is-responsive')
        })
        </script>
</body>

</html>