<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nuker
 * 
 */
/*
Template Name: Товар
Template Post Type: post, pages
*/

	

?>
<?php get_header(); ?>
    <div class="bc">
        <div class="container">
        <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
    </div>
    </div>
    <section class="product__open">
        <div class="container">
            <div class="opened__wrapper">
            <div class="open__card">
                <img src="<?php the_field('kartinka_tovara'); ?>" alt="">
                <h2>Техниқалық сипаттамалары:</h2>
                <p><?php the_field('tehnicheskie_harakteristiki'); ?></p>
            </div>
            <div class="card__descr">
                <div class="first__box">
                    <h1><?php the_title(); ?></h1>
                    <button class='send__message1'>Хат жазу</button>
                </div>
                <div class="second__box">
                    <h3>Мақсаты:</h3>
                    <p><?php the_field('naznachenie'); ?></p>
                    <h4>Артықшылықтар:</h4>
                    <p><?php the_field('preimushhestva'); ?></p>
                </div>
            </div>
            </div>
        </div>
    </section>
<section class="form disabled">
        
        <form class="form__contacts" action="">
            <span class="close"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <path d="M32.3839 12.688L23.8979 21.172L15.4139 12.688L12.5859 15.516L21.0699 24L12.5859 32.484L15.4139 35.312L23.8979 26.828L32.3839 35.312L35.2119 32.484L26.7279 24L35.2119 15.516L32.3839 12.688Z" fill="#919090"/>
                </svg></span>
            <?php echo do_shortcode('[contact-form-7 id="350" title="Контактная форма 1"]'); ?>
        </form>
    </section>
<?php
get_footer();