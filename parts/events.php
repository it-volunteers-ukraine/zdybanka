<?php $my_posts = $args; ?>
<ul class="events-list">
    <?php foreach ($my_posts as $post) :
        $event_img = get_field('event_photos', $post)[0]['sizes']['medium_large'];
        $event_img_alt = get_field('event_photos', $post)[0]['alt'];
        $event_link = $post->guid;
    ?>
        <li class="events-item">
            <a href="<?php echo $event_link ?>">
                <div class="events-card">
                    <img src="<?php echo $event_img ?>" alt="<?php echo $event_img_alt ?>">
                    <h2 class="events-title"><?php the_field('event_title', $post) ?></h2>
                    <p class="events-date"><?php the_field('event_date', $post) ?></p>
                </div>
            </a>
        </li>
    <?php endforeach ?>
</ul>