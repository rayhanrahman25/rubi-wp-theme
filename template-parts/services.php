<section class="section secondary-bg" id="services">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg"><?php echo get_theme_mod("rubi_serv_head",__('My services')); ?></h2>
					<p><?php echo get_theme_mod("rubi_serv_pra",__('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde')); ?></p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
          <?php
              $defaults = [
				[
					'icon_field' => esc_attr( 'microphone' ),
					'serv_title' => __('Branding'),
					'serv_title_pra' => __('Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.'),
					'serv_link_text' => __('learn more'),
					'serv_link' => esc_url('service-single.html'),
				]
			
			];
			$settings = get_theme_mod("serv_repeater_settings",$defaults);
		  ?>
           <?php foreach($settings as $setting): ?>
			<div class="col-lg-4 col-md-6">
				<div class="service-item">
					<div class="d-flex align-items-center mb-4">
						<i class="ti-<?php echo $setting['icon_field']; ?> mr-3"></i>
						<h4><?php echo $setting['serv_title']; ?></h4>
					</div>
					<p><?php echo $setting['serv_title_pra']; ?></p>

					<a href="<?php echo $setting['serv_link']; ?>" class="read-more"><?php echo $setting['serv_link_text']; ?> <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
          <?php endforeach; ?>
	
		</div>
	</div>
</section>