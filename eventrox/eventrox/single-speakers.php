
<?php
   $eventrox_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>
<?php $post_select = get_post_meta(get_the_ID(),'_cmb_post_select', true); ?>
<?php if(isset($eventrox_redux_demo['speakers_single_image']['url']) && $eventrox_redux_demo['speakers_single_image']['url'] != ''){?>
<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['speakers_single_image']['url']);?>);">
<?php }else{?>
<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">
<?php } ?>


        <div class="auto-container">
            <h1><?php if(isset($eventrox_redux_demo['speakers_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['speakers_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Speakers', 'eventrox' );
                                    }
                                    ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>
                <li><?php if(isset($eventrox_redux_demo['speakers_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['speakers_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Speakers', 'eventrox' );
                                    }
                                    ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Speker Detail -->
    <section class="speaker-detail">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="image-box">
                      <?php if (get_post_thumbnail_id() !='')  { ?>
                        <figure class="image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></figure>
                      <?php } ?>
                        <ul class="social-icon-two social-icon-colored text-center">
                          <?php if($eventrox_redux_demo['facebook'] != ''){?>
                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['facebook']);?>"><span class="fab fa-facebook-f"></span></a></li>
                          <?php } ?>
                          <?php if($eventrox_redux_demo['google'] != ''){?>
                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['google']);?>"><span class="fab fa-google-plus-g"></span></a></li>
                          <?php } ?>
                          <?php if($eventrox_redux_demo['twitter'] != ''){?>
                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['twitter']);?>"><span class="fab fa-twitter"></span></a></li>
                          <?php } ?>
                          <?php if($eventrox_redux_demo['skype'] != ''){?>
                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['skype']);?>"><span class="fab fa-skype"></span></a></li>
                          <?php } ?>
                          <?php if($eventrox_redux_demo['linkedin'] != ''){?>
                            <li><a href="<?php echo esc_attr($eventrox_redux_demo['linkedin']);?>"><span class="fab fa-linkedin-in"></span></a></li>
                          <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="info-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text-box">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                                  <?php wp_link_pages( array(
                                      'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'webfix' ),
                                      'after'       => '</div>',
                                      'link_before' => '<p class="page-number">',
                                      'link_after'  => '</p>',
                                  ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        
<?php endwhile; ?>
<?php
    get_footer();
?>

