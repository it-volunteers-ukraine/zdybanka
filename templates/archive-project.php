<?php
/*
* Template Name: archive-project
*/
get_header();
?>
<section class="successful-projects">
    <div class="container">
        <div class="successful-projects-inner">
            <h2 class="successful-projects-inner__title">
                <?php the_field("projects_title",'option'); ?>
            </h2>
            <ul class="successful-projects-inner__list">

                <?php

                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                );


                $query = new WP_Query($args);


                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <li class="successful-projects-inner__list-item">
                            <p class="successful-projects-inner__list-item-descr">
                                <?php
                                the_title();
                                ?>

                            </p>


                            <div class="swiper successful-projects-swiper">
                                <div class="swiper-wrapper successful-projects-swiper-wrapper">
                                    <?php
                                    if (have_rows('successful_project_list')):
                                        while (have_rows('successful_project_list')) : the_row();
                                            $sub_value = get_sub_field('successful_project_image');
                                            ?>
                                            <div class="swiper-slide">
                                                <img
                                                        src="<?= $sub_value['url'] ?>"
                                                        alt="<?= $sub_value['alt'] ?>" class="successful-projects-inner__list-item-photo">
                                            </div>
                                        <?php
                                        endwhile;

                                    else :

                                    endif;

                                    ?>


                                </div>
                                <div class="successful-projects-swiper-buttons">
                                    <div class=" successful-projects-swiper-btn-prev">
                                        <svg class="successful-projects-svg" width="180px" height="59px">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-previous-btn"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination successful-projects-swiper-pagination"></div>
                                    <div class=" successful-projects-swiper-btn-next">
                                        <svg class="successful-projects-svg" width="180px" height="59px">
                                            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-next-btn"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </li>


                    <?php

                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'Нет записей.';
                endif;
                ?>

            </ul>

            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>





