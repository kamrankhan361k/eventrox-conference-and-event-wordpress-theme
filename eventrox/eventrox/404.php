<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $eventrox_redux_demo = get_option('redux_demo');
get_header(); ?> 
<?php if(isset($eventrox_redux_demo['404_image']['url']) && $eventrox_redux_demo['404_image']['url'] != ''){?>
<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['404_image']['url']); ?>);">
<?php }else{?>
<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">
<?php } ?>   
        <div class="auto-container">
            <h1><?php if(isset($eventrox_redux_demo['error_page'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['error_page']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Error Page', 'eventrox' );
                                    }
                                    ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>
                <li><?php if(isset($eventrox_redux_demo['error_page'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['error_page']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Error Page', 'eventrox' );
                                    }
                                    ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Error Section-->
    <section class="error-section">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="error-title"><?php if(isset($eventrox_redux_demo['404'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['404']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404', 'eventrox' );
                                    }
                                    ?></div>
            <h4><?php if(isset($eventrox_redux_demo['page_not_found'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['page_not_found']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Page not Found', 'eventrox' );
                                    }
                                    ?></h4>
            <div class="text"><?php if(isset($eventrox_redux_demo['desc'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['desc']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Sorry, we could not find the page you are looking for', 'eventrox' );
                                    }
                                    ?></div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="theme-btn btn-style-three"><span class="btn-title"><?php if(isset($eventrox_redux_demo['home_page'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['home_page']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Home Page', 'eventrox' );
                                    }
                                    ?></span></a>
            <a href="<?php if(isset($eventrox_redux_demo['link_contact_us'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['link_contact_us']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '#', 'eventrox' );
                                    }
                                    ?>" class="theme-btn btn-style-two"><span class="btn-title"><?php if(isset($eventrox_redux_demo['contact_us'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['contact_us']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Contact Us', 'eventrox' );
                                    }
                                    ?></span></a>
        </div>
    </section>
<?php
get_footer(); ?> 
