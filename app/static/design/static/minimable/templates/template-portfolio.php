<?php
/**
 * Template Name: Template Portfolio
 * 
 */?>
 	<section id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<div class="container" id="portfolio">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="portfolio-container">
				<?php query_posts('post_type=portfolio&posts_per_page=-1'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post() ?>		
				<div class="row item">
					<div class="span8">
						<?php the_post_thumbnail('portfolio'); ?>
					</div>
					<div class="span4 border description-text">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
						<?php if (get_post_meta($post->ID, 'fw_link_portfolio', true)) { ?>
						<a class="link-portfolio" href="http://<?php echo get_post_meta($post->ID, 'fw_link_portfolio', true);?>"><?php echo $fw_label_portfolio_link ?></a>
						<?php } ?>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>