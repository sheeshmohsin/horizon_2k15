jQuery(document).ready(function($) {	
	
	var $template_select = jQuery('select#page_template'),
		$template_box = jQuery('#normal-sortables');
		
	$template_select.change(function() {
		var this_value = jQuery(this).val();
		$('#slogan').css('display','none');
		$('#home_link').css('display','none');
		$('#staff_content').css('display','none');
		$('#contact_information').css('display','none');
		$('#social_link').css('display','none');
		$('#postdivrich').css('display','none');
		$('#link_page').css('display','none');
		
		switch ( this_value ) {
			case 'default':
				$('#postdivrich').css('display','block');
				$('#contact_information').css('display','none');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-home.php':
				$('#slogan').css('display','block');
				$('#home_link').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-staff.php':
				$('#staff_content').css('display','block');
				$('#postdivrich').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-contact.php':
				$('#contact_information').css('display','block');
				$('#social_link').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-gallery.php':
				$('#postdivrich').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-portfolio.php':
				$('#postdivrich').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-fullwidth.php':
				$('#postdivrich').css('display','block');
				$('#link_page').css('display','block');
				break;
			case 'templates/template-page-fullwidth.php':
				$('#postdivrich').css('display','block');
				$('#custom_section').css('display','none');
				$('#link_page').css('display','none');
		}
	});
	
	$template_select.trigger('change');
});