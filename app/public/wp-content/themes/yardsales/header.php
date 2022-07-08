<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- cuando se renderice la pagina esta se pondra en el idioma que tiene predeterminado en Wordpress -->
<head>
    <meta charset="<?php bloginfo("charset") ?>"> <!-- modificamos con php y el atributo bloginfo("charset") para que nos devuelva la configuracion que esta configurada el wordpress -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Llamamos a un hook de wordpress llamado wp_head() se lo ingresa antes de que se cierre el /head -->
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open();?> <!-- esta funcion agrega un hook body_open ejemplo: analytics  -->
    
    <?php get_template_part('Template-parts/content','header'); ?> <!-- Utilizamos esta funcion para llamar partes de codigo en este caso debemos ver que el primer atributo es el directorio hasta content y el segundo atributo es el header en si -->

    <main class="productos">
        <div class="container-fluid gx-5">