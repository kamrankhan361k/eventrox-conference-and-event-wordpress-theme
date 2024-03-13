<?php
   $eventrox_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>

<?php if(isset($eventrox_redux_demo['blog_single_image']['url']) && $eventrox_redux_demo['blog_single_image']['url'] != ''){?>   
<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['blog_single_image']['url']);?>);">
<?php }else{?>
<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">
<?php } ?>
        <div class="auto-container">
            <h1><?php if(isset($eventrox_redux_demo['blog_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['blog_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Single', 'eventrox' );
                                    }
                                    ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>
                <li><?php if(isset($eventrox_redux_demo['blog_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['blog_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Single', 'eventrox' );
                                    }
                                    ?></li>
            </ul>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                         <!-- News Block Three -->
                        <div class="news-block">
                            <div class="inner-box">
                                <?php if (get_post_thumbnail_id() !='')  { ?>
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></figure>
                                </div>
                                <?php } ?>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="far fa-user"></span> <?php the_author_posts_link(); ?></li>
                                        <li><span class="far fa-comments"></span> <?php comments_number( esc_html__('0 Comments', 'moral'), esc_html__('1 Comment', 'moral'), esc_html__('% Comments', 'moral') ); ?></li>
                                    </ul>    
                                    <h2><?php the_title(); ?></h2>
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
                       
                         <!-- Other Options -->
                       <?php comments_template();?>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-left">
                        
                        <!-- Search -->
                        <?php get_sidebar();?>  
                    </aside>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
    
    <!-- FOOTER -->
<?php
    get_footer();
?>

