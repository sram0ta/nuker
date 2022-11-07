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
Template Name: Главная страница
*/

	

?>
<?php get_header( 'name' ); ?>
<section class="section1">  
        <div class="container">
            <h1 class="main__title"><?php the_field('title__main'); ?></h1>
            <p class="title__info1"><?php the_field('paragraf_main'); ?></p>
            <p class="title__info2"><?php the_field('advantage1'); ?></p>
            <p class="title__info3"><?php the_field('advantage2'); ?></p>
            <a class="btn__top__main" href="">Leave a request</a>  
        </div>
		<picture>
            <source media="(max-width: 465px)" srcset="<?php the_field('picture_top_mobile'); ?>">
             <img class="title__img" src="<?php the_field('picture__top'); ?>" >
          </picture>
        
    </section>
    </div>
    <div class="rotated__bg"></div>
    <section class="section2">
        <div class="container">
            <div class="post__top__wrapper">
				<?php
		
// переменные
				$card1 = get_field('card1');	

				if( $card1 ): ?>
					<a href="https://nuker.kz/en/produkcziya/#ZPU">
                   <img src="<?php echo $card1['card__img']; ?>" alt="<?php echo $card1['image']; ?>" />
                    <p class="item__title"><?php echo $card1['card__title']; ?></p>
                    <p class="item__descr"><?php echo $card1['card__paragraf']; ?></p>    
                </a>
				
				<?php endif; ?>
				<?php
		
// переменные
				$card2 = get_field('card2');	

				if( $card2 ): ?>
					<a href="https://nuker.kz/en/produkcziya/#PU">
                   <img src="<?php echo $card2['card__img']; ?>" alt="<?php echo $card2['image']; ?>" />
                    <p class="item__title"><?php echo $card2['card__title']; ?></p>
                    <p class="item__descr"><?php echo $card2['card__paragraf']; ?></p>    
                </a>
				
				<?php endif; ?>
				<?php
		
// переменные
				$card3 = get_field('card3');	

				if( $card3 ): ?>
					<a href="https://nuker.kz/en/produkcziya/#NOZH">
                   <img src="<?php echo $card3['card__img']; ?>" alt="<?php echo $card1['image']; ?>" />
                    <p class="item__title"><?php echo $card3['card__title']; ?></p>
                    <p class="item__descr"><?php echo $card3['card__paragraf']; ?></p>    
                </a>
				
				<?php endif; ?>
            </div>
        </div>
    </section>
    <div class="rotated__bg2"></div>
    <section class="section3">
        <div class="container">
            <div class="main__descr__wrapper">
                <h2 class="title__corp"><?php the_field('organization'); ?></h2>
                <p><?php the_field('history'); ?></p>
            </div>
        </div>
    </section>
    <div class="rotated__bg__center"></div>
    <section class="section4">
        <div class="container">
            <div class="map" style='background: url{}'>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Aktau</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Atyrau</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Aktobe</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Kostanay</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Zhezkazgan</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Petropavlovsk</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Kokshetau</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Astana</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Shikment</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Pavlodar</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Karaganda</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Almaty</p></a>
                <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo-map.svg" alt=""><p>Ust-Kamenogorsk</p></a>
            </div>
        </div>
    </section>
    <div class="container">
    <div class="main__pre-footer__wrapper">
    <button><a href='https://nuker.kz/en/dokumenty-2/' style='color:#3399DB;'>Patents</a></button>
    <button><a href='https://nuker.kz/en/dokumenty-2/'style='color:white;'>Certificates</a></button>
</div>
</div>
    <section class="section4" style='margin-bottom:70px;'>
        <div class="container">
            <h2>They trust us</h2>
            <div class="slider__brands">

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
				 <div>
                    <div class="slide">
                    <img src="<?php the_field('brend') ?>" alt="">
                
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
