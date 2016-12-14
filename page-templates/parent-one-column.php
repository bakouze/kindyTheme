<?php
/*
Template Name: Page Parent Une Colonne
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php
				$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_modified', 'sort_order' => 'desc' ) );

				foreach( $mypages as $page ) {
					$content = $page->post_content;
					$cate = get_the_category_list(', ', '', $page->ID);
					if ( ! $content ) // Check for empty page
					continue;

					$content = apply_filters( 'the_content', $content );
					?>

					<header class="entry-content">
						<div class="row">
							<div class="small-9 medium-9 column">
								<div class="box">
									<h2><?php echo $page->post_title; ?></h2>
								</div>
							</div>
							<!-- ajout des indicateurs de classes -->
							<div class="small-3 medium-3 column classes">
								<div class="rond-container">
									<?php if (strpos($cate, 'TS') !== false) { ?>
										<a href="<?php echo home_url() . "/category/ts"; ?>">
											<div class="rond TPS">
												<p>
													TPS
												</p>
											</div>
										</a>
										<?php } ?>
										<?php if (strpos($cate, 'PS') !== false) { ?>
											<a href="<?php echo home_url() . "/category/ps"; ?>">
												<div class="rond PS">
													<p>
														PS
													</p>
												</div>
											</a>
											<?php } ?>
											<?php if (strpos($cate, 'MS') !== false) { ?>
												<a href="<?php echo home_url() . "/category/ms"; ?>">
													<div class="rond MS">
														<p>
															MS
														</p>
													</div>
												</a>
												<?php } ?>
												<?php if (strpos($cate, 'GS') !== false) { ?>
													<a href="<?php echo home_url() . "/category/gs"; ?>">
														<div class="rond GS">
															<p>
																GS
															</p>
														</div>
													</a>
													<?php } ?>
												</div>
											</div>
										</div>
									</header> <!-- end article header -->

									<section class="entry-content" itemprop="articleBody">
										<div class="entry"><?php echo $content; ?></div>
										<?php wp_link_pages(); ?>
									</section>

									<hr class="postHr">

									<?php } ?>

								<?php endwhile; endif; ?>

							</main> <!-- end #main -->

						</div> <!-- end #inner-content -->

					</div> <!-- end #content -->

					<?php get_footer(); ?>
