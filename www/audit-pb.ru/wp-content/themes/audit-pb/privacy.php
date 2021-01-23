<?php
/*
Template Name: Privacy_template
Template Post Type: page
*/
?>
<?php get_header(); ?>
<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space margin-70px-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class="main-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase"><?=the_title()?></h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-6 col-md-6 breadcrumb justify-content-center justify-content-md-end text-small main-font sm-margin-10px-top">
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
<!-- end page title section -->
<!-- start first text section 2 -->
<section class="wow fadeIn half-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto text-center text-md-left">
                <?=the_content();?>
            </div>
        </div>
    </div>
</section>
<!-- end first text section 2 -->
<?php get_footer(); ?>