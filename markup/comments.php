
				<?php
				$meal_comment_fields = array();
				$meal_name_field_placeholder = __('Name','meal');
				$meal_comment_fields['author']=<<<EOD
              
                <div class="col-md-6 form-group ">
                    <!-- Name -->
                    <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
            
           
            </div>
EOD;
				$meal_comment_fields['email'] = <<<EOD
               
                <div class="col-md-6 form-group">
                <!-- Email -->
                <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100"
                 required="">
            
            </div>
           
EOD;
				$meal_comment_fields['url'] = <<<EOD
                <div class="form-group col-md-12">
                <!-- Website -->
                <input type="text" name="website" id="website" class=" form-control" placeholder="Website" maxlength="100">
               </div>
EOD;
				$meal_comment_field = <<<EOD
                <div class="form-group col-md-12">
                <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
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
					//  'comment_notes_after'=>'<p>Your email address will not be published. Required fields are marked *</p>',
					 'title_reply'=>''
				);

				comment_form($meal_comment_form_arguments);
				?>


