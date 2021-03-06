<?php get_header(); ?>

<div id="maincontentcontainer">
	<div id="primary" class="site-content row" role="main">

		<div class="col grid_8_of_12">

		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'content' );
				}
				wpaus_content_nav( 'nav-below' );
			} else {
				get_template_part( 'no-results' );
			}
		?>

		</div> <!-- /.col -->
		<?php get_sidebar(); ?>

	</div> <!-- /#primary.site-content.row -->
</div> <!-- /#maincontentcontainer -->

<?php
get_footer();