<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>

    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante en latinoamerica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen devwebcamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum dignissimos quam neque quisquam qui repudiandae ullam recusandae molestias excepturi eaque sunt nobis, enim labore! Animi omnis itaque ipsa excepturi asperiores</p>
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum dignissimos quam neque quisquam qui repudiandae ullam recusandae molestias excepturi eaque sunt nobis, enim labore! Animi omnis itaque ipsa excepturi asperiores</p>
        </div>
    </div>

</main>