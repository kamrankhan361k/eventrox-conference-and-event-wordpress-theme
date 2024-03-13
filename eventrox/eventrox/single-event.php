
<?php
   $eventrox_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>
<?php $job_admin = get_post_meta(get_the_ID(),'_cmb_job_admin', true); ?>
<?php $admin = get_post_meta(get_the_ID(),'_cmb_admin', true); ?>
<?php $avatar = get_post_meta(get_the_ID(),'_cmb_avatar', true); ?>
<?php $time_event = get_post_meta(get_the_ID(),'_cmb_time_event', true); ?>
<?php $address_event = get_post_meta(get_the_ID(),'_cmb_address_event', true); ?>
<?php if(isset($eventrox_redux_demo['event_single_image']['url']) && $eventrox_redux_demo['event_single_image']['url'] != ''){?>
<section class="page-title" style="background-image:url(<?php echo esc_url($eventrox_redux_demo['event_single_image']['url']);?>);">
<?php }else{?>
<section class="page-title" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/5.jpg);">
<?php } ?>
        <div class="auto-container">
            <h1><?php if(isset($eventrox_redux_demo['event_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['event_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Event Detail', 'eventrox' );
                                    }
                                    ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'eventrox' );?></a></li>
                <li><?php if(isset($eventrox_redux_demo['event_single_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($eventrox_redux_demo['event_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Event Detail', 'eventrox' );
                                    }
                                    ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

     <!-- Event Detail -->
    <section class="event-detail">
        <div class="auto-container">
            <?php if (get_post_thumbnail_id() !='')  { ?>
            <div class="image-box">
                <figure class="image wow fadeIn"><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="lightbox-image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a></figure>
            </div>
            <?php } ?>
            <div class="content-box">
                <div class="speaker-info">
                    <?php if ($avatar !='')  { ?>
                    <figure class="thumb"><img src="<?php echo esc_attr($avatar);?>" alt=""></figure>
                <?php } else { ?>
                    <figure class="thumb"><?php echo get_avatar(get_the_author_meta('user_email'),
                            $default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60');?></figure>
                <?php } ?>
                    <?php if ($admin !='')  { ?>
                    <h5 class="name"><?php echo esc_attr($admin);?></h5>
                    <?php } else { ?>
                    <h5 class="name"><?php the_author(); ?></h5>
                    <?php } ?>
                    <span class="designation"><?php echo esc_attr($job_admin);?></span>
                </div>
                <ul class="upper-info">
                    <li><span class="icon far fa-clock"></span><?php echo esc_attr($time_event);?></li>
                    <li><span class="icon fa fa-map-marker-alt"></span><?php echo esc_attr($address_event);?></li>
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
    </section>
    
        
<?php endwhile; ?>
<?php
    get_footer();
?>

