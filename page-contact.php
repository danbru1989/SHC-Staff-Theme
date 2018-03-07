<?php

// Add contact page body class to the head
add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'contact-page';

	return $classes;

}

// Add Custom content
add_action( 'genesis_entry_content', 'bds_contact_page_content' );

function bds_contact_page_content() {
  ?>

	<div class="contact-info-wrapper">
		<div class="primary-connections">
			<a href="tel:+17179911426" alt="Dan's Cell Phone"><span class="icon-phone"></span></span>(717) 991-1426</a>
      <a href="mailto:danbru@gmail.com" alt="Dan's Email Address"><span class="icon-envelop"></span></span>danbru@gmail.com</a>
		</div>
		<hr/>
		<h1 class="other-connections-title">Other Ways To Connect</h1>
		<div class="other-connections">
			<a href="https://facebook.com/danbru1989/" alt="Dan's Facebook Account" target="_blank"><span class="icon-facebook2"></span>Facebook</a>
      <a href="https://twitter.com/danbru1989/" alt="Dan's Twitter Account" target="_blank"><span class="icon-twitter"></span>Twitter</a>
			<a href="https://plus.google.com/u/0/+DanBrubaker1989/" alt="Dan's Google Plus Account" target="_blank" ><span class="icon-google-plus3"></span>Google Plus</a>
			<a href="https://plus.google.com/u/0/+DanBrubaker1989/" alt="Dan's YouTube Channel" target="_blank" ><span class="icon-youtube"></span>YouTube</a>
			<a href="/feed/" alt="Brubaker Evangelistic Ministries RSS Feed" target="_blank" ><span class="icon-rss"></span>RSS Feed</a>
			<a href="/newsletter-signup/" alt="Signup for Newsletters"><span class="icon-bullhorn"></span>Newsletters</a>
		</div>
		<h1 class="mailing-addresses-title">Mailing Addresses</h1>
		<div class="address-info-wrapper">
			<div class="our-address">
				<h3>Our Address</h3>
				<span class="address">Dan Brubaker<br/>P.O. Box 121<br/>Ramey, PA 16671</span>
			</div>
			<div class="church-address">
				<h3>Church Address</h3>
				<span class="address">Faith Bible Church<br/>2075 Harrisburg Avenue<br/>Mount Joy, PA 17552</span>
			</div>
			<div class="camp-address">
				<h3>Camp Address</h3>
				<span class="address">Servant's Heart Camp<br/>422 Servants Heart Drive<br/>Ramey, PA 16671</span>
			</div>
		</div>
  </div>

  <?php
}

// Run the Genesis loop.
genesis();
