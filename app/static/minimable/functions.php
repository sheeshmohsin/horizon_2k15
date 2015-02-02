<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */
	require_once ('admin/theme-options.php');
	require_once ('admin/premium.php');
	require_once( 'external/starkers-utilities.php' );
	require_once( 'admin/metaboxes.php' );
	include("admin/update_notifier.php");
			

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	add_image_size('small',270,270,true);
	add_image_size('big',9999,400);
	add_image_size('staff',270,270,true);
	add_image_size('portfolio',770,440,true);
	
	register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'minimable_script_enqueuer' );

	/* ========================================================================================================================
	
	Scripts and styles
	
	======================================================================================================================== */


	function minimable_script_enqueuer() {
		
		if( !is_admin()){
			wp_deregister_script('jquery');
			wp_register_script('jquery', ("//code.jquery.com/jquery-1.11.0.min.js"), false, null, true);
			wp_enqueue_script('jquery');
			wp_register_script('jquery-migrate', ("//code.jquery.com/jquery-migrate-1.2.1.min.js"), false, null);
			wp_enqueue_script('jquery-migrate');
		}
		wp_register_script( 'html5', get_template_directory_uri().'/js/html5.js', array( 'jquery' ),null);
		wp_enqueue_script( 'html5' );
		
		wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ),null,true );
		wp_enqueue_script( 'bootstrap-js' );
		if (is_page_template('main-template.php')) {
			wp_register_script( 'easing', get_template_directory_uri().'/js/easing.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'easing' );
				
			wp_register_script( 'ios-fix', get_template_directory_uri().'/js/ios-orientationchange-fix.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'ios-fix' );	
			
			wp_register_script( 'swipe-box', get_template_directory_uri().'/js/jquery.swipebox.min.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'swipe-box' );
			
			wp_register_script( 'images-loaded', get_template_directory_uri().'/js/imagesloaded.pkgd.min.js', array( 'jquery' ),null, true);
			wp_enqueue_script( 'images-loaded' );
			
			wp_register_script( 'preloader', get_template_directory_uri().'/js/jquery.queryloader2.min.js', array( 'jquery' ),null, true);
			wp_enqueue_script( 'preloader' );

			wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'site' );
			wp_register_script( 'tween-max', get_template_directory_uri().'/js/TweenMax.min.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'tween-max' );
			if (get_option('fw_onoff_scrollorama')) {
				wp_register_script( 'tween-max', get_template_directory_uri().'/js/TweenMax.min.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'tween-max' );
				wp_register_script( 'scrollorama', get_template_directory_uri().'/js/jquery.superscrollorama.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'scrollorama' );	
				wp_register_script( 'scrolling-effect', get_template_directory_uri().'/js/scrolling-effect.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'scrolling-effect' );
			}
			if (get_option('fw_onoff_animation_title')) {
				wp_register_script( 'title-animation', get_template_directory_uri().'/js/title-animation.js', array( 'jquery' ),null,true );
				wp_enqueue_script( 'title-animation' );
			}
		}
		if (get_option('fw_onoff_custom_js')) {
			wp_register_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array( 'jquery' ),null,true );
			wp_enqueue_script( 'custom-js' );
    }
		wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', '', '', 'screen' );
    	wp_enqueue_style( 'bootstrap' );
		
		wp_register_style( 'bootstrap-responsive', get_stylesheet_directory_uri().'/css/bootstrap-responsive.min.css', '', null, 'screen' );
		wp_enqueue_style( 'bootstrap-responsive' );
		
		wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300', '', '', 'screen' );
    wp_enqueue_style( 'open-sans' );
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', null, 'screen' );
    wp_enqueue_style( 'screen' );
		
		if (get_option('fw_onoff_custom_css')) {
			wp_register_style( 'custom-style', get_stylesheet_directory_uri().'/custom.css', '', null, 'screen' );
	    wp_enqueue_style( 'custom-style' );
		}
		wp_register_style( 'font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css', '', null, 'screen' );
    wp_enqueue_style( 'font-awesome' );
		
		wp_register_style( 'swipebox', get_stylesheet_directory_uri().'/css/swipebox.css', '', null, 'screen' );
        wp_enqueue_style( 'swipebox' );
	}
	function fw_css() {
		global $options;
		foreach ($options as $value) {
			if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
		} ?>
		<style>
			.color, h1 > span, h2 > span, .description-text a, .description-text a:hover, ul.social li a span, .email-link:hover { color:<?php echo $fw_main_color ?>!important;}
			.circle-menu, .nav-tabs li a, #portfolio a.link-portfolio, input[type="submit"] {background:<?php echo $fw_main_color ?>;}
			.page-template-main-template-php .section-page {padding:<?php echo $fw_nav_height +40 ?>px 0;}
			.navbar { line-height:<?php echo $fw_nav_height ?>px;}
			.sub-menu {top:<?php echo $fw_nav_height +20?>px;}
			.navbar .nav > li:hover > .sub-menu {top:<?php echo $fw_nav_height +1?>px;} 
			.navbar .collapse #nav-menu,#mini-logo a,.cart-contents,.cart-contents span{ height:<?php echo $fw_nav_height ?>px;}
			#mini-logo img { height:<?php echo $fw_logo_height ?>px;}
			.navbar .nav > li > a {line-height: <?php echo $fw_nav_height ?>px;}
			<?php if (!get_option('fw_onoff_animation_title')) { ?>
			.big-title {display:block;}
			<?php } ?>
		</style>
		<?php
	}
	add_action('wp_head', 'fw_css');

	function fw_script() {
		wp_reset_query(); ?>
		<?php if (!is_front_page()) { ?>
		<script type="text/javascript">
			$('.top-nav a').each(function() {
				var _href = $(this).parent().not('.custom-link').children().attr("href");
				$(this).parent().not('.custom-link').children().attr("href", '<?php bloginfo('wpurl')?>/' + _href);
			});
		</script> 
		<?php } ?>
		<?php if ( !is_page_template('main-template.php')) { ?>
		<script src="<?php bloginfo('template_url') ?>/js/stickyfooter.js"></script>
		<script type="text/javascript">
			$('.home-link').removeClass('active');
			$('header').removeClass('home-top');
			$('header').addClass('blog-menu');
		</script>
		<?php } else { ?>
		<script type="text/javascript">
		var speed = <?php echo (get_option('fw_speed') ? get_option('fw_speed') : 3000) ?>;
		var topOffset;
		$(document).ready(function() {
		    // Optimalisation: Store the references outside the event handler:
		    var $window = $(window);
		    topOffset = 290;

		    function checkWidth() {
		        var windowsize = $window.width();
		        if (windowsize > 978) {
		            topOffset = <?php echo (get_option('fw_nav_height') ? get_option('fw_nav_height') : 40) ?>;
		        }
		    }
		    // Execute on load
		    checkWidth();
		    // Bind event listener
		    $(window).bind("load resize", function() {
		    	checkWidth;
		    });
		    var stickyHeaderTop = 500;
			// Bind to scroll

		});
		</script>
			
		<?php } ?>
		<script type="text/javascript">
		var stickyHeaderTop = 500;
		$(window).bind('scroll', function() {
		    if( jQuery(window).scrollTop() > stickyHeaderTop) {
		      jQuery('#menu-top').addClass('fixed');
		    } else {
		      jQuery('#menu-top').removeClass('fixed');
		    }
	    });
	    </script>
	<?php }
	add_action('wp_footer', 'fw_script',100);
	/* ========================================================================================================================
	
	Custom Post Type
	
	======================================================================================================================== */
	
	add_action( 'init', 'create_post_type' );
	
	function create_post_type() {
		register_post_type( 'team',
			array(
				'labels' => array(
				'name' => __( 'Team' ),
				'singular_name' => __( 'Team Member' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New Member' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Member' ),
				'new_item' => __( 'New Member' ),		
			),
			'public' => true,
			'supports' => array( 'title', 'editor','thumbnail' )
			)
			
		);
		register_post_type( 'portfolio',
			array(
				'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Work ' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New Work' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Work' ),
				'new_item' => __( 'New Work' ),		
			),
			'public' => true,
			'supports' => array( 'title', 'editor','thumbnail' )
			)	
		);
	}
	/* ========================================================================================================================
	
	Shortcode
	
	======================================================================================================================== */
	
	function fw_color($atts,$content = null) {
		return '<span>'.$content.'</span>';
	}
	add_shortcode("color", "fw_color");
	add_filter( 'the_title', 'do_shortcode' );
	
	/* ========================================================================================================================
	
	Other functions
	
	======================================================================================================================== */
	function the_slug() {
    $post_data = get_page($page->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
	}
	function the_fw_title() {
    $post_data = get_page($page->ID, ARRAY_A);
    $title = $post_data['post_title'];
		$chars = array("[color]","[/color]","<span>","</span>","<br/>","<br>");
		$substitute = array("");
		$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y','Ğ'=>'G', 'İ'=>'I', 'Ş'=>'S', 'ğ'=>'g', 'ı'=>'i', 'ş'=>'s', 'ü'=>'u',
                            'ă'=>'a', 'Ă'=>'A', 'ș'=>'s', 'Ș'=>'S', 'ț'=>'t', 'Ț'=>'T'  );
		$anchor = strtr( $title, $unwanted_array );
		$anchor = str_replace($chars,$substitute,$anchor);
		$anchor = str_replace(" ","-",$anchor);
		$anchor = preg_replace('/[^A-Za-z0-9\-]/', '', $anchor); // Removes special chars.
		$anchor = strtolower($anchor);
    return $anchor; 
	}