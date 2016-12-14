<div id="footer2" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'footer2' ) ) : ?>

		<?php dynamic_sidebar( 'footer2' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->

	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
