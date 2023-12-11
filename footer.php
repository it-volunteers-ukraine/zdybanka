<footer class="footer" id="footer">
    <div class="container-footer">
        <div class="footer__container">
            <div class="footer__logo-social">
                <div class="footer__logo">
                    <a href="#">
                        <?php if ( has_custom_logo() ) { echo get_custom_logo(); } ?>                
                    </a>  
                    <p class="footer__about-text"><?php the_field('footer__about-text', 'option'); ?></p>       
                </div>  
                <div class="footer__social">
                    <a href="<?php the_field('facebok_link', 'option'); ?>" target="_blank">
                        <svg class="footer__social-link">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-facebook" alt="facebook"></use>
                        </svg>
                    </a>   
                    <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank">
                        <svg class="footer__social-link">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-telegram" alt="telegram"></use>
                        </svg>
                    </a> 
                    <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank">
                        <svg class="footer__social-link">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram" alt="instagram"></use>
                        </svg>
                    </a>  
                    <a href="<?php the_field('calendar_link', 'option'); ?>" target="_blank">
                        <svg class="footer__social-link">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-calendar" alt="calendar"></use>
                        </svg>
                    </a>   
                </div>   
            </div>
            <div class="footer__nav"> 
                <h3 class="footer__title"><?php the_field('footer-nav-title', 'option'); ?></h3> 
                <?php wp_nav_menu( [
                    'theme_location'       => 'footer',                          
                    'container'            => false,                           
                    'menu_class'           => 'footer__list',
                    'menu_id'              => false,    
                    'echo'                 => true,                         
                    'items_wrap'           => '<ul id="%1$s" class="footer_list %2$s">%3$s</ul>',  
                ] ) 
                ?>    
            </div>
            <div class="footer__events">
                <div class="footer__events-container">
                    <h3 class="footer__title"><?php the_field('footer-events-title', 'option'); ?></h3> 

                    <div class="footer__event">
                        <ul class="footer__event-list">
                            <?php $params = array(
                                'category_name' => 'event',
                                'posts_per_page' => 2
                            );

                            $my_posts = get_posts($params);
                            foreach ($my_posts as $post) :
                                $event_img = get_field('event_photos', $post)[0]['sizes']['thumbnail'];
                                $event_img_alt = get_field('event_photos', $post)[0]['alt'];
                                $event_title = get_field('event_title', $post);
                                $event_date = get_field('event_date', $post);
                                $event_link = $post->guid;
                            ?> 
                            
                            <li class="footer__event-item">
                                <a href="<?php echo $event_link ?>">                                
                                <div class="footer__event-wrapper">
                                    <div class="footer__event-img"><img src="<?php echo $event_img ?>" alt="<?php echo $event_img_alt ?>"></div>
                                    <div class="footer__event-content">
                                        <a href="<?php echo $event_link ?>" class="footer__event-title"><?php echo $event_title ?></a>
                                        <p class="footer__event-date"><?php echo $event_date ?></p>                                    
                                        <!-- <a href="<?php the_permalink(); ?>" class="footer__event-title"><?php the_field('event_title', $post); ?>  -->
                                    </div>    
                                </div>
                                </a>
                            </li>
                            <?php endforeach ?>
                        </ul> 
                    </div>  

                </div>    
                <div class="footer__contacts">
                    <h3 class="footer__title"><?php the_field('footer-contacts-title', 'option'); ?></h3> 

                    <div class="footer__contacts-content">
                        <svg class="footer__contacts-icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-house" alt="house"></use>
                        </svg>
                        <p class="footer__contacts-text"> <?php the_field('footer-contacts-address', 'option'); ?> </p> 
                    </div>

                    <div class="footer__contacts-content">
                        <svg class="footer__contacts-icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-email" alt="email"></use>
                        </svg>                        
                        <p class="footer__contacts-text"><a href="mailto:<?php the_field('email-link', 'option') ?>" class="footer__contacts-text"><?php the_field('email', 'option') ?></a></p>
                    </div>

                    <div class="footer__contacts-content">
                        <svg class="footer__contacts-icon">
                            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-phone" alt="email"></use>
                        </svg>
                        <p class="footer__contacts-text"><a href="tel:<?php the_field('phone_number', 'option') ?>" class="footer__contacts-text"><?php the_field('phone', 'option') ?></a></p>
                    </div>
                                
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <p class="footer__text">&#169; <?php the_field('footer_year-name', 'option'); ?> </p>        
        </div> 
    </div>    
</footer>
<?php wp_footer(); ?>  
</div>
</body>
</html>
