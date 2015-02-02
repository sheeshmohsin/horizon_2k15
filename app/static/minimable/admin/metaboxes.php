<?php
if(is_admin()){
	wp_register_script( 'metaboxes', get_template_directory_uri().'/admin/js/metaboxes.js', array( 'jquery' ),null,true );
	wp_enqueue_script( 'metaboxes' );
}
function add_custom_meta_box() {
    global $post;
	 
	add_meta_box(  
	 	'slogan', // $id  
        'Slogan', // $title  
        'fw_show_slogan_box', // $callback  
        'page', // $page  
        'normal', // $context  
        'high'); // $priority  
	    	
	add_meta_box(  
 		'home_link', // $id  
	    'Home Nav Link', // $title  
	    'fw_show_home_nav_link', // $callback  
	    'page', // $page  
	    'normal', // $context  
	    'high'); // $priority  
	    
	add_meta_box(  
 		'staff_content', // $id  
	    'Staff Content', // $title  
	    'fw_show_staff_box', // $callback  
	    'page', // $page  
	    'normal', // $context  
	    'high'); // $priority  
	 
 	add_meta_box(  
 		'contact_information', // $id  
	    'Contact Information', // $title  
	    'fw_show_contact_information', // $callback  
	    'page', // $page  
	    'normal', // $context  
	    'high'); // $priority 
	    
    add_meta_box(  
	 		'social_link', // $id  
	    'Social link', // $title  
	    'fw_show_social_link', // $callback  
	    'page', // $page  
	    'normal', // $context  
	    'high'); // $priority
	    
    add_meta_box(  
	 		'social_link', // $id  
	    'Social link', // $title  
	    'fw_show_social_link', // $callback  
	    'team', // $page  
	    'normal', // $context  
	    'high'); // $priority 
	    
	add_meta_box(  
	 		'link_portfolio', // $id  
	    'Link to work', // $title  
	    'fw_show_link_portfolio', // $callback  
	    'portfolio', // $page  
	    'normal', // $context  
	    'high'); // $priority 
	    
  add_meta_box(
		'link_page',
		'Page link for the menu',
		'fw_show_page_link',
		'page',
		'normal',
		'high');
	 
}    
add_action('add_meta_boxes', 'add_custom_meta_box');
		
// Field Array  
$prefix = 'fw_';  

$big_title_fields = array(  
    array(  
        'label'=> 'Hide the top header',  
        'desc'  => 'Hide the big logo and the mini slogano on the right',  
        'id'    => $prefix.'hide_logo',  
        'type'  => 'checkbox'  
       ),
    array(  
        'label'=> 'Big Title One',  
        'desc'  => 'Insert the first big title.',  
        'id'    => $prefix.'big_one',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Big Title Two',  
        'desc'  => 'Insert the second big title.',  
        'id'    => $prefix.'big_two',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Big Title Three',  
        'desc'  => 'Insert the third big title.',  
        'id'    => $prefix.'big_three',  
        'type'  => 'text'  
    )      
);

$home_nav_links = array(  
  array(  
   'label'=> 'Label Link First Bubble',  
   'desc'  => 'Label link for the first bubble. Leave it blank to remove the bubbles',  
   'id'    => $prefix.'label_one',  
   'type'  => 'text'  
   ),
  array(  
   'label'=> 'Link First Bubble',  
   'desc'  => 'Link for the first bubble (you can find it in the page to link)',  
   'id'    => $prefix.'bubble_link_one',  
   'type'  => 'text'  
   ),
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_one',
    'type' => 'checkbox',
    'std'  => "" 
    ),   
  array(  
   'label'=> 'Label Link Second Bubble',  
   'desc'  => 'Label link for the second bubble',  
   'id'    => $prefix.'label_two',  
   'type'  => 'text'  
   ),
  array(  
   'label'=> 'Link Second Bubble',  
   'desc'  => 'Link for the second bubble (you can find it in the page to link)',  
   'id'    => $prefix.'bubble_link_two',  
   'type'  => 'text'  
   ),    
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_two',
    'type' => 'checkbox',
    'std'  => "" 
    ),   
  array(  
    'label'=> 'Label Link Third Bubble',  
    'desc'  => 'Label link for the third bubble',  
    'id'    => $prefix.'label_three',  
    'type'  => 'text'  
    ),
  array(  
    'label'=> 'Link Third Bubble',  
    'desc'  => 'Link for the third bubble (you can find it in the page to link)',  
    'id'    => $prefix.'bubble_link_three',  
    'type'  => 'text'  
    ),
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_three',
    'type' => 'checkbox',
    'std'  => "" 
    ),  
  array(  
    'label'=> 'Label Link Fourth Bubble',  
    'desc'  => 'Label link for the fourth bubble',  
    'id'    => $prefix.'label_four',  
    'type'  => 'text'  
    ),
  array(  
    'label'=> 'Link Fourth Bubble',  
    'desc'  => 'Link for the fourth bubble (you can find it in the page to link)',  
    'id'    => $prefix.'bubble_link_four',  
    'type'  => 'text'  
    ),
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_four',
    'type' => 'checkbox',
    'std'  => "" 
    ),  
  array(  
    'label'=> 'Label Link Fifth Bubble',  
    'desc'  => 'Label link for the fifth bubble',  
    'id'    => $prefix.'label_five',  
    'type'  => 'text'  
    ),  
  array(  
    'label'=> 'Link Fifth Bubble',  
    'desc'  => 'Link for the fifth bubble (you can find it in the page to link)',  
    'id'    => $prefix.'bubble_link_five',  
    'type'  => 'text'
    ),
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_five',
    'type' => 'checkbox',
    'std'  => "" 
    ),  
  array(  
    'label'=> 'Label Link Sixth Bubble',  
    'desc'  => 'Label link for the sixth bubble',  
    'id'    => $prefix.'label_six',  
    'type'  => 'text'  
    ),
  array(  
    'label'=> 'Link Sixth Bubble',  
    'desc'  => 'Link for the sixth bubble (you can find it in the page to link)',  
    'id'    => $prefix.'bubble_link_six',  
    'type'  => 'text'  
    ),     
  array(
    'label' => 'External link',
    'desc' => "If it isn't an anchor turn it on",
    'id' => $prefix.'enable_external_six',
    'type' => 'checkbox',
    'std'  => "" 
    ) 
);  

$staff_fields = array(  
    array(  
        'label'=> 'Title Left Column',  
        'desc'  => 'Title for the left column.',  
        'id'    => $prefix.'title_left',  
        'type'  => 'text'  
    )
);

$contact_fields = array( 
		array(  
        'label'=> 'Contact Info Title',  
        'desc'  => 'Title of the contact informations',  
        'id'    => $prefix.'contact_info_title',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Contact Form Title',  
        'desc'  => 'Title of the contact form',  
        'id'    => $prefix.'contact_form_title',  
        'type'  => 'text'  
    ),  
    array(  
        'label'=> 'Address Label',  
        'desc'  => 'Name of the address field',  
        'id'    => $prefix.'address_label',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Address Field',  
        'desc'  => 'Insert your address',  
        'id'    => $prefix.'address_field',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Phone Label',  
        'desc'  => 'Name of the phone field',  
        'id'    => $prefix.'phone_label',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Phone Field',  
        'desc'  => 'Insert the Phone Number',  
        'id'    => $prefix.'phone_field',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Fax Label',  
        'desc'  => 'Name of the fax field',  
        'id'    => $prefix.'fax_label',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Fax Field',  
        'desc'  => 'Insert the Fax Number',  
        'id'    => $prefix.'fax_field',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Email Label',  
        'desc'  => 'Name of the email field',  
        'id'    => $prefix.'email_label',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Email Field',  
        'desc'  => 'Insert the Email',  
        'id'    => $prefix.'email_field',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'More information',  
        'desc'  => 'Insert more informations if you need them',  
        'id'    => $prefix.'more_information',  
        'type'  => 'wysiwyg'  
    ),
	array(  
        'label'=> 'Contact Form',  
        'desc'  => 'Insert Contact Form Short Code',  
        'id'    => $prefix.'contact_form',  
        'type'  => 'text'  
    )
);
$social_links = array(
		array(
				'label' => 'Open links in a new window',
				'desc' => "Open social links in a new window",
				'id' => $prefix.'enable_target_blank',
				'type' => 'checkbox',
				'std'  => "" 
		),   
    array(  
        'label'=> 'Facebook Link',  
        'desc'  => 'Insert the URL of your facebook page',  
        'id'    => $prefix.'fb_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Twitter Link',  
        'desc'  => 'Insert the URL of your twitter profile',  
        'id'    => $prefix.'tw_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Google plus Link',  
        'desc'  => 'Insert the URL of your google plus profile',  
        'id'    => $prefix.'gp_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Instagram Link',  
        'desc'  => 'Insert the URL of your instagram profile',  
        'id'    => $prefix.'it_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Pinterest Link',  
        'desc'  => 'Insert the URL of your pinterest page',  
        'id'    => $prefix.'pt_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Linkedin Link',  
        'desc'  => 'Insert the URL of your linkedin profile',  
        'id'    => $prefix.'ln_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'Youtube Link',  
        'desc'  => 'Insert the URL of your youtube channel',  
        'id'    => $prefix.'yt_link',  
        'type'  => 'text'  
    ),
     array(  
        'label'=> 'Tumblr Link',  
        'desc'  => 'Insert the URL of your tumblr page',  
        'id'    => $prefix.'tr_link',  
        'type'  => 'text'  
    ),
    array(  
        'label'=> 'VK Link',  
        'desc'  => 'Insert the URL of your VK profile',  
        'id'    => $prefix.'vk_link',  
        'type'  => 'text'  
    )
);
$portfolio_fields = array(  
    array(  
        'label'=> 'Link',  
        'desc'  => 'Link for the portfolio work',  
        'id'    => $prefix.'link_portfolio',  
        'type'  => 'text'  
    )
);
$link_field = array (
	array(
		'label' => 'Page link for the menu',
		'desc' => 'This is the link you have to add in the menu',
		'id' => $prefix.'page_link',
		'type' => 'label',
		'std'  => "" 
	),
	array(
		'label' => 'Page link alternative',
		'desc' => "If you don't like the page link or it has some special chars, you can write yours without space or any type of special chars like this: #the-anchor",
		'id' => $prefix.'page_link_alternative',
		'type' => 'text',
		'std'  => "" 
	)
);
// The Callback  
function fw_show_slogan_box() {
		  
	global $big_title_fields, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field and loop  
    echo '<div class="field-group">';  
    
    foreach ($big_title_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin fields  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" style="width:95%"/> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
					case 'wysiwyg':
						wp_editor( $meta ? $meta : $field['std'], $field['id'], isset( $field['options'] ) ? $field['options'] : array() );
				        echo '<br /><span class="description">'.$field['desc'].'</span>';
					break;
                    case 'checkbox'
                            ?>
                        <div id="<?php echo $field['id']; ?>-container" class="check">  
                            <input type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" class="on_off" <?php if( $meta == true ) { ?>checked="checked"<?php } ?> />
                            <span></span>  
                            <small><?php echo $field['desc']; ?></small><div class="clearfix"></div>  
                        </div>
                        <script type="text/javascript">
                            jQuery( document ).ready( function( $ ) {
                                $( '#<?php echo $field['id']; ?>-container span' ).click( function() {
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
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end field
}  

function fw_show_home_nav_link() {  
	global $home_nav_links, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field table and loop  
    echo '<div class="field-group">';  
    foreach ($home_nav_links as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
					case 'wysiwyg':
						wp_editor( $meta ? $meta : $field['std'], $field['id'], isset( $field['options'] ) ? $field['options'] : array() );
				        echo '<br /><span class="description">'.$field['desc'].'</span>';
					break;
                    case 'checkbox'
                            ?>
                        <div id="<?php echo $field['id']; ?>-container" class="check">  
                            <input type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" class="on_off" <?php if( $meta == true ) { ?>checked="checked"<?php } ?> />
                            <span></span>  
                            <small><?php echo $field['desc']; ?></small><div class="clearfix"></div>  
                        </div>
                        <script type="text/javascript">
                            jQuery( document ).ready( function( $ ) {
                                $( '#<?php echo $field['id']; ?>-container span' ).click( function() {
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
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end table  
}  

function fw_show_staff_box() {  
	global $staff_fields, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field table and loop  
    echo '<div class="group-field">';  
    foreach ($staff_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end table  
}  
function fw_show_contact_information() {  
	global $contact_fields, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field table and loop  
    echo '<div class="group-field">';  
    foreach ($contact_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.esc_attr($meta).'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
                    case 'wysiwyg':
                        wp_editor( $meta ? $meta : $field['std'], $field['id'], isset( $field['options'] ) ? $field['options'] : array() );
                        echo '<br /><span class="description">'.$field['desc'].'</span>';
                    break;
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end table  
}  
function fw_show_social_link() {  
	global $social_links, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field table and loop  
    echo '<div class="group-field">';  
    foreach ($social_links as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.esc_attr($meta).'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
					case 'checkbox'
							?>
							<div id="<?php echo $field['id']; ?>-container" class="check">  
								<input type="checkbox" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" class="on_off" <?php if( $meta == true ) { ?>checked="checked"<?php } ?> />
								<span></span>  
							    <small><?php echo $field['desc']; ?></small><div class="clearfix"></div>  
							</div>
							<script type="text/javascript">
								jQuery( document ).ready( function( $ ) {
									$( '#<?php echo $field['id']; ?>-container span' ).click( function() {
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
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end table  
}  
function fw_show_link_portfolio() {  
	global $portfolio_fields, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field table and loop  
    echo '<div class="group-field">';  
    foreach ($portfolio_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<div class="inner-field"> 
                <label for="'.$field['id'].'">'.$field['label'].'</label> 
                <p>';  
                switch($field['type']) { 
                	case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
 				} //end switch  
        echo '</p></div>';  
    } // end foreach  
    echo '</div>'; // end table  
}  
function fw_show_page_link() {
		  
	global $link_field, $post;  
	// Use nonce for verification  
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
  
    // Begin the field and loop  
    echo '<div class="field-group">';  
    
    foreach ($link_field as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin fields  
        
                switch($field['type']) { 
                	case 'label': ?>  
					    		<h4> #<?php echo the_fw_title() ?> </h4> 
					        <br /><span class="description"><?php $field['desc'] ?></span>  
					<?php break; 
					case 'text':  
					    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" style="width:95%" /> 
					        <br /><span class="description">'.$field['desc'].'</span>';  
					break; 
 				} //end switch  
        
    } // end foreach  
    echo '</div>'; // end field
}  
// Save the Data  
function fw_save_custom_meta($post_id) {  
    global $home_nav_links, $big_title_fields, $staff_fields, $contact_fields, $social_links, $portfolio_fields, $link_field;  
  
    // verify nonce  
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))  
        return $post_id;  
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
  
    // loop through fields and save the data  
    foreach ($home_nav_links as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
    
    foreach ($big_title_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
    
    foreach ($staff_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
    
    foreach ($contact_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach
     foreach ($social_links as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach
    foreach ($portfolio_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach    
}  
add_action('save_post', 'fw_save_custom_meta'); 

function fw_customize_meta_boxes() {
 	/* Removes meta boxes from Posts */
	remove_meta_box('postcustom','post','normal');
	remove_meta_box('trackbacksdiv','post','normal');
	remove_meta_box('commentstatusdiv','post','normal');
	remove_meta_box('commentsdiv','post','normal');
	remove_meta_box('tagsdiv-post_tag','post','normal');
	remove_meta_box('postexcerpt','post','normal');
	/* Removes meta boxes from pages */
	remove_meta_box('postcustom','page','normal');
	remove_meta_box('trackbacksdiv','page','normal');
	remove_meta_box('commentstatusdiv','page','normal');
	remove_meta_box('commentsdiv','page','normal'); 
}		
add_action('admin_init','fw_customize_meta_boxes'); 

 ?>