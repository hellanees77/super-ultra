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
			<?php get_sidebar();?>
			
		</div> <!-- .container -->
	</div> <!-- .site-content -->

	<?php get_footer();?>