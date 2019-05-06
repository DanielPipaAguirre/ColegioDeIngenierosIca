$('.galeria__img').click(function(e){
    var img = e.target.src;
    var modal = '<div class="modal" id="modal"><img src="'+ img + '" class="modal__img"><div class="modal__boton" id="modal__boton"><p style="color:white">Presione ESC para Salir</p></div></div>';
    $('body').append(modal);
    $('#modal__boton').click(function(){
      $('#modal').remove();
    })
  });
  
  
  $(document).keyup(function(e){
    if (e.which==27) {
      $('#modal').remove();
    }
  });
  

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
