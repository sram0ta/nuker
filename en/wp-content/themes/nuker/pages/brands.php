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
Template Name: Бренды
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
    <section class="brands">
        <div class="container">
            <h1>They trust us</h1>
            <div class="brands__grid">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'clients',
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
				 
	<div><img src="<?php the_field('brend') ?>" alt=""></div>
	<?php
}

wp_reset_postdata(); // сброс
			?>
            </div>
        </div>
    </section>

<?php
get_footer();
