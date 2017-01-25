<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Nope Nothing to See Here' ); ?></h2>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h3><?php _e( 'Nothing here at all.'); ?></h3>

					<p><?php _e( 'It looks like nothing was found. Maybe try a search?' ); ?></p>
					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
