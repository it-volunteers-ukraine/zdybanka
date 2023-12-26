<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <?php wp_head(); ?>
    <title>It-volunteers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Zdybanka</title>
</head>
<body>  
    <div class="wrapper" id="wrapper">   
        <div id="scrollTop" class="scroll-top" >
            <a href="#wrapper">↑</a>
        </div>       

        <header class="header" id="header">
            <div class="container-header">  
                <div class="header__menu">
                   <div class="icon-menu"><span></span><span></span><span></span></div>
                    <div class="header__container"> 
                        <div class="header__container-logo">
                            <?php 
                                if ( has_custom_logo() ) {
                                    echo get_custom_logo();
                                }
                            ?> 
                        </div>                        
                        <nav class="menu__body header__body"> 
                            <div class="header__body-logo">
                                <?php 
                                    if ( has_custom_logo() ) {
                                        echo get_custom_logo();
                                    }
                                ?> 
                            </div>                            
                            <div class="header__list">
                                <?php wp_nav_menu( [
                                    'theme_location'       => 'header',                          
                                    'container'            => false,                           
                                    'menu_class'           => 'menu__list',
                                    'menu_id'              => false,    
                                    'echo'                 => true,                            
                                    'items_wrap'           => '<ul id="%1$s" class="header__link %2$s">%3$s</ul>',  
                                    ] ); 
                                ?>                               
                            </div> 
                            <div class="header__social">
                                <a href="<?php the_field('facebok_link', 'option'); ?>" target="_blank">
                                    <svg class="header__social-link">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-facebook" alt="facebook"></use>
                                    </svg>
                                </a>   
                                <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank">
                                    <svg class="header__social-link">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-telegram" alt="telegram"></use>
                                    </svg>
                                </a> 
                                <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank">
                                    <svg class="header__social-link">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram" alt="instagram"></use>
                                    </svg>
                                </a>  
                                <a href="<?php the_field('calendar_link', 'option'); ?>" target="_blank">
                                    <svg class="header__social-link">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-calendar" alt="calendar"></use>
                                    </svg>
                                </a>   
                            </div>
                            <span></span>                                                                           
                        </nav>                         
                    </div>
                </div>
            </div>  
        </header> 
        
        
	