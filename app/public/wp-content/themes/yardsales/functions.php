<?php


function plz_assets(){ /* siempre poner un prefijo en este caso plz para no tener errores con otras funciones */

    /* WordPress utiliza la funcion wp_register_style para registrar estilos
    primer argumento despues de wp_register_style es el nombre: 
    Segundo argumento es la fuente o el link
    Tercer argumento: archivo son las dependencias, en caso de necesitar otro archivo antes que la primera fuente, si no se necesita se pasa un array vacio --> array()
    Cuarto argumento: version, si no tiene version poner false
    Quinto argumento: @media en que resolucion o screen podemos visualizar este estilo, si deseamos que se vea en todo el documento poner por defecto "all"
    wp_register_style("Nombre","Fuente o link","Dependencias",version,@media) */
    wp_register_style("Google-font","https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700",array(),"false","all");/* familia Quicksand */
    wp_register_style("Google-font-2","https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap",array(),"false","all");/* familia Roboto */
    
    /* Llamamos a bootstrap */
    wp_register_style("Bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css",array(),"5.1","all");


    /* Una vez registrados debemos ponerlos en el ciclo de vida de WordPress llamando a una funcion para que se ejecuten y se puedan mostrar para eso se utiliza wp_enqueue_style
    recibe casi los mismo atributos que wp_register_style
    wp_enqueue_style(Nombre, ubicacion de la carpeta que se desea llamar, dependencias) */
    wp_enqueue_style("estilos", get_template_directory_uri()."/assets/css/style.css",array("Google-font","Bootstrap"));

    /* Agregamos el archivo de JavaScript del footer con wp_enqueue_script esto hace que no haga cola sino que se ejecute directamente
    wp_enqueue_script(Nombre,) */
    wp_enqueue_script("yardsale-js",get_template_directory_uri()."/assets/js/script.js");

    /* Los estilos y los scripts se agragan en un ciclo que debemos inicializar.
    wp_head() -> styles
    wp_footer() -> scripts */
}

/* add_action(action,funcion) */
add_action("wp_enqueue_scripts","plz_assets");

/* Agregamos una funcion de wordpress que es:dd_action recibe 2 argumentos en este caso,
 primer argumento: el action DONDE QUIERO QUE SE CARGUE, "wp_enqueue_scripts" es !!IMPORTANTE!! el plural
 segundo argumento: la funcion que deseo agregar */



 function plz_analytics(){ /* Aqui puede ir el link de google analytics */
    ?>
    <?php
 }

add_action("wp_body_open","plz_analytics"); /* utilizamos aqui body open para saber donde se va a ejecutar esta funcion en el body */


function plz_theme_supports(){

    add_theme_support('title-tag'); /* hay muchos pero estos son los que no denerian faltar */
    /* title tag hace que en la pestana de navegacion se muestre el nombre de la pagina, ejm: si estas en la pantalla inicio se muestra en la pestana inicio */
    add_theme_support('post-thumbnails');
    /* post_thumbnails agrega imagen destacada */
    add_theme_support('custom-logo',
    array(
        "width" => 170, /* colocamos el alto en pixeles */
        "height" => 40, /* colocamos el ancho en pixeles */
        "flex-width" => true, /* nos ayuda a que el logo se acople a las dimensiones */
        "flex-height" => true,
        )
    );
    /* con esto podemos agregar una funcionalidad para poder cambiar el logo directamente desde wordpress */
}   

/* esta funcion after_setup_theme una vez que el tema esta activo y se empieza a renderizar llama a la funcion */
add_action("after_setup_theme","plz_theme_supports");


function plz_add_menus(){
    /* ponemos la funcion de wordpress para registrar uno o mas menus 
        Iniciamos un array y su primer atributo es poner el id del menu,
        en este caso hay dos menus uno principal y otro mobile */
    register_nav_menus(
        array(
        'menu-principal' => "Menu principal",
        'menu-responsive' => "Menu-responsive"
        )
    );
}

add_action("after_setup_theme", "plz_add_menus");