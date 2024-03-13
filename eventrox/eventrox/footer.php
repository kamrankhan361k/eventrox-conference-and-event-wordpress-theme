<?php $eventrox_redux_demo = get_option('redux_demo');?> 
<footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eventrox_redux_demo['logo_2']['url']); ?>" alt="" /></a>
                                    </div>
                                    <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                            <?php endif; ?>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget useful-links">
                                    <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                            <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                            <?php endif; ?>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget instagram-widget">
                                    <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                            <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">                    
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text">
                        <p><?php if(isset($eventrox_redux_demo['footer_text'])){?>
                        <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( '© Copyright 2019 All Rights Reserved by <a href="index.html">Expert-Themes</a>', 'eventrox' );
                        }
                        ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query() ; ?>" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>    
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div> 
<?php wp_footer(); ?>

</body>
</html>