<?php
/*
Template Name: events
*/
get_header();
// global $post;
$category_name = 'Events';
$pagination_page = 0;
$category_id =  get_cat_ID($category_name);
$posts_per_page = the_field('events_count');
print_r($posts_per_page);
$params = array(
    'category_name' => $category_name,
    'posts_per_page' => $posts_per_page,
    'offset' => $pagination_page
);
// $myposts = get_posts('numberposts=10&offset=0&category=2');
$my_posts = get_posts($params);
?>
<section class="section">
    <?php print_r($my_posts); ?>
    <!-- <?php query_posts('posts_per_page=' . $posts_per_page . '&cat=' . $category_id) ?> -->

    <div class="container">
        <div class="events">
            <div class="title-wraprer title">
                <h2 class="events-title"><?php the_field('events_title'); ?></h1>
                    <a href="<?php the_field('events_calendar_link'); ?>" class='calendar-link'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/calendar-icon.svg" class='calendar-icon' alt="calendar icon" />
                    </a>
            </div>
            <div class="event-wrapper">
                <div class="event-service">
                    <button type='button' class='sort-button'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/sort.svg" class='event-sort-icon' alt="sort icon" />
                    </button>
                </div>
                <!-- <div class='event-card'> -->
                
                <ul class="event-list">
                    <li class="event-item">
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/event.jpg" alt="event1">
                            <h2 class="event-title">Діалогова сесія «Людський вимір: ефективне управління за допомогою даних та залучення громад»</h2>
                            <p class="event-date">3 серпня 2023</p>
                        </div>
                    </li>
                    <li class='event-item'>
                        <div class="img-wrapper">
                            <img src="" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/event.jpg" alt="event2">
                            <h2 class="event-title">Діалогова сесія «Людський вимір: ефективне управління за допомогою даних та залучення громад»</h2>
                            <p class="event-date">3 серпня 2023</p>
                        </div>
                    </li>
                    <li class='event-item'>
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/event.jpg" alt="event3">
                            <h2 class="event-title">Діалогова сесія «Людський вимір: ефективне управління за допомогою даних та залучення громад»</h2>
                            <p class="event-date">3 серпня 2023</p>
                        </div>
                    </li>
                    <li class='event-item'>
                        <div class="img-wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/event.jpg" alt="event4">
                            <h2 class="event-title">Діалогова сесія «Людський вимір: ефективне управління за допомогою даних та залучення громад»</h2>
                            <p class="event-date">3 серпня 2023</p>
                        </div>
                    </li>
                </ul>
                <div class="paginate-more">
                    <button type='button' class="paginate-btn">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/btn-open-more.svg" alt="event4">
                    </button>
                </div>
                <!-- </div> -->
            </div>
        </div>


    </div>
</section>



<?php get_footer(); ?>