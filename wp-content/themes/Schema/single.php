<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package superultra
 */

get_header();?>

<div id="content" class="site-content">
	<header class="page-header"
		style="background-image: url(<?php //bloginfo('template_url');?>/assets/images/single-img.jpg);">
		<div class="container">
			<h1 class="page-title"><?php the_title();?></h1>
		</div>
	</header>

	<div class="container">
		<div id="primary" class="content-area sticky-meta">
			<main id="main" class="site-main">
				<div class="entry-meta">
					<div class="sticky-inner">
						<div class="sidebar__inner">
							<?php while ( have_posts() ) : the_post(); ?>
							<span class="byline" itemprop="author">
								<span class="meta-title">Written By</span>
								<span class="author">
									<a href="<?php echo get_author_name(); ?>" class="url fn"
										itemprop="name"><?php echo get_author_name(); ?></a>
								</span>
							</span>
							<span class="posted-on" itemprop="datePublished">
								<span class="meta-title">Published on</span>
								<a href="#">
									<time datetime="2017-12-21"><?php echo get_the_date();?></time>
								</a>
							</span>
							<span class="category">
								<span class="meta-title">Category</span>
								<a href="#">Design</a>
								<a href="#">Photography</a>
							</span>
							<div class="sticky-social">
								<div class="post-favourite">
									<span class="fav-count">525</span>
									<a href="#" class="fav-icon"><i class="fas fa-heart"></i></a>
								</div>
								<ul class="social-list">
									<li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a>
									</li>
									<li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="entry-content">
					<?php
						$imgpath= wp_get_attachment_url(get_post_thumbnail_id($post->ID));
						$image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
					?>
				<figure class="wp-caption aligncenter">
								<!-- <img class="size-full" src="images/img1.jpg" alt="" width="602" height="440"> -->
								<?php
											if ( has_post_thumbnail() ) {
											echo   '<img class="size-full" src="'.$imgpath.'" alt="'.$image_alt.'" width="602" height="440">';
											}
											else {
												echo '<img class="size-full" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/blog-img1.jpg" alt="superultra" width="602" height="440"/>';
											}
                                    	?>
								<figcaption class="wp-caption-text">I spent Winter in Australia’s Summer.</figcaption>
				</figure>
					<?php echo the_content();?>
				</div>
				<?php endwhile; ?>
				<footer class="entry-footer">
					<div class="tags">
						Tags:
						<a href="#">Tag 1</a>
						<a href="#">Tag 2</a>
						<a href="#">Tag 3</a>
					</div>
				</footer>


			</main> <!-- .site-main -->
			<div class="author-profile">
				<div class="author-img">
					<img alt="" src="<?php bloginfo('template_url');?>/assets/images/about-img.jpg" class="avatar">
				</div>
				<div class="author-content-wrap">
					<h1 class="page-title">
						Raushan Jaiswal
					</h1>
					<div class="author-desc">
						Raushan is the CEO/Co-founder of Raratheme.com. He has been using WordPress since 2012 and has
						helped hundreds of companies build online presence using WordPress. Raushan enjoys reading and
						writing about WordPress, Digital Marketing and Growth. When he is not working on WordPress, he
						is probably playing chess, reading a book, learning salsa, or hiking.
					</div>
					<ul class="social-list">
						<li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
			<nav class="navigation posts-navigation">
				<div class="nav-links">
					<div class="nav-previous">
						<a href="#" rel="prev">
							<i class="fas fa-chevron-left"></i>
							Previous Article
						</a>
					</div>
					<div class="nav-next">
						<a href="#" rel="next">
							<i class="fas fa-chevron-right"></i>
							Next Article
						</a>
					</div>
				</div>
			</nav>
			<div class="additional-posts">
				<h3 class="title">
					Recommended Articles
				</h3>
				<div class="block-wrap">
					<?php
							$args = [
								'post_type'             => 'post',
								'posts_per_page'        => 3,
								'orderby'               => 'date',
								'order'                 => 'DESC',
								'no_found_rows'         => 'true',
								'post__not_in' =>  array($excludepost)
								];
								$the_query = new \WP_Query( $args );
						?>

					<?php
								while ($the_query->have_posts()) {
								$the_query->the_post();
								$imgpath= wp_get_attachment_url(get_post_thumbnail_id($post->ID));
								//$feature_image = theme_thumb($imgpath, 370, 225, 'c');
								$image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
						?>
					<div class="block clearfix">
						<div class="entry-meta">
							<span class="posted-on" itemprop="datePublished">
								<a href="#">
									<!-- <time datetime="2017-12-21">Feb 18, 2018</time> -->
									<time datetime="<?php echo get_the_date();?>"><?php echo get_the_date();?></time>
								</a>
							</span>
						</div>
						<header class="entry-header">
							<h3 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</header><!-- .entry-header -->
						<figure class="post-thumbnail">
							<a href="#">
								<!-- <img src="<?php //bloginfo('template_url');?>/assets/images/blog-img1.jpg" alt="">                     -->
								<?php
											if ( has_post_thumbnail() ) {
											echo   '<img src="'.$imgpath.'" alt="'.$image_alt.'">';
											}
											else {
												echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/blog-img1.jpg" alt="superultra"/>';
											}
                                    	?>

								
							</a>
						</figure><!-- .post-thumbnail -->
						
					</div>
					<?php } ?>
				</div><!-- .block-wrap -->
			</div>
			<?php /*Comment Section*/
					 comments_template();
					 ?>
			<aside id="secondary" class="widget-area">
				<section class="widget widget_search">
					<h2 class="widget-title" itemprop="name">Search</h2>
					<form role="search" method="get" class="search-form" action="">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input class="search-field" placeholder="Search..." value="" name="s" type="search">
						</label>
						<input class="search-submit" value="Search" type="submit">
					</form>
				</section>

				<section class="widget widget_archive">
					<h2 class="widget-title" itemprop="name">Archives</h2>
					<ul>
						<li><a href="#">February 2018</a>&nbsp;(2)</li>
						<li><a href="#">November 2017</a>&nbsp;(1)</li>
					</ul>
				</section>

				<section class="widget widget_categories">
					<h2 class="widget-title" itemprop="name">Categories</h2>
					<ul>
						<li class="cat-item"><a href="#">Entertainment</a> (1)</li>
						<li class="cat-item"><a href="#">Finance</a> (2)</li>
						<li class="cat-item"><a href="#">Politics</a> (2)</li>
						<li class="cat-item"><a href="#">Uncategorized</a> (3)</li>
					</ul>
				</section>

				<section class="widget widget_pages">
					<h2 class="widget-title" itemprop="name">Pages</h2>
					<ul>
						<li class="page_item"><a href="#">About Us</a></li>
						<li class="page_item"><a href="#">CHECKOUT</a></li>
						<li class="page_item"><a href="#">Contact Us</a></li>
						<li class="page_item"><a href="#">Enquiry Thankyou Page</a></li>
						<li class="page_item"><a href="#">Our Team</a></li>
						<li class="page_item"><a href="#">Portfolio</a></li>
					</ul>
				</section>

				<section class="widget widget_recent_comments">
					<h2 class="widget-title" itemprop="name">Recent Comments</h2>
					<ul>
						<li class="recentcomments">
							<span class="comment-author-link">
								<span itemprop="name">wordpress</span>
							</span> on
							<a href="#">Exploring Untravelled Destinations</a>
						</li>
						<li class="recentcomments">
							<span class="comment-author-link">
								<span itemprop="name">
									<a href="#" class="url" itemprop="url">A WordPress Commenter</a>
								</span>
							</span> on
							<a href="#">Hello world!</a>
						</li>
					</ul>
				</section>

				<section class="widget widget_recent_entries">
					<h2 class="widget-title" itemprop="name">Recent Posts</h2>
					<ul>
						<li>
							<a href="#">Exploring Untravelled Destinations</a>
							<span class="post-date">February 12, 2018</span>
						</li>
						<li>
							<a href="#">This theme recommends the following plugins</a>
							<span class="post-date">February 12, 2018</span>
						</li>
						<li>
							<a href="#">Hello world!</a>
							<span class="post-date">November 22, 2017</span>
						</li>
					</ul>
				</section>

				<section class="widget widget_tag_cloud">
					<h2 class="widget-title" itemprop="name">Tag Cloud</h2>
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link" style="font-size: 8pt;">Entertainment<span
								class="tag-link-count"> (1)</span></a>
						<a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Finance<span
								class="tag-link-count"> (2)</span></a>
						<a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Politics<span
								class="tag-link-count"> (2)</span></a>
						<a href="#" class="tag-cloud-link" style="font-size: 22pt;">Uncategorized<span
								class="tag-link-count"> (3)</span></a>
					</div>
				</section>
			</aside> <!-- #secondary -->
		</div> <!-- .container -->
	</div> <!-- .site-content -->

	<?php get_footer();?>