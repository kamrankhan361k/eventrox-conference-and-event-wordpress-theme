<?php $eventrox_redux_demo = get_option('redux_demo');?> 

<footer class="main-footer style-two">

        <div class="auto-container">

            <!-- Footer Content -->

            <div class="footer-content">

                <div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($eventrox_redux_demo['logo_2']['url']); ?>" alt=""></a></div>

                <?php if ( is_active_sidebar( 'footer-area-home2-1' ) ) : ?>

                            <?php dynamic_sidebar( 'footer-area-home2-1' ); ?>

                            <?php endif; ?>

                <div class="copyright-text"><?php if(isset($eventrox_redux_demo['footer_text'])){?>

                        <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['footer_text'])); ?>

                        <?php }else{?>

                        <?php echo esc_html__( '© Copyright 2019 All Rights Reserved by <a href="index.html">Expert-Themes</a>', 'eventrox' );

                        }

                        ?></div>

                <?php if ( is_active_sidebar( 'footer-area-home2-2' ) ) : ?>

                            <?php dynamic_sidebar( 'footer-area-home2-2' ); ?>

                            <?php endif; ?>

            </div>

        </div>

    </footer>

    <!-- End Footer -->



</div>



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

