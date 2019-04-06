<?php
/**
 * mitalent functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mitalent
 */

if ( ! function_exists( 'mitalent_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mitalent_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on mitalent, use a find and replace
         * to change 'mitalent' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'mitalent', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'header-burger' => esc_html__( 'Header Menu', 'mitalent' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'mitalent_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'mitalent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mitalent_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'mitalent_content_width', 640 );
}
add_action( 'after_setup_theme', 'mitalent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mitalent_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'mitalent' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'mitalent' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'footer', 'mitalent' ),
        'id'            => 'footer',
        'description'   => esc_html__( 'Add widgets here.', 'mitalent' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'mitalent_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mitalent_scripts() {
    wp_enqueue_style('slick.css', get_template_directory_uri() . '/slick/slick.css');
    wp_enqueue_style('slick-theme.css', get_template_directory_uri() . '/slick/slick-theme.css');
    wp_enqueue_style( 'mitalent-style', get_stylesheet_uri() );
    wp_enqueue_style( 'mitalent-google-fonts1', 'https://fonts.googleapis.com/css?family=Nunito:300,400,600,700|Poppins:300,400,500,600,7000', array(), null);
    wp_enqueue_style( 'mitalent-bootstrap', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' , array(), '4.7.0');
    wp_enqueue_style( 'mitalent-casual', get_template_directory_uri(). '/css/import.css', array(), null);


    wp_enqueue_script( 'mitalent-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'mitalent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );//slick



    wp_enqueue_script('my_js_11', 'http://code.jquery.com/jquery-1.11.0.min.js', array(), null, true);//slick
    wp_enqueue_script('my_js-12', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true);//slick
    wp_enqueue_script('slick.min.js', get_template_directory_uri() . '/slick/slick.min.js', array(), null, true);//slick
    wp_enqueue_script('js.js', get_template_directory_uri() . '/js/js.js', array(), null, true);//slick



    wp_enqueue_script( 'mitalent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mitalent_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'main_extra_fields', 1);

function main_extra_fields() {
    global $post;

    if('index.php' == get_post_meta($post->ID, '_wp_page_template', true) ) {

        add_meta_box( 'main_extra_fields', 'Slider text', 'main_extra_fields_box_func', 'page', 'normal', 'high'  );
        add_meta_box( 'talent_extra_fields', 'Talent box', 'talent_extra_fields_box_func', 'page', 'normal', 'high'  );
    }
    if('contact.php' == get_post_meta($post->ID, '_wp_page_template', true) ) {

        add_meta_box( 'contact_extra_fields', 'Contact text', 'contact_extra_fields_box_func', 'page', 'normal', 'high'  );

    }
}


// код блока main_extra_fields
function main_extra_fields_box_func( $post ){
    global $post;
    ?>

    <p>
        Slider headline:
        <input type="text" name="about[index_headline]" value="<?php echo get_post_meta($post->ID, 'index_headline', 1); ?>" style="width:100%" />
    </p>
    <p>
        Slider subtitle:
        <textarea type="text" name="about[index_subtitle]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'index_subtitle', 1); ?></textarea>
    </p>

    <input type="hidden" name="main_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <?php
}

// код блока talent_extra_fields
function talent_extra_fields_box_func( $post ){
    global $post;
    ?>

    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 1:
                <input type="text" name="talent[talent_img1]" value="<?php echo get_post_meta($post->ID, 'talent_img1', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 1:
                <input type="text" name="talent[talent_headline1]" value="<?php echo get_post_meta($post->ID, 'talent_headline1', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 1:
                <textarea type="text" name="talent[talent_subtitle1]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle1', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 2:
                <input type="text" name="talent[talent_img2]" value="<?php echo get_post_meta($post->ID, 'talent_img2', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 2:
                <input type="text" name="talent[talent_headline2]" value="<?php echo get_post_meta($post->ID, 'talent_headline2', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 2:
                <textarea type="text" name="talent[talent_subtitle2]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle2', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 3:
                <input type="text" name="talent[talent_img3]" value="<?php echo get_post_meta($post->ID, 'talent_img3', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 3:
                <input type="text" name="talent[talent_headline3]" value="<?php echo get_post_meta($post->ID, 'talent_headline3', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 3:
                <textarea type="text" name="talent[talent_subtitle3]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle3', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 4:
                <input type="text" name="talent[talent_img4]" value="<?php echo get_post_meta($post->ID, 'talent_img4', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 4:
                <input type="text" name="talent[talent_headline4]" value="<?php echo get_post_meta($post->ID, 'talent_headline4', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 4:
                <textarea type="text" name="talent[talent_subtitle4]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle4', 1); ?></textarea>
            </p>

        </div>
    </div>

    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 5:
                <input type="text" name="talent[talent_img5]" value="<?php echo get_post_meta($post->ID, 'talent_img5', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 5:
                <input type="text" name="talent[talent_headline5]" value="<?php echo get_post_meta($post->ID, 'talent_headline5', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 5:
                <textarea type="text" name="talent[talent_subtitle5]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle5', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 6:
                <input type="text" name="talent[talent_img6]" value="<?php echo get_post_meta($post->ID, 'talent_img6', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 6:
                <input type="text" name="talent[talent_headline6]" value="<?php echo get_post_meta($post->ID, 'talent_headline6', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 6:
                <textarea type="text" name="talent[talent_subtitle6]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle6', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 7:
                <input type="text" name="talent[talent_img7]" value="<?php echo get_post_meta($post->ID, 'talent_img7', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 7:
                <input type="text" name="talent[talent_headline7]" value="<?php echo get_post_meta($post->ID, 'talent_headline7', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 7:
                <textarea type="text" name="talent[talent_subtitle7]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle7', 1); ?></textarea>
            </p>

        </div>
        <div  style="width:20%; margin: 10px; padding: 15px; outline: 1px solid #000">

            <p>
                Img 8:
                <input type="text" name="talent[talent_img8]" value="<?php echo get_post_meta($post->ID, 'talent_img8', 1); ?>" style="width:100%" />
            </p>

            <p>
                Talent headline 8:
                <input type="text" name="talent[talent_headline8]" value="<?php echo get_post_meta($post->ID, 'talent_headline8', 1); ?>" style="width:100%" />
            </p>
            <p>
                Talent subtitle 8:
                <textarea type="text" name="talent[talent_subtitle8]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'talent_subtitle8', 1); ?></textarea>
            </p>

        </div>
    </div>

    <input type="hidden" name="talent_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <?php
}

// код блока contact_extra_fields
function contact_extra_fields_box_func( $post ){
    global $post;
    ?>
    <div>
        <p>
            Main letter:
            <input type="text" name="contact[contact_main]" value="<?php echo get_post_meta($post->ID, 'contact_main', 1); ?>" style="width:100%" />
        </p>

        <p>
            The rest of the text:
            <textarea type="text" name="contact[contact_text]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'contact_text', 1); ?></textarea>
        </p>
    </div>

    <div  style="width:100%; margin-top: 20px; padding: 15px; ">
        Contact info:
        <div style="display: flex; flex-direction: row; justify-content: center; align-items: flex-start;">
            <div style="width:30%; margin: 10px; padding: 15px; outline: 1px solid #000">
                <p>
                    Address text:
                    <input type="text" name="contact[contact_address1]" value="<?php echo get_post_meta($post->ID, 'contact_address1', 1); ?>" style="width:100%" />
                </p>
                <p>
                    City:
                    <input type="text" name="contact[contact_address2]" value="<?php echo get_post_meta($post->ID, 'contact_address2', 1); ?>" style="width:100%" />
                </p>
                <p>
                    Address text:
                    <input type="text" name="contact[contact_address3]" value="<?php echo get_post_meta($post->ID, 'contact_address3', 1); ?>" style="width:100%" />
                </p>

            </div>
            <div style="width:30%; margin: 10px; padding: 15px; outline: 1px solid #000">
                <p>
                    Phone number:
                    <input type="text" name="contact[contact_phone1]" value="<?php echo get_post_meta($post->ID, 'contact_phone1', 1); ?>" style="width:100%" />
                </p>
                <p>
                    Additional phone number:
                    <input type="text" name="contact[contact_phone2]" value="<?php echo get_post_meta($post->ID, 'contact_phone2', 1); ?>" style="width:100%" />
                </p>
            </div>
            <div style="width:30%; margin: 10px; padding: 15px; outline: 1px solid #000">
                <p>
                    Mail:
                    <input type="text" name="contact[contact_email]" value="<?php echo get_post_meta($post->ID, 'contact_email', 1); ?>" style="width:100%" />
                </p>
            </div>
        </div>

    </div>

    <input type="hidden" name="contact_extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
    <?php
}

// включаем обновление полей при сохранении
add_action( 'save_post', 'main_extra_fields_update', 0 );
// включаем обновление полей при сохранении
add_action( 'save_post', 'talent_extra_fields_update', 0 );
// включаем обновление полей при сохранении
add_action( 'save_post', 'contact_extra_fields_update', 0 );

## Сохраняем данные, при сохранении ст
function main_extra_fields_update( $post_id ){
    // базовая проверка
    if (
        empty( $_POST['about'] )
        || ! wp_verify_nonce( $_POST['main_extra_fields_nonce'], __FILE__ )
        || wp_is_post_autosave( $post_id )
        || wp_is_post_revision( $post_id )
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['about'] = array_map( 'sanitize_text_field', $_POST['about'] ); // чистим все данные от пробелов по краям
    foreach( $_POST['about'] as $key => $value ){
        if( empty($value) ){
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}
## Сохраняем данные, при сохранении ст
function talent_extra_fields_update( $post_id ){
    // базовая проверка
    if (
        empty( $_POST['talent'] )
        || ! wp_verify_nonce( $_POST['talent_extra_fields_nonce'], __FILE__ )
        || wp_is_post_autosave( $post_id )
        || wp_is_post_revision( $post_id )
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['talent'] = array_map( 'sanitize_text_field', $_POST['talent'] ); // чистим все данные от пробелов по краям
    foreach( $_POST['talent'] as $key => $value ){
        if( empty($value) ){
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}
## Сохраняем данные, при сохранении ст
function contact_extra_fields_update( $post_id ){
    // базовая проверка
    if (
        empty( $_POST['contact'] )
        || ! wp_verify_nonce( $_POST['contact_extra_fields_nonce'], __FILE__ )
        || wp_is_post_autosave( $post_id )
        || wp_is_post_revision( $post_id )
    )
        return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['contact'] = array_map( 'sanitize_text_field', $_POST['contact'] ); // чистим все данные от пробелов по краям
    foreach( $_POST['contact'] as $key => $value ){
        if( empty($value) ){
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}
