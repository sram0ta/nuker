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
Template Name: О компании
*/

	

?>
<?php get_header(); ?>
<div class="bc">
	<div class='container'>
		
	
     <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
	</div>
    </div>
    <section class="about">
        <div class="container">
            <h1><?php the_field('nazvanie_organizaczii'); ?></h1>
            <p><?php the_field('istoriya_organizczii'); ?></p>
        </div>
    </section>
    <section class="our__clients">
        <div class="container">
            <h2><?php the_field('klienty'); ?></h2>
            <div class="clients__wrapper">
            <div>
                <p>
                   <?php the_field('pole_s_klientami1'); ?>
                </p>
            </div>
            <div>
              	<p>
                   <?php the_field('pole_s_klientami2'); ?>
                </p>
            </div>
        </div>
        </div>
    </section>
    <section class="section4 about__us">
        <div class="container">
            <div class="map">
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Актау</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Атырау</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Актобе</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Костанай</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Жезказган</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Петропавловск</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Кокшетау</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Астана</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Шымкент</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Павлодар</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Караганда</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Алматы</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Усть-Каменогорск</p></a>
            </div>
        </div>
    </section>
<?php
get_footer();
