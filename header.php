<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mitalent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div id="main-navigation">

        <input type="checkbox" id="hamburger"/>
        <label class="menuicon" for="hamburger">
            <span></span>
        </label>
        <div class="menu">
            <nav>
                <?php
                wp_nav_menu( array(
                    'theme_location' =>  'header-burger',
                    'container' => false,
                    'menu_class' => 'menu_false',
                ));
                ?>
            </nav>
        </div>
    </div>
    <div class="header__logo">
        <a href="<?php echo home_url()?>">
            <?php  bloginfo('name')?>
        </a>
    </div>
    <div class="header__icon">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>
</header>
