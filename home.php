<?php
global $post;
$args = array('posts_per_page');
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

//Kod miniaturki posta

<?php endforeach;
wp_reset_postdata();?>

<div class="col-md-6">
     <a href="<?php the_permalink(); ?>">
       <img src="<?php the_post_thumbnail_url('large'); ?>"/>
     </a>
         <div class="post-details">
             <h6><?php echo get_the_date('j F Y'); ?></h6>
             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             <p>
                 <?php the_excerpt(); ?>
             </p>
         </div>
     </div>
 </div>

<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->cat_name; ?></a>
<?php echo get_avatar( get_the_author_meta( 'ID' ), 36,"","",["class" => "rounded-circle"] ); ?>
<?php echo get_the_author_meta('display_name', $post->post_author); ?>
<?php echo get_comments_number($post->ID); ?>