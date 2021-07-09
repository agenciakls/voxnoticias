<?php 
/*
Template Name: Colunistas 
*/
get_header(); 
?>
<div class="section section-colunistas my-3">
	<div class="container">
		<div class="row">
				<?php 
				$args  = array( 'role' => 'author' );
				// Create the WP_User_Query object
				$authors = get_users($args);
				// Check for results
				if ($authors)
				{
					// loop trough each author
					foreach ($authors as $author)
					{
						$author_info = get_userdata($author->ID);
						?>
						<div class="col-md-3 single-colunista">
							<a href="<?php echo get_author_posts_url($author->ID); ?>">
								<img src="<?php echo get_wp_user_avatar_src( $author->ID, 'original' ); ?>" class="img-fluid" alt="">
								<h1><?php echo $author_info->first_name . ' ' . $author_info->last_name; ?></h1>
								<p><small><?php echo count_user_posts($author->ID, 'coluna'); ?> post(s)</small></p>
							</a>
						</div>
						<?php
					}
				} else { echo 'Nenhum colunista encontrado'; }
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>