<!-- Slider Start -->
<?php $image = get_theme_mod( 'rubi_banner_background_img', '' );?>
<section class="slider" id="slider" style="background: url('<?php echo esc_url( $image ); ?>');">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="banner-content text-center">
					 <h1 class="cd-headline clip is-full-width mb-4 ">
					 <?php echo get_theme_mod( 'rubi_banner_heading', __( 'I Provide ' ) ); ?> <br>
	                    <span class="cd-words-wrapper text-color">
	                        <b class="is-visible"><?php echo get_theme_mod( 'rubi_about_heading', __( 'Design solutions. ' ) ); ?></b>
	                        <b><?php echo get_theme_mod( 'rubi_banner_auto_heading_2', __( 'Creative Ideas.' ) ); ?></b>

	                    </span>
	                </h1>
					<p class="font-weight-normal lead mt-3 mb-4"><?php echo get_theme_mod( 'rubi_banner_description' ); ?></p>
					<ul class="list-inline socials-icon mb-4">
					<?php

$defaults = [
    [
        'social_field' => esc_attr( 'facebook' ),
    ],

];
$settings = get_theme_mod( 'social_repeater_settings', $defaults );
?>
 <?php foreach ( $settings as $setting ): ?>

<li class="list-inline-item"><a href="#"><i class="fab fa-<?php echo $setting['social_field']; ?>"></i></a></li>
<?php
endforeach;
?>
</ul>
					<a href="<?php echo get_theme_mod( 'rubi_banner_btn_link', esc_url( '#about' ) ); ?>" class="btn btn-main btn-rounded smoth-scroll"><?php echo get_theme_mod( 'rubi_banner_btn_txt', __( 'Learn More' ) ); ?> <i class="fa fa-angle-right ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
