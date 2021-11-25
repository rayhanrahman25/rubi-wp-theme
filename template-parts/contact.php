<section class="section" id="contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4 text-lg"><?php echo get_theme_mod('rubi_contact_tit',__('Let\'s Get started')); ?></h2>
					<p><?php echo get_theme_mod('rubi_contact_des',__('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde ')); ?></p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form class="contact__form form-row contact-form" method="post" action="#" id="contactForm">
					 <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
							  
                            </div>
                        </div>
                    </div>
                    <!-- contact form -->
					<?php echo do_shortcode('[contact-form-7 id="333" title="Rubi Theme Contact"]'); ?>	
				</form>	
			</div>
		</div>
	</div>
</section>