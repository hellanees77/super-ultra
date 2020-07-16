<?php 
/*Footer*/ ?>

<section class="newsletter-section">
			<img src="<?php bloginfo('template_url');?>/assets/images/newsletter-section.jpg" alt="">
		</section> <!-- .newsletter-section -->

		<footer class="site-footer">
			<div class="top-footer">
				<div class="container">
					<div class="col">
						<section class="widget widget_text">
							<h2 class="widget-title">About</h2>
							<div class="textwidget">
								<p>All seven continents by 30, I wrote. I wanted to be the person that could say that. On December 16th...</p>
							</div>
						</section>
					</div>
					<div class="col">
						<section class="widget widget_recent_entries">		
							<h2 class="widget-title" itemprop="name">Recent Posts</h2>
							
							<ul>
								<li>
								<?php
										$args = [
											'post_type'        => 'post',
											'posts_per_page'   => 5,
											'orderby'          => 'date',
											'order'            => 'DESC',
											'no_found_rows'    => 'true',
											'post__not_in'     => array($excludepost)
										];
										$the_query = new \WP_Query($args);
										while($the_query->have_posts()) {
											$the_query->the_post();
								?>		
								</li>
								<li>
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
									<span class="post-date"><?php echo get_the_date();?></span>
								</li>
								<?php } ?>
							</ul>
						</section>
					</div>
					<div class="col">
						<section class="widget widget_categories">
							<h2 class="widget-title" itemprop="name">Categories</h2>
							<ul>
								<li class="cat-item"><a href="#">Entertainment</a> (1)</li>
								<li class="cat-item"><a href="#">Finance</a> (2)</li>
								<li class="cat-item"><a href="#">Politics</a> (2)</li>
								<li class="cat-item"><a href="#">Uncategorized</a> (3)</li>
							</ul>
						</section>
					</div>
				</div>
			</div> <!-- .top-footer -->
			<div class="bottom-footer">
				<div class="container">
					<div class="copyright">            
						<span>© 2018 <a href="#">Super Ultra Light</a> - All Rights Reserved. </span><a href="#" target="_blank"> Super Ultra Light</a> by Rara Themes. Powered by <a href="#" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="#">Privacy Policy</a>               
					</div>
					<div class="footer-social">
						<ul class="social-list">

						<?php
									wp_nav_menu( array( 
									'theme_location' => 'social' ,
									'items_wrap' => '<li><i>%3$s</i></li>'
								)); 
								?>
							<!-- <li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</footer> <!-- .site-footer -->
	</div> <!-- #page -->

	<!-- JS FILES -->
	<?php wp_footer();?>
</body>
</html>