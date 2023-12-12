<?php $event_photos = $args; ?>

<div class="container-gallery">
    <div class="gallery-wrapper">

        <div class="slider0 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="slider1 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="slider2 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>

    <div class="gallery-paginate">
        <div class="gallery-nav">
            <button typpe="button" class='nav-btn swiper-button-prev'>
                <svg class="gallery-arrow icon">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-previous-btn" alt="arrow left"></use>
                </svg>
            </button>
            <button typpe="button" class='nav-btn '>
                <svg class="gallery-navdots ">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-nav-dots" alt="nav dots"></use>
                </svg>
            </button>
            <button typpe="button" class='nav-btn swiper-button-next '>
                <svg class="gallery-arrow icon">
                    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-next-btn" alt="arrow right"></use>
                </svg>
            </button>
        </div>
        <!-- <div class="swiper-button-prev"></div> -->
        <!-- <div class="swiper-button-next"></div> -->
    </div>
</div>