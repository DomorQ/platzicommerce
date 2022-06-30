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
    <header class="encabezado">
        <div class="container-fluid gx-5 py-3">
            <div class="row">
                <div class="encabezado__hamburguesa col-2">
                    <a href="<?php echo home_url();?>"> <!-- por lo general al dar clic en el logo se vuelve a la misma pagina
                wordpress tiene esta funcion para hacer lo mismo -->
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-menu.svg" alt="menu icon"> <!-- para que se pueda ver las imagenes ponemos "?php echo get_template_directory_uri()" para hacer el llamado a este archivo  -->
                    </a>
                </div>
                <div class="enbezado__logo col-5 col-md-2 px-2 px-md-4">
                    <?php the_custom_logo()?> <!-- aqui se pondra el logo que subimos directamente desde wordpress -->
                </div>
                <div class="encabezado__menu col-6 col-md-5">
                    <ul>
                        <li class="encabezado__item current"><a href="#">All</a></li>
                        <li class="encabezado__item"><a href="#">Clothes</a></li>
                        <li class="encabezado__item"><a href="#">Electronics</a></li>
                        <li class="encabezado__item"><a href="#">Furniture</a></li>
                        <li class="encabezado__item"><a href="#">Toys</a></li>
                        <li class="encabezado__item"><a href="#">Others</a></li>
                    </ul>
                </div>
                <div class="encabezado__cart col-5 col-md-1">
                    <a href="sign_in.html" class="encabezado_sign-in">
                        Sign in
                    </a>
                    <a href="#" class="encabezado__link active">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/header-empty-card.svg" alt="cart">
                    </a>
                </div>
            </div>
            <div class="encabezado__menu-responsive">
                <ul>
                    <li class="encabezado__item current"><a href="#">All</a></li>
                    <li class="encabezado__item"><a href="#">Clothes</a></li>
                    <li class="encabezado__item"><a href="#">Electronics</a></li>
                    <li class="encabezado__item"><a href="#">Furniture</a></li>
                    <li class="encabezado__item"><a href="#">Toys</a></li>
                    <li class="encabezado__item"><a href="#">Others</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="productos">
        <div class="container-fluid gx-5">