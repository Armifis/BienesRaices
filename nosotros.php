<?php 
    
    require 'includes/funciones.php';
    
    
    incluirTemplate('header');
    
    ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Vivamus maximus fermentum leo eget condimentum. Maecenas libero mauris, ultrices sed blandit sed, porttitor sed ipsum. Proin eu lacus a nulla 
                    pellentesque euismod et ut massa. Vivamus maximus malesuada nulla ac luctus. Donec in tellus ultrices, pulvinar neque quis, hendrerit odio. 
                    Donec sit amet diam sed dui molestie dapibus et eget lorem. Ut imperdiet tortor purus, vel condimentum urna imperdiet vel. Etiam eu urna dignissim, 
                    consectetur enim aliquet, euismod dolor. Mauris facilisis tristique felis, et commodo nibh tincidunt sit amet. Maecenas viverra volutpat purus. 
                    Vestibulum in dui est. Pellentesque mollis tortor eget cursus lacinia. Nullam vulputate ullamcorper elit, in tempus purus tincidunt quis.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit expedita eveniet sunt, ipsam doloribus illo autem quibusdam, 
                    ipsa eius architecto, possimus incidunt. Ratione corrupti iusto est accusantium itaque dolorum quia?</p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quibusdam ratione repellat minus modi et tempora? Explicabo, 
                    veniam iste labore inventore modi facilis quaerat assumenda sapiente vero, tempora in dolorem?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quibusdam ratione repellat minus modi et tempora? Explicabo, 
                    veniam iste labore inventore modi facilis quaerat assumenda sapiente vero, tempora in dolorem?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quibusdam ratione repellat minus modi et tempora? Explicabo, 
                    veniam iste labore inventore modi facilis quaerat assumenda sapiente vero, tempora in dolorem?</p>
            </div>
        </div>
    </section>

    <?php incluirTemplate('footer') ?>