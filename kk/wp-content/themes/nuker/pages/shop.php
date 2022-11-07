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
Template Name: Продукция
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
    <section class="shop">
        <div class="container">
            <h1><?php the_field('block1_title'); ?></h1>
            <div class="shop__wrapper">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'block_shop_1',
	'orderby'     => 'date',
	'order'       => 'DESC',
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
	<div class='minified__card'><img src="<?php the_field('kartinka_tovara'); ?>" alt=""><div class='minified__info'><h2><?php the_title(); ?></h2><p><?php the_field('opisanie_tovara'); ?></p><a href="<?php echo get_permalink(); ?>">Толығырақ</a></div></div>
	<?php
}

wp_reset_postdata(); // сброс
			?>
            </div>
			<h1><?php the_field('block2_title'); ?></h1>
            <div class="shop__wrapper">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'block_shop_4',
	'orderby'     => 'date',
	'order'       => 'DESC',
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
	<div class='minified__card'><img src="<?php the_field('kartinka_tovara'); ?>" alt=""><div class='minified__info'><h2><?php the_title(); ?></h2><p><?php the_field('opisanie_tovara'); ?></p><a href="<?php echo get_permalink(); ?>">Толығырақ</a></div></div>
	<?php
}

wp_reset_postdata(); // сброс
			?>
            </div>
			<div id="PU"> </div>
            <h1><?php the_field('block3_title'); ?></h1>
            <div class="shop__wrapper">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'block_shop_2',
	'orderby'     => 'date',
	'order'       => 'DESC',
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
	<div class='minified__card'><img src="<?php the_field('kartinka_tovara'); ?>" alt=""><div class='minified__info'><h2><?php the_title(); ?></h2><p><?php the_field('opisanie_tovara'); ?></p><a href="<?php echo get_permalink(); ?>">Толығырақ</a></div></div>
	<?php
}

wp_reset_postdata(); // сброс
			?>
            </div>
			<div id="NOZH"> </div>
            <h1><?php the_field('block4_title'); ?></h1>
            <div class="shop__wrapper">
				<?php
			$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name' => 'block_shop_3',
	'orderby'     => 'date',
	'order'       => 'DESC',
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
	<div class='minified__card'><img src="<?php the_field('kartinka_tovara'); ?>" alt=""><div class='minified__info'><h2><?php the_title(); ?></h2><p><?php the_field('opisanie_tovara'); ?></p><a href="<?php echo get_permalink(); ?>">Толығырақ</a></div></div>
	<?php
}

wp_reset_postdata(); // сброс
			?>
            </div>
        </div>
    </section>
<?php
get_footer();
