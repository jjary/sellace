<?php
global $post;
$args = array( 's' => esc_html( get_search_query( false ) ), 'posts_per_page' => 16 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

// Kod miniaturki posta

<?php endforeach;
 wp_reset_postdata();?>