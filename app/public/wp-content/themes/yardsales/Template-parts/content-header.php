<header class="encabezado">
    <div class="container-fluid gx-5 py-3">
        <div class="row">
            <div class="encabezado__hamburguesa col-2">
                <a href="<?php echo home_url(); ?>">
                    <!-- por lo general al dar clic en el logo se vuelve a la misma pagina
                wordpress tiene esta funcion para hacer lo mismo -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-menu.svg" alt="menu icon"> <!-- para que se pueda ver las imagenes ponemos "?php echo get_template_directory_uri()" para hacer el llamado a este archivo  -->
                </a>
            </div>
            <div class="enbezado__logo col-5 col-md-2 px-2 px-md-4">
                <?php the_custom_logo() ?>
                <!-- aqui se pondra el logo que subimos directamente desde wordpress -->
            </div>
            <div class="encabezado__menu col-6 col-md-4"> <!-- cambiamso de 5 a 4 columnas -->
                <?php wp_nav_menu( /* esto hara que nos renderice el menu creado en wordpress y se refleje en nuestra pagina donde estaba el menu anteriror */
                    array(
                        "menu" => 'menu-principal' /* minimo debe tener un atributo en este caso es "menu" y el id que tiene dentro de la funcion */
                    )
                ); ?>
            </div>
            <div class="encabezado__cart col-5 col-md-2"> <!-- cambiamso de 1 a 2 columnas -->
                <a href="<?php echo home_url("sign-in");?>" class="encabezado_sign-in">
                    <?php do_action("plz_signin"); ?> <!-- esto lo volvemos de forma dinamica -->
                </a> 
                <a href="#" class="encabezado__link active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-empty-card.svg" alt="cart">
                </a>
            </div>
        </div>
        <div class="encabezado__menu-responsive">
            <?php wp_nav_menu(
                array(
                    'menu' => "menu-responsive"
                )
            ); ?>
        </div>
    </div>
</header>