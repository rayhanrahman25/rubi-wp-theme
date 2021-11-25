<section class="section" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="title">
					<h2 class="mb-5 text-lg"><?php echo get_theme_mod('rubi_testi_tit',__('Clients says')); ?></h2>
					<p class="mb-5 "><?php echo get_theme_mod('rubi_testi_des',__('Reiciendis, reprehenderit, quas impedit ea repudiandae non quibusdam nulla pariatur rerum numquam ipsum corporis, dignissimos aliquid, neque. Recusandae voluptas, inventore error amet.')); ?></p>
					<a href="<?php echo get_theme_mod('rubi_testi_btn_link',esc_url('#contact')); ?>" class="btn btn-main btn-rounded smoth-scroll"><?php echo get_theme_mod('rubi_testi_btn_tit',__('Clients says')); ?><i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		
			<div class="col-lg-7">
				<div class="main-slider ">
				<?php
                        $defaults = [
							[
								'pro_img'=>'',
								'test_topic' => __('Code Quality!'),
								'test_description'=>__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .'),
								'test_name'=>__('Khalid Farhan'),
								'test_company'=>__('Themeturn'),
							]	
						];
						$settings = get_theme_mod("add_testimonial_settings",$defaults);
					?>
					<?php foreach($settings as $setting): ?>
					<div class="testimonial-item d-flex align-items-center">
						<div class="testimonial-content ">
							<i class="ti-quote-left "></i>
							<h4 class="mb-3 text-color mt-2"><?php echo $setting['test_topic']; ?></h4>
							<p><?php echo $setting['test_description']; ?></p>
							<div class="info">
								 <h5 class="mb-1"><?php echo $setting['test_name']; ?></h5>
								<p class="text-sm"><?php echo $setting['test_company']; ?></p>
							</div>
						</div>
						<div class="testimonial-image">
							<img src="<?php echo wp_get_attachment_url( $setting['pro_img'] );?>" alt="" class="img-fluid">
						</div>
					</div>
                   <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>