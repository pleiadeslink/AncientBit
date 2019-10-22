<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="section-title"><?php _e( '> ', 'html5blank' ); single_cat_title(); ?><br /><?php 
the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
?></div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
