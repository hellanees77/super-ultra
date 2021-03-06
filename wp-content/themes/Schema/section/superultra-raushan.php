<?php
/**
 * Client Details
 *
 */?>

<section class="about-section">
<div class="container">
    <section class="widget widget_raratheme_featured_page_widget">                
        <div class="widget-featured-holder right">
            <p class="section-subtitle">                        
                <span>About Us</span>
            </p>                    
            <div class="text-holder">
                <!-- <h2 class="widget-title">Hi, I'm Raushan.</h2> -->
                <h2 class="widget-title"><?php echo get_theme_mod('client_title_block');?></h2>
                <div class="featured_page_content">
                    <!-- <p>Yes, I know my stuff! And throughout our coaching time, you will develop the tools and confidence to take action. My way of coaching is to empower you in becoming the Leader you want to be. You are unique and so your coaching should be too. I don’t follow a template, or ‘one size fits all’. We start where you are &amp; we work towards your goals. If you want a business that generates you income while also positively contributing to others, then you have arrived at the right place!</p>
                    <p>Whether you have an existing business, or you’ve an idea that you want to bring to life, there is a way to create a positive triple bottom-line company: profit-people-planet all winning. No longer are these areas mutually exclusive, you can have it all and do good at the same time!</p> -->
                    <p><?php echo get_theme_mod('client_des_block');?></p>
                    <a href="#" target="_blank" class="btn-readmore">Know more about me</a>
                </div>
            </div>
            <div class="img-holder">
                <a target="_blank" href="#">
                    <!-- <img src="<?php //bloginfo('template_url');?>/assets/images/about-img.jpg" alt="">  -->
                    <img src="<?php echo get_theme_mod('client_image_block');?>" alt="">                      
                </a>
            </div>
        </div>        
    </section>
</div>
</section> <!-- .about-section -->

<section class="client-section">
<div class="container">
    <section class="widget widget_raratheme_client_logo_widget">            
        <div class="raratheme-client-logo-holder">
            <div class="raratheme-client-logo-inner-holder">
                <h2 class="widget-title" itemprop="name">Raushan has been featured on:</h2>                             
                <div class="image-holder-wrap"> <!-- yo wrap plugin ko filter bata rakhnu parxa -->
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block1');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block1');?>" alt="">
                        </a> 
                    </div>
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block2');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block2');?>" alt="">
                        </a> 
                    </div>
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block3');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block3');?>" alt="">
                        </a> 
                    </div>
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block4');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block4');?>" alt="">
                        </a> 
                    </div>
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block5');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block5');?>" alt="">
                        </a> 
                    </div>
                    <div class="image-holder black-white">
                        <a href="<?php echo get_theme_mod('feature_on_block6');?>" target="_blank">
                            <img src="<?php echo get_theme_mod('feature_image_block6');?>" alt="">
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section> <!-- .client-section -->