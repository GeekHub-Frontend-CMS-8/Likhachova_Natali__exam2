<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitalent
 */

?>

<footer>
    <button id="scroll-btn">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>
    <div class="footer_top">
        <a href="<?php echo home_url()?>">
            <?php  bloginfo('name')?>
        </a>
        <div class="footer_box">
            <div class="footer_line"></div>
            <p class="footer_text">
                sign up our newsletter
            </p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>
    </div>
    <div class="footer_line-big"></div>
    <div class="footer_bottom">
        <p class="after_written">
            © <?php echo date('Y')?> MI Talent. Designed by Tranmautritam for Mass Impressions.
        </p>
        <div class="footer_social">
            <?php
            dynamic_sidebar('footer');
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
