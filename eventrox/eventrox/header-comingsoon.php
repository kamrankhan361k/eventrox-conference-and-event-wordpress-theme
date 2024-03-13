<!doctype html>
<html <?php language_attributes(); ?>>
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