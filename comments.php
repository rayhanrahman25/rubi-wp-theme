<!-- showing comments -->
<div class="post-comments mt-5">

<ul class="comment-list comments">
    <?php
	wp_list_comments();
     ?>
</ul>



						<!-- <h4 class="post-sub-heading"><?php // echo get_comments_number()?> Comments</h4> -->
						<ul class="media-list comments-list m-bot-50 clearlist">
							<!-- Comment Item start-->
                            <?php 
                              

                            ?>
							<!-- <li class="media">
								<a href="#">
									<img class="comment-avatar " src="assets/images/thumb-2.jpg" alt="" >
								</a>
								<div class="media-body">
									<div class="comment-info">
										<h6 class="comment-author">
											<a href="#">Jonathon Andrew</a>
										</h6>
										<span class="post-time">July 02, 2015, at 11:34</span>
										<a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
									</p>
								
									<div class="media">
										<a href="#">
											<img class="comment-avatar" src="assets/images/thumb-2.jpg" alt="" >
										</a>
										<div class="media-body">
											<div class="comment-info">
												<h6 class="comment-author">
													<a href="#">Senorita</a>
												</h6>
												<span class="post-time">July 02, 2015, at 11:34</span>
												<a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
											</div>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
											</p>
										</div>
									</div>
									
								</div>
							</li> -->
							<!-- End Comment Item -->

							<!-- Comment Item start-->
							<!-- <li class="media">
								<a href="#">
									<img class="comment-avatar" src="assets/images/thumb-2.jpg" alt="">
								</a>
								<div class="media-body">
									<div class="comment-info">
										<h6 class="comment-author">
											<a href="#">Jonathon Andrew</a>
										</h6>
										<span class="post-time">July 02, 2015, at 11:34</span>
										<a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
									</p>
								</div>
							</li> -->
							<!-- End Comment Item -->

							<!-- Comment Item start-->
							<!-- <li class="media">
								<a href="#">
									<img class="comment-avatar" src="assets/images/thumb-2.jpg" alt="">
								</a>
								<div class="media-body">
									<div class="comment-info">
										<h6 class="comment-author">
											<a href="#">Jonathon Andrew</a>
										</h6>
										<span class="post-time">July 02, 2015, at 11:34</span>
										<a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
									</p>
								</div>
							</li> -->
							<!-- End Comment Item -->
						</ul>
					</div>

<!-- end comments -->

<h4 class="post-sub-heading"><?php __('Leave You Comments', 'rubi') ?></h4>
				

                    <?php
				$meal_comment_fields = array();
				$meal_comment_fields['author']=<<<EOD
              
                <div class="col-md-12 form-group">
                    <!-- Name -->
                    <input type="text" name="author" id="author" class=" form-control" placeholder="Name *" maxlength="100" required>
            
           
            </div>
EOD;
				$meal_comment_fields['email'] = <<<EOD
               
                <div class="col-md-12 form-group ">
                <!-- Email -->
                <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100"
                required>
            
            </div>
           
EOD;
				$meal_comment_fields['url'] = <<<EOD
                <div class="form-group col-md-12">
                <!-- Website -->
                <input type="text" name="url" id="url" class=" form-control" placeholder="Website" maxlength="100">
               </div>
EOD;
				$meal_comment_field = <<<EOD
                <div class="form-group col-md-12">
                <textarea name="comment" id="comment" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                </div>
                </div>
             
EOD;
				$meal_comment_submit_button = <<<EOD
                <div class="form-group col-md-12">
                <button type="submit" class="btn btn-main btn-rounded">
                    Send comment
                </button>
            </div>
EOD;



				$meal_comment_form_arguments = array(
					'fields'=>$meal_comment_fields,
					'comment_field'=>$meal_comment_field,
					'submit_button'=>$meal_comment_submit_button,
					'comment_notes_before'=>'',
					
					 'title_reply'=>''
				);

				comment_form($meal_comment_form_arguments);
				?>


