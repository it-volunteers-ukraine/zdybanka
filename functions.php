<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}


/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );

  if ( is_page_template('templates/home.php') ) {
    $front_scripts_args = [
      'ajaxUrl' => admin_url('admin-ajax.php'),
  ];
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
    wp_enqueue_style( 'events-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/events.css', array() );
    wp_enqueue_script( 'events-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/events.js', array(), false, true );
    wp_localize_script('events-parts-scripts', 'vars', $front_scripts_args);
    wp_enqueue_script('home-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), false, true);
    wp_enqueue_script('home-jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', array(), false, false);
    wp_enqueue_style('slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array('main'));
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array('main') );
    wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.js', array(), false, true );
    wp_enqueue_style( 'gallery-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/gallery.css', array() );
    wp_enqueue_script( 'gallery-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/gallery.js', array(), false, true );

  }

  if ( is_page_template('templates/partners.php') ) {
    wp_enqueue_style( 'partners-style', get_template_directory_uri() . '/assets/styles/template-styles/partners.css', array('main') );
    wp_enqueue_script( 'partners-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/partners.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }


  if ( is_page_template('templates/archive-project.php') ) {
    wp_enqueue_style('style-swiper',  'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/successful-projects.css', array('main') );
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('successful-projects', get_template_directory_uri() . '/assets/scripts/template-scripts/successful-projects.js', array(), null, true);
  }

  if ( is_page_template('templates/events.php') ) {
    $front_scripts_args = [
      'ajaxUrl' => admin_url('admin-ajax.php'),
  ];
    wp_enqueue_style( 'events-style', get_template_directory_uri() . '/assets/styles/template-styles/events.css', array('main') );
    wp_enqueue_script( 'events-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/events.js', array(), false, true );
    wp_enqueue_style( 'events-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/events.css', array() );
    wp_enqueue_script( 'events-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/events.js', array(), false, true );
    wp_localize_script('events-parts-scripts', 'vars', $front_scripts_args);
  }
  
  if ( is_page_template('templates/category-event.php') ) {
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array('main') );
    wp_enqueue_style('event-style', get_template_directory_uri() . '/assets/styles/template-styles/category-event.css', array('main') );
    wp_enqueue_style('gallery-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/gallery.css', array() );
    wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.js', array(), false, true );
    wp_enqueue_script('event-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/category-event.js', array(), false, true );
    wp_enqueue_script('gallery-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/gallery.js', array(), false, true );
    // wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/assets/styles/vendors/lightbox.css', array() );
    // wp_enqueue_script( 'lightbox-scripts', get_template_directory_uri() . '/assets/scripts/vendors/lightbox-plus-jquery.js', array(), false, true );
    // wp_enqueue_script( 'lightbox-scripts', get_template_directory_uri() . '/assets/scripts/vendors/lightbox.js', array(), false, true );

  }
  
  // if (is_singular() && is_page_template('parts/gallery.php')) {
  //   wp_enqueue_style( 'gallery-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/gallery.css', array() );
  //   wp_enqueue_script( 'gallery-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/gallery.js', array(), false, true );
  // }

  // if (is_singular() && is_page_template('parts/events.php')) {
  //   wp_enqueue_style( 'events-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/events.css', array() );
  //   wp_enqueue_script( 'events-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/events.js', array(), false, true );
  // }
  }


/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap' );
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap' );
}




 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** add swiper */
function add_swiper() {
  wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );
}

add_action( 'wp_enqueue_scripts', 'add_swiper' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
        'page_title'    => 'Project Settings',
        'menu_title'    => 'Projects',
        'parent_slug'   => 'theme-general-settings',
    ));
}

function register_custom_post_type() {
    $labels = array(
        'name'               => _x( 'Успішні проекти', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Проект', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Проекти', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Проект', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Додати новий', 'Проект', 'textdomain' ),
        'add_new_item'       => __( 'Додати новий проект', 'textdomain' ),
        'new_item'           => __( 'Новий проект', 'textdomain' ),
        'edit_item'          => __( 'Редагувати проект', 'textdomain' ),
        'view_item'          => __( 'Переглянути проект', 'textdomain' ),
        'all_items'          => __( 'Всі проекти', 'textdomain' ),
        'search_items'       => __( 'Шукати проекти', 'textdomain' ),
        'not_found'          => __( 'Проекти не знайдено', 'textdomain' ),
        'not_found_in_trash' => __( 'Проекти не знайдено в кошику', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title'),
    );

    register_post_type( 'project', $args );
}

add_action( 'init', 'register_custom_post_type' );





add_action('wp_ajax_events_more', 'events_more_ajax');
add_action('wp_ajax_nopriv_events_more', 'events_more_ajax');

if (! function_exists('events_more_ajax')) {
    /**
     * @return void
     */
    function events_more_ajax()
    {
        // $cases = theme_get_more_cases($_POST);
      $category_name = 'event';
      $category_id =  get_cat_ID($category_name);
      $page_events_id = get_page_by_path('events')->ID;
      
      // $today = date('d.m.Y');

      $loop_args = [
          'post_type'      => 'post',
          'cat'            => $category_id,
          'posts_per_page' => get_field('events_count', $page_events_id),
          'meta_query' => array(
            array(
              'key' => 'event_date',
              // 'value' => $today,
              // 'compare' => '>=',
              'type' => 'DATE',
            )
          ),
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order'   => $_POST['sort'],
          'offset'  => $_POST['offset'],
          'post_status'   => 'publish',

          // 'posts_per_page' => 4,
          // 'paged'          => 1,
          // 'offset'   => $_POST['offset']
        ];
        
        // $loop_args['orderby'] = 'date';
        // $loop_args['order']   = $_POST['sort'];
        // $loop_args['offset']   = $_POST['offset'];


      $loop        = new WP_Query($loop_args);
      $events       = $loop->get_posts();
      $html_string = '';

      foreach ($events as $event) {
          ob_start();
          get_template_part('parts/event-item', null, $event);
          $html_string .= ob_get_contents();
          ob_end_clean();
      }

      $res = [
          'status'  => true,
          'post'    => $_POST,
          'html'    => $html_string,
          'posts_count' => count($events),
          // 'events'  => $events,
          'loop_args'   => $loop_args,
          'max_page'  => $loop->max_num_pages,
          'total_posts' => $loop->found_posts,
      ];

      wp_send_json($res);
    }
}

