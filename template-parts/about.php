<section class="intro section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pr-lg-5">
				<div class="intro-img">
					<img src="<?php echo esc_url( get_theme_mod( "rubi_about_img" ) ); ?>" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="intro-content mt-5 mt-lg-0">
					<h2 class="text-lg mb-4"><?php echo get_theme_mod( 'rubi_banner_auto_heading_1', __( 'Designing with passion Thats work for you' ) ); ?></h2>

					<p class="mb-4"><?php echo get_theme_mod( 'rubi_about_pra', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquid accusamus veritatis quasi vero id libero, itaque et sequi, ipsa tempore officia delectus laudantium modi error nihil. Voluptatum' ) ); ?></p>

					<ul class="list-unstyled ">
						<?php
$defaults = [
    [
        'quality_field' => __( 'Quality Assurance' ),
    ],

];
$settings = get_theme_mod( "quality_repeater_settings", $defaults );
?>
						<?php foreach ( $settings as $setting ): ?>
						<li><h5><i class="ti-check mr-3"></i><?php echo $setting['quality_field']; ?></h5></li>
						<?php endforeach;?>
					</ul>

					<a href="<?php echo get_theme_mod("rubi_about_link",esc_url("#services")); ?>" class="btn btn-main mt-4 btn-rounded smoth-scroll"><?php echo get_theme_mod("rubi_about_link_text",__("Services")); ?><i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

