<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LeChateaux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<?php if ( is_admin_bar_showing() ) { ?>
		<style>
			@media screen and (max-width: 782px){
				.site-header{
					top: 46px!important;
				}
			}
			.site-header {
				top: 32px;
			}
		</style>
	<?php } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header w-full fixed top-0 z-50">
		<nav class="container mx-auto h-full flex items-center h-full relative px-4">
			<div class="w-4/12 items-center justify-start relative h-full hidden md:flex">
				<div class="left flex items-center text-white relative h-full mr-5">
					<a href="#"><i class="fal fa-phone-alt mr-5"></i></a>
					<a href="#"><i class="fal fa-envelope mr-5"></i></a>
					<a href="#"><i class="fal fa-map-marker mr-5"></i></a>
				</div>
				<div class="right font-sans uppercase text-white text-sm ">
					<a href="#" class="mr-4 border rounded-full px-3 py-2">PT</a>
					<a href="#" class="mr-4 px-3 py-2">EN</a>
				</div>
			</div>
			<div class="w-8/12 md:w-4/12 flex items-center md:justify-center">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="<?php echo home_url()?>"><img src="<?php echo $image[0]?>" class="w-32" alt=""></a>
			</div>
			<div class="w-4/12 flex items-center justify-end">
				<div class="hamburger-wrapper">
					<div class="hamburger hamburger_type-dots">
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
						<span class="hamburger__dot"></span>
					</div>
					<div class="hamburger-text font-sans text-white" style="height: 12px; line-height: 12px;">
						<span class="hamburger-text__item menu">MENU</span>
						<span class="hamburger-text__item close">FECHAR</span>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="navigation w-full h-screen bg-gray-800 fixed top-0 z-40 flex justify-center items-center px-12 py-8">
		<nav class="menu menu--inola flex flex-col items-center relative">
			<a class="menu__item" href="#">
				<span class="menu__item-name">LeChateaux</span>
				<span class="menu__item-label">Saiba mais sobre nós</span>
			</a>
			<a class="menu__item" href="#">
				<span class="menu__item-name">LeChateaux Joá</span>
				<span class="menu__item-label whitespace-no-wrap">Espaço, suítes, localização e gastronomia</span>
			</a>
			<a class="menu__item" href="#">
				<span class="menu__item-name">LeChateaux Lapa</span>
				<span class="menu__item-label whitespace-no-wrap">Espaço, suítes, localização e gastronomia</span>
			</a>
			<a class="menu__item" href="#">
				<span class="menu__item-name">Imprensa</span>
				<span class="menu__item-label">Nós na mídia</span>
			</a>
			<a class="menu__item" href="#">
				<span class="menu__item-name">Reservas</span>
				<span class="menu__item-label">Com antecedência é melhor</span>
			</a>
			</a>
			<a class="menu__item" href="#">
				<span class="menu__item-name">Contato</span>
				<span class="menu__item-label">Está com alguma dúvida?</span>
			</a>
		</nav>
	</div>

	<div id="content" class="site-content">
