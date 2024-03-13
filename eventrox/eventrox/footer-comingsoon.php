<?php $eventrox_redux_demo = get_option('redux_demo');?> 
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