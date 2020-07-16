<div id="content" class="site-content">
	<header class="page-header">
		<div class="container">
			<h1 class="page-title">Read our blog to sharpen your business and SEO skills.</h1>
			<div class="page-desc">
				Get evidence-based collection of articles on a topic sent directly to you in one email.
			</div>
		</div>
	</header>
	
	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php
						if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
						elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
						else { $paged = 1; } 
	
                            $custom_args = array(
                                    'posts_per_page' => 6,
                                    'post_type' => 'post',
                                    'orderby' => 'date',
                                    'paged'=>$paged,
                                    'post_status' => 'publish');
                            $custom_query = new WP_Query( $custom_args );
                            $custom_query->max_num_pages;
                            while ( $custom_query->have_posts() ) : $custom_query->the_post();
                            // $attached=get_post_meta(get_the_ID(),'_mal_theme_page_news_upload_publications_form',true);
                            $feature_image= wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                            $image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
                    ?>
				<article class="post">
					<figure class="post-thumbnail">
						<a href="#">
							<!-- <img src="<?php //bloginfo('template_url');?>/assets/images/blog-img1.jpg" alt=""></a> -->
							<?php
 
									if ( has_post_thumbnail() ) {
									echo   '<img src="'.$feature_image.'" alt="'.$image_alt.'">';
									}
									else {
										echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/blog-img1.jpg" alt="superultra"/>';
									}
							?>
							
					</figure>
					<div class="post-content-wrap">
						<header class="entry-header">
							<div class="entry-meta">
								<span class="posted-on" itemprop="datePublished">
									<a href="#">
										<time datetime="2017-12-21"><?php get_the_date();?></time>
									</a>
								</span>
								<span class="category">
									<a href="#">Design</a>
									<a href="#">Photography</a>
								</span>
							</div>
							<h2 class="entry-title" itemprop="headline">
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h2>
						</header>
						<div class="entry-content">
							<?php echo wp_trim_words( get_the_content(), 40, '...' );?>
						</div>
						<footer class="entry-footer">
							<a href="#" class="btn-readmore">Continue Reading</a>
						</footer>
					</div>
				</article>
			</main> <!-- .site-main -->
				<?php   
						endwhile; 
						wp_reset_postdata(); 
				?> 
			<nav class="navigation pagination">
				<div class="nav-links">
					<a class="page-numbers prev" href="#">
						<span>&larr;</span> Prev
					</a>
					<span class="page-numbers current">
						1
					</span>
					<a class="page-numbers" href="#">
						2
					</a>
					<a class="page-numbers" href="#">
						3
					</a>
					<span class="page-numbers dots">...</span>
					<a class="page-numbers" href="#">
						5
					</a>
					<a class="page-numbers next" href="#">
						Next <span>&rarr;</span>
					</a>
				</div>
			</nav>
		</div> <!-- #primary -->
		<?php endwhile; ?>