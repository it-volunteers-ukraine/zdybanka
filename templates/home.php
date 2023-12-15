<?php
/*
Template Name: home
*/
get_header();
?>
<main>
    <section class="section logo">
        <div class="logo__img">
            <img src="<?php the_field('logo__img'); ?>" alt="logo">
        </div>
        <div class="container">
            <p class="logo__title">
                <?php the_field('logo__title'); ?>
            </p>
        </div>
    </section>
    <section class="section info">
        <div class="container info__container">

            <img class="info__img" src="<?php the_field('info__img'); ?>" alt="info">

            <p class="info__text">
                <?php the_field('info__text'); ?>
            </p>
        </div>
    </section>
    <section class="section description" id="about">
        <div class="container description__wrapper">
            <div class="description__box">
                <p class="description__title">
                    <?php the_field('description__title--first'); ?>
                </p>
                <p class="description__text">
                    <?php the_field('description__text--first'); ?>
                </p>
            </div>
            <div class="description__box">
                <p class="description__title">
                    <?php the_field('description__title--second'); ?>
                </p>
                <p class="description__text">
                    <?php the_field('description__text--second'); ?>
                </p>
            </div>
        </div>
    </section>
    <section class="section benefits" id="work-directions">
        <div class="container-benefits">

            <?php
            if (have_rows('benefits__item')): ?>
                <ul class="benefits__list">
                    <?php while (have_rows('benefits__item')):
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

    <section class="section gallery" id="gallery">
        <div class="gallery__line line"></div>
        <div class="container">
            <h2 class="gallery__title title">
                <?php the_field('gallery__title'); ?>
            </h2>
            <?php
            $event_photos = get_field('gallery__photo');

            ?>
            <?php get_template_part('parts/gallery', '', $event_photos); ?>
        </div>
    </section>
    <section class="section partners" id="partners">
        <div class="partners__line line"></div>
        <div class="container">
            <h2 class="partners__title title">
                <?php the_field('partners__title'); ?>
            </h2>
            <?php
            if (have_rows('partners__item')): ?>
                <ul class="partners__list">
                    <?php while (have_rows('partners__item')):
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
    <section class="section docs" id="documents">
        <div class="docs__line line"></div>
        <div class="container">
            <h2 class="docs__title">
                <?php the_field('docs__title'); ?>
            </h2>

            <?php
            $open_arrow = get_stylesheet_directory() . '/assets/images/open.svg';
            $rows = get_field('docs__links');
            if ($rows) {
                echo '<ul class="docs__list">';
                foreach ($rows as $row) {
                    $name = $row['doc__link__name'];
                    $link = $row['doc__link'];
                    echo '<li class="docs__item">';
                    echo '<p class="docs__name">' . $name . file_get_contents($open_arrow) . '</p>';
                    echo '<div class="docs__doc">' . $link . '</div>';
                    echo '</li>';
                }
                echo '</ul>';
            } ?>
        </div>
    </section>
    <section class="section contacts" id="contacts">
        <div class="contacts__line line"></div>
        <div class="container">
            <h2 class="contacts__title">
                <?php the_field('contacts__title'); ?>
            </h2>
            <div class="contacts__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10605.465916880457!2d22.3937751!3d48.3534812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4738f9542fcb2553%3A0x3775878ed6531bd!2z0JHQtdGA0LXQs9GW0LLRgdGM0LrQuNC5INCa0KXQnw!5e0!3m2!1suk!2sua!4v1701273286165!5m2!1suk!2sua"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacts__border"></div>
            <ul class="contacts__list">
                <li class="contacts__item">
                    <div class="contacts__address-img">
                        <img src="<?php the_field('contacts__address-img'); ?>" alt="address" />
                    </div>
                    <h3 class="contacts__address-title">
                        <?php the_field('contacts__address-title'); ?>
                    </h3>
                    <?php
                    $link = get_field('contacts__address-text');
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
                        <img src="<?php the_field('contacts__email-img'); ?>" alt="email" />
                    </div>
                    <h3 class="contacts__email-title">
                        <?php the_field('contacts__email-title'); ?>
                    </h3>
                    <p class="contacts__email-text">
                        <a href="mailto:<?php the_field('contacts__email-text') ?>">
                            <?php the_field('contacts__email-text') ?>
                        </a>
                    </p>
                </li>
                <li class="contacts__item">
                    <div class="contacts__phone-img">
                        <img src="<?php the_field('contacts__phone-img'); ?>" alt="phone" />
                    </div>
                    <h3 class="contacts__phone-title">
                        <?php the_field('contacts__phone-title'); ?>
                    </h3>
                    <div>
                        <p class="contacts__phone-text">
                            <?php the_field('contacts__phone-text'); ?>
                        </p>
                        <p class="contacts__phone-number">
                            <a href="tel:<?php the_field('contacts__phone-number') ?>">
                                <?php the_field('contacts__phone-number-text') ?>
                            </a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section events">
        <div class="events__line line"></div>
        <div class="container">

            <h2 class="events__title title">
                <?php the_field('events__title'); ?>
            </h2>

            <?php
            $category_name = 'event';
            $category_id = get_cat_ID($category_name);
            $posts_per_page = (int) get_field('events_count');
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
            // echo $post->ID;
            ?>
            <?php get_template_part('parts/events', null, ['my_post' => $my_posts, 'params' => $params]); ?>
            <div>
                <?php
                $link = get_field('events__name');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="events__name" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
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
</main>




<?php get_footer(); ?>