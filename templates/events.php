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
$is_end_post_list = $posts_per_page > count($my_posts);

?>

<section class="section">
    <div class="container">
        <div class="events">
            <div class="title-wraprer title">
                <h2 class="events-main-title"><?php the_field('events_title'); ?></h2>
                <a href="<?php the_field('events_calendar_link'); ?>" target='_blank' class='calendar-link'>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/calendar-icon.svg" class='calendar-icon' alt="calendar icon" />
                </a>
            </div>
            <div class="events-wrapper">
                <div class="events-service">
                    <button type='button' class='sort-button'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/sort.svg" class='events-sort-icon' alt="sort icon" />
                    </button>
                </div>

                <?php get_template_part('parts/events', null, $my_posts); ?>
                
                <div class="paginate-more <?php echo $is_end_post_list ? 'hidden' : ''; ?>">
                    <button type='button' class="paginate-btn">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/btn-open-more.svg" alt="event4">
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>