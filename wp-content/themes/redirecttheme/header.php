<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="facebook-domain-verification" content="jnc9sbpakx9hfxgnw4f4wio9ti6lo0" />
		<script src="https://unpkg.com/scrollreveal"></script>
		<script src="https://kit.fontawesome.com/d0450f1ea1.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,600;0,900;1,600;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZQBFB0ZMC7"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-ZQBFB0ZMC7');
		</script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N48WWVM');</script>
		<!-- End Google Tag Manager -->
		<?php wp_head(); ?>
	</head>

		<body <?php body_class(); ?> >
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N48WWVM"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="start-convo-fixed">
			<a href="https://rllinsure.com/start-a-convo/">Start a Conversation</a>
		</div>
		<header class="site-header">
			<?php if ( get_field('logo', 'option') ) : $image = get_field('logo', 'option'); ?>
					<a class="logo" id="lottieLogo" href="<?php echo site_url(); ?>"></a>	  
			<?php endif; ?>

				<nav class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>
				</nav>
				<div class="fire-navigation">
					<span>MENU</span>
					<div class="nav-icon">
						<span></span>
						<span></span>
					</div>
				</div>

			<?php get_template_part( 'template-parts/nav-overlay'); ?>
		</header>


