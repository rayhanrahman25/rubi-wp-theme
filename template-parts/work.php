<section class="section experience" id="skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title">
					<h2><?php echo get_theme_mod('rubi_workexp_tit','Work Experience'); ?></h2>
				</div>
			</div>	
		</div>

		<div class="row">
			<?php 
                $defaults = [
					[
						'work_position' => ( 'Web Developer' ),
						'company_name' => __('Googl inc[2000-2004]'),
						'job_des' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.')
					]
				
				];
				$settings = get_theme_mod("add_workexp_repeater_settings",$defaults);
			?>
			<?php foreach($settings as $setting): ?>
			<div class="col-lg-6">
				<div class="content mb-4">
					<h4><?php echo $setting['work_position'] ?></h4>
					<span class="text-color"><?php echo $setting['company_name'] ?></span>
					<p><?php echo $setting['job_des'] ?></p> 
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>