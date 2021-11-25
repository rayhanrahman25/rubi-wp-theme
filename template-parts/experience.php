<section class="section-bottom experience">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2><?php echo get_theme_mod("rubi_specialized_text",__("Specialized Area")); ?></h2>
				</div>
			</div>	
		</div>
		<div class="row">
           <?php
		   $defaults = [
			[
				'parcent_field' => ( '100' ),
				'sp_title' => __('Html/Css')
			]
		
		];
		$settings = get_theme_mod("sp_repeater_settings",$defaults);
		   ?>
		   <?php foreach($settings as $setting): ?>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-2 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal"><?php echo $setting['sp_title'] ?></h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="<?php echo $setting['parcent_field'] ?>">
							<span class="percent-text"><span class="count"><?php echo $setting['parcent_field'] ?></span>%</span>
						</div>
					</div>
				</div>
			</div>
        <?php endforeach;  ?>
		</div>
	</div>
</section>



			