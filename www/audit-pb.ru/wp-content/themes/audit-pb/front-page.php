<?php
/*
Template Name: Home_template
Template Post Type: page
*/
?>
<?php get_header(); ?>
<?php if( have_rows('slider-content') ): ?>
    <?php while( have_rows('slider-content') ): the_row(); 
        // переменные
        $slider_image = get_sub_field('slider_image');
        $slider_title_text = get_sub_field('slider_title_text');
        $slider_text = get_sub_field('slider_text');
        $slider_button_url = get_sub_field('slider_button_url');
        $slider_button_title = get_sub_field('slider_button_title');
        $slider_text_color = get_sub_field_object('slider_text_color');
        
    ?>
    <div style="background-image:url('<?php echo $slider_image; ?>'); background-size: cover; background-position: center;" class="position-relative w-100 height-100 sm-height-80 hero-block">
        <div class="position-absolute text-white d-flex flex-column align-items-start justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(255,255,255,.4); backdrop-filter: blur(2px);">
            <div class="container">
                <div class="col-md-6">
                    
                        <!-- on small screens remove display-4 -->
                        <h1 class="title-large main-font <?php echo $slider_text_color['value']; ?> font-weight-700 width-25 margin-20px-tb sm-margin-20px-tb d-block letter-spacing-minus-2 md-width-60"><?php echo $slider_title_text; ?></h1>
                        <?php if($slider_text): ?>
                            <span class="text-large <?php echo $slider_text_color['value']; ?> d-block width-50 sm-width-50 margin-20px-bottom"><?php echo $slider_text; ?></span>
                        <?php endif; ?>
                        <?php if($slider_button_url): ?>
                            <div class="mt-5">
                                <a href="<?php echo $slider_button_url; ?>" class="btn btn-small <?php $slider_text_color['value'] == 'text-white-2'? print('btn-white') : print('btn-dark-gray') ?>"><?php echo $slider_button_title; ?></a>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- start services section -->
<section id="services" class="wow bg-light-gray fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-xl-5 col-lg-5 col-md-12 padding-eight-right text-center text-lg-left lg-padding-five-right md-padding-fifteen-lr md-margin-80px-bottom sm-padding-15px-lr sm-margin-50px-bottom wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <img src="<?=get_field('photo_services');?>" class="margin-40px-bottom md-visibility-hidden" style="width: 70%;" alt=""/>
                <div class="main-font text-medium-gray margin-15px-bottom text-uppercase text-small">Услуги</div>
                <h4 class="font-weight-600 main-font text-extra-dark-gray margin-35px-bottom sm-margin-25px-bottom">Основные направления деятельности</h4>
                <p class="width-80 lg-width-100">"Аудит ПБ" предлагет услуги экспертизы промышленной безопасности для различных видов производственного цикла возведения зданий и сооружений.</p>
                <a href="/category/services/" class="btn btn-small btn-rounded btn-transparent-blue margin-10px-top">Смотреть все</a>
            </div>
            <div class="col-12 col-xl-7 col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-12 col-xl-6 col-md-6 text-center">
                        <div class="row">
                            <!-- start feature box item -->
                            <div class="col-12 margin-30px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <a href="/category/services/bureau_engineering/">
                                    <div class="feature-box-18 bg-white box-shadow-light text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-tools text-blue icon-large margin-25px-bottom"></i>                                
                                        <div class="main-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">Проектное бюро</div>
                                        <p>Разработка проектной документации для организации безопасности эксплуатации подъемных сооружений</p>
                                        <div class="feature-box-overlay bg-blue"></div>
                                    </div>
                                </a>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                <a href="/services/bureau-expertise/">
                                    <div class="feature-box-18 bg-white box-shadow-light text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-magnifying-glass text-blue icon-large margin-25px-bottom"></i>                                
                                        <div class="main-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">Экспертное бюро</div>
                                        <p>Проведение экспертизы промышленной безопасности ОПО, на которых используются подъемные сооружения</p>
                                        <div class="feature-box-overlay bg-blue"></div>
                                    </div>
                                </a>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-md-6 text-center">
                        <div class="row">
                            <!-- start feature box item -->
                            <div class="col-12 margin-40px-top margin-30px-bottom sm-margin-30px-top wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <a href="/services/byuro-proizvodstvennogo-kontrolya/">
                                    <div class="feature-box-18 bg-white box-shadow-light text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-search text-blue icon-large margin-25px-bottom"></i>                                
                                        <div class="main-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">Производственный контроль</div>
                                        <p>Организация и осуществление производственного контроля на ОПО</p>
                                        <div class="feature-box-overlay bg-blue"></div>
                                    </div>
                                </a>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                <a href="/services/tehnicheskoe-obsluzhivanie-i-remont/">
                                    <div class="feature-box-18 bg-white box-shadow-light text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="icon-tools-2 text-blue icon-large margin-25px-bottom"></i>                                
                                        <div class="main-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700">Участок технического обслуживания</div>
                                        <p>Техническое обслуживание и ремонт подъемных сооружений, в том числе их приборов безопасности</p>
                                        <div class="feature-box-overlay bg-blue"></div>
                                    </div>
                                </a>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services section -->
<!-- start section -->
<section class="wow fadeIn">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 text-center md-margin-50px-bottom wow fadeInLeft">
                <img src="/wp-content/themes/audit-pb/assets/images/logo.png" alt="" class="w-80">
            </div> 
            <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                    <span class="text-blue main-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">О компании</span>
                    <h5 class="font-weight-600 main-font text-extra-dark-gray">Аудит ПБ</h5>
                    <div class="sm-text-left company-p-margin company-ul">
                        <?=get_field('front_page_company_text');?>
                    </div>
                    <a href="/about/" class="btn btn-small btn-rounded btn-transparent-blue margin-10px-top"><i class="fas fa-arrow-right icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> О компании</a>
                </div>
            </div>
        </div>
        <div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
        <div class="row">
            <!-- start feature box -->
            <div class="col-12 col-md-4 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin">
                <div class="row m-0">
                    <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                        <i class="icon-trophy text-blue icon-extra-medium top-6"></i>
                    </div>
                    <div class="col-12 col-lg-9 col-md-8 p-0">
                        <span class="margin-5px-bottom text-extra-dark-gray main-font d-block font-weight-600 sm-margin-10px-bottom">Богатый опыт успешной работы</span>
                    </div>
                </div>
            </div>
            <!-- end feature box -->
            <!-- start feature box -->
            <div class="col-12 col-md-4 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="row m-0">
                    <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                        <i class="icon-presentation text-blue icon-extra-medium top-6"></i>
                    </div>
                    <div class="col-12 col-lg-9 col-md-8 p-0">
                        <span class="margin-5px-bottom text-extra-dark-gray main-font d-block font-weight-600 sm-margin-10px-bottom">Максимальный результат с минимальными затратами</span>
                    </div>
                </div>
            </div>
            <!-- end feature box -->
            <!-- start feature box -->
            <div class="col-12 col-md-4 text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="row m-0">
                    <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                        <i class="icon-happy text-blue icon-extra-medium top-6"></i>
                    </div>
                    <div class="col-12 col-lg-9 col-md-8 p-0">
                        <span class="margin-5px-bottom text-extra-dark-gray main-font d-block font-weight-600 sm-margin-10px-bottom">Гарантия качества выполненных работ</span>
                    </div>
                </div>
            </div>
            <!-- end feature box -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start testimonial slider section -->
<?php if( have_rows('testimonals') ): ?>
<section class="bg-light-gray wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center wow fadeIn">
                <p class="main-font margin-5px-bottom text-uppercase text-small text-medium-gray">Наши заказчики говорят за нас</p>
                <h5 class="text-uppercase main-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Отзывы</h5>
                <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>
        <div class="row position-relative margin-60px-top md-margin-50px-top sm-margin-30px-top">
            <div class="swiper-container <?php 
                    $rows = get_field('testimonals_title' );
                    echo $rows;
                    if( $rows > 3 ): 
                ?>
                    swiper-pagination-bottom
                <?php endif; ?> 
            blog-slider swiper-three-slides">
                <div class="swiper-wrapper">
                    <!-- start testimonial item -->
                    <?php while( have_rows('testimonals') ): the_row(); 
                        // переменные
                        $testimonals_image = get_sub_field('testimonals_image');
                        $testimonals_title = get_sub_field('testimonals_title');
                        $testimonals_head_caption = get_sub_field('testimonals_head_caption');
                        $testimonals_description = get_sub_field('testimonals_description');
                    ?>
                        <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                            <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                <a href="<?php echo $testimonals_image; ?>" data-fancybox="images" data-caption="<?php echo $testimonals_title; ?>">
                                    <img src="<?php echo $testimonals_image; ?>" class="width-60 margin-25px-bottom md-margin-15px-bottom" alt=""/>
                                </a>
                                <p class="md-margin-15px-bottom sm-margin-20px-bottom"><?php echo $testimonals_description; ?></p>
                                <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-20 main-font font-weight-600"><?php echo $testimonals_title; ?></span>
                                <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray"><?php echo $testimonals_head_caption; ?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- end testimonial item -->
                </div>                        
                <?php 
                    $rows = get_field('testimonals_title' );
                    echo $rows;
                    if( $rows > 3 ): 
                ?>
                    <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end testimonial slider section -->
<!-- start clients slider section  -->
<?php if( have_rows('partners') ): ?>
<section class="wow fadeIn">
    <div class="container text-center">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-12 text-center wow fadeIn">
                <h5 class="text-uppercase main-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Наши партнеры</h5>
                <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>
        <div class="row">    
            <div class="swiper-slider-clients swiper-container black-move wow fadeIn">
                <div class="swiper-wrapper">
                    <!-- start slide -->
                    <?php while( have_rows('partners') ): the_row(); 
                        // переменные
                        $partners_logo = get_sub_field('partners_logo');
                        $partners_name = get_sub_field('partners_name');
                        $partners_url = get_sub_field('partners_url');
                    ?>
                    <div class="swiper-slide text-center"><a href="<?php echo $partners_url; ?>"><img src="<?php echo $partners_logo; ?>" class="swiper-partners" alt="<?php echo $partners_name; ?>"></a></div>
                    <?php endwhile; ?>
                    <!-- end slide -->
                </div>
            </div>
        </div>    
    </div>
</section>
<?php endif; ?>
<!-- end clients slider section -->
<!-- start contact section -->
<section class="wow fadeIn bg-extra-dark-gray">
    <div class="container">
        <div class="row"> 
            <div class="col-12 col-lg-6 padding-ten-right lg-padding-five-right md-padding-15px-right md-margin-five-bottom wow fadeIn">
                <h5 class="main-font text-white-2 margin-20px-bottom">Контакты</h5>
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                    <div class="icon-box-holder align-middle d-table-cell position-relative">
                        <i class="icon-map icon-medium text-deep-pink padding-5px-top"></i>
                        <div class="main-font text-white-2">Адрес</div>
                        <p>443105, г. Самара, ул. Майская, д. 3/185, помещение н14</p>
                    </div>
                </div>
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                    <div class="icon-box-holder align-middle d-table-cell position-relative">
                        <i class="icon-envelope icon-medium text-deep-pink padding-5px-top"></i>
                        <div class="main-font text-white-2">E-Mail</div>
                        <p><a href="mailto: audit-pb@inbox.ru">audit-pb@inbox.ru</a></p>
                    </div>
                </div>
                <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin padding-20px-top">
                    <div class="icon-box-holder align-middle d-table-cell position-relative">
                        <i class="icon-chat icon-medium text-deep-pink padding-5px-top"></i>
                        <div class="main-font text-white-2 margin-5px-bottom">Телефон</div>
                        <p><a href="tel: +78462475440" class="">+7 (846) 247-54-40</a> - бухгалтерия</p>
                        <p><a href="tel: +78462475441" class="">+7 (846) 247-54-41</a> - бюро производственного контроля</p>
                        <p><a href="tel: +78462475442" class="">+7 (846) 247-54-42</a> - бюро проектирования</p>
                        <p><a href="tel: +78462475443" class="">+7 (846) 247-54-43</a> - бюро экспертизы</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow fadeIn">
                <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                    <div class="text-extra-dark-gray main-font text-center text-large font-weight-600 margin-30px-bottom">Задайте нам вопрос</div> 
                    <div>
                        <?php echo do_shortcode( '[contact-form-7 id="5" title="Контактная форма 1"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start contact section -->
<?php get_footer(); ?>
