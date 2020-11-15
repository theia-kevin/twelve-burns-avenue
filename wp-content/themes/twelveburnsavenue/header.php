<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<?php if ( is_front_page() ) {
		?>
        <div class="nav-menu d-flex flex-row flex-wrap justify-content-between align-items-center">
            <div class="slogan-wrapper">
                <div class="slogan">
                    <div class="txt-1">We take pride in</div>
                    <div class="txt-2">our professionalism</div>
                    <div class="txt-3">and develop Auckland</div>
                    <div class="txt-4">with our enthusiasm.</div>
                </div>
                <a href="<?php echo get_home_url() ?>">
                    <img class="img-fluid img-logo" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 2.png'; ?>" alt="">
                </a>
            </div>
            <div id="menu-wrapper-a" class="order-2">
                <ul class="menu">
                    <li class="menu-item current_page_item">
                        <div id="open-menu">Menu</div>
                    </li>
                </ul>
            </div>
            <div id="menu-wrapper-b" class="order-1">
				<?php
				wp_nav_menu( [
					'theme_location' => 'header-menu'
				] );
				?>
            </div>
        </div>
		<?php
	} else {
		?>
        <div class="nav-menu d-flex flex-row flex-wrap justify-content-center justify-content-lg-between align-items-center">
            <a href="<?php echo get_home_url() ?>">
                <img class="img-fluid img-logo" src="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 2.png'; ?>" alt="">
            </a>
			<?php
			wp_nav_menu( [
				'theme_location' => 'header-menu'
			] );
			?>
        </div>
		<?php
	}
	?>
</header>
