<?php
/*
Template Name: events
*/
get_header();
// global $post;
$category_name = 'event';
$category_id =  get_cat_ID($category_name);
$posts_per_page =  (int) get_field('events_count');
$page = 1;
$offset = $posts_per_page * ($page - 1);
$params = array(
    'category_name' => $category_name,
    'posts_per_page' => $posts_per_page,
    // 'posts_per_page' => 1,
    'offset' => $offset,
    'orderby' => 'date', // сортировать по дате
    'order' => 'DESC', // по убыванию (сначала - свежие посты)
);
$my_posts = get_posts($params);
$is_end_post_list = $posts_per_page < count($my_posts);

?>

<section class="section">
    <div class="container">
        <div class="events">
            <div class="title-wraprer title">
                <h2 class="events-main-title"><?php the_field('events_title'); ?></h2>
                <a href="<?php the_field('events_calendar_link'); ?>" target='_blank' class='calendar-link'>
                    <svg class="calendar-icon" alt="calendar" width="48" height="48">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-calendar"></use>
                    </svg>
                </a>
            </div>
            <div class="events-wrapper">
                <div class="events-service">
                    <button id='sort-btn' type='button' class='sort-button' data-sort='desc'>
                        <svg class="events-sort-icon" alt="sorting">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-sort-btn"></use>
                        </svg>
                    </button>
                </div>
                
                <?php get_template_part('parts/events', null, ['my_post'=>$my_posts, 'params'=>$params ]); ?>

                <div class="paginate-more <?php echo $is_end_post_list ? 'hidden' : ''; ?>">
                    <button id='load-more' type='button' class="paginate-btn">
                        <svg class="icon-btn-open-more" alt="btn-more">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-btn-open-more"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>