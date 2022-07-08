<?php get_header() ?> <!-- Esta funcion trae el archivo Header -->

<!-- funcion para saber si la pagina tiene contenido -->
<!-- esta funcion tiene estancia GLOBAL have_posts() -->
<?php if(have_posts()){ ?>
<?php   while(have_posts()) {?>
<?php       the_post();?> <!-- funcion default de wordpress para mostrar contenido -->
<?php       the_content();?> <!-- devuelve todo el contenido de la pagina -->
<?php   }?>
<?php }?>

<?php get_template_part('Template-parts/content','lista'); ?> <!-- Utilizamos esta funcion para llamar partes de codigo en este caso debemos ver que el primer atributo es el directorio hasta content y el segundo atributo es el header en si -->


<?php get_footer() ?> <!-- Esta funcion trae el footer -->