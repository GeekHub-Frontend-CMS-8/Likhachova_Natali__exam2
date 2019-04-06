<?php
/**
 * Template Name: My page template for contact page
 */
get_header();
?>

    <section class="contact">
        <div class="first_part">
            <img class="contact_first-img"src="<?php bloginfo('template_url')?>/img/contact/Main_img.png" alt="">
            <div class="contact_text">

                <h1>
                    Contact
                    us<div class="contact-line"></div>
                </h1>

                <h2>
                    mass impressions
                </h2>
            </div>
            <button class="contact-btn">
                <p>get directions</p>
                <img class="contact-img" src="<?php bloginfo('template_url')?>/img/contact/Play_Button.png" alt="">
            </button>

        </div>
        <div class="contact_info">
            <p class="info-text">
                <span class="contact_info-up-big"><?php echo get_post_meta($post->ID, 'contact_main', true);?>
                    </span><?php echo get_post_meta($post->ID, 'contact_text', true);?>
            </p>
            <div class="contact_info-bottom">
                <div class="address">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="address_text">
                        <p>
                            <?php echo get_post_meta($post->ID, 'contact_address1', true);?>
                        </p>
                        <p>
                            <?php echo get_post_meta($post->ID, 'contact_address2', true);?>
                        </p>
                        <p>
                            <?php echo get_post_meta($post->ID, 'contact_address3', true);?>
                        </p>
                    </div>
                </div>
                <div class="phone">
                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                    <div class="phone_text">
                        <p>
                            <?php echo get_post_meta($post->ID, 'contact_phone1', true);?>
                        </p>
                        <p>
                            <?php echo get_post_meta($post->ID, 'contact_phone2', true);?>
                        </p>
                    </div>
                </div>
                <div class="email">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <p>
                        <?php echo get_post_meta($post->ID, 'contact_email', true);?>
                    </p>
                </div>
            </div>
        </div>
        <img class="contact_bg_img" src="<?php bloginfo('template_url')?>/img/contact/bg.png" alt="">
    </section>


<?php

get_footer();
