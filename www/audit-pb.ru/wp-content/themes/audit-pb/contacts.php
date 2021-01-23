<?php
/*
Template Name: Contacts_template
Template Post Type: page
*/
?>
<?php get_header(); ?>
<!-- start page title section 1 -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?=get_field('contacts_header_background')?>');">
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
<!-- start map section -->
<section class="py-0 bg-light-gray wow fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 margin-eight-tb padding-eight-right wow fadeInUp last-paragraph-no-margin">
                <div class="bg-white  padding-ten-all box-shadow-light">
                    <span class="text-large text-extra-dark-gray main-font font-weight-600 margin-20px-bottom d-block">Главный офис</span>
                    <p><i class="fas fa-map-marker text-extra-dark-gray text-small margin-5px-right"></i> 443105, г. Самара, ул. Майская, д. 3/185, помещение н14</p>
                    <p class="no-margin-bottom"><i class="fas fa-phone text-extra-dark-gray text-small margin-5px-right"></i> Бухгалтерия: <a href="tel: +78462475440" class="">+7 (846) 247-54-40</a></p>
                    <p class="no-margin-bottom"><i class="fas fa-phone text-white text-small margin-5px-right"></i> Бюро производственного контроля: <a href="tel: +78462475441" class="">+7 (846) 247-54-41</a></p>
                    <p class="no-margin-bottom"><i class="fas fa-phone text-white text-small margin-5px-right"></i> Бюро проектирования: <a href="tel: +78462475442" class="">+7 (846) 247-54-42</a></p>
                    <p><i class="fas fa-phone text-white text-small margin-5px-right"></i> Бюро экспертизы: <a href="tel: +78462475443" class="">+7 (846) 247-54-43</a></p>
                    <p><i class="fas fa-envelope text-extra-dark-gray text-small margin-5px-right"></i> E-Mail: <a href="mailto: audit-pb@inbox.ru">audit-pb@inbox.ru</a></p>
                    <p><i class="fas fa-calendar text-extra-dark-gray text-small margin-5px-right"></i> Часы работы: пн-пт, с 8-00 до 17-00</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 yamap p-0 sm-height-400px">
                <div id="yamap" style="width: 100%; height: 100%;"></div>
            </div>
        </div>
    </div>
</section>
<!-- end map section -->
<!-- start contact form -->
<section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 cover-background md-height-450px sm-height-350px wow fadeIn sm-display-none md-display-none" style="background: url(<?=get_field('contacts_form_image')?>)"></div>
            <div class="col-12 col-lg-6 text-center padding-six-lr padding-five-half-tb md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow fadeIn">
                <h5 class="margin-55px-bottom text-white-2 main-font font-weight-700 text-uppercase sm-margin-ten-bottom">Задайте нам вопрос</h5>
                <div class="row">
                    <div class="col-12">
                        <?php echo do_shortcode( '[contact-form-7 id="202" title="Форма на странице Контакты"]' ); ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact form -->
<?php get_footer(); ?>