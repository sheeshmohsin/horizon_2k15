<?php
	if( is_admin()){
		wp_enqueue_script( 'jquery-ui', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js');
    	wp_enqueue_script( 'farbtastic' );
    	wp_enqueue_script('media-upload');
    	wp_enqueue_script('thickbox');
    	wp_enqueue_style('thickbox');
		wp_enqueue_style( 'farbtastic' );
		wp_enqueue_script( 'my-theme-options', get_template_directory_uri() . '/admin/js/theme-options.js');
	}

$themename = "Minimable";
$shortname = "fw";
$options = array (
    array( "name" => $themename." Options",
           "type" => "title"),
    array( "type" => "open"),
    
    /* General Settings */
	       
    array( "name" => "General Settings",
    		   "id" => "sec-general",
           "type" => "section"),
                     
    array( "name" => "Favicon",
           "desc" => "Upload the image. Then copy and paste the image url in the field on top.",
           "id" => $shortname."_favicon",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/favicon.ico'),
           
    array( "name" => "Main Color",
           "desc" => "Set the main color of your site",
           "id" => $shortname."_main_color",
           "type" => "color",
           "std" => '#01a3b2'),
    
    array( "name" => "Number of Pages",
           "desc" => "How many pages do you use in your site?",
           "id" => $shortname."_page_number",
           "type" => "input-slider",
           "std" => '6'),
           
    array( "name" => "Speed scroll",
           "desc" => "Set the scroll speed (in ms)",
           "id" => $shortname."_speed",
           "type" => "text",
           "std" => '3000'),  
               
   	array( "name" => "Label for Portfolio Link",
           "desc" => "Insert the label for the Portfolio link",
           "id" => $shortname."_label_portfolio_link",
           "type" => "text",
           "std" => 'Go to work'),       

    array( "name" => "Enable/Disable Spin Effect",
           "desc" => "If you check it, it removes the spin effect from Home Bubbles",
           "id" => $shortname."_spin_effect",
           "type" => "checkbox",
           "std" => ''),

    array( "name" => "Enable/Disable Scrollorama",
           "desc" => "If you don't like Scrollorama effect, you can disable it.",
           "id" => $shortname."_onoff_scrollorama",
           "type" => "checkbox",
           "std" => 'checked'),
     
    array( "name" => "Enable/Disable Animation Big Title",
           "desc" => "If you don't like animation text effect, you can disable it.",
           "id" => $shortname."_onoff_animation_title",
           "type" => "checkbox",
           "std" => 'checked'),     
	
		array( "name" => "Enable/Disable Custom Css",
           "desc" => "If you want to add some extra style, enable custom css and edit custom.css file.",
           "id" => $shortname."_onoff_custom_css",
           "type" => "checkbox",
           "std" => 'checked'),
    
    array( "name" => "Enable/Disable Custom Javascript",
           "desc" => "If you want to add some extra javascript function, enable custom javascriot and edit custom.js file, in js directory.",
           "id" => $shortname."_onoff_custom_js",
           "type" => "checkbox",
           "std" => 'checked'),  

    array( "type" => "submit"),       
    
    array( "type" => "end-section"), 

    /* Header settings */
    array( "name" => "Header Settings",
           "id" => "sec-header",
           "type" => "section"),

    array( "name" => "Logo",
           "desc" => "Upload your logo image or copy and paste its image url if you have just uploaded it.",
           "id" => $shortname."_logo",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/logo.png'),
           
    array( "name" => "Logo Retina",
           "desc" => "Upload your retina logo image or copy and paste its image url if you have just uploaded it. It's important its name finishes with @2x. For example logo@2x.png. It must be placed in the same folder of normal logo ",
           "id" => $shortname."_logo_retina",
           "type" => "image",
           "std" => ''),
    
    array( "name" => "Menu Bar Height",
           "desc" => "Set the height of menu bar. Default 40px",
           "id" => $shortname."_nav_height",
           "type" => "select-size",
           "std" => '40'),

    array( "name" => "Logo Image Height",
           "desc" => "Set the height of logo image. Default 14px",
           "id" => $shortname."_logo_height",
           "type" => "select-size",
           "std" => '14'),

    array( "name" => "Logo Menu Bar",
           "desc" => "Upload your mini logo image that appears on sticky menu.",
           "id" => $shortname."_logo_mini",
           "type" => "image",
           "std" => ''.get_bloginfo('template_directory').'/img/logo-mini.png'),
    
    array( "name" => "Logo Menu Bar Retina",
           "desc" => "Upload your mini logo retina image that appears on sticky menu. It's important its name finishes with @2x. For example logo-mini@2x.png. It must be placed in the same folder of normal logo",
           "id" => $shortname."_logo_mini_retina",
           "type" => "image",
           "std" => ''),
    
    array( "name" => "Show the menu bar from the top of the page",
           "desc" => "If you want to show the menu bar from the top of the page, check it",
           "id" => $shortname."_nav_menu",
           "type" => "checkbox",
           "std" => ''),
          
    array( "type" => "submit"),



    array( "type" => "end-section"), 

    /* Social Settings */       
    array( "name" => "Footer Settings",
           "id" => "sec-social",
           "type" => "section"),
    
    array( "name" => "Footer text",
           "desc" => "Enter text used in the right side of the footer. It can be HTML.",
           "id" => $shortname."_footer_text",
           "type" => "text",
           "std" => ""),
           
    /* Analytics Code */       
		array( "name" => "Google Analytics Code",
           "desc" => "Paste your Google Analytics or other tracking code in this box.",
           "id" => $shortname."_ga_code",
           "type" => "textarea",
           "std" => ""),
    array( "type" => "submit"),       
    array( "type" => "end-section"),
    array( "type" => "close"));

    
function mytheme_add_admin() {
 
	global $themename, $shortname, $options;
	 
	if ( isset( $_GET['page'] ) && $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
		 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
		 
		foreach ($options as $value) {
		if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
		 
		header("Location: themes.php?page=theme-options.php&saved=true");
		die;
		 
		} else if( 'reset' == $_REQUEST['action'] ) {
		 
		foreach ($options as $value) {
		delete_option( $value['id'] ); }
		 
		header("Location: themes.php?page=theme-options.php&reset=true");
		die;
		 
		}
	}
 	add_menu_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {  
	$file_dir=get_bloginfo('template_directory');  
	wp_enqueue_style("functions", $file_dir."/admin/css/theme-option.css", false, "1.0", "all");  
} 

function mytheme_admin() {
 
	global $themename, $shortname, $options;
	 
	if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
	 
?>

	<div class="wrap">
		<h2><?php echo $themename; ?> Settings</h2>
        <p>Read documentation before using the theme. Go to the <a href="http://minimable.fedeweb.net/docs" target="_blank">Minimable Docs</a> Page.</p>
                    <p>There is a demo content file you can import for starting to use the theme in the best way. In the Installation section of the documentation you will find the step for using it.</p>
        <div class="wrap-settings">
            <div class="settings-container">
                <ul class="settings-btn">
                    <li class="btn active">
                        <a href="#sec-general" id="general-btn">General</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-header" id="header-btn">Header</a>
                    </li>
                    <li class="btn">
                        <a href="#sec-social" id="footer-btn">Footer</a>
                    </li>
                </ul>
                <div id="settings-tabs">
            	 	<form method="post">
            		<?php foreach ($options as $value) {
            			switch ( $value['type'] ) {
            				case "open":
            		?>
            			<div style="width:800px">
            		<?php break;
            		 case "close":
            		?>
            		 	</div>
            		 
            		<?php break;
            		
            		case "section" :
            		?>
            			<div class="tab-pane" id="<?php echo $value['id']; ?>">
            				<div class="section-header">
                                <h3 class="title-section"><?php echo $value['name']; ?></h3>
                                <input name="save" type="submit" value="Save changes" class="save-btn"/>
                                <input type="hidden" name="action" value="save" />
                            </div>
                            <div id="options-<?php echo $value['id']; ?>" class="options">
            		<?php break;
            	
            		case "end-section" :
            		?>
            				</div>
            			</div>
            		<?php break;
            		
            		case "subsection" :
            		?>
            			<div class="subsection">
            				<div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>

            		<?php break;
            		case "end-subsection" : ?>
            		</div>
            		<?php break;
            		case 'text':
            		?>
            			<div class="text <?php echo $value['id']; ?>">
                    <div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
            				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( stripslashes(esc_attr(get_settings($value['id']))) != "") { echo stripslashes(esc_attr(get_settings((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>" /><br/>
            			</div>
            		<?php
            		break;
            		case 'input-slider':
            		?>
            			<div class="text <?php echo $value['id']; ?>">
            				<div class="field-description">
                                <h4><?php echo $value['name']; ?></h4>
                                <small><?php echo $value['desc']; ?></small>
                            </div>
            				<div class="slider-container">
            					<div class="slider"></div>
            				</div>
            				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( stripslashes(esc_attr(get_settings($value['id']))) != "") { echo stripslashes(esc_attr(get_settings((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>" /><br/>
            			</div>
            			<script>
            				jQuery(".slider").slider({
            					min: 1, //minimum value
            			    max: 20, //maximum value
            			    range: "min",
            			    value: <?php if ( stripslashes(esc_attr(get_settings($value['id']))) != "") { echo stripslashes(esc_attr(get_settings((esc_attr($value['id']) )))); } else { echo $value['std']; } ?>, //default value
            			      slide: function(event, ui) {
            			          jQuery("#fw_page_number").val(ui.value);
            			          }
            			      });
              		jQuery("#fw_page_number").val(jQuery(".slider").slider("value"));
              		jQuery( "#fw_page_number" ).change(function() {
                		jQuery( ".slider" ).slider( "value", jQuery(this).val() );
            			});
            			</script>
            		<?php
            		break;
            		
            		case 'image' :
            		?>
            			<div class="fw_upload">
                    <div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
            				<input style="width:317px;" class="upload_image" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
            				<input class="upload_image_button" type="button" value="Upload Image" />
            			</div>
            		<?php
            		break;
            		
            		case 'textarea':
            		?>
                  <div class="analytics-code">
              			<div class="field-description">
                        <h4><?php echo $value['name']; ?></h4>
                        <small><?php echo $value['desc']; ?></small>
                    </div>
              			<div class="areatesto">
              				<textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( stripslashes(get_settings( $value['id'] )) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea><br/>
              			</div>
                  </div>
            		<?php
            		break;
            		case 'checkbox'
            		?>
            			<div id="<?php echo $value['id']; ?>-container" class="check">  
            				<div class="field-description">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>  
                        <small><?php echo $value['desc']; ?></small>
                    </div>  
            				<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="on_off" value="1" <?php checked( get_option( $value['id'] ), true ); ?> />
            				<span></span>  
            			</div>
            			<script type="text/javascript">
            				jQuery( document ).ready( function( $ ) {
            					$( '#<?php echo $value['id']; ?>-container span' ).click( function() {
            						var input = $( this ).prev( 'input' );
            						var checked = input.attr( 'checked' );
            						if( checked ) {
            							input.attr( 'checked', false ).attr( 'value', 0 ).removeClass('onoffchecked');
            						} else {
            							input.attr( 'checked', true ).attr( 'value', 1 ).addClass('onoffchecked');
            						}
            						input.change();
            					} );
            				} );
            		</script>  
            		<?php break;
                case 'select-size'
                ?>
                <div class="size-container">
                  <div class="field-description">
                      <h4><?php echo $value['name']; ?></h4>
                      <small><?php echo $value['desc']; ?></small>
                  </div>
                  <div class="spinner_container">
                    <input class="number" type="text" name="<?php echo $value['id']; ?>" id="<?php echo $value['id'] ?>-size" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
                    <div class="input-controls">
                      <a href="#" id="<?php echo $value['id']; ?>-up" class="inc">+</a>
                      <a href="#" id="<?php echo $value['id']; ?>-down" class="dec">-</a> 
                    </div>
                  </div>
                </div>
                
                <script type="text/javascript">
                  jQuery(document).ready( function($) {
                    var el = $('#<?php echo $value['id'] ?>-size');
                    function change( amt ) {
                      el.val( parseInt( el.val(), 10 ) + amt );
                    }
                    $('#<?php echo $value['id']; ?>-up').click( function(e) {
                      change( 1 );
                      e.preventDefault();
                    } );
                    $('#<?php echo $value['id']; ?>-down').click( function(e) {
                      change( -1 );
                      e.preventDefault();
                    } );
                  } );  
                </script> 
                <?php
                break;
            		case 'submit':
            		?>
            			<p class="submit">
            				<input name="save" type="submit" value="Save changes" class="save-btn"/>
            				<input type="hidden" name="action" value="save" />
            			</p>
            		</form>
            		<?php
            		break;
            		}
            	}
            ?>
                </form>
            </div>
        </div>
    </div>

	
	<form method="post">
		<p class="submit">
			<input name="reset" type="submit" value="Reset" />
			<input type="hidden" name="action" value="reset" />
		</p>
	</form>
</div>

<?php
}

add_action('admin_menu', 'mytheme_add_admin');
add_action('admin_init', 'mytheme_add_init'); 
?>