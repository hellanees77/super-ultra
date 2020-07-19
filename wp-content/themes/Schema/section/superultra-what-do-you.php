<section class="service-section">
			<div class="container">
				<section class="widget widget_text">
					<h2 class="widget-title">What do you need help with now?</h2>
					<div class="textwidget">
						<p>Get evidence-based collection of articles on a topic sent directly to you in one email.</p>
					</div>    		
				</section>
				
						<?php 
						if(! is_active_sidebar('what_do_you_1')){
							return;
						}?>
						
								<?php dynamic_sidebar('what_do_you_1');?>
							<div class="icon-holder">
								<img src="<?php bloginfo('template_url');?>/assets/images/collaboration.png" alt="Generate Better Plans">
							</div>
						
			</div>
		</section> <!-- .service-section -->