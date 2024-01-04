<?php
/*
Template Name: partners
*/
get_header();
 $current_id = get_the_ID();
?>

<section class="section partners section-nav section-nav" id="partners">
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


<?php get_footer(); ?>