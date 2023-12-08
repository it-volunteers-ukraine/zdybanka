<?php
/*
Template Name: event
*/
get_header();
?>
<section class="section">
    <div class="container">
        <div class="event">
            <h1 class="event-title">Діалогова сесія «Людський вимір: ефективне управління за допомогою даних та залучення громад»</h1>
            <p class="event-date">3 серпня 2023</p>
            <div class="event-content clamp ">
                <p class="event-text">Протягом серпня на базі Молодіжний центр "Здибанка" відбулася друга діалогова сесія у рамках проєкту «Людський вимір: ефективне управління за допомогою даних та залучення громад», який втілюється «Міжнародною організацією з міграції» IOM Ukraine в партнерстві з «Західноукраїнським ресурсним центром» та фінансується Посольством Канади.</p>
                <p class="event-text">У другій діалоговій сесії взяло участь 30 представників/ць громади, в т.ч. місцева влада, фахівці сфери освіти та культури, молодь, ВПО, активна громадськість та представники громадських організацій.</p>
                <p class="event-text">Діалогова сесія була насичена жвавими дискусіями, однак вдалося знайти спільне рішення та підтвердити зацікавленість громади у реалізації проєкту щодо встановлення інформаційно-вказівних та дорожніх знаків.</p>
                <p class="event-text">За підсумками діалогових сесій та консультацій тренерів, робочою групою розроблено та подано до розгляду проєктна заявка для отримання грантових коштів.</p>
                <p class="event-text">Протягом вересня на нас чекає навчання з проєктного менеджементу та захист проєкту, тож слідкуйте за нашими новинами.</p>
                <p class="event-text">Кожна людина є важливою у процесі розвитку громади! Наше майбутнє у наших руках!</p>
                <p class="event-text">Дякуємо Збройним силам України за можливість жити й працювати під мирним небом!</p>
            </div>
            <div class="event-btn-wrapper">
                <button id='btn-more' type='button' class="event-btn-inverse">Показати більше
                    <svg class="icon" alt="more" width="20" height="20">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-button-open-more" alt="next"></use>
                    </svg>
                </button>
                <button type='button' class="event-btn-main">Додати в календар
                    <svg class="icon" alt="plus" width="20" height="20">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-button-next" alt="next"></use>
                    </svg>
                </button>
            </div>

            
        </div>
    </div>
    <?php get_template_part('parts/gallery', '', $post->ID); ?>

    
</section>



<?php get_footer(); ?>