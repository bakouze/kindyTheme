<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<div class="row">
			<div class="small-12 column landscape-img">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}  ?>
			</div>
		</div>
		<div class="row">
			<div class="small-9 medium-9 column">
				<div class="box">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<hr class="pageHr">
				</div>
			</div>
			<!-- ajout des indicateurs de classes -->
			<div class="small-3 medium-3 column classes">
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
					</header> <!-- end article header -->

					<section class="entry-content" itemprop="articleBody">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</section> <!-- end article section -->

					<footer class="article-footer">

					</footer> <!-- end article footer -->

					<?php comments_template(); ?>

				</article> <!-- end article -->
