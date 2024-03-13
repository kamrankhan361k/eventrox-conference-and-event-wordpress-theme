<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
<div class="comments-area">
  <div class="group-title">
  <h3><?php comments_number( esc_html__(' 0 Comments', 'moral'), esc_html__(' 1 Comment', 'moral'), esc_html__('% Comments', 'moral') ); ?></h3>
  </div>
  <?php wp_list_comments('callback=eventrox_theme_comment'); ?>

</div>
<div class="col-md-12"> 
<!-- START PAGINATION -->
<?php
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
<div class="pagination_area">
     <nav>
          <ul class="pagination">
               <li> <?php paginate_comments_links( 
              array(
              'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'eventrox' ),ENT_QUOTES),
              'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'eventrox' ),ENT_QUOTES),
              ));  ?>
                </li>
          </ul>
     </nav>
</div>                                       
<?php endif; ?>
<!-- END PAGINATION --> 
</div>
<?php endif; ?>     
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
$aria_req = ( $req ? " aria-required='true'" : '' );
$comment_args = array(
        'id_form' => 'comment1111',        
        'class_form' => 'comment-form',                         
        'title_reply'=> wp_specialchars_decode(esc_html__( 'Leave A Comment', 'eventrox' ),ENT_QUOTES),
        'fields' => apply_filters( 'comment_form_default_fields', array(
              
             'author' => '
             <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                          <input type="text" name="author" placeholder="'.esc_attr__('Name', 'eventrox').'" required="'.esc_attr__('required', 'eventrox').'" data-error="'.esc_attr__('Name is required.', 'eventrox').'">
                          </div>',
            'email' => '<div class="col-lg-6 col-md-12 col-sm-12 form-group">
                             <input type="email" name="email" placeholder="'.esc_attr__('Email', 'eventrox').'" required="'.esc_attr__('required', 'eventrox').'" data-error="'.esc_attr__('Valid email is required.', 'eventrox').'">
                             <div class="help-block with-errors"></div>
                        </div>',
        ) ),   
          'comment_field' => '<div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea id="message"  name="comment" placeholder="'.esc_attr__('Write A Comment', 'eventrox').'" required="'.esc_attr__('required', 'eventrox').'" data-error="'.esc_attr__('Please,leave us a message.', 'eventrox').'"></textarea>
                                  <div class="help-block with-errors"></div>
                              </div>
                              ', 
                
         'label_submit' => esc_html__( 'Post A Comment', 'eventrox' ),
         'comment_notes_before' => '',
         'comment_notes_after' => '',               
)
?>

<?php if ( comments_open() ) : ?>
<?php comment_form($comment_args); ?>
                    <?php endif; ?> 