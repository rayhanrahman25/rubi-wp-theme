<div class="col-lg-4 col-md-6 ">
				<div class="blog-item mb-5 mb-lg-0">
					<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail();?></a>
					<div class="content mt-4">
						<span class="timecount"><i class="ti-comments mr-3"></i>2 Comments</span>
						<h4 class="mb-3 mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p ><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more"> <?php echo __('Read More');?> <i class="ti-angle-right"></i></a>
					</div>
				</div>
</div>