<footer class="footer" role="contentinfo">
	<div id="inner-footer" class="row">
		<div class="large-12 medium-12 columns">
			<nav role="navigation">
				<?php joints_footer_links(); ?>
			</nav>
		</div>
		<div class="large-12 medium-12 columns">
			<div class="row">
				<div class="widget small-12 medium-4 column">
					<h4 class="widgettitle">Plan du site</h4>
					<hr class="footHr">
					<ul class="vertical menu" data-drilldown>
						<?php joints_nav(); ?>
					</ul>
				</div>
				<?php get_sidebar('footer2'); ?>
				<?php get_sidebar('footer3'); ?>
			</div>
		</div>
	</div>
</div> <!-- end #inner-footer -->
</footer> <!-- end .footer -->
</div>  <!-- end .main-content -->
</div> <!-- end .off-canvas-wrapper-inner -->
</div> <!-- end .off-canvas-wrapper -->
<?php wp_footer(); ?>
</body>
</html> <!-- end page -->
