<?php  the_post(); get_header(); error_reporting(0); ?>

<section class="page-title bg-2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
          <h1><?php echo __('Blog','rubi') ?></h1>
          <p><?php echo __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.','rubi') ?></p>
      </div>

      <div class="col-lg-5">
        <ul class="list-inline header-breadcumb text-lg-right mt-5 mt-lg-0">
          <li class="list-inline-item"><a href="index-2.html"><?php echo __('Home','rubi') ?></a></li>
          <li class="list-inline-item"><?php echo __('/','rubi') ?></li>
          <li class="list-inline-item"><?php echo __('Blog','rubi') ?></li>
          <li class="list-inline-item">/</li>
          <li class="list-inline-item"><?php the_title(); ?></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="blog-wrapper section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
								<div class="post post-single">
					<div class="post-thumb mb-4">
					<img class="img-fluid" src="<?php the_post_thumbnail();?>
					</div>

					<ul class="list-inline post-tags">
						<li class="list-inline-item ">
						<?php the_tags("", ""); ?>
						</li>
					</ul>
					<h2 class="post-title"><?php the_title(); ?></h2>

					<ul class="list-inline single-post-meta">
						<li class="list-inline-item">
							<a href="#"><?php echo __('By','rubi') ?>  <?php echo  ucfirst(get_the_author()); ?> </a>
						</li>
						<li class="list-inline-item">
							<i class="ti-write"></i><?php echo get_the_date('F j, Y'); ?>
						</li>
						<li class="list-inline-item">
							<i class="ti-timer"></i><?php echo __('4 mins read','rubi') ?>
						</li>
					</ul>

					<div class="post-content post-excerpt">
						<?php
                          the_content();
						?>
					</div>
						

						<div class="post-footer">
							<div class="single-post-meta d-flex justify-content-between">
								<div class="comment-meta">
									<i class="ti-comments-smiley"></i> <b><?php echo get_comments_number();  ?></b> <?php echo __('Comments','rubi') ?>
								</div>

								<div class="share">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<a href="#"><i class="ti-facebook"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="#"><i class="ti-twitter"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="#"><i class="ti-linkedin"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="#"><i class="ti-instagram"></i></a>
										</li>
										<li class="list-inline-item">
											<a href="#"><i class="ti-dribbble"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Auhtor Info Start -->
					<div class="author-block">
						<div class="media">
							<!-- <img src="assets/images/author.png" alt=""> -->
							<p  class="img-fluid mr-4"> <?php echo get_avatar( get_the_author_meta( 'ID' )); ?> </p>
							<div class="media-body">
								<h5><?php the_author(); ?></h5>
								<p> <?php the_author_meta( "description" ); ?></p>
								<ul class="list-inline mb-0">
									<?php
                                     $rubi_author_facebook  =  carbon_get_user_meta( get_the_author_meta( 'ID' ), 'crb_facebook' );
                                     $rubi_author_twitter  = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'crb_twitter' );
                                     $rubi_author_linkedin  = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'crb_linkedin' );
                                     $rubi_author_instagram  = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'crb_instagram' );
                                     $rubi_author_dribbble  =  carbon_get_user_meta( get_the_author_meta( 'ID' ), 'crb_dribbble' );
                                    ?>
									<li class="list-inline-item">
										<a href="<?php echo esc_url( $rubi_author_facebook) ?>"><i class="ti-facebook"></i></a>
									</li>
									
									<li class="list-inline-item">
										<a href="<?php echo esc_url($rubi_author_twitter) ?>"><i class="ti-twitter"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="<?php echo esc_url($rubi_author_linkedin) ?>"><i class="ti-linkedin"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="<?php echo esc_url($rubi_author_instagram) ?>"><i class="ti-instagram"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="<?php echo esc_url($rubi_author_dribbble) ?>"><i class="ti-dribbble"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Auhtor Info End -->

                     <!-- showing comments start  -->

					
					 <!--custom pagination-->
					 <?php 
                       $the_query = new WP_Query(array(
						'posts_per_page' => '1',
						'orderby'          => 'rand',
						'order'            => 'DESC',
					   ));
					   while($the_query->have_posts()){
                           $the_query->the_post()
					 ?>
                    <div class="custom-pagination custom-pagination-post">
                        <div class="older full- d-lg-flex align-items-center">
                             <a href="#" class="next-post-pagination">
                                <h6><?php echo __('Next post','rubi') ?></h6>
                                <?php the_title(); ?>
                             </a>
                        </div>
                      <?php
                          }
						  wp_reset_query();
					  ?>
					  <?php 
                       $the_query = new WP_Query(array(
						'posts_per_page' => '1',
						'orderby'          => 'rand',
						'order'            => 'ASC',
						
					   ));
					   while($the_query->have_posts()){
                           $the_query->the_post()
					 ?>

                        <div class="newer d-lg-flex align-items-center">
                            <a href="#" class="prev-post-pagination">
                                <h6><?php echo __('Previous post','rubi') ?></h6>
                               <?php  the_title() ?>
                            </a>
                        </div>
                    </div>
					<?php
                          }
						  wp_reset_query();
					  ?>
		            <!--custom pagination-->
					<div class="comments-form ">
                     <?php
					 if(comments_open()){
						 comments_template();
					 }	
				?>
				
				
			 </div>


			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget mb-5 mt-5 mt-lg-0">
	<h5 class="widget-title"><?php echo __('Search','rubi') ?></h5>
	<form action="#">
		<input type="text" class="form-control" placeholder="Search">
		<a href="#" class="btn btn-secondary mt-4"><?php echo __('Search','rubi') ?></a>
	</form>
</div>

<div class="widget mb-5">
	<h5 class="widget-title"><?php echo __('Social Links','rubi') ?></h5>
	<ul class="list-inline social-links mb-0">
		<li class="list-inline-item">
			<a href="#"><i class="ti-facebook"></i></a>
		</li>
		<li class="list-inline-item">
			<a href="#"><i class="ti-twitter"></i></a>
		</li>
		<li class="list-inline-item">
			<a href="#"><i class="ti-linkedin"></i></a>
		</li>
		<li class="list-inline-item">
			<a href="#"><i class="ti-instagram"></i></a>
		</li>
		<li class="list-inline-item">
			<a href="#"><i class="ti-dribbble"></i></a>
		</li>
	</ul>
</div>


<div class="widget mb-5">
	<h5 class="widget-title"><?php echo __('Recent Posts','rubi'); ?></h5>
	<ul class="list-inline recent-posts mb-0">
		<?php 
		 $query = new WP_Query(array(
			'posts_per_page' => '3',
			'orderby'          => 'id',
			'order'            => 'ASC',
		 ));
		 while($query->have_posts()){
			$query->the_post()
		?>
		<li class="list-inline-item d-lg-flex">
			<div class="img-thumb">
				<img class="img-fluid" src="<?php the_post_thumbnail(); ?>
			</div>
			<div class="post-block">
				<span class="text-sm"><?php echo get_the_date('F j, Y'); ?></span>
				<h6><a href="#"><?php the_title() ?></a></h6>
			</div>
		</li>
		<?php
		 }
		 wp_reset_query();
?>
	</ul>
</div>
<div class="widget mb-5 widget-list-item">
	<h5 class="widget-title"><?php echo __('Categories','rubi') ?></h5>
	<ul class="list-unstyled mb-0">
	  <li class="d-flex">
	    <a href="#"><?php  wp_list_categories(array(
			  'style'       => 'list',
			  'format'      => 'html5',
			  'short_ping'  => true,
			  'title_li'    => '',
			  'separator'   => '<br />',
			  'show_count'  => 1,
		)); ?></a>
	  </li>
	</ul>
</div>

<div class="widget tags mb-5">
	<h5 class="widget-title"><?php echo __('Tags','rubi') ?></h5>
	<div class="tags-links">
	<?php the_tags("", ""); ?>
	</div>
</div>





				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer() ?>