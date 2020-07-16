<?php ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.::SUPER ULTRA THEME | HOMEPAGE::.</title>
	<?php wp_head(); ?>
</head>
<body class="home rightsidebar">
	<div id="page" class="site">
		<header class="site-header">
			<div class="container">
				<div class="menu-toggle">
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
				</div>
				<div class="site-branding logo-text">
					<div class="site-logo">
						<a href="index.html" title="Super Ultra Theme">
							<!-- <img src="<?php //bloginfo('template_url');?>/assets/images/site-logo.png" alt="super ultra theme"> -->
							<?php the_custom_logo(); ?>
						</a>
					</div>
					<div class="site-text-wrap">
						<h1 class="site-title">
							<!-- <a href="index.html" title="Super Ultra Theme">SuperUltraTheme</a> -->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
						<?php $description = get_bloginfo( 'description', 'display' );
			             if ( $description || is_customize_preview() ) :?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div>
				</div> <!-- .site-branding -->
				<div class="menu-wrap">
					<nav class="main-navigation">
						<button class="menu-toggle">
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
							<span class="toggle-bar"></span>
						</button>
						<ul class="nav-menu">
								<?php
									wp_nav_menu( array( 
									'theme_location' => 'top' ,
									'items_wrap' => '<li>%3$s</li>'
								)); 
								?>
						</ul>
					</nav>
					<div class="header-search">
						<span class="search-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><defs><style>.a{fill:none;}</style></defs><g transform="translate(83 -7842)"><rect class="a" width="18" height="18" transform="translate(-83 7842)"/><path d="M18,16.415l-3.736-3.736a7.751,7.751,0,0,0,1.585-4.755A7.876,7.876,0,0,0,7.925,0,7.876,7.876,0,0,0,0,7.925a7.876,7.876,0,0,0,7.925,7.925,7.751,7.751,0,0,0,4.755-1.585L16.415,18ZM2.264,7.925a5.605,5.605,0,0,1,5.66-5.66,5.605,5.605,0,0,1,5.66,5.66,5.605,5.605,0,0,1-5.66,5.66A5.605,5.605,0,0,1,2.264,7.925Z" transform="translate(-83 7842)"/></g></svg>
						</span>
						<div class="header-search-form">
							<div class="container">
								<form role="search" method="get" class="search-form" action="">
									<label>
										<span class="screen-reader-text">Search for:</span>
										<input class="search-field" placeholder="Search anything and hit enter" value="" name="s" type="search">
									</label>
									<input class="search-submit" value="Search" type="submit">
								</form>
								<span class="close"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> <!-- .site-header -->
	</div>
