<?php
/*
Template Name: Partners_template
Template Post Type: page
*/
?>
<?php get_header(); ?>
<!-- start page title section 1 -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?=get_field('partners_header_background')?>');">
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
<!-- start clients logo section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="main-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Наши партнеры</h5>
                <p>ООО "Аудит ПБ" имеет обширный опыт работы с предприятиями различных сфер деятельности.</p>
            </div>
        </div>
        <div class="row">
            <!-- start client logo item -->
            <?php while( have_rows('partners_partners') ): the_row(); 
                // переменные
                $partners_logo = get_sub_field('partners_partners_logo');
                $partners_name = get_sub_field('partners_partners_name');
                $partners_url = get_sub_field('partners_partners_url');
            ?>
                <div class="col-12 col-lg-4 col-md-6 wow fadeInUp">
                    <div class="bg-white clients-list text-center d-flex align-items-center justify-content-center w-100 margin-30px-bottom">
                        <a href="<?php echo $partners_url; ?>"><img src="<?php echo $partners_logo; ?>" alt="<?php echo $partners_name; ?>" class="max-width-200"/></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- end client logo item -->
        </div>
    </div>
</section>
<!-- end clients logo section -->

<?php get_footer(); ?>