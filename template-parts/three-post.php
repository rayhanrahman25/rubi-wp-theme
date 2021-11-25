
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
         $_p = get_posts([
            'numberposts'      => 3,
            'orderby'          => 'date',
            'order'            => 'DESC',
         ]);
         foreach($_p as $post){
          setup_postdata($post);
        ?>
          <div class="col-lg-4 col-md-6 ">
				<div class="blog-item mb-5 mb-lg-0">
					<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail();?></a>
					<div class="content mt-4">
						<span class="timecount"><i class="ti-comments mr-3"></i><?php echo get_comments_number();  ?> <?php echo __('Comments','rubi') ?></span>
						<h4 class="mb-3 mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p ><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more"> <?php echo __('Read More');?> <i class="ti-angle-right"></i></a>
					</div>
				</div>
             </div>
        <?php
          }
          wp_reset_postdata();
        ?>
		</div>
	</div>
</section>
