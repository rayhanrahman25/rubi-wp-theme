<section class="counter-wrap section-bottom">
	<div class="container">
		<div class="row">
			<?php 
$defaults = [
	[
	'icon_text' => esc_attr('user'),
	'counter_num' => __('763'),
	'counter_title' => __('Happy Clients'),
	]

];
$settings = get_theme_mod("add_counter_settings",$defaults);
			?>
			<?php foreach($settings as $setting): ?>
			<div class="col-lg-3 col-md-6">
				<div class="counter-item mb-5 mb-lg-0">
					<i class="ti-<?php echo $setting['icon_text']; ?>"></i>
					<span class="counter"><?php echo $setting['counter_num']; ?></span>
					<h5><?php echo $setting['counter_title']; ?></h5>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>