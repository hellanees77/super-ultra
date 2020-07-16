<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
		<div id="content" class="site-content">
			<div class="container">
				<div id="primary" class="content-area">
                    <?php while ( have_posts() ) : the_post(); ?>
					<main id="main" class="site-main">
						<header class="page-header">
							<h1 class="page-title"><?php the_title();?></h1>
						</header>
						<div class="entry-content">
							<?php the_content();?>
						</div>
					</main> <!-- .site-main -->
					<?php endwhile; ?>
                </div> <!-- #primary -->
				<?php get_sidebar();?>
			</div> <!-- .container -->
        </div> <!-- .site-content -->
 <?php get_footer();?>