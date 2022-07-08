<?php get_header() ?> <!-- Esta funcion trae el archivo Header -->

<!-- funcion para saber si la pagina tiene contenido -->
<!-- esta funcion tiene estancia GLOBAL have_posts() -->
<?php if(have_posts()){ ?>
<?php   while(have_posts()) {?>
<?php       the_post();?> <!-- funcion default de wordpress para mostrar contenido -->
<?php       the_content();?> <!-- devuelve todo el contenido de la pagina -->
<?php   }?>
<?php }?>

<?php 

    $args = array(
        "post_type" => array("producto"), /* si quiero traer varios puedo utilizar un array */
        "post_per_page" => -1 /* con esto traigo todos los productos */
    );

    $productos = new WP_Query($args);
?>

<div class="productos__container">

    <?php if($productos->have_posts()) { ?> <!-- en plural HAVE_POSTS -->
        <?php   while($productos->have_posts()) { $productos->the_post(); ?>
            <div class="productos__card">
                <?php the_post_thumbnail("post-thumbnail") ?> <!-- aqui estara las imagenes de los productos, small, medium y full -->
                <div class="producto__caption">
                    <div class="productos__desc">
                        <a class="producto__link" href="<?php the_permalink(); ?>"> <!-- Si wordpress tiene el prefijo THE por lo general nos va a imprimir directamente las funciones -->
                            <h4 class="productos__titulo"><?php the_title(); ?></h4>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>


<?php get_footer() ?> <!-- Esta funcion trae el footer -->