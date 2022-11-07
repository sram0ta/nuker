<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nuker
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	
</head>
<body>
    <div class="top__bg">
    <header class="header__main">
        <div class="container">
            <div class="header__wrapper">
                <img class="logo__sticky show__logos" src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo.svg" alt="">
                <img class="logo__white show__logow" src="<?php echo esc_url( get_template_directory_uri() ); ?>/src/img/logo_white.svg" alt="">
                <?php wp_nav_menu()?>
                 <div class="language language__selected">
                    <a  class="active__lang">EN</a>
                    <a href='http://nuker.kz/kk'  class="none__active">KZ</a>
                    <a href='http://nuker.kz/' class="none__active">RU</a>
                </div>
				<div class="burger__menu"><span class="burger"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_46_198)">
                    <path d="M5.33325 8H26.6666V10.6667H5.33325V8ZM5.33325 14.6667H26.6666V17.3333H5.33325V14.6667ZM5.33325 21.3333H26.6666V24H5.33325V21.3333Z" fill="white"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_46_198" x="-4" y="0" width="40" height="40" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="2"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_46_198"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_46_198" result="shape"/>
                    </filter>
                    </defs>
                    </svg>  </span><span class="burger__close"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5893 0.458679L7.93196 6.11468L2.27596 0.458679L0.390625 2.34401L6.04662 8.00001L0.390625 13.656L2.27596 15.5413L7.93196 9.88535L13.5893 15.5413L15.4746 13.656L9.81862 8.00001L15.4746 2.34401L13.5893 0.458679Z" fill="white"/>
                        </svg></span></div>
            </div>
        </div>
    </header>