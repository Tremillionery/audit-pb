<!-- start footer --> 
<footer class="footer-classic padding-five-bottom sm-padding-30px-bottom">
    <div class="footer-widget-area light padding-five-top padding-30px-bottom sm-padding-30px-top">
        <div class="container">
            <div class="row">
                <!-- start about -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left last-paragraph-no-margin">
                    <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" class="logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>    
                    <img src="<?php echo $custom_logo__url[0]; ?>" data-rjs="<?php echo $custom_logo__url[0]; ?>" class="footer-logo default" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <p class="text-small width-95 sm-width-100">© <?php echo current_time('Y'); ?>, ООО "Аудит ПБ". Все права защищены.</p>
                    <a href="/privacy/" class="text-small">Пользовательское соглашение</a>
                </div>
                <!-- end about -->
                <!-- start blog post -->
                <div class="col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left">
                <div class="widget-title alt-font text-small text-extra-dark-gray text-uppercase margin-10px-bottom font-weight-600">Компания</div>
                    <?php 
                        wp_nav_menu( [
                            'theme_location' => 'bottom',
                            'container'      => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                            'menu_class'     => 'list-unstyled',
                            'menu_id'        => '',
                            'echo'           => 'false'
                        ] );
                        add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
                        function add_my_class_to_nav_menu( $classes, $item ){
                            $classes[] = 'text-small text-extra-dark-gray';
                            return $classes;
                        }
                    ?>
                </div>
                <!-- end blog post -->
                <!-- start contact information -->
                <div class="col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left sm-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-small text-extra-dark-gray text-uppercase margin-10px-bottom font-weight-600">Контакты</div>
                    <p class="text-small d-inline-block d-md-block margin-15px-bottom width-80 md-width-70">ООО "Аудит ПБ"<br> 443105, г. Самара, ул. Майская, д. 3/185, помещение н14</p>
                    <div class="text-small">E-Mail: <a href="mailto: audit-pb@inbox.ru">audit-pb@inbox.ru</a></div>
                    <div class="text-small">Телефон: <a href="tel: +78462475440">+7 (846) 247-54-40</a></div>
                </div>
                <!-- end contact information -->
                <!-- start developer's information -->
                <div class="col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left sm-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                    <p class="text-small d-inline-block d-md-block margin-15px-bottom width-80 md-width-70">Связаться с разработчиком:</p>
                    <div class="text-small">E-Mail: <a href="mailto: zyuzin.ao@ya.ru">zyuzin.ao@ya.ru</a></div>
                    <div class="text-small"><a href="https://t.me/Tremillionery">Telegram</a></div>
                    <div class="text-extra-small margin-15px-top">This site is protected by reCAPTCHA and the Google
                    <a href="https://policies.google.com/privacy">Privacy Policy</a>
                    and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</div>
                </div>
                <!-- end developer's information -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<?php wp_footer(  ); ?>

</body>
</html>