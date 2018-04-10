<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<section id="heather-archive-indx">

	<article class="portfolio-nav text-center">

		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'portfolio' ) ); ?>
		</div>			

	</article>
	<main id="col-md-moose" class="container" role="main">

		<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

		<div id="masonry-grid">

			<div class="grid-sizer"></div>

			
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'portfolio' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div> <!-- MASONRY GRID -->

	</main><!-- #main -->
	<!-- </div>#primary -->
			<section id="html-portfolio-roadmap" class="container">

				<h1 class="text-center">Web Design Services</h1>

				<div class="content-box">
					
					<div class="image-group row">

						<figure class="image-box col-sm-12 col-md-4 col-lg-4">
							
							<article class="roadmap-image-text">

								<h3 class="subheadline">
									Level 1 Sites
								</h3>
								
								<h4 class="text-only">

									<ul class="list-group">
										<li class="list-group-item">Free Premium Theme</li>
										<li class="list-group-item">Theme Customization</li>
										<li class="list-group-item">Content Add</li>
										<li class="list-group-item">Content Styling</li>
										<li class="list-group-item">Custom Logo</li>
										<li class="list-group-item">Fast & Secure Deployment</li>
									</ul>

								</h4>
								
							</article>

						</figure>

						<figure class="image-box col-sm-12 col-md-4 col-lg-4">
							
							<article class="roadmap-image-text">

								<h3 class="subheadline">
									Level 2 Sites
								</h3>
								
								<h4 class="text-only">

									<ul class="list-group">
										<li class="list-group-item">Everything From Level One</li>
										<li class="list-group-item">Custom Sections</li>
										<li class="list-group-item">Custom Pages</li>
										<li class="list-group-item">Custom Landing Page</li>
										<li class="list-group-item">Free Page Speed Optimization Package</li>
										<li class="list-group-item">Email Optin Package Integration *</li>
									</ul>

								</h4>
								
							</article>

						</figure>

						<figure class="image-box col-sm-12 col-md-4 col-lg-4">
							
							<article class="roadmap-image-text">

								<h3 class="subheadline">
									Level 3 Sites
								</h3>
								
								<h4 class="text-only">

									<ul class="list-group">
										<li class="list-group-item">Full Custom Theme From Scratch</li>
										<li class="list-group-item">Custom Pages & Landing Page</li>
										<li class="list-group-item">Free Speed Optimization Package</li>
										<li class="list-group-item">Free Security Enhancement Package</li>
										<li class="list-group-item">Email Optin Package Integration *</li>
										<li class="list-group-item">Extended Premium Support</li>
									</ul>

								</h4>
								
							</article>

						</figure>

						<div class="roadmap-button">

							<p>* For example, MailChimp, Convertkit, Infusionsoft etc.</p>
						
						</div>
						<div class="roadmap-button">

							<a href="/request-quote/" class="btn btn-primary btn-lg" style="color: white;">Get A Free Quote</a>
							
						</div>
					
					</div>

				</div>
				
			</section> <!-- End portfolio-roadmap -->	

	
</section> <!-- End Container -->	

<?php
get_footer();
