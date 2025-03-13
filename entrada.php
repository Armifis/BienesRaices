<?php 
    
    require 'includes/funciones.php';
    
    
    incluirTemplate('header');
    
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Este verano haz que sea diferente</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>26/01/2025</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            
            <p>Vivamus maximus fermentum leo eget condimentum. Maecenas libero mauris, ultrices sed blandit sed, porttitor sed ipsum. Proin eu lacus a nulla 
                pellentesque euismod et ut massa. Vivamus maximus malesuada nulla ac luctus. Donec in tellus ultrices, pulvinar neque quis, hendrerit odio. 
                Donec sit amet diam sed dui molestie dapibus et eget lorem. Ut imperdiet tortor purus, vel condimentum urna imperdiet vel. Etiam eu urna dignissim, 
                consectetur enim aliquet, euismod dolor. Mauris facilisis tristique felis, et commodo nibh tincidunt sit amet. Maecenas viverra volutpat purus. 
                Vestibulum in dui est. Pellentesque mollis tortor eget cursus lacinia. Nullam vulputate ullamcorper elit, in tempus purus tincidunt quis.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit expedita eveniet sunt, ipsam doloribus illo autem quibusdam, 
                ipsa eius architecto, possimus incidunt. Ratione corrupti iusto est accusantium itaque dolorum quia?</p>
        </div>
    </main>

    <?php incluirTemplate('footer') ?>