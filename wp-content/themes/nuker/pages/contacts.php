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
                <h1>Контактная информация</h1>
                <button class="send__message">Отправить письмо</button>
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
                            <h2 class='main__office'>Головной офис</h2>
                            <p><?php the_field('golovnoj_ofis1')?></p>
							<p><?php the_field('golovnoj_ofis2')?></p>
							<p><?php the_field('golovnoj_ofis3')?></p>
							<p><?php the_field('golovnoj_ofis4')?></p>
                            <h3>Представительство в Алматы</h3>
                            <p><?php the_field('predstavitelstvo1')?></p>
                            <p><?php the_field('predstavitelstvo2')?></p>
							<p><?php the_field('predstavitelstvo3')?></p>
							<p><?php the_field('predstavitelstvo4')?></p>
                        </div>
                        <div class='telephones' style='width:141px;'>
                            <h4>Телефон</h4>
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
				right: -490px;
				left: auto !important;
				top: 9px;
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
        url: '../wp-content/themes/nuker/pages/ajax.php',
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