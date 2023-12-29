<?php
/*
Template Name: home
*/
get_header();
 $current_id = get_the_ID();
?>
<!-- <main> -->
    <section class="section logo">
        <div class="logo__background" style="background-image: url(<?php the_field('logo__img', $current_id); ?>);">
        </div>
            <p class="logo__title">
                <?php the_field('logo__title', $current_id); ?>
            </p>
    </section>
    <section class="section info">
        <div class="container info__container">

            <img class="info__img" src="<?php the_field('info__img', $current_id); ?>" alt="info">

            <p class="info__text">
                <?php the_field('info__text', $current_id); ?>
            </p>
        </div>
    </section>
    <section class="section description section-nav">
        <span id="about"></span>
        <div class="container description__wrapper">
            <div class="description__box">
                <p class="description__title">
                    <?php the_field('description__title--first', $current_id); ?>
                </p>
                <p class="description__text">
                    <?php the_field('description__text--first', $current_id); ?>
                </p>
            </div>
            <div class="description__box">
                <p class="description__title">
                    <?php the_field('description__title--second', $current_id); ?>
                </p>
                <p class="description__text">
                    <?php the_field('description__text--second', $current_id); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="section benefits section-nav" >
        <span id="work-directions"></span>
        <div class="container-benefits">

            <?php
            if (have_rows('benefits__item', $current_id)): ?>
                <ul class="benefits__list">
                    <?php while (have_rows('benefits__item', $current_id)):
                        the_row(); ?>
                        <li class="benefits__item">
                            <div class="benefits__img">
                                <img src="<?php the_sub_field('benefits__img'); ?>" alt="benefits" />
                            </div>
                            <p class="benefits__title">
                                <?php the_sub_field('benefits__title'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>



        </div>
    </section>
    <section class="section events">
        <div class="events__line line"></div>
        <div class="container">

            <h2 class="events__title title">
                <?php the_field('events__title', $current_id); ?>
            </h2>
             

            <?php
           
$today = date('d.m.Y');
$category_name = 'event';

$posts_per_page =  4;
$page = 1;
$offset = 0;
$params = array(
    'category_name' => $category_name,
    'posts_per_page' => $posts_per_page,
    // 'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'type' => 'DATE',
        )
    ),
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'offset' => $offset,
    // 'orderby' => 'date', // сортировать по дате
    'order' => 'DESC', // по убыванию (сначала - свежие посты)
);
$loop = new WP_Query($params);
$my_posts = $loop->get_posts();
$max_pages = $loop->max_num_pages;
$found_posts = $loop->found_posts;

$is_end_post_list = $page == $max_pages;
?>

            <?php get_template_part('parts/events', null, ['my_post' => $my_posts, 'params' => $params]); ?>

            <div class="events__btn">
                <?php
                $link = get_field('events__name', $current_id);
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="events__name" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>">
                        <span class="events__label"><?php echo esc_html($link_title); ?></span>
                        <?php
                        $icon_arrow = get_stylesheet_directory() . '/assets/images/arrow_right.svg';
                        echo file_get_contents($icon_arrow);
                        ?>
                    </a>
                <?php endif;
                ?>
            </div>
        </div>
    </section>
    <section class="section gallery section-nav" id="gallery">
        <div class="gallery__line line"></div>
        <div class="container">
            <h2 class="gallery__title title">
                <?php the_field('gallery__title', $current_id); ?>
            </h2>
            <?php
            $event_photos = get_field('gallery__photo', $current_id);

            ?>
            <?php get_template_part('parts/gallery', '', $event_photos); ?>
        </div>
    </section>
    <section class="section partners section-nav" id="partners">
        <div class="partners__line line"></div>
        <div class="container">
            <h2 class="partners__title title">
                <?php the_field('partners__title', $current_id); ?>
            </h2>
            <?php
            if (have_rows('partners__item', $current_id)): ?>
                <ul class="partners__list">
                    <?php while (have_rows('partners__item', $current_id)):
                        the_row(); ?>
                        <li class="partners__item">
                            <div class="partners__img">
                                <img src="<?php the_sub_field('partners__img'); ?>" alt="partners" />
                            </div>
                            <div class="partners__name">
                                <?php
                                $link = get_sub_field('partners__name');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section class="section docs section-nav" id="documents">
        <div class="docs__line line"></div>
        <div class="container">
            <h2 class="docs__title">
                <?php the_field('docs__title', $current_id); ?>
            </h2>

            <?php
            $open_arrow = get_stylesheet_directory() . '/assets/images/open.svg';
            $rows = get_field('docs__links', $current_id);
            if (!empty($rows)) : ?> 
            <ul class="docs__list">
                <?php foreach ($rows as $row):
                    $name = $row['doc__link__name'];
                    $file = $row['doc__file'];
                    if(!empty($file)): ?>
                    <li class="docs__item">
                    <p class="docs__name"> <?php echo $name . file_get_contents($open_arrow); ?></p>
                    <div class="docs__doc">
                        <iframe data-src="<?php echo $file['url']; ?>" frameborder="0"></iframe>
                    </div>
                    </li>
                <?php endif; ?>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section class="section contacts section-nav" id="contacts">
        <div class="contacts__line line"></div>
        <div class="container">
            <h2 class="contacts__title">
                <?php the_field('contacts__title', $current_id); ?>
            </h2>
            <div class="contacts__map">
                <iframe
                    src="<?php the_field('contacts__map__link', $current_id); ?>"
                    width="100%" height="100%" style="border:0; filter: invert(90%) hue-rotate(180deg);" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <ul class="contacts__list">
                <li class="contacts__item">
                    <div class="contacts__address-img">
                        <img src="<?php the_field('contacts__address-img', $current_id); ?>" alt="address" />
                    </div>
                    <h3 class="contacts__address-title">
                        <?php the_field('contacts__address-title', $current_id); ?>
                    </h3>
                    <?php
                    $link = get_field('contacts__address-text', $current_id);
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="contacts__address-text" href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    <?php endif; ?>
                </li>
                <li class="contacts__item">
                    <div class="contacts__email-img">
                        <img src="<?php the_field('contacts__email-img', $current_id); ?>" alt="email" />
                    </div>
                    <h3 class="contacts__email-title">
                        <?php the_field('contacts__email-title', $current_id); ?>
                    </h3>
                    <p class="contacts__email-text">
                        <a href="mailto:<?php the_field('contacts__email-text', $current_id) ?>">
                            <?php the_field('contacts__email-text', $current_id) ?>
                        </a>
                    </p>
                </li>
                <li class="contacts__item">
                    <div class="contacts__phone-img">
                        <img src="<?php the_field('contacts__phone-img', $current_id); ?>" alt="phone" />
                    </div>
                    <h3 class="contacts__phone-title">
                        <?php the_field('contacts__phone-title', $current_id); ?>
                    </h3>
                    <div>
                        <p class="contacts__phone-text">
                            <?php the_field('contacts__phone-text', $current_id); ?>
                        </p>
                        <p class="contacts__phone-number">
                            <a href="tel:<?php the_field('contacts__phone-number', $current_id) ?>">
                                <?php the_field('contacts__phone-number-text', $current_id) ?>
                            </a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
<!-- </main> -->




<?php get_footer(); ?>