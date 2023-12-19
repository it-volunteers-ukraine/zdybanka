<?php $event_photos = $args;
// $one_photo = count($event_photos) == 1 ? : 'one-photo' ;
if (count($event_photos) <= 1) {
    $attr_photo = 'one-photo';
} elseif (count($event_photos) >= 5) {
    $attr_photo = 'full-photo';
} elseif (count($event_photos) == 2) {
    $attr_photo = 'two-photo';
} else {
    $attr_photo = 'three-photo';
}

// print_r(count($event_photos));
// print_r($one_photo);
// print_r($one_photo ? 'one-photo' : '');

$five_and_more_photo = count($event_photos) >= 5 ? True : False;
?>

<div class="container-gallery">
    <div id='gallery-wrapper' class="gallery-wrapper <?php echo $attr_photo  ?>">

        <div class="slider0 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <a href="<?php echo $img_list['url'] ?>" class="image-slider-link" data-lightbox="roadtrip0">
                            <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="slider1 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <a href="<?php echo $img_list['url'] ?>" class="image-slider-link" data-lightbox="roadtrip1">
                            <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="slider2 swiper">
            <div class="image-slider__wrapper swiper-wrapper">
                <?php foreach ($event_photos as $img_list) : ?>
                    <div class="image-slider__slide swiper-slide">
                        <a href="<?php echo $img_list['url'] ?>" class="image-slider-link" data-lightbox="roadtrip2">
                            <img src="<?php echo $img_list['url'] ?>" class='gallery-img' alt="<?php echo $img_list['url']; ?>">
                        </a>
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
<script src="<?php bloginfo('template_url'); ?>/assets/scripts/vendors/lightbox-plus-jquery.js">
</script>
<script>
    lightbox.option({
        'AlwaysShowNavOnTouchDevices': true,
        'wrapAround': true,
        // 'showImageNumberLabel': false,
        'wrapAround': true,
        'disableScrolling': true,
        'albumLabel': '%1 of %2'
    })
</script>