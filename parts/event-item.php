<?php $post = $args;
$post_id = $post->ID;
switch_to_locale('uk');
$event_img = get_field('event_photos', $post_id)[0]['sizes']['medium_large'];
$event_img_alt = get_field('event_photos', $post_id)[0]['alt'];
$event_link = $post->guid;
$event_date = date_i18n('j F Y', strtotime((string)$post->event_date));
// echo $event_date;

?>

<li class="events-item">
    <a href="<?php echo $event_link ?>" class='events-link'>
        <div class="events-card">
            <img src="<?php echo $event_img ?>" alt="<?php echo $event_img_alt ?>">
            <h2 class="events-title"><?php the_field('event_title', $post_id) ?></h2>
            <p class="events-date"><?php echo $event_date ?></p>
        </div>
    </a>
</li>