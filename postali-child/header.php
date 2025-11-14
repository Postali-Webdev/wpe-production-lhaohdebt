<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PXWKP6');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');
if ( !empty($global_schema) ) :
    echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<link rel="preload" as="image" href="https://www.ohiodebthelp.com/wp-content/uploads/2022/02/hp-header-temp.jpg.webp">
<link rel="preload" as="image" href="https://www.ohiodebthelp.com/wp-content/uploads/2022/02/hp-header-temp.jpg">

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXWKP6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<header>

    <a href="#skip" class="skip">Skip to content</a>

		<div id="header-top" class="container wide">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
                <div class="cta-block__header">
                    <div class="cta-text">
                        <p>Get Your <strong>100% Free</strong><br>Debt Relief Consult</p>
                    </div>
                    <div class="cta-button">
                        <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn" title="Call Ohio Debt Help today"><?php the_field('global_phone','options'); ?></a>
                    </div>
                </div>
				<div id="header-top_menu">	
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav closed" tabindex=0>
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
                    <div id="nav-container">
                        <nav role="navigation">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>
                        </nav>
                        <form class="navbar-form-search" role="search" method="get" action="/">
                            <input type="text" name="s" placeholder="Search for..." id="search-input-5cab7fd94d469" value="" class="form-control">
							<button type="submit" class="btn btn-search" aria-label="Site search" id="search-button"><span class="icon-magnifying-glass" aria-hidden="true"></span></button>
						</form>	
                        <div class="cta-block__header">
                            <div class="cta-text">
                                <p>Get Your <strong>100% Free</strong><br>Debt Relief Consult</p>
                            </div>
                            <div class="cta-button">
                                <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn" title="Call Ohio Debt Help today"><?php the_field('global_phone','options'); ?></a>
                            </div>
                            <a href="" class="menu-close" style="opacity:0;">.</a>
                        </div>
                    </div>	
				</div>
			</div>
		</div>
	</header>
