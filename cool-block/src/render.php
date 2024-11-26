<?php
/** COOL WordPress block
 *
 * @package collabora-wordpress
 */

/**
 * Spdx-License: MPL-2.0
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( empty( $attributes['id'] ) ) {
	$doc_id = 0;
} else {
	$doc_id = $attributes['id'];
}

if ( ! empty( $attributes['mode'] ) ) {
	$cool_mode = $attributes['mode'];
} else {
	$cool_mode = 'view';
}
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php
	if ( 0 !== $doc_id ) {
		echo CollaboraFrontend::get_button_markup( $doc_id, $cool_mode );
	} else {
		echo 'Error, no doc id';
	}
	?>
</p>
