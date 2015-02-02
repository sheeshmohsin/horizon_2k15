<?php
/**
 * Template Name: Template External Page
 * 
 */?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php global $options;
	foreach ($options as $value) {
		if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
	}
?>
<?php the_post() ?>
<section class="section-page">
	<div class="container" id="full-width">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="full-width-container">
				<?php the_content(); ?>
			</div>
		</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>