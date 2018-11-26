<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ShUrRe
 */

get_header();
?>	

	
<!--contenido-->
<div class="row">
	<div class="col s10">
		<div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="card-content">
			
				<!--titulo receta-->
				<div class="card green darken-4">
					<div class="card-content"> 
						<?php the_title( '<h5 class="entry-title white-text">', '</h5>' ); ?>									
					</div>
				</div><!-- .entry-header -->

				<!--imagen receta-->                            
				<div class="card">
					<div class="center">
						<?php shurre_post_thumbnail(); ?>  <!-- .entry-image --> 
					</div>

					<!--partes receta-->
					<div class="card-content">

						<!--chips-->
						<div class="chip entry-footer">
							<i class="material-icons left">account_circle</i>
							<?php shurre_entry_footer(); 				
							?>			
						</div><!-- .entry-footer -->

						<!--descripción-->
						<div class="row">
							<div class="col s6">
								<div class="card">
									<div class="card-content">
										<div class="card blue-grey darken-4">
											<div class="card-content">
												<h4 class="white-text">
													<i class="material-icons left">reorder</i>Listado de recetas por categoría platos</h4>
											</div>
										</div>                                                    
										<p>
											Aquí el contenido de la tarjeta en texto
										</p>
									</div>
								</div>
							</div>
						<!--ingredientes-->
							<div class="col s6">
								<div class="card">
									<div class="card-content">
										<div class="card blue darken-4">
											<div class="card-content">
												<h4 class="white-text">
													<i class="material-icons left">shopping_cart</i>Listado de recetas por categoría platos</h4>
											</div>
										</div>                                                    
										<p>
											Aquí el contenido de la tarjeta en texto
										</p>
									</div>
								</div>
							</div>
						</div> 
						<!--preparacón-->
						<div class="row">
							<div class="col s12">
								<div class="card">
									<div class="card-content">
										<div class="card deep-purple darken-4">
											<div class="card-content">
												<h4 class="white-text">
													<i class="material-icons left">done_all</i>Listado de recetas por categoría platos</h4>
											</div>
										</div>                                                    
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
									</div>                                            
								</div>
							</div>
						</div>                                    
					</div>                                
				</div>                            
			</div>
		</div>
		<?php the_post_navigation(); ?>
	</div>
</div>
	
<?php
get_sidebar();
get_footer();
