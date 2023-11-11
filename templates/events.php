<?php
/*
Template Name: events
*/
get_header();
?>
<section class="section">
    <div class="container">
        <div class="events">
            <div class="title-wraprer title">
                <h2 class="events-title">ДО КАЛЕНДАРЮ ПОДІЙ</h1>
                    <a href="#" class='calendar-link'>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/calendar-icon.svg" class='calendar-icon' alt="calendar icon"  />
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