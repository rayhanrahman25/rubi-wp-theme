<section class="footer ">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-md-12">
				<div class="footer-widget widget mb-5 mb-lg-0">
					<h3 class="mb-3 text-white"><?php echo get_theme_mod('rubi_footer_tit',__('Rubi.')); ?></h3>
					<p><?php echo get_theme_mod('rubi_footer_des', __('Minimal & Crative Portfolio/CV/Biodata Solution in One Platform.'));?></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="footer-widget widget mb-5 mb-lg-0">
					<h6 class="mb-4"><?php echo get_theme_mod('rubi_footer_get', __('Get In touch'));?></h6>
					<div class="footer-contact">
						<h5><?php echo get_theme_mod('rubi_footer_mail','info@email.com');?></h5>
						<h5><?php echo get_theme_mod('rubi_footer_phnnum','+543-5769800');?></h5>
						<h5><?php echo get_theme_mod('rubi_footer_location','16/A South London ,USA');?></h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget widget">
					<h6 class="mb-4"><?php echo get_theme_mod('rubi_footer_follow', __('follow me'));?></h6>
					<ul class="list-inline footer-socials-icon mb-0">
						<?php
						$defaults = [
							[
								'social_field' => esc_attr( 'facebook' ),
							],
						];
						$settings = get_theme_mod( 'social_repeater_settings', $defaults );
						?>
						<?php foreach($settings as $setting): ?>
						<li class="list-inline-item"><a href="#"><i class="fab fa-<?php echo $setting['social_field']; ?>"></i></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-btm ">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<p class="mb-0"><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></p>
				</div>
				<div class="col-lg-4">
					<form action="#" class="footer-subscribe mt-5 mt-lg-0">
						<input type="text" class="form-control" placeholder="Email Address">
						<i class="ti-email"></i>
					</form>
				</div>
			</div>
		</div>

		<div class="footer-top text-right">
			<a href="#slider" class="top-to-bototm smoth-scroll"><i class="ti-angle-up"></i></a>
		</div>
	</div>
</section>

   

    <!-- 
    Essential Scripts
    =====================================-->
  <?php wp_footer(); ?>
  </body>
  

</html>
   