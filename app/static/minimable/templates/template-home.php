<?php
/**
 * Template Name: Template Home 
 * 
 */?>
<section id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page full-home home-section <?php echo the_slug(); ?>">
	<div class="container <?php if (!get_post_meta($post->ID, 'fw_label_one', true)) { ?>no-bubbles<?php } ?>">
		<?php if(!get_post_meta($post->ID, 'fw_hide_logo', true)) {?>
		<div id="home-header">
			<div id="logo" class="left-logo">
				<img src="<?php echo $fw_logo; ?>" alt="<?php bloginfo('name') ?>" height="45" />
			</div>
			<h2 id="mini-slogan"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<?php } ?>
	  	<?php 
			if 	(get_post_meta($post->ID, 'fw_big_one', true) && 
				 get_post_meta($post->ID, 'fw_big_two', true) && 
				 get_post_meta($post->ID, 'fw_big_three', true))
			{ 
		?>
		<div class="three-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	   		<h1 id="second-title" class="big-title"><?php $second_title = get_post_meta($post->ID, 'fw_big_two', true); echo do_shortcode( $second_title );?></h1>
	   		<h1 id="third-title" class="big-title"><?php $third_title =  get_post_meta($post->ID, 'fw_big_three', true); echo do_shortcode( $third_title );?></h1>
	   	</div>
	   	<?php } 
	   	else if (get_post_meta($post->ID, 'fw_big_one', true) && 
				 get_post_meta($post->ID, 'fw_big_two', true)) 
			{ 
	 		?>
	   	<div class="two-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	   		<h1 id="second-title" class="big-title"><?php $second_title = get_post_meta($post->ID, 'fw_big_two', true); echo do_shortcode( $second_title );?></h1>
	   	</div>
	   	<?php  } else if (get_post_meta($post->ID, 'fw_big_one', true)) { ?>
	   	<div class="one-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	 		</div>
	   	<?php } ?>
		<?php if (get_post_meta($post->ID, 'fw_label_one', true)) { ?>
	   	<div class="<?php if (!get_option('fw_spin_effect')) { ?>spin-effect<?php }?>" id="bubbles">
	   		<nav id="nav-home">
		   		<ul>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_one', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu circle-black" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_one', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_one', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php if (get_post_meta($post->ID, 'fw_label_two', true)) { ?>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_two', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_two', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_two', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php } ?>
		   			<?php if (get_post_meta($post->ID, 'fw_label_two', true)) { ?>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_three', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu circle-black" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_three', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_three', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php } ?>
		   			<?php if (get_post_meta($post->ID, 'fw_label_four', true)) { ?>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_four', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_four', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_four', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php } ?>
		   			<?php if (get_post_meta($post->ID, 'fw_label_five', true)) { ?>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_one', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu circle-black" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_five', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_five', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php } ?>
		   			<?php if (get_post_meta($post->ID, 'fw_label_six', true)) { ?>
		   			<li class="<?php if( get_post_meta($post->ID, 'fw_enable_external_one', true)) { ?>custom-link<?php } ?>">
		   				<a class="circle-menu" href="<?php echo get_post_meta($post->ID, 'fw_bubble_link_six', true);?>"><span class="label-link"><?php echo get_post_meta($post->ID, 'fw_label_six', true);?></span></a>
		   				<span class="arrow"></span>
		   			</li>
		   			<?php } ?>
		   		</ul>
	   		</nav>
	   	</div>
	   	<?php } ?>
	</div>
</section>