<?php 
get_header(); 
?>
<div class="section section-news my-3">
	<div class="container">
	<div class="row">
			<section class="col-md-7 section-articles">
				<?php 
                
				$h = 1;
				if (have_posts()) {
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
                else {
					$dataQuery = get_queried_object();
					$authorID = $dataQuery->data->ID;
					$author_info = get_userdata($authorID);
                    $argsPostType = array(
                        'post_type' => 'coluna',
						'author' => $dataQuery->data->ID
                    );
                    $colunas = new WP_Query($argsPostType);

					?>
					<div class="d-flex align-items-center row my-3">
						<div class="img-box col-2">
							<img class="img-fluid img-articles rounded-circle" src="<?php echo get_wp_user_avatar_src( $authorID, 'original' ); ?>">
						</div>
						<div class="content col-10">
						<h4><strong><?php echo $author_info->first_name . ' ' . $author_info->last_name; ?></strong></h4>
								<p><small><?php echo count_user_posts($authorID,'coluna'); ?> post(s)</small></p>
						</div>
					</div>
					<?php
                    while ($colunas->have_posts()) {
						$colunas->the_post();
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
<?php
get_footer(); 
?>