<?php 
   $thistag_id = get_queried_object()->term_id;
   global $post;
   $args = array('tag_id'=> $thistag_id, 'posts_per_page'=>32);
   $myposts = get_posts( $args );
   foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

   // Kod miniaturki posta

<?php endforeach;
wp_reset_postdata();?>