<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<header class="article-header">
		<div class="row">
			<div class="small-8 medium-8 column">
				<div class="box">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<hr class="pageHr">
				</div>
			</div>
			<!-- ajout des indicateurs de classes -->
			<div class="small-4 medium-4 column classes">
				<div class="rond-container">
					<?php if (in_category('TS')) { ?>
						<a href="<?php echo home_url() . "/category/ts"; ?>">
							<div class="rond TPS">
								<p>
									TPS
								</p>
							</div>
						</a>
						<?php } ?>
						<?php if (in_category('PS')) { ?>
							<a href="<?php echo home_url() . "/category/ps"; ?>">
								<div class="rond PS">
									<p>
										PS
									</p>
								</div>
							</a>
							<?php } ?>
							<?php if (in_category('MS')) { ?>
								<a href="<?php echo home_url() . "/category/ms"; ?>">
									<div class="rond MS">
										<p>
											MS
										</p>
									</div>
								</a>
								<?php } ?>
								<?php if (in_category('GS')) { ?>
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
						<?php get_template_part( 'parts/content', 'byline' ); ?>
					</header> <!-- end article header -->

					<section class="entry-content" itemprop="articleBody">
						<div class="row">
							<div class="column small-12 medium-4">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('post-thumbnails'); ?></a>
							</div>
							<div class="column small-12 medium-8">
								<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
							</div>
						</div>
					</section> <!-- end article section -->

					<footer class="article-footer">
						<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
						<hr class="postHr">
					</footer> <!-- end article footer -->
				</article> <!-- end article -->
