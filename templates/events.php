<?php
/*
Template Name: events
*/
get_header();
// global $post;
$category_name = 'event';
$pagination_page = 0;
$category_id =  get_cat_ID($category_name);
$posts_per_page = get_field('events_count');
$params = array(
    'category_name' => $category_name,
    'posts_per_page' => $posts_per_page,
    'offset' => $pagination_page
);
$my_posts = get_posts($params);
$is_end_post_list = $posts_per_page;

?>

<section class="section">
    <?php
    // print_r($my_posts[0]); 
    // $first_post = $my_posts[0];
    // setup_postdata($first_post);
    // print_r(the_field('event_title', $first_post));
    // print_r(get_field('event_photos', $first_post)[1]['sizes']['medium_large']);
    // print_r($first_post);
    // print_r($first_post->post_content);
    // echo $first_post;
    // $post_content = $first_post->post_content;
    // print_r($post_content['post_title']);
    // print_r($post_content);
    // print_r(get_post(60));
    // wp_reset_postdata();
    ?>


    <div class="container">
        <div class="events">
            <div class="title-wraprer title">
                <h2 class="events-title"><?php the_field('events_title'); ?></h1>
                    <a href="<?php the_field('events_calendar_link'); ?>" target='_blank' class='calendar-link'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/calendar-icon.svg" class='calendar-icon' alt="calendar icon" />
                    </a>
            </div>
            <div class="event-wrapper">
                <div class="event-service">
                    <button type='button' class='sort-button'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/sort.svg" class='event-sort-icon' alt="sort icon" />
                    </button>
                </div>
                <!-- <?php print_r(wp_count_posts()->publish); ?> -->
                <!-- <?php print_r($is_end_post_list) ?> -->
                <!-- <?php echo $is_end_post_list ?> -->
                <ul class="event-list">
                    <?php foreach ($my_posts as $post) :
                        $event_img = get_field('event_photos', $post)[0]['sizes']['medium_large'];
                        $event_img_alt = get_field('event_photos', $post)[0]['alt'];
                        $event_link = $post->guid;
                    ?>
                        <li class="event-item">
                            <a href="<?php echo $event_link ?>">
                                <div class="img-wrapper">
                                    <img src="<?php echo $event_img ?>" alt="<?php echo $event_img_alt ?>">
                                    <h2 class="event-title"><?php the_field('event_title', $post) ?></h2>
                                    <p class="event-date"><?php the_field('event_date', $post) ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <div class="paginate-more <?php echo $is_end_post_list ? 'hidden1' : ''; ?>">
                    <button type='button' class="paginate-btn">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/btn-open-more.svg" alt="event4">
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>