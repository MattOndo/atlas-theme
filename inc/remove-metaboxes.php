<?php

function remove_my_post_metaboxes() {
  remove_meta_box( 'commentstatusdiv','page','normal' ); // Comments Status Metabox
  remove_meta_box( 'commentsdiv','page','normal' ); // Comments Metabox
  remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Status Metabox
  remove_meta_box( 'commentsdiv','post','normal' ); // Comments Metabox
  remove_meta_box( 'commentstatusdiv','page','side' ); // Comments Status Metabox
  remove_meta_box( 'commentsdiv','page','side' ); // Comments Metabox
  remove_meta_box( 'commentstatusdiv','post','side' ); // Comments Status Metabox
  remove_meta_box( 'commentsdiv','post','side' ); // Comments Metabox
}
add_action('admin_menu','remove_my_post_metaboxes');