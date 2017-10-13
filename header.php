<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">

		<!-- header -->
			<header class="header affix">
					<div class="container">
							<nav class="navbar navbar-toggleable navbar-inverse">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon">toggle menu</span>
									</button>
									<a class="navbar-brand" href="<?=home_url('/');?>">
											<?php
											$custom_logo_id = get_theme_mod( 'custom_logo' );
											$src = wp_get_attachment_image_src($custom_logo_id, 'logo-sm');

											 if ( is_array($src) ) {
												 printf( '<img src="%s" width="%s" height="%s" class="hidden-sm-up">', $src[0], $src[1], $src[2]);
											 }

											$src = wp_get_attachment_image_src($custom_logo_id, 'logo-xs');

											 if ( is_array($src) ) {
												 printf( '<img src="%s" width="%s" height="%s" class="hidden-xs-down">', $src[0], $src[1], $src[2]);

											 }
											// the_custom_logo();
											?>

									</a>
									<?php
									wp_nav_menu([
										'theme-location' => 'primary',
										'container_class' => 'collapse navbar-collapse',
										'container_id' => 'navbarSupportedContent',
										'items_wrap'   => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
										// 'walker'         => new Custom_Walker_Nav_Menu,

									]);
									 ?>

									<div class="btn-wrapper">
											<a href="#letter" class="btn btn-outline-inverse btn-contact btn-contact-main">
													<svg class="icon icon-plane icon-plane" width="1em" height="1em">
															<use xlink:href="<?=get_template_directory_uri();?>/images/svg-symbols.svg#plane" width="100%" height="100%"></use>
													</svg>
													<span>Contact us</span>
											</a>
									</div>
							</nav>
					</div>
			</header>
			<!-- /header -->

			<main class="main">

				<?php if ( is_front_page() ) : ?>
					<div class="fullpage">
				<?php endif; ?>
