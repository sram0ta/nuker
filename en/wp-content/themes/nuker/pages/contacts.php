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
Template Name: Контакты
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
    <section class="contacts">
        <div class="container">
            <div class="title__contacts">
                <h1>Contact information</h1>
                <button class="send__message">Send mail</button>
            </div>
            <div class="region__wrapper">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'contacts',
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );
	?>
	<div class="contact">
                    <div class="region <?php the_field('region')?>"><p><?php the_title();?></p> <img class= "<?php the_field('arrow')?> rotated" src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/arrow.svg" alt=""></div>
                    <div class="region__contacts <?php the_field('showed')?> showed">
                        <div class='wrapper__contacts'>
							<div class='city' style='width:477px;'>
                            <h2 class='main__office'>Head office</h2>
                            <p><?php the_field('golovnoj_ofis1')?></p>
							<p><?php the_field('golovnoj_ofis2')?></p>
							<p><?php the_field('golovnoj_ofis3')?></p>
							<p><?php the_field('golovnoj_ofis4')?></p>
                            <h3>Representative office in Almaty</h3>
                            <p><?php the_field('predstavitelstvo1')?></p>
                            <p><?php the_field('predstavitelstvo2')?></p>
							<p><?php the_field('predstavitelstvo3')?></p>
							<p><?php the_field('predstavitelstvo4')?></p>
                        </div>
                        <div class='telephones' style='width:141px;'>
                            <h4>Telephone</h4>
                            <a href='<?php the_field('telefon1')?>'><?php the_field('telefon1')?></a>
                            <a href='<?php the_field('telefon2')?>'><?php the_field('telefon2')?></a>
                            <a href='<?php the_field('telefon3')?>'><?php the_field('telefon3')?></a>
                            <a href='<?php the_field('telefon4')?>'><?php the_field('telefon4')?></a>
                        </div>
                        <div style='width:179px;'>
                            <h5>E-mail</h5>
                            <p><?php the_field('email1')?></p>
                            <p><?php the_field('email2')?></p>
							<p><?php the_field('email3')?></p>
							<p><?php the_field('email4')?></p>
                        </div>
                    </div>
                </div>
				</div>			 
	
	<?php
}

wp_reset_postdata(); // сброс
			?>
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