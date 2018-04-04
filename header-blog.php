<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="3833b9f5fb66f58faddede705b2ccac0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--==============================
=            favicons            =
===============================-->
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/uploads/2018/03/favicon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/uploads/2018/03/favicon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/uploads/2018/03/favicon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/uploads/2018/03/favicon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/uploads/2018/03/favicon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/uploads/2018/03/favicon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/uploads/2018/03/favicon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/uploads/2018/03/favicon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/2018/03/favicon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/uploads/2018/03/favicon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2018/03/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/uploads/2018/03/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/uploads/2018/03/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

<!--====  Base Tag  ====-->

<?php the_field('before_ending_head_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->


<?php the_field('before_ending_head_tag'); ?>


<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

<?php wp_head(); ?>
</head>

	<style type="text/css" media="screen">

		#masthead {
	 		height: 200px;	
	 		/* height: 83px;	 */
				
				<?php if( get_field( 'page_header_image', 643 ) ) : ?>

				 background-image: url("<?php the_field( 'page_header_image', 643 ); ?>");  
				 /* background-image: url("<?php the_field( 'blog_index_header_image', get_option('page_for_posts') ); ?>");   */
				<?php else : ?>	
	
				 background-image: url("https://drive.google.com/uc?id=1ZVIetMOpuqq--lC2H2OUwLZ2UCMzHEHz");   

				<?php endif; ?> 

			/* background-image: url("/wp-content/uploads/2017/07/JEN2-Hero-Img-1920x800.jpg");  */
			background-size: cover;
			background-position: top center;

		}

		@media ( max-width: 800px ) {
			#masthead {
			
				/* background-image: url("https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M"); */
				/* background-image: url("/wp-content/uploads/2017/07/JEN2-Hero-Img-1920x800.jpg"); */
				background-size: cover;
				background-position: top center;
			}
		}		

	</style>		

<body <?php body_class(); ?>>

<!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

<!--====  Base Tag  ====-->

<?php the_field('after_top_body_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->

<?php the_field('after_top_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>



	<header id="masthead" class="site-header" role="banner">
	
		<div class="navbar-container">
			<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php the_field( 'site_logo_image', 5 ); ?>"></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
	  		  </div><!-- /.container-fluid -->

			</nav> <!-- END NAV BAR -->

				
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
	



















