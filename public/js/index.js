   
    var figu = document.getElementsByClassName('split-figu');
    var parrafo= document.getElementsByClassName('people-p');

    figu[0].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Pro - Secretario del Consejo Departamental"
        parrafo[1].innerHTML = "Ing. Felipe Estuardo Yarasca Arcos"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[0].classList.add('is-opacity')
    });

    figu[1].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Tesorero del Consejo Departamental de Ica"
        parrafo[1].innerHTML = "Ing. Elder Daniel Agüero Rospigliosi"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[1].classList.add('is-opacity')
    });

    figu[2].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Decano del Consejo Departamental de Ica"
        parrafo[1].innerHTML = "Ing. Edson Rios Villagomez"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[2].classList.add('is-opacity')
    });

    figu[3].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Vice - decano del Consejo Departamental de Ica"
        parrafo[1].innerHTML = "Ing. Reymundo Calderon Pino"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[3].classList.add('is-opacity')
    });

    figu[4].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Secretario del Consejo Departamental de Ica"
        parrafo[1].innerHTML = "Ing. Dante Vladimir Campos Valencia"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[4].classList.add('is-opacity')
    });

    figu[5].addEventListener('mouseover', (event) => {
        parrafo[0].innerHTML = "Pro - Tesorero del Consejo Departamental"
        parrafo[1].innerHTML = "Ing. Jorge Luis Hernandez Angulo"
        figu[2].classList.remove('is-primary')
        for(var i = 0; i < figu.length; i++){
            figu[i].classList.remove('is-opacity')
        }
        figu[5].classList.add('is-opacity')
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
           
           
             
           