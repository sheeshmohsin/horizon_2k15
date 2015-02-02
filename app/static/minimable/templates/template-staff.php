<?php
/**
 * Template Name: Template Staff
 * 
 */?>
	<section id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
	 	<div class="container">
			<div class="row">
				<div class="span12">
					<h2 class="section-title"><?php the_title(); ?></h2>
					<div class="row">
						<div class="span3 border" id="staff-desc" style="position:relative;">
							<h3 class="col-title color"><?php echo get_post_meta($post->ID, 'fw_title_left', true);?></h3>
							<?php the_content(); ?>
						</div>
						<div class="span9 border" id="staff-team" style="position:relative;">
							<?php query_posts('post_type=team&posts_per_page=-1'); ?>
							<?php $count_posts = wp_count_posts('team'); 
							$published_posts = $count_posts->publish; ?>
							<?php if (have_posts()) : ?>
							<?php if($published_posts > 1 ) { ?> 
							<ul class="nav nav-tabs">
							<?php $count = 0; ?>
							<?php while(have_posts()) : the_post() ?>
							<?php $count++; ?>
								<?php if ($count == 1) : ?>
							  	<li class="active"><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><?php the_title(); ?></a></li>
						  	<?php else : ?>
							  	<li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><?php the_title(); ?></a></li>
							  <?php endif; ?>
							  <?php endwhile; ?>
							</ul>
							<?php } ?>
							<?php endif; ?>
							<div class="tab-content row">
							<?php if (have_posts()) : ?>
							<?php $count = 0; ?>
							<?php while(have_posts()) : the_post() ?>
							<?php $count++; ?>
								<?php if ($count == 1) : ?>
									<div class="tab-pane fade active in" id="<?php echo get_the_ID(); ?>">
								  	<div class="span3">
								  		<?php the_post_thumbnail('staff', array('class' => 'img-circle')); ?>
								  	</div>
								  	<div class="span6 description-text">
								  		<h3><?php the_title(); ?></h3>
								  		<?php the_content(); ?>
								  		<ul class="unstyled social">
												<?php if (get_post_meta($post->ID, 'fw_fb_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_fb_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-facebook fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_tw_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_tw_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-twitter fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_gp_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_gp_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-google-plus fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_it_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_it_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-instagram fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_pt_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_pt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-pinterest fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_ln_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_ln_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-linkedin fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_yt_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_yt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-youtube fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_tr_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_tr_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-tumblr fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_vk_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_vk_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-vk fa-2x"></span>
														</a>
													</li>
												<?php } ?>
											</ul>
										</div>
							  	</div>
						  	<?php else : ?>
						  		<div class="tab-pane fade" id="<?php echo get_the_ID(); ?>">
								  	<div class="span3">
								  		<?php the_post_thumbnail('staff', array('class' => 'img-circle')); ?>
								  	</div>
								  	<div class="span6 description-text">
								  		<h3><?php the_title(); ?></h3>
								  		<?php the_content(); ?>
								  		<ul class="unstyled social">
												<?php if (get_post_meta($post->ID, 'fw_fb_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_fb_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-facebook fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_tw_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_tw_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-twitter fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_gp_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_gp_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-google-plus fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_it_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_it_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-instagram fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_pt_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_pt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-pinterest fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_ln_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_ln_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-linkedin fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_yt_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_yt_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-youtube fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_tr_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_tr_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-tumblr fa-2x"></span>
														</a>
													</li>
												<?php } ?>
												<?php if (get_post_meta($post->ID, 'fw_vk_link', true)) { ?>
													<li>
														<a href="<?php echo (get_post_meta($post->ID, 'fw_vk_link', true))?>" <?php if( get_post_meta($post->ID, 'fw_enable_target_blank', true)) { ?>target="_blank"<?php }?>>
															<span class="fa fa-vk fa-2x"></span>
														</a>
													</li>
												<?php } ?>
											</ul>
										</div>
							  	</div>
						  	<?php endif; ?>
							  <?php endwhile; ?>
							  <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>