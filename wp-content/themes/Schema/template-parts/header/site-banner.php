<div class="site-banner">
    <div class="banner-item">
        <!-- <img src="<?php //bloginfo('template_url');?>/assets/images/banner-img.jpg" alt="banner"> -->
        <img src="<?php echo get_theme_mod('banner_image_block');?>" alt="banner">
        <div class="banner-caption center">
            <div class="container">
                <h1 class="title">
                    <a href="#"><?php echo get_theme_mod('banner_title_block');?></a>
                </h1>
                <div class="item-desc">
                <?php echo get_theme_mod('banner_des_block');?>
                    <img src="<?php bloginfo('template_url');?>/assets/images/banner-newsletter-form.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .site-banner -->