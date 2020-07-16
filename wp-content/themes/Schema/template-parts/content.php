<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package superultra
 */

?>
<div class="container">
            <div id="primary" class="content-area sticky-meta">
					<main id="main" class="site-main">
						<div class="entry-meta">
                        <div class="sticky-inner">
								<div class="sidebar__inner">
                                <span class="byline" itemprop="author">
										<?php superultra_posted_by();?>
                                </span>
									<span class="posted-on" itemprop="datePublished">
                                    <?php superultra_posted_on(); ?>
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
											<li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
											<li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
 <!-- Single blog -->
    <div class="blog">
        <div class="blog-head">
         <?php if(has_post_thumbnail()){
         	the_post_thumbnail(); 
         } ?>
        </div>
        <div class="blog-content">
               
            <div class="meta">
                <span><i class="fa fa-user"></i><?php superultra_posted_by();?></span>
                <span><i class="fa fa-calender"></i><?php echo get_the_date( 'd'); ?> <?php echo get_the_date( 'F'); ?> </span>
                <span><i class="fa fa-comments"></i><?php echo absint(get_comments_number());?></span>
            </div>
              <?php the_content();?>
        </div>
    </div>
    <!--/ End Single blog -->
</article><!-- #post-<?php the_ID(); ?> -->
