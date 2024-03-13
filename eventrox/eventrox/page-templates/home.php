<?php
/*
 * Template Name: Home
 * Description: A Page Template with a Page Builder design.
 */
$eventrox_redux_demo = get_option('redux_demo');
get_header('home1'); ?>

<?php if (have_posts()){ ?>
  
    <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'eventrox' );
  }?>

    <?php
get_footer();
?>