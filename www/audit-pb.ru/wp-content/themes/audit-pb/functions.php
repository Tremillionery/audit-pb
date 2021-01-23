<?php

    

    

    add_action( 'after_setup_theme', 'audit_pb_after_setup');

    add_theme_support( 'yoast-seo-breadcrumbs' );

    add_theme_support('custom-logo');

    add_action('wp_enqueue_scripts', 'audit_pb_styles');

    function audit_pb_styles () {
        wp_enqueue_style('audit-pb-style', get_stylesheet_uri(), [], '1.11');
        wp_enqueue_style('audit-pb-min-style', get_template_directory_uri() . '/assets/css/style.min.css');
        wp_enqueue_style('audit-pb-min-responsive-style', get_template_directory_uri() . '/assets/css/responsive.min.css');
        wp_enqueue_style('audit-pb-fancy', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
    }

    add_action('wp_enqueue_scripts', 'audit_pb_jquery');

    function audit_pb_jquery () {
        wp_enqueue_script('jquery');
        wp_enqueue_script('audit-pb-js', get_template_directory_uri() . '/assets/js/scripts.min.js', [], '1.0', true);
        wp_enqueue_script('audit-pb-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', [], null, true);
    }

    add_action( 'template_redirect', 'yamap_script' );
 
    function yamap_script() {
        if ( is_page_template('contacts.php') ) {
            wp_enqueue_script('audit-pb-ymaps', 'https://api-maps.yandex.ru/2.1/?apikey=5fce54ff-645a-45ec-9234-5a1b822cb1c9&lang=ru_RU');
        }
    }

    function yamap_mapcode() {
        if ( is_page_template('contacts.php') ) {
            ?>
                <script type="text/javascript">
                    ymaps.ready(init);
                        function init(){
                            var myMap = new ymaps.Map("yamap", {
                                center: [53.235373, 50.255528],
                                zoom: 17,
                                controls: ['zoomControl']
                                }),
                                
                                myPlacemark1 = new ymaps.Placemark([53.235373, 50.255528], {
                                    balloonContentHeader: 'ООО "Аудит ПБ"',
                                    balloonContentBody: "пн-пт с 08:00 до 17:00",
                                    hintContent: 'ООО "Аудит ПБ"'
                                }, {
                                    iconLayout: 'default#image',
                                    iconImageHref: '/wp-content/uploads/2020/11/placeholder1.png',
                                    iconImageSize: [46, 46],
                                    iconImageOffset: [-23, -46],
                                });

                            myMap.geoObjects.add(myPlacemark1);
                            myMap.behaviors.disable('scrollZoom');
                            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                                myMap.behaviors.disable('drag');
                            }
                        }
                </script>
            <?php
        }
    }
    add_action( 'wp_head', 'yamap_mapcode' );
    
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
    function my_scripts_method(){
        wp_enqueue_script( 'jquery' );
    }

    function audit_pb_after_setup() {
        register_nav_menus( [
            'top' => 'For header',
            'bottom' => 'For footer'
        ] );
    }


    class EST_Walker_Nav extends Walker_Nav_Menu {
        public $star_row = '';
        public $end_row = '';
        public function start_lvl( &$output, $depth = 0, $args = array() ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat( $t, $depth );
            
            $classes = array( 'sub-menu');
            //get_pr($depth, false);
            $atts = array();
            if ($depth === 0){
                $classes = [
                    'dropdown-menu',
                    'animated'
                ];
                
                $atts['role']  = $args->walker->has_children == 1 ? 'menu' : '';
            }
            if ($depth >= 1){
                $classes = [
                    'dropdown-menu',
                    'animated'
                ];
            }
            if (isset($this->star_row) && !empty($this->star_row)){
                $classes[] = 'multi-column columns-3';
            }
            $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
                
            $attributes = '';
            
            foreach ( $atts as $attr => $value ) {
                if ( !empty( $value ) ) {
                    $value = esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
    
            }
    
            $output .= "{$n}{$indent}<ul $class_names $attributes>{$n}{$this->star_row}";
        }
    
        public function end_lvl( &$output, $depth = 0, $args = array() ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat( $t, $depth );
            $output .= "$indent{$this->end_row}</ul>{$n}";
        }
    
    
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
    
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            
            $classes[] = $depth === 0 ? array_push($classes, 'dropdown', 'simple-dropdown') : 'dropdown';

            //get_pr($classes,false);
            $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
    
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
            $output .= $indent . '<li' . $class_names .'>';
    
            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
            $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
            //$atts['data-toggle']   = $args->walker->has_children == 1 ? 'dropdown' : '';
            $atts['class']   = $args->walker->has_children == 1 ? 'dropdown-toggle' : '';
            //$atts['role']   = $args->walker->has_children == 1 ? 'button' : '';
            //$atts['aria-haspopup']   = $args->walker->has_children == 1 ? 'true' : '';
            //$atts['aria-expanded']   = $args->walker->has_children == 1 ? 'false' : '';
    
    
            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
    
            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
    
            }
            if ($depth === 0) {
                $triangle = $args->walker->has_children == 1 ? ' <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>' : '';
            } else {
                $triangle = $args->walker->has_children == 1 ? ' <i class="fas fa-angle-right"></i>' : '';
            }
            $title = apply_filters( 'the_title', $item->title, $item->ID );
            //get_pr($item->classes , false);
            $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
            
            if ($depth === 0) {
                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . $title . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after . $triangle;
            } else {
                $item_output = $args->before;
                $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . $title . $args->link_after . $triangle;
                $item_output .= '</a>';
                $item_output .= $args->after;
            }
    
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    
        public function end_el( &$output, $item, $depth = 0, $args = array() ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
    
            $output .= "</li>{$n}";
        }
    
    }

    function change_admin_logo(){?>
        <style type="text/css">
            .login h1 a {
                <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                background: url("<?php echo $custom_logo__url[0]; ?>") center no-repeat !important;
                background-size: cover!important;
                width: 100%!important;
                height: 105px!important;
            }
        </style>
    <?php }
    add_action('login_enqueue_scripts', 'change_admin_logo');

    function change_admin_logo_url(){
        return home_url('/'); /* ссылка */
        }
        add_filter('login_headerurl', 'change_admin_logo_url');

?>