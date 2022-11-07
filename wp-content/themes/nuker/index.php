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
            <a class="btn__top__main" href="">Оставить заявку</a>  
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
					<a href="https://nuker.kz/produkcziya/#ZPU">
                   <img src="<?php echo $card1['card__img']; ?>" alt="<?php echo $card1['image']; ?>" />
                    <p class="item__title"><?php echo $card1['card__title']; ?></p>
                    <p class="item__descr"><?php echo $card1['card__paragraf']; ?></p>    
                </a>
				
				<?php endif; ?>
				<?php
		
// переменные
				$card2 = get_field('card2');	

				if( $card2 ): ?>
					<a href="https://nuker.kz/produkcziya/#PU">
                   <img src="<?php echo $card2['card__img']; ?>" alt="<?php echo $card2['image']; ?>" />
                    <p class="item__title"><?php echo $card2['card__title']; ?></p>
                    <p class="item__descr"><?php echo $card2['card__paragraf']; ?></p>    
                </a>
				
				<?php endif; ?>
				<?php
		
// переменные
				$card3 = get_field('card3');	

				if( $card3 ): ?>
					<a href="https://nuker.kz/produkcziya/#NOZH">
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
    <div class="container">
    <div class="main__pre-footer__wrapper">
    <button><a href='https://nuker.kz/dokumenty-2/' style='color:#3399DB;'>Патенты</a></button>
    <button><a href='https://nuker.kz/dokumenty-2/'style='color:white;'>Сертификаты</a></button>
</div>
</div>
    <section class="section4" style='margin-bottom:70px;'>
        <div class="container">
            <h2>Нам доверяют</h2>
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
		<style>
			.telegram-form{
				display: flex;
				align-content: center;
				justify-content: center;
				margin-top: 10%;
				position: relative;
			}
			.wpcf7{
				background: #ffffff;
				padding: 35px;
				border-radius: 40px;
			}
			.title__form{
				text-align: center;
				font-size: 23px;
			}
			.close {
				right: -530px;
				left: auto !important;
				top: 3px;
			}
			.p__form{
				margin-top: 15px;
				margin-bottom: 20px;
				font-size: 20px;
				text-align: center;
			}
			.input {
				width: 100% !important;
			}
			.submit-form{
				width: 100% !important;
			}
			@media (max-width: 520px){
				.close {
					position: absolute;
					right: 18px !important;
					top: 10px !important;
				}
				.telegram-form {
					padding: 5px;
				}
				.title__form {
					font-size: 20px;
				}
				.p__form {
					margin-top: 12px !important;
					margin-bottom: 15px !important;
					font-size: 16px !important;
				}
				.logo__sticky {
					display: none !important;
				}
			}
		</style>
        <form class="form__contactss telegram-form">
			           <span class="close"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
							  <path d="M32.3839 12.688L23.8979 21.172L15.4139 12.688L12.5859 15.516L21.0699 24L12.5859 32.484L15.4139 35.312L23.8979 26.828L32.3839 35.312L35.2119 32.484L26.7279 24L35.2119 15.516L32.3839 12.688Z" fill="#919090"/>
							</svg></span>
						<div role="form" class="wpcf7" id="wpcf7-f350-o1" lang="ru-RU" dir="ltr">
			<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>

			<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="350">
			<input type="hidden" name="_wpcf7_version" value="5.6.3">
			<input type="hidden" name="_wpcf7_locale" value="ru_RU">
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f350-o1">
			<input type="hidden" name="_wpcf7_container_post" value="0">
			<input type="hidden" name="_wpcf7_posted_data_hash" value="">
			</div>
			<h6 class="title__form">Оставить заявку</h6>
			<p class="p__form">Оставьте ваши контакты и мы вам перезвоним</p>
			<p><span class="wpcf7-form-control-wrap" data-name="phone"><input type="text" name="name" autocomplete="off"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input" aria-required="true" aria-invalid="false" placeholder="Имя"></span><br>
			<span class="wpcf7-form-control-wrap" data-name="phone"><input type="tel" name="phone" autocomplete="off"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input" aria-required="true" aria-invalid="false" placeholder="Телефон"></span><br>
			<span class="wpcf7-form-control-wrap" data-name="select"><select name="select" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required input" aria-required="true" aria-invalid="false"><option value="ЗПУ «Нукер Гарант»">ЗПУ «Нукер Гарант»</option><option value="ЗПУ «Нукер-Гарант М»">ЗПУ «Нукер-Гарант М»</option><option value="ЗПУ «Кайсар»">ЗПУ «Кайсар»</option><option value="ЗПУ «Мини-Нукер»">ЗПУ «Мини-Нукер»</option><option value="ЗПУ «Нукер-Блок»">ЗПУ «Нукер-Блок»</option><option value="ТГИ «Закрутка»">ТГИ «Закрутка»</option></select></span></p>
			<p class="p__form">Наш менеджер свяжется с вами<br> в ближайшее время</p>
			<button type="submit" class="btn__non_spec wpcf7-form-control has-spinner wpcf7-submit submit-form">Оставить заявку</button>
					<button type="submit" class="btn__spec wpcf7-form-control has-spinner wpcf7-submit submit-form">Ваша заявка отправлена</button>		

			<div class="wpcf7-response-output" aria-hidden="true"></div></div>
	</form>
	
	<style>
		.btn__spec{
			display: none;
		}
		.btn__spec_a{
			display: block;
		}
		.btn__spec_d{
			display: none;
		}
		.form__dd{
			display: none !important;
		}
	</style>
    </section>
		
	        <script>
		
				$(".btn__non_spec").click(function(e) {
					$(".btn__spec").addClass('btn__spec_a');
					$(".btn__non_spec").addClass('btn__spec_d');
							setTimeout(function () {
								$(".form").addClass('form__dd');
								
							}, 1500);
				})
				
				
				$('.telegram-form').on('submit', function (event) {

    event.stopPropagation();
    event.preventDefault();

    let form = this,
        submit = $('.submit', form),
        data = new FormData(),
        files = $('input[type=file]')


    $('.submit', form).val('Отправка...');
    $('input, textarea', form).attr('disabled','');

    data.append( 'name', 		$('[name="name"]', form).val() );
    data.append( 'phone', 		$('[name="phone"]', form).val() );
   

    files.each(function (key, file) {
        let cont = file.files;
        if ( cont ) {
            $.each( cont, function( key, value ) {
                data.append( key, value );
            });
        }
    });
    
    $.ajax({
        url: 'wp-content/themes/nuker/ajax.php',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        xhr: function() {
            let myXhr = $.ajaxSettings.xhr();

            if ( myXhr.upload ) {
                myXhr.upload.addEventListener( 'progress', function(e) {
                    if ( e.lengthComputable ) {
                        let percentage = ( e.loaded / e.total ) * 100;
                            percentage = percentage.toFixed(0);
                        $('.submit', form)
                            .html( percentage + '%' );
                    }
                }, false );
            }

            return myXhr;
        },
        error: function( jqXHR, textStatus ) {
            console.log('false')
        },
        complete: function() {
            console.log('Complete')
            form.reset() 
        }
    });

    return false;
});
		</script>
<?php
get_footer();
