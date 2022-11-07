<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nuker
 */

?>

<footer class="footer">
        <div class="container">
            <div class="footer__contact">
                <p>info@nuker.kz</p>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo_white.svg" alt="">
                <a href='tel:+7 (727) 258-44-90' style='color:white;'>+7 (727) 258-44-90</a>
            </div>
            <?php wp_nav_menu()?>
        </div>
    </footer>
</body>
<script src="../js/script.js"></script>
<script src="../js/jquery.js"></script>
</html>