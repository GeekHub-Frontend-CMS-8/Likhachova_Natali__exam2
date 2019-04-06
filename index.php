<?php
/**
 * Template Name: My page template for home page
 */
get_header();
?>

    <section class="top">
        <div class="top_bg">
            <img src="<?php bloginfo('template_url')?>/img/index/top/bg.png" alt="">
            <img src="<?php bloginfo('template_url')?>/img/index/top/Pagination.png" alt="">
        </div>
        <section class="slider">
            <div class="footer_social">
                <?php
                dynamic_sidebar('footer');
                ?>
            </div>
            <div class="carousel">
                <div class="sl__slide">
                    <img src="<?php bloginfo('template_url')?>/img/index/top/Main_img.png" alt="">
                    <div class="sl__text">
                        <div class="info_main_box">
                            <h2>
                                <?php echo get_post_meta($post->ID, 'index_headline', true);?>
                            </h2>
                        </div>
                        <p>
                            <?php echo get_post_meta($post->ID, 'index_subtitle', true);?>
                        </p>
                    </div>
                </div>
                <div class="sl__slide">
                    <img src="<?php bloginfo('template_url')?>/img/index/top/Main_img.png" alt="">
                    <div class="sl__text">
                        <div class="info_main_box">
                            <h2>
                                <?php echo get_post_meta($post->ID, 'index_headline', true);?>
                            </h2>
                        </div>
                        <p>
                            <?php echo get_post_meta($post->ID, 'index_subtitle', true);?>
                        </p>
                    </div>
                </div>
                <div class="sl__slide">
                    <img src="<?php bloginfo('template_url')?>/img/index/top/Main_img.png" alt="">
                    <div class="sl__text">
                        <div class="info_main_box">
                            <h2>
                                <?php echo get_post_meta($post->ID, 'index_headline', true);?>
                            </h2>
                        </div>
                        <p>
                            <?php echo get_post_meta($post->ID, 'index_subtitle', true);?>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>

    <section class="talent">
        <div class="talent_top">
            <div class="talent_top-text">
                Actor
            </div>
            <div class="talent_top-text">
                Musician
            </div>
            <div class="talent_top-text">
                Comedian
            </div>
            <div class="talent_top-text">
                Model
            </div>
        </div>
        <div class="talent_list">
            <?php
            $img1=get_post_meta($post->ID, 'talent_img1', true);
            $img2=get_post_meta($post->ID, 'talent_img2', true);
            $img3=get_post_meta($post->ID, 'talent_img3', true);
            $img4=get_post_meta($post->ID, 'talent_img4', true);
            $img5=get_post_meta($post->ID, 'talent_img5', true);
            $img6=get_post_meta($post->ID, 'talent_img6', true);
            $img7=get_post_meta($post->ID, 'talent_img7', true);
            $img8=get_post_meta($post->ID, 'talent_img8', true);
            ?>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img3;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline3', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle3', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img2;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline2', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle2', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img4;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline4', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle4', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img5;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline5', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle5', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img6;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline6', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle6', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img7;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline7', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle7', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img8;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline8', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitl81', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
            <figure class="img-hover-text">
                <div id="hero">
                    <img src="<?php echo get_template_directory_uri().$img1;?> " alt="">
                    <figcaption>
                        <h6>
                            <?php echo get_post_meta($post->ID, 'talent_headline1', true);?>
                        </h6>
                        <p class="hover_text_first">
                            <?php echo get_post_meta($post->ID, 'talent_subtitle1', true);?>
                        </p>
                    </figcaption>
                </div>
            </figure>
        </div>
    </section>


<?php

get_footer();
