<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php _e( '> Tag: ', 'html5blank' ); echo single_tag_title('', false); ?>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
