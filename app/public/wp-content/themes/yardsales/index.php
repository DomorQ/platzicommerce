<?php get_header() ?> <!-- Esta funcion trae el archivo Header -->

<!-- funcion para saber si la pagina tiene contenido -->
<!-- esta funcion tiene estancia GLOBAL have_posts() -->
<?php if(have_posts()){ ?>
<?php   while(have_posts()) {?>
<?php       the_post();?> <!-- funcion default de wordpress para mostrar contenido -->
<?php       the_content();?> <!-- devuelve todo el contenido de la pagina -->
<?php   }?>
<?php }?>

<div class="productos__container">
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_1_1.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camisa ploma</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?= get_template_directory_uri()?>/assets/img/prod_2_1.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camisa celeste</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_3.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camiseta corta</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_4.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a href="">
                                <h4 class="productos__titulo">camisa</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_5.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camisa rayas</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_6.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a href="">
                                <h4 class="productos__titulo">camiseta corta rayas</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_7.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camiseta corta roja</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_8.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a href="">
                                <h4 class="productos__titulo">camisa roja</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_9.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="#">
                                <h4 class="productos__titulo">camiseta corta rayas rosa</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productos__card">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/prod_10.jpeg" alt="producto 1">
                    </figure>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a href="">
                                <h4 class="productos__titulo">camisa</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


<?php get_footer() ?> <!-- Esta funcion trae el footer -->