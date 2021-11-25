<!-- portfolio -->
<section class="section portfolio" id="portfolio">
  <div class="container">
  	 <div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="section-title text-center">
				<h2 class="mb-4 text-lg"><?php echo get_theme_mod("rubi_port_head",__("Work Portfolio")); ?></h2>
				<p><?php echo get_theme_mod("rubi_port_pra",__("Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde")); ?></p>
			</div>
		</div>
	</div>

      <div class="col-12 text-center  mb-5">
        <div class="btn-group btn-group-toggle " data-toggle="buttons">
			<?php
			$defaults = [
				[
					'm_val' => __('all'),
				's_val' => __('ALL')
				]
			
			];
			$settings = get_theme_mod("prot_nav_repeater_settings",$defaults);
			?>
		<?php foreach($settings as $setting): ?>
          <label class="btn">
            <input type="radio" name="shuffle-filter" value="<?php echo esc_attr($setting['m_val']); ?>" checked="checked" /><?php echo esc_html($setting['s_val']); ?>
          </label>
		  <?php endforeach; ?>
        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery">
     <?php
        $defaults = [
			[
				'cat_name' => ( 'all' ),
				'port_title' => __('Minimal Portfolio Theme'),
				'port_img'=>'',
				'port_link'=>esc_url('portfolio-single.html')
			]	
		];
		$settings = get_theme_mod("add_port_repeater_settings",$defaults);
	 ?>
	<?php foreach($settings as $setting): ?>
      	<div class="col-lg-4 col-md-6 col-12 mb-4 shuffle-item" data-groups="[<?php echo $setting['cat_name']; ?>]"> 
	      	<div class="portfolio-item mb-4">
				<img src="<?php  echo wp_get_attachment_url( $setting['port_img'] );?>" alt="" class="img-fluid">
				<div class="overlay-content">
					<h5><?php  echo $setting['port_title']; ?></h5>
					<a href="<?php echo wp_get_attachment_url( $setting['port_img'] );?>" class="portfolio-image popup-gallery"><i class="ti-zoom-in"></i></a>	
					<a href="<?php echo $setting['port_link']; ?>"><i class="ti-link"></i></a>	
				</div>
			</div>
      	</div>
   <?php endforeach; ?>
    </div>

    <div class="row justify-content-center">
    	<div class="col-lg-8">
    		<div class="text-center mt-5">
    			<a href="<?php echo esc_url(get_theme_mod('rubi_port_tit_link','#testimonial')) ?>" class="btn btn-main btn-rounded smoth-scroll"><?php echo get_theme_mod('rubi_port_link_tit','Read Success Story'); ?></a>
    		</div>
    	</div>
    </div>
  </div>
</section>
<!-- /portfolio -->