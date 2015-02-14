<?php
/**
 * Template Name: Template Full Width
 * 
 */?>
	<section id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<div class="container" id="full-width">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="full-width-container">
				<?php the_content(); ?>
			</div>
		</div>
	</section>