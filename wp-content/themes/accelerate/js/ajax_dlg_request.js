function myform_ajax_send(name,email,mess){
	
	jQuery('#name').attr('disabled', true);
	jQuery('#email').attr('disabled', true);
	jQuery('#mess').attr('disabled', true);
	jQuery('.input_close_box').attr('disabled', true);
	jQuery('.input_ok_box').attr('disabled', true);
	
jQuery.ajax({
	type: 'POST',
	url: myform_Ajax.ajaxurl,
	dataType:'json',
	data:{
		'name':jQuery(name).val(),
		'email':jQuery(email).val(),
		'mess':jQuery(mess).val(),
		'nonce': myform_Ajax.nonce,
		'action':'myform_send_action'
	},
	success: function (data) {
		
		jQuery('#email_div').css('border-color', '');
		jQuery('#mess_div').css('border-color', '');
		
		if(data.error==""){
			if(data.el1 != "")
			{
				jQuery('#' + data.el1 + '_div').css('border-color', 'red');
				jQuery('#name').attr('disabled', false);
				jQuery('#email').attr('disabled', false);
				jQuery('#mess').attr('disabled', false);
				jQuery('.input_close_box').attr('disabled', false);
				jQuery('.input_ok_box').attr('disabled', false);
			}
			if(data.el2 != "") {
				jQuery('#' + data.el2 + '_div').css('border-color', 'red');
				jQuery('#name').attr('disabled', false);
				jQuery('#email').attr('disabled', false);
				jQuery('#mess').attr('disabled', false);
				jQuery('.input_close_box').attr('disabled', false);
				jQuery('.input_ok_box').attr('disabled', false);

			}
				
			if (data.el1 == "" && data.el2 == "") {
				jQuery('#request_form').prop("disabled", true);
				jQuery('.form_title').html("Сообщение отправлено");
				jQuery('.form_title').css('color', 'green');
				jQuery('#request_form').delay(1000).fadeOut(500);
				jQuery('#request_form')[0].reset();
			}
		}else{
			jQuery('#name').attr('disabled', false);
			jQuery('#email').attr('disabled', false);
			jQuery('#mess').attr('disabled', false);
			jQuery('.input_close_box').attr('disabled', false);
			jQuery('.input_ok_box').attr('disabled', false);
			alert(data.error);
		}
	},
	error: function () {
		jQuery('#name').attr('disabled', false);
		jQuery('#email').attr('disabled', false);
		jQuery('#mess').attr('disabled', false);
		jQuery('.input_close_box').attr('disabled', false);
		jQuery('.input_ok_box').attr('disabled', false);
		alert("Ошибка соединения");
	}
});
}
