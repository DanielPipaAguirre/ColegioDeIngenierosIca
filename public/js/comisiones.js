$(document).ready(function(){
    $(".tudo").click(function(){
        $(".salas, .lazer, .dependencias, .salas1, .lazer1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").show();
    });
    
    $(".so-lazer").click(function(){
      $(".dependencias, .salas, .salas1, .lazer1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
      $(".lazer").show();
    });

    $(".so-dependencias").click(function(){
        $(".salas, .lazer, .salas1, .lazer1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
        $(".dependencias").show();
    });
  
    $(".so-salas").click(function(){
        $(".dependencias, .lazer, .salas1, .lazer1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
        $(".salas").show();
    });

    $(".so-lazer1").click(function(){
      $(".lazer, .dependencias, .salas, .salas1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
      $(".lazer1").show();
    });

    $(".so-dependencias1").click(function(){
        $(".salas, .lazer, .dependencias, .salas1, .lazer1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
        $(".dependencias1").show();
    });
  
    $(".so-salas1").click(function(){
        $(".dependencias, .lazer, .salas, .lazer1, .dependencias1, .salas2, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
        $(".salas1").show();
    });
    $(".so-lazer2").click(function(){
        $(".lazer, .dependencias, .salas, .salas1, .dependencias1, .salas2, .lazer1, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
        $(".lazer2").show();
      });
  
      $(".so-dependencias2").click(function(){
          $(".salas, .lazer, .dependencias, .salas1, .lazer1, .salas2, .lazer2, .dependencias1, .lazer3, .dependencias3").fadeOut(0);
          $(".dependencias2").show();
      });
    
      $(".so-salas2").click(function(){
          $(".dependencias, .lazer, .salas, .lazer1, .dependencias1, .salas1, .lazer2, .dependencias2, .lazer3, .dependencias3").fadeOut(0);
          $(".salas2").show();
      });
      $(".so-lazer3").click(function(){
        $(".lazer, .dependencias, .salas, .salas1, .dependencias1, .salas2, .lazer1, .dependencias2, .lazer3, .dependencias2").fadeOut(0);
        $(".lazer3").show();
      });
  
      $(".so-dependencias3").click(function(){
          $(".salas, .lazer, .dependencias, .salas1, .lazer1, .salas2, .lazer2, .dependencias1, .lazer3, .dependencias2").fadeOut(0);
          $(".dependencias3").show();
      });
    
});