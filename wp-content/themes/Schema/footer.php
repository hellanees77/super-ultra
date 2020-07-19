<?php 
/*Footer*/ ?>

<section class="newsletter-section">
			<img src="<?php bloginfo('template_url');?>/assets/images/newsletter-section.jpg" alt="">
		</section> <!-- .newsletter-section -->

		<footer class="site-footer">
			<div class="top-footer">
			<?php
				if ( ! is_active_sidebar( 'footer_1' ) ) {
				return;
			}?>
				<div class="container">
				<?php dynamic_sidebar( 'footer_1' ); ?>
				</div>
			</div> <!-- .top-footer -->
			<div class="bottom-footer">
				<div class="container">
					<div class="copyright">            
						<span>© 2018 <a href="#">Super Ultra Light</a> - All Rights Reserved. </span><a href="#" target="_blank"> Super Ultra Light</a> by Rara Themes. Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="#">Privacy Policy</a>               
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