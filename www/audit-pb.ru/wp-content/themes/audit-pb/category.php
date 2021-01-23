<?php
/*
Template Name: Category_template
*/
?>
<?php get_header(); ?>
<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space margin-70px-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class="main-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase"><?=single_cat_title()?></h1>
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
<!-- start feature box section -->
<section class="wow fadeIn hover-option4 blog-post-style3">
    <div class="container">

        <div class="row">
            <!-- start feature box item -->
            <?php 
            $args = array( 
                'post_type' => 'post'
            );
            $the_query = new WP_Query( $args );
            $category = get_queried_object();
            $current_cat_id = $category->term_id;
            $current_cat_name = $category->name;
            ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php if ( in_category( $current_cat_name )):?>
            <div class="col-12 col-lg-4 col-md-6 grid-item margin-30px-bottom text-center text-md-left wow fadeInUp">
                <div class="blog-post bg-light-gray inner-match-height">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="<?php the_permalink();?>">
                            <img src="<?php the_field('services_header_background', $post->ID); ?>" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all md-padding-20px-all">
                        <a href="<?php the_permalink();?>" class="main-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom"><?php the_title(); ?></a>
                        <p><?php the_excerpt();?></p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <a href="<?php the_permalink();?>" class="text-uppercase main-font text-extra-dark-gray font-weight-600 text-extra-small">Подробнее <i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_query(); ?>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <?php                                                                                          
            $current_cat = get_query_var('cat');
            global $ancestor;
            $childcats = get_categories('child_of='.$current_cat.'&hide_empty=0&orderby=id');
            foreach ($childcats as $childcat):
            if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false):
            $mycat=get_the_category(); 
            $mycat=$mycat[0]; 
            ?>
            <div class="col-12 col-lg-4 col-md-6 grid-item margin-30px-bottom text-center text-md-left wow fadeInUp">
                <div class="blog-post bg-light-gray inner-match-height">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a href="<?php echo get_category_link($childcat->cat_ID); ?>">
                            <img src="<?php the_field('category_image', $childcat->taxonomy.'_'.$childcat->cat_ID); ?>" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                    </div>
                    <div class="post-details padding-40px-all md-padding-20px-all">
                        <a href="<?php echo get_category_link($childcat->cat_ID); ?>" class="main-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom"><?php echo get_cat_name($childcat->cat_ID); ?></a>
                        <p><?php echo category_description($childcat->cat_ID); ?></p>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <a href="<?php echo get_category_link($childcat->cat_ID); ?>" class="text-uppercase main-font text-extra-dark-gray font-weight-600 text-extra-small">Подробнее <i class="fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <?php $ancestor = $childcat->cat_ID;
            endif;
            endforeach;?>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<!-- end  feature box section -->     
<!-- start information section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 md-margin-30px-bottom wow fadeInLeft">
                <img src="<?php $category = get_queried_object(); $catId = $category->term_id; the_field('category_image', $category->taxonomy.'_'.$catId); ?>" class="w-100" alt=""/>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 wow fadeInRight">
                <h5 class="main-font text-extra-dark-gray font-weight-600"><?php echo get_cat_name($catId); ?></h5>
                <p><?php the_field('category_lead_paragraph', $category->taxonomy.'_'.$catId); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- end information box section  -->
<?php get_footer(); ?>