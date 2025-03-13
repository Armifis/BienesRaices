document.addEventListener('DOMContentLoaded', function (){
    eventListeners();

    darkMode();
});

function darkMode(){
  

  const preferenciaDark = window.matchMedia('(prefers-color-scheme: dark)');

  const modoLocal = localStorage.getItem('Theme');

    if(preferenciaDark.matches){
        document.documentElement.classList.add('dark-mode');
      
    }else if (modoLocal === 'Dark'){
        document.documentElement.classList.add('dark-mode');
        
        document.querySelectorAll('.iconos-caracteristicas img').forEach((img) => {
            img.classList.add('icono')
            });
    }
    else {
        document.documentElement.classList.remove('dark-mode');
       
    }

    preferenciaDark.addEventListener('change', function () {
        if(preferenciaDark.matches){
            document.documentElement.classList.add('dark-mode');
           
        }else {
            document.documentElement.classList.remove('dark-mode');
              
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() { 
       
        const isDark = document.documentElement.classList.toggle('dark-mode');  
        localStorage.setItem('Theme', isDark ? 'Dark' : 'Light');
       
        document.querySelectorAll('.iconos-caracteristicas img').forEach((img) => {
        img.classList.toggle('icono')
        });

    });
} // Fin Dark-Mode



function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive (){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');

    } else {
        navegacion.classList.add('mostrar');
    }

    //navegacion.classList.toogle('mostrar'), Toogle, hace lo mismo (add/remove)
}