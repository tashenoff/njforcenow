<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>
			<div class="fixed leading-[4] z-50 w-full border-b border-opacity-20 border-white">
				<div class="mx-auto container">
					<div class="lg:flex text-white lg:justify-between lg:items-center relative">
						<div class="flex justify-between items-center">
							<div class="flex items-center">
								<?php if (has_custom_logo()) { ?>
									<?php the_custom_logo(); ?>
								<?php } else { ?>
									<div class="text-lg uppercase">

										<?php echo get_bloginfo('name'); ?>
										</a>
									</div>



								<?php } ?>


								<?php get_template_part( 'parts/navs/menu');?>




							</div>

							<div class="lg:hidden">
								<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
									<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
											<g id="icon-shape">
												<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
											</g>
										</g>
									</svg>
								</a>
							</div>
						</div>
						<div class="flex items-center"><i class="icon-arrow-right-cirle mr-3"></i>
							<span>служба поддержки</span>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>