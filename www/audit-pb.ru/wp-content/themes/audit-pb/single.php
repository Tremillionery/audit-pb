<?php
/*
Template Name: Service_template
Template Post Type: post
*/
?>
<?php get_header(); ?>
<!-- start page title section 1 -->
<section class="wow fadeIn cover-background background-position-top top-space margin-top-70px" style="background-image:url('<?=get_field('services_header_background')?>');">
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
            <div class="col-12 col-lg-10 mx-auto breadcrumb main-font text-small">
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
<!-- start first text section 2 -->
<?php if(get_field('services_brief_description')): ?>
<section class="wow fadeIn half-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto text-center text-md-left">
                <?=get_field('services_brief_description');?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end first text section 2 -->
<!-- start license section 3 -->
<?php 
$services_license = get_field('services_license');
$size_full = 'full';
$size_thumbnail = 'thumbnail';
if( $services_license ): ?>
    <div class="container">
        <div class="col-12 col-lg-10 mx-auto">
            <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-bottom text-center"><?=get_field('services_license_title');?></h2>
            <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 hover-option4 margin-5px-bottom">
                    <div class="swiper-multy-row-container overflow-hidden">
                        <div class="swiper-wrapper <?php if(count($services_license) <= 3): ?>md-justify-content-center<?php endif;?>">
                            <?php foreach( $services_license as $services_license_image ): ?>
                            <!-- start portfolio slider item -->
                            <div class="swiper-slide grid-item">
                                <a href="<?php echo esc_url($services_license_image['url']); ?>" data-fancybox="images" data-caption="<?php echo esc_html($services_license_image['caption']); ?>">
                                    <figure>
                                        <div class="portfolio-img bg-extra-dark-gray">
                                            <img src="<?php echo esc_url($services_license_image['url']); ?>" alt="<?php echo esc_attr($services_license_image['alt']); ?>"/>
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
<!-- end license section 3 -->
<!-- start table or lists content section 4 -->
<?php if(get_field('services_tables_lists')):?>
<section class="wow fadeIn half-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <?=get_field('services_tables_lists');?>
            </div>
        </div>
    </div>
</section>
<?endif;?>
<!-- end table or lists content section 4 -->
<!-- start slider examples 5 -->
<?php 
$services_examples_of_works = get_field('services_examples_of_works');
$size_full = 'full';
if( $services_examples_of_works ): ?>
<section class="no-padding main-slider mobile-height">
    <div class="col-12 col-lg-10 mx-auto">
        <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-bottom text-center"><?=get_field('services_slider_name_objects');?></h2>
        <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 hover-option4 margin-5px-bottom">
                <div class="swiper-multy-row-container overflow-hidden">
                    <div class="swiper-wrapper <?php if(count($services_examples_of_works) <= 3): ?>md-justify-content-center<?php endif;?>">
                        <!-- start portfolio slider item -->
                        <?php foreach( $services_examples_of_works as $image ): ?>
                        <div class="swiper-slide grid-item">
                            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="images" data-caption="<?php echo esc_html($image['caption']); ?>">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
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
                        <?php endforeach; ?>
                        <!-- end portfolio slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
                    <div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- end slider examples 5 -->
<!-- start content text section 6 -->
<?php if( get_field('services_accordeon_title') ): ?>
    <section class="wow fadeIn half-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 mx-auto">
                        <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-bottom text-center"><?=get_field('services_accordeon_title');?></h2>
                        <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <?=get_field('services_accordeon_brief');?>
                    </div>
                </div>
                <?php if( have_rows('services_accordeon') ): ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <!-- start toggle -->
                        <div class="panel-group toggles">
                            <!-- start toggle item -->
                            <?php $i = 0; 
                            while( have_rows('services_accordeon') ): 
                                the_row(); 
                                // переменные
                                $toggle_panel = get_sub_field('services_accordeon_toggle_panel');
                                $toggle_body = get_sub_field('services_accordeon_toggle_body');
                                
                            ?>
                            <div class="panel panel-default" <?php if(get_row_index() == 1):?>id="collapse-one"<?php endif;?>>
                                <div role="tablist" id="toggles-<?php echo get_row_index(); ?>" class="panel-heading">
                                    <a data-toggle="collapse" href="#toggles-<?php echo get_row_index(); ?>Link">
                                        <div class="panel-title font-weight-500 text-extra-dark-gray text-uppercase">
                                            <?=$toggle_panel;?>
                                            <span class="float-right"><i class="ti-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div id="toggles-<?php echo get_row_index(); ?>Link" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?=$toggle_body;?> 
                                    </div>
                                </div>
                            </div>
                            <?php 
                            endwhile;?>
                            <!-- end toggle item -->
                            
                        </div>
                        <!-- end toggle  -->
                    </div>
                </div>
                <?php endif;?>
            </div>
        </section>
<?php endif;?>
<!-- end content text section 6 -->
<!-- start slider objects photo 7 -->
<?php 
$services_slider_objects = get_field('services_slider_objects');
$size_full = 'full';
if( $services_slider_objects ): ?>
<section class="no-padding main-slider mobile-height">
    <div class="col-12 col-lg-10 mx-auto">
        <h2 class="text-extra-dark-gray main-font font-weight-600 margin-20px-bottom text-center">Фото с объектов</h2>
        <div class="separator-line-horrizontal-full bg-extra-light-gray margin-40px-bottom height-6px width-20 mx-auto"></div>
    </div>
    <div class="swiper-full-screen swiper-container width-100">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <?php foreach( $services_slider_objects as $image ): ?>
                <div class="swiper-slide cover-background" style="background-image:url('<?php echo esc_url($image['url']); ?>');">
                    <div class="container position-relative one-fourth-screen sm-height-400px">
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end slider item -->
        </div>
        <!-- Add Pagination отключать, если слайды = 1 -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-button-next swiper-button-black-highlight"></div>
        <div class="swiper-button-prev swiper-button-black-highlight"></div>
    </div>
</section>
<?php endif;?>
<!-- end slider objects photo 7 -->
<!-- start form section 8 -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-6 col-sm-12 wow fadeIn box-shadow-right">                   
                <div class="padding-fifteen-lr lg-padding-seven-lr text-center">
                    <div class="text-extra-dark-gray main-font text-large font-weight-600 margin-30px-bottom">Задать вопрос по услуге</div> 
                    <div>
                        <?php echo do_shortcode( '[contact-form-7 id="124" title="Форма на странице услуги"]' ); ?>
                    </div>
                </div>                    
            </div>
            <div class="col-lg-6 col-sm-12">
            <div class="text-extra-dark-gray main-font text-large font-weight-600 text-center margin-30px-bottom md-margin-30px-top">Другие направления деятельности</div> 
                <div class="swiper-services overflow-hidden">
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <?php 
                        $args = array( 
                            'post_type' => 'post',
                            'post__not_in' => array($post->ID)
                        );
                        $the_query = new WP_Query( $args );
                        $cat_post = get_the_category($post->ID);
                        ?>
                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php if ( in_category( $cat_post[0]->name )):?>
                        <div class="swiper-slide cover-background">
                            <div style="visibility: visible; animation-name: fadeIn;">
                                <a href="<?php the_permalink();?>">
                                    <div class="feature-box-18 bg-white box-shadow-light text-center border-radius-8 overflow-hidden z-index-0 position-relative padding-fifteen-lr padding-twenty-two-tb sm-padding-fifteen-tb last-paragraph-no-margin">
                                        <i class="<?php the_field('services_icon', $post->ID); ?> text-blue icon-large margin-25px-bottom"></i>                                
                                        <div class="main-font text-medium text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom font-weight-700"><?php the_title(); ?></div>
                                        <p><?php the_excerpt();?></p>
                                        <div class="feature-box-overlay bg-blue"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_query(); ?>
                        <!-- end slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-portfolio-prev swiper-button-black-highlight swiper-portfolio-shadow"><i class="ti-arrow-left"></i></div>
                    <div class="swiper-portfolio-next swiper-button-black-highlight swiper-portfolio-shadow"><i class="ti-arrow-right"></i></div>
                    <!-- end slider pagination -->
                </div>
            </div>   
        </div>
    </div>     
</section>
<!-- end form section 8 -->
<?php get_footer(); ?>