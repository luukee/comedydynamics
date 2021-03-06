<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package Comedy_Dynamics
 * @since Comedy_Dynamics 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
	
	<!-- https://cdnjs.com/libraries/font-awesome/5.5.0 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script src="https://www.googleoptimize.com/optimize.js?id=OPT-KTVWKVQ"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133924511-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-133924511-1');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '427279594883969');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=427279594883969&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
	<!-- ahref -->
	<meta name="ahrefs-site-verification" content="7b69fa741e252eb602a92c6de05acd1444ee71d78dab8f344cd5a142be8153da">
	<!-- ahref -->
</head>

<body <?php body_class(); ?>>

	<script>
		fbq('track', 'ViewContent', {
			value: 1,
		});
	</script>

	<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
		<?php get_template_part('template-parts/mobile-off-canvas'); ?>
	<?php endif; ?>

	<?php get_template_part('template-parts/search-off-canvas'); ?>


	<header class="site-header cell shrink medium-cell-block-container" role="banner">
		<!-- <div class="site-title-bar title-bar mobile-nav" <?php //comedy_dynamics_title_bar_responsive_toggle();
																?>>
			<div class="title-bar-left grid-x align-middle">
				<button aria-label="<?php //_e('Main Menu', 'comedy-dynamics');
									?>" class="menu-icon" type="button" data-toggle="<?php comedy_dynamics_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
						<?php
						// bloginfo('name');
						// if (function_exists('the_custom_logo')) {
						//     the_custom_logo();
						// }
						?>
				</span>
			</div>
		</div> -->

		<nav class="site-navigation top-bar desktop-menu" role="navigation">

			<div class="nav-container">

				<div class="left">

					<?php comedy_dynamics_top_bar_l(); ?>

				</div>

				<!-- custom logo -->
				<div class="site-desktop-title top-bar-title">

					<?php if (function_exists('the_custom_logo')) {
						the_custom_logo();
					} ?>

				</div>

				<!-- top bar right -->
				<div class="right">

					<?php comedy_dynamics_top_bar_r(); ?>

					<?php // if (! get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') :
					?>

					<?php // get_template_part('template-parts/mobile-top-bar');
					?>

					<?php // endif;
					?>

					<!-- search icon -->
					<div class='header-search-container' tabindex='1'>

						<div class='search-container' tabindex='1'>

							<i class="fas fa-search"></i>

							<?php echo do_shortcode('[searchandfilter id="4711" fields="search" search_placeholder="Search. . ."]'); ?>

						</div>

					</div>

				</div>

			</div>

		</nav>

	</header>