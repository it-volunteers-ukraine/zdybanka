<?php
$my_posts = $args['my_post'];

$params =  $args['params']; 

if (isset($args['params'])) {
    $params = $args['params'];
} else {
    $params = ['posts_per_page' => 4, 'offset' => 0];
}

?>
<ul id='events-list' class="events-list" posts-per-page=<?php echo $params['posts_per_page']; ?> page=1 >
<!-- <?php echo $params['offset']; ?> -->

    <?php if ($my_posts) :
        foreach ($my_posts as $post) :
            get_template_part('parts/event-item', null, $post);

        endforeach ?>
    <?php endif ?>
</ul>