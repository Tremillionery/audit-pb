<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- title -->
        <title>AUDIT PB</title>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div class="back-loader">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-top navbar-default bootsnav background-white header-light navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" class="logo">
                        <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>    
                        <img src="<?php echo $custom_logo__url[0]; ?>" data-rjs="<?php echo $custom_logo__url[0]; ?>" class="logo default" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            
                            <?php 
                                wp_nav_menu( [
                                    'theme_location' => 'top',
                                    'container'      => false,
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s" data-in="fadeIn" data-out="fadeOut">%3$s</ul>',
                                    'menu_class'     => 'nav navbar-nav navbar-left no-margin alt-font text-normal',
                                    'menu_id'        => 'accordion',
                                    'echo'           => 'false',
                                    'walker'         => new EST_Walker_Nav()
                                ] )
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="header-searchbar">
                            <a href="tel: +78462475440" class="header-phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+7 (846) 247-54-40</span></a> 
                        </div>
                        <div class="header-social-icon d-none d-md-inline-block">
                            
                            <!-- start pop-up with form section -->
                            <a href="#popup-form" class="btn btn-very-small btn-rounded btn-transparent-dark-gray popup-with-form">Напишите нам</a>
                                <!-- start form -->
                                <div id="popup-form" class="white-popup-block mfp-hide col-md-6 mx-auto">
                                    <div class="padding-ten-all bg-white border-radius-6 md-padding-seven-all">
                                        <div class="text-extra-dark-gray alt-font text-large font-weight-500 margin-30px-bottom">Задайте нам вопрос</div> 
                                        <div>
                                        <?php echo do_shortcode( '[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- end form -->
                            <!-- end pop-up with form section -->                         
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->

