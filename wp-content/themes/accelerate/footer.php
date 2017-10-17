<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->	
	<?php do_action( 'accelerate_before_footer' ); ?>
		<footer id="colophon" class="clearfix">	
			<?php get_sidebar( 'footer' ); ?>	
			<div class="footer-socket-wrapper clearfix">
				<div class="inner-wrap">
					<div class="footer-socket-area">
						<?php do_action( 'accelerate_footer_copyright' ); ?>
						<nav class="footer-menu" class="clearfix">
							<?php
								if ( has_nav_menu( 'footer' ) ) {									
										wp_nav_menu( array( 'theme_location' => 'footer',
																 'depth'           => -1
																 ) );
								}
							?>
		    			</nav>
					</div>
				</div>
			</div>			
		</footer>
		<a href="#masthead" id="scroll-up"><i class="fa fa-long-arrow-up"></i></a>	
	</div><!-- #page -->
	<form rel="form1" class="request_form" id="request_form">
		<div class="big_box_close"></div>
		<div class="form_box">
			<div class="form_form">
				<div class="form">
					<div class="row">
						<div class="col-md-12"><a class="a_close_box">x</a></div>
						<div class="col-md-12"><div class="form_title">Оставьте нам сообщение</div></div>
						<?php echo do_shortcode('[formRequest]');?>
					</div>
				</div>
			</div><!--form_form-->
		</div><!--form_box-->
	</form><!--black-->
	<?php wp_footer(); ?>
</body>
</html>