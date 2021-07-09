<?php 
get_header(); 
?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<? 
				$dataQuery = get_queried_object();
				$authorID = $dataQuery->post_author;
				$author_info = get_userdata($authorID);
                if (isset($author_info->caps['author'])) {
                    ?>
					<a href="<?php echo get_author_posts_url($authorID); ?>">
						<div class="d-flex align-items-center row my-3">
							<div class="img-box col-2">
								<img class="img-fluid img-articles rounded-circle" src="<?php echo get_wp_user_avatar_src($authorID, 'original'); ?>">
							</div>
							<div class="content col-10">
							<h4><strong><?php echo $author_info->first_name . ' ' . $author_info->last_name; ?></strong></h4>
									<p><small><?php echo count_user_posts($authorID, 'coluna'); ?> post(s)</small></p>
							</div>
						</div>
					</a>
					<?php
                }
				?>
				<h3><?php echo get_the_title(); ?></h3>
				<div class="content-text">
					<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							?><p class="text-muted"><small><i class="fa fa-user"></i> <strong><?php echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?></strong> - <i class="fas fa-clock"></i> <strong><?php echo get_the_date(' d/m/Y H:i '); ?></strong></small></p><?php
							if (has_post_thumbnail()) {
								?>
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="img-fluid">
								<?php if (get_field('legenda')) { ?><figcaption><small><?php echo get_field('legenda'); ?></small></figcaption><?php } ?> 
								<?php
							}
							if (get_field('sublead')) { ?><p><em class="sublead"><?php echo get_field('sublead'); ?></em></p><?php }
							the_content();
						}
					}
					?>
				</div>
				<div class="py-3">
					<h4>Compartilhe: </h4>
					<div class="addthis_inline_share_toolbox_cyf8"></div>
				</div>

				<a onclick="window.history.go(-1); return false;"><button type="button">Voltar</button></a><a href="<?php echo get_post_type_archive_link('dicas'); ?>"><button type="button">Ver Outras Dicas</button></a>

				<div class="comments-facebook py-3">
					<h4>Deixe seu comentário:</h4>
					<?php
					$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
					$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					?>
					<div class="fb-comments" data-href="<?php echo $url; ?>" data-width="100%" width="100%" data-numposts="10"></div>
				</div>
			</div>
			<?php echo get_template_part('templates/part', 'aside'); ?>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>