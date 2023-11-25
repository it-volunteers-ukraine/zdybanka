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
    <section class="section events">
        <div class="events__line line"></div>
        <div class="container">

            <h2 class="events__title title">
                <?php the_field('events__title'); ?>
            </h2>
            <?php
            if (have_rows('events__item')): ?>
                <ul class="events__list">
                    <?php while (have_rows('events__item')):
                        the_row(); ?>
                        <li class="events__item">
                            <div class="events__img">
                                <img src="<?php the_sub_field('events__img'); ?>" alt="events" />
                            </div>
                            <p class="events__text">
                                <?php the_sub_field('events__text'); ?>
                            </p>
                            <p class="events__date">
                                <?php the_sub_field('events__date'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
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
            <?php endif; ?>
        </div>
    </section>
    <section class="section gallery" id="gallery">
        <div class="gallery__line line"></div>
        <div class="container">
            <h2 class="gallery__title title">
                <?php the_field('gallery__title'); ?>
            </h2>
            <div class="gallery-slider swiper">
                <?php 
                $rows = get_field('gallery__item', 'option');
                if( $rows ) { 
                  echo '<div class="gallery__list swiper-wrapper">';
                    foreach( $rows as $row ) { 
                        $galleryImg = $row['gallery__img'];
          
                        echo '<div class="swiper-slide">';  
                        
          echo '<div class="gallery__img">';
          echo wp_get_attachment_image( $galleryImg, 'full' );
          echo '</div>';
          echo '<div>';          
                    } 
                } 
                ?>
                </div>
            <?php
            if (have_rows('events__item')): ?>
                <ul class="gallery__list ">
                    <?php while (have_rows('gallery__item')):
                        the_row(); ?>
                        <li class="gallery__item">
                            <div class="gallery__img">
                                <img src="<?php the_sub_field('gallery__img'); ?>" alt="gallery" />
                            </div>

                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
    </section>
    <section class="section partners" id="partners">
        <div class="container">
            <div class="partners__line line"></div>
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
                            <p class="partners__name">
                                <?php the_field('partners__name'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section class="section docs" id="documents">
        <div class="container">
            <div class="docs__line line"></div>
            <h2 class="docs__title"></h2>
            <ul class="docs__list">
                <li class="docs__item">
                    <div class="docs__name"></div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section contacts" id="contacts">
        <div class="container">
            <div class="contacts__line line"></div>
            <h2 class="contacts__title"></h2>
            <div class="contacts__map"></div>
            <ul class="contacts__list">
                <li class="contacts__item">
                    <div class="contacts__img"></div>
                    <h3 class="contacts__name"></h3>
                    <p class="contacts__text"></p>
                </li>
            </ul>
        </div>
    </section>
</main>




<?php get_footer(); ?>