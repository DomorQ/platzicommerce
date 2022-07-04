</div>
    </main>

    <footer class="text-center my-4">
        
        <?php dynamic_sidebar('pie-pagina'); ?> <!-- llamamos a la funcion creada en function para que se refleje el sidebar creado -->
        <?php dynamic_sidebar('contacto'); ?>
    </footer>
<script src="assets/js/script.js"></script>

<!-- Llamamos a un hook de wordpress llamado wp_footer() se lo ingresa antes de que se cierre el /body -->
<?php wp_footer(); ?>
</body>

</html>