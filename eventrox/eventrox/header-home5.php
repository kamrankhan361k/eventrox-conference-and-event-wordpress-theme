<!doctype html>

<html lang="zxx">

<?php $eventrox_redux_demo = get_option('redux_demo'); ?>

<head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {

        ?>

    <link rel="shortcut icon" href="<?php if(isset($eventrox_redux_demo['favicon']['url'])){?><?php echo esc_url($eventrox_redux_demo['favicon']['url']); ?><?php }?>">

    <?php }?>

        <?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>

<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

<![endif]-->





    <!-- < NAVIGATION WITH BACKGROUND COLOR NAVBAR >............................................ -->

<!-- removed navbar-toggleable-md because responsive issues. Find out why ..... -->





    <!-- start page-wrapper -->

<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>

    <!-- Header span -->



    <!-- Header Span

    <span class="header-span style-two"></span> -->



    <!-- Main Header-->

    <header class="main-header header-style-two alternate-two">



        <!-- Header Top Two -->

        <div class="header-top-two">

            <div class="auto-container">

                <div class="clearfix">



                    <!--Top Left-->

                    <div class="top-left clearfix">

                        <ul class="links clearfix">

                            <li><a href="#"><span class="icon fa fa-phone"></span><?php if(isset($eventrox_redux_demo['phone'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['phone']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Call : 1-000-000-0000', 'eventrox' );

                                    }

                                    ?></a></li>

                            <li><a href="#"><span class="icon fa fa-envelope"></span><?php if(isset($eventrox_redux_demo['email'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['email']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'info@eventrox.com', 'eventrox' );

                                    }

                                    ?></a></li>

                            <li><a href="#"><span class="icon fa fa-clock"></span><?php if(isset($eventrox_redux_demo['open_hours'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['open_hours']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Open Hours 09:00 am - 06:00 pm', 'eventrox' );

                                    }

                                    ?></a></li>

                        </ul>

                    </div>



                    <!--Top Right-->

                    <div class="top-right clearfix">

                        <ul class="social-icons">

                            <?php if($eventrox_redux_demo['facebook'] != ''){?>

                            <li><a href="<?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['facebook']));?>"><span class="fab fa-facebook-f"></span></a></li>

                          <?php } ?>

                          <?php if($eventrox_redux_demo['twitter'] != ''){?>

                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['twitter']); ?>"><span class="fab fa-twitter"></span></a></li>

                          <?php } ?>

                          <?php if($eventrox_redux_demo['google'] != ''){?>

                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['google']); ?>"><span class="fab fa-google-plus"></span></a></li>

                            <?php } ?>

                            <?php if($eventrox_redux_demo['pinterest'] != ''){?>

                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['pinterest']); ?>"><i class="fab fa-pinterest"></i></a></li>

                            <?php } ?>

                             <?php if($eventrox_redux_demo['dribbble'] != ''){?>

                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['dribbble']); ?>"><i class="fab fa-dribbble"></i></a></li>

                            <?php } ?>

                        </ul>



                    </div>



                </div>



            </div>

        </div>

        <!-- Header Top End -->



        <div class="main-box">

            <div class="auto-container clearfix">

                <div class="logo-box">

                    <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eventrox_redux_demo['logo_2']['url']); ?>" alt="" title=""></a></div>

                </div>



                <!--Nav Box-->

                <div class="nav-outer clearfix">

                    <!--Mobile Navigation Toggler-->

                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->

                    <nav class="main-menu navbar-expand-md navbar-light">

                        <div class="navbar-header">

                            <!-- Togg le Button -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                <span class="icon flaticon-menu-button"></span>

                            </button>

                        </div>



                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                            <?php 

                  wp_nav_menu( 

                  array( 

                        'theme_location' => 'primary',

                        'container' => '',

                        'menu_class' => '', 

                        'menu_id' => '',

                        'menu'            => '',

                        'container_class' => '',

                        'container_id'    => '',

                        'echo'            => true,

                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                         'walker'            => new eventrox_wp_bootstrap_navwalker(),

                        'before'          => '',

                        'after'           => '',

                        'link_before'     => '',

                        'link_after'      => '',

                        'items_wrap'      => '<ul class="navigation clearfix %2$s" >%3$s</ul>',

                        'depth'           => 0,        

                    )

                 ); ?>

                        </div>

                    </nav>

                    <!-- Main Menu End-->



                    <!-- Outer box -->

                    <div class="outer-box">

                        <!--Search Box-->

                        <div class="search-box-btn"><span class="flaticon-search"></span></div>



                        <!-- Button Box -->

                        <div class="btn-box">

                            <a href="<?php if(isset($eventrox_redux_demo['link_get_tickets'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['link_get_tickets']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( '#', 'eventrox' );

                                    }

                                    ?>" class="theme-btn btn-style-one"><span class="btn-title"><?php if(isset($eventrox_redux_demo['get_tickets'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['get_tickets']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Get Tickets', 'eventrox' );

                                    }

                                    ?></span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>

            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>



            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="nav-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eventrox_redux_demo['logo']['url']); ?>" alt="" title=""></a></div>



                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            </nav>

        </div><!-- End Mobile Menu -->

    </header>