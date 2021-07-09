<div class="section section-news my-3">
	<div class="container">
	<div class="row">
			<section class="col-md-7 section-articles">
				<?php 
				if (have_posts()) {
					$h = 1;
					while (have_posts()) {
						the_post();
							$category = get_the_category();
							$listCategory = array();
							foreach ($category as $singleCategory) {
								$listCategory[] = $singleCategory->name;
							}
							$impCategory = implode(" / ", $listCategory);
							?>
							<a href="<?php echo get_the_permalink(); ?>">
								<div class="box-articles">
									<div class="img-box">
										<?php
										if (has_post_thumbnail()) {
											?><img class="img-articles" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>');"><?php
										}
										?>
									</div>
									<div class="content">
										<h3><?php echo $impCategory; ?></h3>
										<h1><?php echo get_the_title(); ?></h1>
										<?php if (get_field('sublead')) { ?><p><?php echo get_field('sublead'); ?></p><?php } ?>
									</div>
								</div>
							</a>
							<?php
						$h++;
					}
				}

				paginacao()
				?>
			</section>
			<?php echo get_template_part('templates/part', 'aside'); ?>
		</div>
	</div>
</div>