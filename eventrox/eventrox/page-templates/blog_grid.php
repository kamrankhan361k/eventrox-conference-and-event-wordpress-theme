<?php

/*

 * Template Name: Blog Grid

 * Description: A Page Template with a Page Builder design.

 */

     $eventrox_redux_demo = get_option('redux_demo');

     get_header(); 

?>



<?php if(isset($eventrox_redux_demo['blog_grid_image']['url']) && $eventrox_redux_demo['blog_grid_image']['url'] != ''){?> 

<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['blog_grid_image']['url']);?>);">

<?php }else{?>

<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">

<?php } ?>

        <div class="auto-container">

            <h1><?php if(isset($eventrox_redux_demo['blog_grid_title'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['blog_grid_title']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Blog Grid', 'eventrox' );

                                    }

                                    ?></h1>

            <ul class="bread-crumb clearfix">

                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>

                <li><?php if(isset($eventrox_redux_demo['blog_grid_title'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['blog_grid_title']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Blog Grid', 'eventrox' );

                                    }

                                    ?></li>

            </ul>

        </div>

    </section>

    <section class="news-section alternate">

        <div class="auto-container">

            <div class="row">

                <?php $args = array(    

                            'paged' => $paged,

                            'post_type' => 'post',

                            );

                        $wp_query = new WP_Query($args);

                        while (have_posts()): the_post(); 

                    ?>

                <?php $image_grid = get_post_meta(get_the_ID(),'_cmb_image_grid', true); ?>

                <!-- News Block Three -->

                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">

                    <div class="inner-box">

                        <?php if ($image_grid !='')  { ?>

                        <div class="image-box">

                            <figure class="image"><a href="<?php the_permalink();?>"><img src="<?php echo esc_attr($image_grid);?>" alt=""></a></figure>

                        </div>

                        <?php } ?>

                        <div class="lower-content">

                            <ul class="post-info">

                                <li><span class="far fa-user"></span> <?php the_author_posts_link(); ?></li>

                                <li><span class="far fa-comments"></span> <?php comments_number( esc_html__('0 Comments', 'moral'), esc_html__('1 Comment', 'moral'), esc_html__('% Comments', 'moral') ); ?></li>

                            </ul>    

                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>

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

                <!-- News Block Three -->

                

            </div>



            <!--Styled Pagination-->
            <?php if (eventrox_pagination() !='')  { ?>
            <div class="styled-pagination text-center">

                <?php eventrox_pagination();?>

            </div>                
            <?php } ?>
            <!--End Styled Pagination-->

        </div>

    </section>

<?php

    get_footer();

?>