jQuery(document).ready(function($) {
	
	$('.settings-btn .btn a').click(function(e) {
		$('.tab-pane').hide();
   		$(this.hash).show();
   		$('.settings-btn .btn').removeClass('active');
   		$(this).parent().addClass('active');
   		e.preventDefault();
	});
	jQuery('.fw_upload input[type="button"]').click(function(){
    var upField = $(this).parent().find('input[type="text"]');
    tb_show('', 'media-upload.php?type=image&TB_iframe=true');
   
    window.send_to_editor = function(html) {
			imgurl = $('img', html).attr('src');
			upField.val(imgurl);
	 		tb_remove();
		}          	
		return false;
	});
});   

  