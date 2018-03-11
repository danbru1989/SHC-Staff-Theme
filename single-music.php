<?php

// Add Custom content
add_action( 'genesis_entry_content', 'bds_single_music_content' );

function bds_single_music_content() {

	// Music Details
	$music_details = get_field('music_details');
	if ( $music_details ) {
		echo '<div class="music-details">';
		if ( $music_details['author'] ) {
			echo '<span class="music-detail author"><span class="name-title">Authored by: </span><span class="name">' . $music_details['author'] . '</span></span>';
		}
		if ( $music_details['composer'] ) {
			echo '<span class="music-detail composer"><span class="name-title">Composed by: </span><span class="name">' . $music_details['composer'] . '</span></span>';
		}
		if ( $music_details['arranger'] ) {
			echo '<span class="music-detail arranger"><span class="name-title">Arranged by: </span><span class="name">' . $music_details['arranger'] . '</span></span>';
		}
		if ( $music_details['source'] ) {
			echo '<span class="music-detail arranger"><span class="name-title">Source: </span><span class="name">' . $music_details['source'] . '</span></span>';
		}
		echo '</div>';
	}

	// Add Instructions and Sheet Music Download Link
	echo '<div class="instructions-wrapper">'; ?>
		<div class="instructions">
			<h2>Instructions</h2><?php

			$instructions = get_field('instructions');
			if ( $instructions ) {
				the_field('instructions');
			} else {
				echo 'No special instructions given...';
			} ?>

		</div>
		<div class="sheet-music">
			<h2>Sheet Music</h2>
			<div class="link-wrapper"><?php

				$link = get_field('sheet_music');
				if ( $link ) {
					echo '<a href="' . $link . '" target="_blank" alt="View and Download PDF"><span class="icon-folder-download"></span>View & Download</a>';
				} else {
					echo '<p>Unavailable</p>';
				} ?>
			</div>
			<div class="copyright">
				<h3>Copyright Notice</h3>
				<p>Servant's Heart Camp has permission to make copies of this music for use in our ministry. It is not available for any other purpose without permission from the copyright holder.</p>
			</div>
		</div>
	<?php echo '</div>';

	// Add Audio Recordings
	echo '<div class="audio-recordings-wrapper"><h2>Audio Recordings</h2>';
	if ( have_rows( 'audio_recordings' ) ) {
		echo '<ul class="audio-recordings-list">';
		while ( have_rows('audio_recordings') ) {
			the_row();
			echo '<li><h3>' . get_sub_field('part') . '</h3>' . do_shortcode('[audio mp3="' . get_sub_field('link') . '"][/audio]') . '<a class="download-link" href="' . get_sub_field('link') . '"><span class="icon-folder-download"></span>Download</a></li>';
		}
		echo '</ul>';
	}
	echo '</div>';
}

// Run the Genesis loop.
genesis();
