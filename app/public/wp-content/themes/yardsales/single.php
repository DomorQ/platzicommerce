<?php get_header() ?> <!-- Esta funcion trae el archivo Header -->

<!-- funcion para saber si la pagina tiene contenido -->
<!-- esta funcion tiene estancia GLOBAL have_posts() -->
<?php if(have_posts()){ ?>
<?php   while(have_posts()) {?>
<?php       the_post();?> <!-- funcion default de wordpress para mostrar contenido -->
<?php       the_content();?> <!-- devuelve todo el contenido de la pagina -->
<?php   }?>
<?php }?>

<?php get_footer(); ?>