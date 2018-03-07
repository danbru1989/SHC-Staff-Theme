<?php

// Add contact page body class to the head
add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'front-page';

	return $classes;

}

// Add Custom content
add_action( 'genesis_entry_content', 'bds_contact_page_content' );

function bds_contact_page_content() {
  ?>

	<div class="search-wrapper"><?php get_search_form(); ?></div>

  <?php
}

// Run the Genesis loop.
genesis();
