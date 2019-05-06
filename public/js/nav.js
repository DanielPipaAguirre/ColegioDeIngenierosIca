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
           
       const $button6 = document.getElementById('button6'),
       $button5 = document.getElementById('button5'),
       $button4 = document.getElementById('button4'),
       $button3 = document.getElementById('button3'),
       $button2 = document.getElementById('button2'),
       $button1 = document.getElementById('button1'),
       $text = document.getElementById('text'),
       $text2 = document.getElementById('text2'),
       $text3 = document.getElementById('text3'),
       $text4 = document.getElementById('text4'),
       $text5 = document.getElementById('text5'),
       $subtext = document.getElementById('sub-text'),
       $subtext2 = document.getElementById('sub-text2'),
       $subtext3 = document.getElementById('sub-text3'),
       $subtext4 = document.getElementById('sub-text4'),
       $subtext5 = document.getElementById('sub-text5'),
       $submenu = document.getElementById('sub-menu'),
       $header = document.querySelector('.sub-container'),
       $bell = document.getElementById('bell'),
       $minmenu = document.getElementById('min-menu'),
       $contentpeople = document.getElementById('content-people');
       
       $minmenu.classList.add('add-menu');
       
       $button1.addEventListener('mouseover', (event) => {
           $text.innerHTML = "HISTORIA, VISION Y MISION";
           $text.href = "historia_mision_vision.php";
           $text2.innerHTML = "REPRESENTANTES";
           $text2.href = "consejo_depar.php";
           $text3.innerHTML = "NUESTRA INFRESTRUTURA";
           $text3.href = "infraestructura.php";
           $text4.innerHTML = "SIMBOLOS DEL CIP";
           $text5.innerHTML = "OBJETIVOS";
           $subtext.innerHTML = "CONSEJO DEPARTAMENTAL";
           $subtext.href = "consejo_depar.php";
           $subtext2.innerHTML = "PRESIDENTES DE CAPITULOS";
           $subtext2.href = "capitulos_presidentes.php";
           $subtext3.innerHTML = "ASAMBLEA DEPARTAMENTAL";
           $subtext3.href = "asamblea_depar.php";
           $subtext4.innerHTML = "COMISIONES";
           $subtext4.href = "comisiones.php";
           $subtext5.style.display= "block";
           $subtext5.innerHTML = "COMITES";
           $subtext5.href = "comites.php";
           $minmenu.classList.add('add-menu');
           $minmenu.classList.remove('menu-is-active');
           document.querySelector('.sub-container').classList.add('is-active');
         });   
       $button2.addEventListener('mouseover', (event) => {
           $text.innerHTML = "ALQUILER DE LOCAL Y AREAS DE ESPARCIMIENTO";
           $text.href = "alquiler_local_y_areas_esparcimineto.php";
           $text2.innerHTML = "CENTRO DE ARBITRAJE";
           $text2.href = "#";
           $text3.innerHTML = "CENTRO DE PERITAJE";
           $text3.href = "centro-peritaje.php";
           $text4.innerHTML = "ISS FONDO MORTUORIO";
           $text4.href = "iss_fondo_mortuorio.php";
           $subtext.innerHTML = "ARBITRAJE";
           $subtext.href = "arbitraje.php";
           $subtext2.innerHTML = "DIRECTORIO";
           $subtext2.href = "directorio.php";
           $subtext3.innerHTML = "ARBITROS ABOGADOS";
           $subtext3.href = "arbitros_abogados.php";
           $subtext4.innerHTML = "ARBITROS INGENIEROS";
           $subtext4.href = "arbitros_ingenieros.php";
           $subtext5.style.display= "block";
           $subtext5.innerHTML = "SERVICIOS";
           $text5.innerHTML = "CORREO ELECTRONICO";
           $text5.href = "email.php";
           document.querySelector('.sub-container').classList.add('is-active');
           $minmenu.classList.add('add-menu');
           $minmenu.classList.remove('menu-is-active');
         });
       $button3.addEventListener('mouseover', (event) => {
           $text.innerHTML = "INGENIERIA AGRONOMA";
           $text.href = "ing_agronoma.php";
           $text2.innerHTML = "INGENIERIA MECANICA Y ELECTRICA";
           $text2.href = "ing_mecanica_electrica.php";
           $text3.innerHTML = "INGENIERIA AMBIENTAL Y SANITARIA";
           $text3.href = "ing_ambiental_sanitaria.php";
           $text4.innerHTML = "INGENIERIA CIVIL";
           $text4.href = "ing_civil.php";
           $text5.style.display = "flex";
           $text5.innerHTML = "INGENIERIA INDUSTRIAL Y SISTEMAS";
           $text5.href = "ing_industrial_sistemas.php";
           document.querySelector('.sub-container').classList.add('is-active');
           $minmenu.classList.remove('add-menu');
           $minmenu.classList.remove('menu-is-active');
         });
       $button4.addEventListener('mouseover', (event) => {
           $text.innerHTML = "EVENTOS CIP";
           $text.href = "eventos.php";
           $text2.innerHTML = "EVENTOS RECOMENDADOS";
           $text2.href = "recomendados.php";
           $text3.innerHTML = "NOTICIAS RECIENTES";
           $text3.href = "noticias.php";
           $text4.innerHTML = "VIDEO SEMANAL";
           $text4.href = "videos";
           $text5.style.display = "flex";
           $text5.innerHTML = "NUESTROS CONVENIOS";
           $text5.href = "convenios";
           document.querySelector('.sub-container').classList.add('is-active');
           $minmenu.classList.remove('add-menu');
           $minmenu.classList.remove('menu-is-active');
         });
         $button6.addEventListener('mouseover', (event) => {
          $text.innerHTML = "COLEGIATURA";
          $text.href = "colegiatura.php";
          $text2.innerHTML = "CERTIFICADOS";
          $text2.href = "#";
          $text3.innerHTML = "DUPLICADO DE CARNET";
          $text3.href = "duplicado_carnet.php";
          $text4.innerHTML = "CONSTANCIA DE NO ADEUDO";
          $text4.href = "constancia_no_adeudo.php";
          $text5.innerHTML = "CAMBIO DE SEDE";
          $text5.href = "cambio_sede.php";
          $subtext.innerHTML = "CERT. DE HABILIDAD";
          $subtext.href = "cert_habilidades.php";
          $subtext2.innerHTML = "CERT. OBRAS PUBLICAS";
          $subtext2.href = "cert_obras_publicas.php";
          $subtext3.innerHTML = "CERT. HABILIDAD DE PROYECTOS";
          $subtext3.href = "cert_habilidad_proyecto.php";
          $subtext4.innerHTML = "CERT. DIGITALES";
          $subtext4.href = "cert_digitales.php";
          $subtext5.style.display= "none";
          $subtext5.innerHTML = "";
          document.querySelector('.sub-container').classList.add('is-active');
          $minmenu.classList.add('add-menu');
          $minmenu.classList.remove('menu-is-active');
        });
       $button5.addEventListener('click', (event) => {
             $bell.classList.toggle('notify');
         });
         //REPARAR EL HOVER DEL SUB-MENU
        // $header.addEventListener('mouseout', (event) => {
        //       //console.log(event);
        //       document.querySelector('.sub-container').classList.remove('is-active');
        //     });
        $text2.addEventListener('mouseover', (event) => {
          $minmenu.classList.add('menu-is-active');
         }); 
         $text.addEventListener('mouseover', (event) => {
          $minmenu.classList.remove('menu-is-active');
        });
        $text3.addEventListener('mouseover', (event) => {
          $minmenu.classList.remove('menu-is-active');
        });
        $text4.addEventListener('mouseover', (event) => {
          $minmenu.classList.remove('menu-is-active');
        });
        $text5.addEventListener('mouseover', (event) => {
          $minmenu.classList.remove('menu-is-active');
        });
       
         const $burger = document.getElementById("burger"),
             $menu = document.getElementById("menu"),
             $containerlogo= document.getElementById("container-logo");
             $burger.addEventListener('click', function() {
                 $menu.classList.toggle('is-responsive')
               $containerlogo.classList.toggle('is-responsive')
           });
       
        
         
       
