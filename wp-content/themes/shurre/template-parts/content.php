<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

?>
 
 <!-- content personalizado -->
<div class="col s4">
	<div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="card-image">
			<?php shurre_post_thumbnail(); ?> <!-- .entry-image -->                                           
		</div>

		<div class="card-content">

			<header class="entry-header">
				<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
			</header><!-- .entry-header -->				

			<p class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shurre' ),
						array(
							'span' => array(
							'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shurre' ),
					'after'  => '</div>',
				) );
				?>
			</p><!-- .entry-content -->
			<br>

			<!--chips-->
			<div class="chip entry-footer">
				<i class="material-icons left">account_circle</i>
				<?php shurre_entry_footer(); 				
				?>			
			</div><!-- .entry-footer -->
		</div>

		<!--enlace card-->
		<div class="card-action">
			<a href="<?php echo get_tag_link($tag_id); ?> ">IR A LA RECETA</a>
		</div>

	</div><!-- #post-<?php the_ID(); ?> -->
</div>
