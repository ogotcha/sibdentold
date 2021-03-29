<?php global $mytheme; ?>
<div class="container">
<div class="sidebar">

	<div class="sidebar-top">
		<div class="sidebar-top__image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/eye.svg" alt="eye icon">
		</div>
		<span class="sidebar-top__text"><?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?></span>
	</div>
	
	<div class="sidebar__logo">
		<?php the_custom_logo(); ?>
	</div>
	<!-- /.sidebar__logo -->

	
	
	<div class="sidebar-nav">
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'main-menu' ) ); ?>
		<?php if( !is_front_page() ): ?>		
		<button class="modal-btn sidebar-nav__btn btn" onclick="return true;">Записаться</button>
		 <?php endif; ?>
	</div>
	<!-- /.sidebar-nav -->
	<div class="sidebar-bottom ">
	<!--
		<div class="sidebar-bottom__phone">
			<a phone href="tel:<?php echo $mytheme['phone'] ?>" onclick="ym(66919612,'reachGoal','zvonok-sidebar'); return true;"><?php echo $mytheme['phone'] ?></a>
		</div>
	-->
		<!-- /.slider-bottom__phone -->
		<p class="sidebar-bottom__text">&copy; ООО &laquo;СибДент&raquo;</p>
		<p class="sidebar-bottom__text"><a href="<?php echo site_url(); ?>/privacy">Политика конфиденциальности</a></p>
		<p class="sidebar-bottom__text"><a href="https://laikaweb.ru/" target="_blank">Веб-студия LAIKA</a></p>
		<!-- /.slider-bottom__text -->
	</div>
	<!-- /.sidebar-bottom -->
</div>
<!-- /.sidebar -->		
</div>
