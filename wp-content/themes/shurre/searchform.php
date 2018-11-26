<?php
/**
 *
 *  The template for the search form
 *
 *  @package WordPress
 *  @subpackage shurre
 *  @since shurre 1.0
 */
?>

<nav>
	<div class="nav-wrapper">
        <!-- search form -->
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform">
			<div class="input-field">
                <!-- icon search-->
				<input id="search" type="search" value="<?php _e( '' , 'shurre' ); ?>" onfocus="if (this.value == '<?php _e( '' , 'shurre' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( '' , 'shurre' ); ?>';}" required>
				<!-- icon search-->
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <!-- icon close-->
				<i class="material-icons">close</i>
			</div>
		</form>
	</div>
</nav>