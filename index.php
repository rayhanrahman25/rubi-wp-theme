<?php get_header(); ?>
<section class="section" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg"><?php echo get_theme_mod('rubi_blogSection_tit',__('News Feed')) ?></h2>
					<p><?php echo get_theme_mod('rubi_blogSection_des',__('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde')) ?></p>
				</div>
			</div>
		</div>

		<div class="row">
		<?php
            while(have_posts()){
                the_post();
                get_template_part("template-parts/post-formats/post",get_post_format());
            }
            ?>
		</div>
	</div>

 <p class="text-center pt-5 font-weight-bold"><?php	posts_nav_link() ?> </p>
</section>
<?php get_footer(); ?>