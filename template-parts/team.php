<section class="section bg-light" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg"><?php echo get_theme_mod('rubi_team_tit','Our Team');?></h2>
					<p><?php echo get_theme_mod('rubi_team_des','Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde'); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
           <?php
		   $defaults = [
			[
				'team_pro_img' ,
				'work_position' => __('Founder'),
				'member_name'=>__('Richard William'),
				'member_des'=>esc_html('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.'),
				'facebook'=>esc_attr('facebook'),
				'twitter'=>esc_attr('twitter'),
				'linkedin'=>esc_attr('linkedin')
			]	
		];
		$settings = get_theme_mod("add_team_settings",$defaults);
		   ?>
		   <?php foreach($settings as $setting):  ?>
			<div class="col-lg-4 col-md-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo wp_get_attachment_url( $setting['team_pro_img']);?>" alt="" class="img-fluid">
					<div class="team-content">
						<span class="mt-4 d-block"><?php echo $setting['work_position']; ?></span>
						<h4 class="mb-4"><?php echo $setting['member_name']; ?></h4>
					</div>

					<div class="overlay-content">
						<span class="mt-4 d-block"><?php echo $setting['work_position']; ?></span>
						<h4 class="mb-4"><?php echo $setting['member_name']; ?></h4>
						<p><?php echo $setting['member_des']; ?></p>

						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"><i class="ti-<?php echo $setting['facebook']; ?>"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-<?php echo $setting['twitter']; ?>"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-<?php echo $setting['linkedin']; ?>"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
           <?php endforeach; ?>
		</div>
	</div>
</section>