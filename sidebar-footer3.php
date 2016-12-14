<div id="footer3" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'footer3' ) ) : ?>

		<?php dynamic_sidebar( 'footer3' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->

	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
