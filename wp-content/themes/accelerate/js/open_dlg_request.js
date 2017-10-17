(function( $ ) {
	$(document).ready(function(){
		$(".show_form").on("click",function(){show_form_in_site($(this)); return false;});
		$(".big_box_close, .a_close_box, .input_close_box").on("click",function(){hide_form_in_site($(this)); return false;});
	});
	function show_form_in_site(X){ // открываем нужную форму
		$('.form_title').css('color', '');
		$('.form_title').html("Оставьте нам сообщение");
		
		jQuery('#email_div').css('border-color', '');
		jQuery('#mess_div').css('border-color', '');
		
		jQuery('#name').attr('disabled', false);
		jQuery('#email').attr('disabled', false);
		jQuery('#mess').attr('disabled', false);
		jQuery('.input_close_box').attr('disabled', false);
		jQuery('.input_ok_box').attr('disabled', false);

		var needBoxToShow=$(".request_form[rel='"+X.attr("rel")+"']");
		needBoxToShow.fadeIn(500); // открываем нужную форму у них, ссылки и формы, rel совпадают
		var heightWind=parseInt($(window).height());
		var heightBox=parseInt(needBoxToShow.find(".form_box").outerHeight());
		var heighRaz=heightWind-heightBox;
		if(heighRaz>0){
			needBoxToShow.find(".form_box").css("top",parseInt(heighRaz/2)+"px");
		}
		return false;
	}

	function hide_form_in_site(X){ // прячем нужную форму
		X.closest("#request_form").fadeOut(500);
		return false;
	}
})(jQuery);
