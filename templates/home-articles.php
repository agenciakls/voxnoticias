<section class="section section-articles">
	<div class="container">	
		<div class="row list-articles my-4"> 	
			
			<?php 
			$argsTips = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
			$listTips = new WP_Query($argsTips);
			if ($listTips->have_posts() && ($paged == 1 || $paged == null)) {
				$h = 1;
				while ($listTips->have_posts()) {
					$listTips->the_post();
					if ($h <= 3) {
						$category = get_the_category();
						$listCategory = array();
						foreach ($category as $singleCategory) {
							$listCategory[] = $singleCategory->name;
						}
						$impCategory = implode(" / ", $listCategory);
						?>
						<div class="col-md-4 d-none d-md-block">
						<div class="single-articles">
								<a href="<?php echo get_the_permalink(); ?>">
								
									<div class="head-articles">
										
										<div class="category-articles"><h3><?php echo $impCategory; ?></h3></div>
										<div class="content-articles">
												
											<div class="title-articles"><h3><?php echo get_the_title(); ?></h3></div>
											<?php if (get_field('sublead')) { ?><div class="legend-articles"><p><?php echo get_field('sublead'); ?></p></div><?php } ?>
										</div>
									</div>
									<div class="img-articles" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>');"></div>
								</a>
							</div>
						</div>
						<?php 
					}
					else {
						break;
					}
					$h++;
				}
				wp_reset_query();
				wp_reset_postdata();
			}
			?>
		</div>

	</div>
</section>
<div class="section container">
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
						<a href="<?php echo get_the_permalink(); ?>" class="<?php if ($h <= 3) { echo 'd-block d-md-none'; } ?>">
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
			paginacao();
			?>
		</section>
		<?php echo get_template_part('templates/part', 'aside'); ?>
	</div>
</div>