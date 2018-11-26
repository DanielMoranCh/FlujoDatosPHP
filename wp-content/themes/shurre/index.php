<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header();
?>

<div class="row">
    <div class="col s10">
      	<div class="card">
			<div class="card-content">
				
				<!--titulo publicaciones-->
				<div class="card blue">
					<div class="card-content" >						
						<?php
						the_archive_title( '<h1 class="page-title white-text">', ' Recientes', '</h1>' );						
						?>
					</div>                                
				</div>

				<!--ultimas publicaciones-->
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					?>

					<div class="row">
									

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								
								get_template_part( 'template-parts/content', get_post_type() );
								
							endwhile;
							?>

						
					</div>
					<?php
					the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>	
			</div>
		</div>				
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();