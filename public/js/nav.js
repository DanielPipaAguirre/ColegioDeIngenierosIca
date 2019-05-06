const $bell = document.getElementById('bell'),
      $btn = document.getElementById('btn');

        $btn.addEventListener('click', (event) => {
            $bell.classList.add('notify');
            
          });
       $bell.addEventListener('animationend', (event)=> {
            $bell.classList.remove('notify');
          });