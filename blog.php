<?php 
    
    require 'includes/funciones.php';
    
    
    incluirTemplate('header');
    
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog1.webp" type="image/webp">
                    <source src="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el <span>26/01/2025</span> por: <span>Admin</span></p>

                    <p> Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                        y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog2.webp" type="image/webp">
                    <source src="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Tips para disfrutar del verano</h4>
                    <p>Escrito el <span>26/01/2025</span> por: <span>Admin</span></p>

                    <p> Disfruta del buen tiempo con 4 sencillos consejos
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog3.webp" type="image/webp">
                    <source src="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoracion de tu hogar</h4>
                    <p>Escrito el <span>26/01/2025</span> por: <span>Admin</span></p>

                    <p> Maximiza el espacio en tu hogar con esta guía, aprende a combinar
                        muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog4.jpg.jpg" type="image/jpeg">
                    <source src="build/img/blog4.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu habitación</h4>
                    <p>Escrito el <span>26/01/2025</span> por: <span>Admin</span></p>

                    <p> Maximiza el espacio en tu hogar con esta guía, aprende a combinar
                        muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </main>

    <?php incluirTemplate('footer') ?>