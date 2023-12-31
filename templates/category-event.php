<?php
/*
* Template Name: event
* Template post type: post
*/
get_header();
global $post;
switch_to_locale('uk');


$event_title = get_field('event_date', $post);
$event_date = get_field('event_date', $post);
$event_text = get_field('event_text', $post);
$event_link_in_calendar = get_field('event_link_in_calendar', $post);
$event_photos = get_field('event_photos', $post);
$isShowAddCalendar = strtotime((string)$event_date) >= strtotime(date("d.m.Y"));
$event_date = date_i18n('j F Y', strtotime((string)$event_date));
?>
<section class="section">
    <div class="container">
        <div class="event">
            <h1 class="event-title"><?php the_field('event_title', $post); ?></h1>
            <p class="event-date"><?php echo $event_date; ?></p>
            <div class="event-content clamp ">
                <?php echo $event_text; ?>
            </div>
            <div class="event-btn-wrapper">
                <button id='btn-more' type='button' class="event-btn-inverse"><span class='btn-more-text'>Показати більше</span><span class='btn-less-text'>Показати менше</span>
                    <svg class="icon" alt="more" width="20" height="20">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-button-open-more" alt="next"></use>
                    </svg>
                </button>
                <?php if ($isShowAddCalendar == True) : ?>
                    <button type='button' class="event-btn-main" onclick='window.open("<?php echo $event_link_in_calendar ?>", "_blank")'  <?php echo  $event_link_in_calendar == '' ?  'disabled' : '' ?>>Додати в календар
                        <svg class="icon" alt="plus" width="20" height="20">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-button-next" alt="next"></use>
                        </svg>
                    </button>
                <?php endif ?>
            </div>


        </div>
    </div>
    <?php get_template_part('parts/gallery', '', $event_photos); ?>


</section>



<?php get_footer(); ?>