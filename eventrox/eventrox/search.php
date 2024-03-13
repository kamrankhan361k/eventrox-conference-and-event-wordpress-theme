<?php
     $eventrox_redux_demo = get_option('redux_demo');
     get_header(); 
?>
<?php if(isset($eventrox_redux_demo['blog_image']['url']) && $eventrox_redux_demo['blog_image']['url'] != ''){?> 
<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['blog_image']['url']);?>);">
<?php }else{?>
<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">
<?php } ?>
        <div class="auto-container">
            <h1><?php printf( esc_html__( 'Search Results for: %s', 'eventrox' ), get_search_query() ); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>
                <li><?php if(isset($eventrox_redux_demo['blog_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Sidebar', 'eventrox' );
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
                    <div class="blog-sidebar">
                        <!-- News Block Three -->
                        <?php 
                        while (have_posts()): the_post(); 
                    ?>
                        <div class="news-block wow fadeInRight">
                            <div class="inner-box">
                                <?php if (get_post_thumbnail_id() !='')  { ?>
                                <div class="image-box">
                                    <figure class="image"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a></figure>
                                </div>
                                <?php } ?>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="far fa-user"></span> <?php the_author_posts_link(); ?></li>
                                        <li><span class="far fa-comments"></span> <?php comments_number( esc_html__('0 Comments', 'moral'), esc_html__('1 Comment', 'moral'), esc_html__('% Comments', 'moral') ); ?></li>
                                    </ul>    
                                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                    <div class="text"><?php if(isset($eventrox_redux_demo['blog_excerpt'])){?>
                        <?php echo esc_attr(eventrox_excerpt($eventrox_redux_demo['blog_excerpt'])); ?>
                        <?php }else{?>
                        <?php echo esc_attr(eventrox_excerpt(50)); 
                        }
                        ?></div>
                                    <div class="btn-box"><a href="<?php the_permalink();?>" class="read-more"><?php if(isset($eventrox_redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read More', 'eventrox' );
                                    }
                                    ?></a></div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        
                            <?php eventrox_pagination();?>
                                     
                        <!--End Styled Pagination-->
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-left">
                        <?php get_sidebar();?>  
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
<?php
    get_footer();
?>