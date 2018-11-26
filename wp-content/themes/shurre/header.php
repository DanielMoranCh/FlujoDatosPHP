<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--Importar Materialize-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="row">
	<!--navegacion lateral-->
	<div class="col s2">
		<a class="center" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h3 class="blue-text"><?php bloginfo( 'name' ); ?></h3></a>
		<a class="center" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
		<h4 class="center blue-text" ><?php bloginfo( 'description' ); ?></h4>
		<!--engresan widgets-->
		<?php get_search_form (); ?>
		<?php get_sidebar(); ?> 
	</div>		       
	<!--barra de navegación-->
	<div class="col s10" >
		<header>
			<nav>
				<div class="nav-wrapper">
					<ul class="left hide-on-med-and-down">
						<li class="menu-toggle left hide-on-med-and-down" aria-controls="primary-menu" aria-expanded="false">
						<?php esc_html_e( 'Primary Menu', 'shurre' ); ?>
						</li>
					</ul>
					
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>	
