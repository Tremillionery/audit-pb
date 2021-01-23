<?php
/*
Template Name: About_template
Template Post Type: page
*/
?>
<?php get_header(); ?>
<!-- start page title section 1 -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?=get_field('about_header_background')?>');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center page-title-large text-center padding-30px-tb">
                <!-- start page title -->
                <h1 class="main-font text-white-2 font-weight-600 mb-0"><?=get_the_title( )?></h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
<section class="wow fadeIn padding-20px-tb border-bottom border-color-extra-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 breadcrumb main-font text-small">
                <!-- start breadcrumb -->
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div id="breadcrumbs" class="text-dark-gray">','</div>' );
                    }
                ?>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section 1 -->
<!-- start text section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 text-center text-lg-left md-margin-30px-bottom md-padding-80px-lr sm-padding-15px-lr wow fadeIn">
                <h5 class="main-font font-weight-700 text-extra-dark-gray text-uppercase width-80 lg-width-100"><?=get_field('about_about_header')?></h5>
                <div class="separator-line-verticle-extra-small bg-extra-dark-gray width-50 md-width-70 mx-auto ml-lg-0 margin-30px-bottom md-margin-20px-bottom"></div>
                <p class="width-95 lg-width-100"><?=get_field('about_about_text')?></p>
                <!-- start pop-up with form section -->
                <a href="#popup-form1" class="btn btn-small btn-dark-gray font-weight-700 popup-with-form">Отправить резюме</a>
                    <!-- start form -->
                    <div id="popup-form1" class="white-popup-block mfp-hide col-md-6 mx-auto">
                        <div class="padding-ten-all bg-white border-radius-6 md-padding-seven-all">
                            <div class="text-extra-dark-gray main-font text-large font-weight-500 margin-30px-bottom">Отправьте нам резюме. Если мы нуждаемся в ваших навыках - мы свяжемся с вами</div> 
                            <div>
                                <?php echo do_shortcode( '[contact-form-7 id="279" title="Отправить резюме"]'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- end form -->
                <!-- end pop-up with form section --> 
            </div>
            <div class="col-12 col-lg-4 col-md-6 sm-margin-15px-bottom sm-display-none md-display-none wow fadeIn" data-wow-delay="0.2s">
                <img src="<?php $about_about_gallery = get_field('about_about_gallery'); echo $about_about_gallery[0];?>" alt=""/>
            </div>
            <div class="col-12 col-lg-4 col-md-6 sm-display-none md-display-none wow fadeIn" data-wow-delay="0.4s">
                <img src="<?php echo $about_about_gallery[1];?>" alt=""/>
            </div>
        </div>
    </div>
</section>
<!-- end text section -->
<!-- start why we section -->
<section class="p-0 wow fadeIn bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 background-center md-height-500px sm-height-350px wow fadeInLeft" style="background-image:url('/wp-content/uploads/2020/10/logo-1.png');"><div class="h-sm-400px"></div></div>
            <div class="col-12 col-lg-6 padding-six-half-lr lg-padding-eight-lr md-padding-30px-lr padding-five-tb md-padding-nine-half-tb sm-padding-15px-lr sm-padding-50px-tb wow fadeInRight">
                <h5 class="main-font text-extra-dark-gray margin-seven-half-bottom lg-margin-ten-half-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center text-lg-left md-width-70 mx-auto mx-lg-0 sm-width-100 text-uppercase font-weight-700">Почему стоит работать с нами?</h5>
                <div class="row text-center text-md-left">
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom lg-no-padding-right lg-margin-30px-bottom sm-margin-30px-bottom sm-padding-15px-right last-paragraph-no-margin">
                        <div class="text-extra-dark-gray margin-10px-bottom main-font"><span class="text-deep-pink margin-10px-right d-block d-md-inline-block sm-no-margin">01.</span>Соблюдение сроков</div>
                        <p class="width-90 sm-width-100">Нам важно, чтобы работы были выполнены в срок. Для этого мы соблюдаем строгую дисциплину при исполнении подряда и придерживаемся календарного плана.</p>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom lg-no-padding-right lg-margin-30px-bottom sm-margin-30px-bottom sm-padding-15px-right last-paragraph-no-margin">
                        <div class="text-extra-dark-gray margin-10px-bottom main-font"><span class="text-deep-pink margin-10px-right d-block d-md-inline-block sm-no-margin">02.</span>Мы ценим свою репутацию</div>
                        <p class="width-90 sm-width-100">"Аудит ПБ" обладает безупречной репутацией среди своих заказчиков. Благодаря этому, мы сотрудничаем с партнерами не один год.</p>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-no-padding-right lg-margin-30px-bottom md-no-margin-bottom sm-margin-30px-bottom sm-padding-15px-right last-paragraph-no-margin">
                        <div class="text-extra-dark-gray margin-10px-bottom main-font"><span class="text-deep-pink margin-10px-right d-block d-md-inline-block sm-no-margin">03.</span>Дипломированные специалисты</div>
                        <p class="width-90 sm-width-100">Наши сотрудники являются квалифицированными специалистами в своей области деятельности.</p>
                    </div>
                    <!-- end feature box item-->
                    <!-- start feature box item-->
                    <div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-no-padding-right lg-no-margin-bottom sm-padding-15px-right last-paragraph-no-margin">
                        <div class="text-extra-dark-gray margin-10px-bottom main-font"><span class="text-deep-pink margin-10px-right d-block d-md-inline-block sm-no-margin">04.</span>Гарантия качества</div>
                        <p class="width-90 sm-width-100">Мы гарантируем качество исполнения подрядных обязательств.</p>
                    </div>
                    <!-- end feature box item-->
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end why we section -->
<!-- start license section -->
<?php 
$about_license = get_field('about_license');
$size_full = 'full';
$size_thumbnail = 'thumbnail';
if( $about_license ): ?>
    <div class="container">
        <div class="col-12 col-lg-10 mx-auto">
            <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-bottom margin-50px-top text-center">Наши сертификаты</h2>
            <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 hover-option4 margin-5px-bottom">
                    <div class="swiper-multy-row-container overflow-hidden">
                        <div class="swiper-wrapper <?php if(count($about_license) <= 3): ?>md-justify-content-center<?php endif;?>">
                            <?php foreach( $about_license as $about_license_image ): ?>
                            <!-- start portfolio slider item -->
                            <div class="swiper-slide grid-item">
                                <a href="<?php echo esc_url($about_license_image['url']); ?>" data-fancybox="images" data-caption="<?php echo esc_html($about_license_image['caption']); ?>">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray">
                                            <img src="<?php echo esc_url($about_license_image['url']); ?>" alt="<?php echo esc_attr($about_license_image['alt']); ?>"/>
                                        </div>
                                        <figcaption class="">
                                            <div class="portfolio-hover-main d-flex justify-content-center align-items-center">
                                                <div class="portfolio-hover-content position-relative">
                                                    <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <!-- end portfolio slider item -->
                            <?php endforeach; ?>
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
                        <div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- end license section -->
<!-- start clients slider section  -->
<?php if( have_rows('about_partners') ): ?>
<section class="wow fadeIn">
    <div class="container text-center">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-12 col-lg-10 mx-auto">
                <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-tb text-center">Наши партнеры</h2>
                <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
            </div>
        </div>
        <div class="row">    
            <div class="swiper-slider-clients swiper-container black-move wow fadeIn">
                <div class="swiper-wrapper">
                    <!-- start slide -->
                    <?php while( have_rows('about_partners') ): the_row(); 
                        // переменные
                        $partners_logo = get_sub_field('about_partners_logo');
                        $partners_name = get_sub_field('about_partners_name');
                        $partners_url = get_sub_field('about_partners_url');
                    ?>
                    <div class="swiper-slide text-center"><a href="<?php echo $partners_url; ?>"><img src="<?php echo $partners_logo; ?>" class="swiper-partners" alt="<?php echo $partners_name; ?>"></a></div>
                    <?php endwhile; ?>
                    <!-- end slide -->
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-12 text-center wow fadeIn">
                <a href="/partners/" class="btn btn-small btn-rounded btn-transparent-dark-gray margin-50px-top mx-auto">Больше наших партнеров</a>
            </div>
        </div>   
    </div>
</section>
<?php endif; ?>
<!-- end clients slider section -->
<?php get_footer(); ?>