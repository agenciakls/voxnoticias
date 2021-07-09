<aside class="col-md-5">
    <div class="box-aside list-group mb-4">
        <div class="list-group-item"><strong>Colunistas</strong></div>
        <div class="list-group-item list-aside">
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
                        <a href="<?php echo get_author_posts_url($author->ID); ?>">
                            <div class="box-articles">
                                <div class="img-box col-2">
                                    <img class="img-articles rounded-circle" src="<?php echo get_wp_user_avatar_src( $author->ID, 'original' ); ?>">
                                </div>
                                <div class="content col-10">
                                    <h4><strong><?php echo $author_info->first_name . ' ' . $author_info->last_name; ?></strong></h4>
                                    <p><small><?php echo count_user_posts($author->ID,'coluna'); ?> post(s)</small></p>
                                </div>
                            </div>
                        </a>
						<?php
					}
				} else { echo 'Nenhum colunista encontrado'; }
			?>
        </div>
    </div>
    <?php echo get_template_part('templates/ads', 'aside');?>
    <div class="box-aside list-group my-4">
        <div class="list-group-item"><strong>Mais Recentes</strong></div>
        <div class="list-group-item list-aside">
                <?php 
            $argsTips = array(
                'post_type' => 'post',
                'posts_per_page' => 5
            );
            $listTips = new WP_Query($argsTips);
            if ($listTips->have_posts()) {
                $h = 1;
                while ($listTips->have_posts()) {
                    $listTips->the_post();

                        ?>
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="box-articles">
                                <div class="img-box col-2">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        ?><img class="img-articles" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>"><?php
                                    }
                                    ?>
                                </div>
                                <div class="content col-10">
                                    <p><?php echo get_the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php
                    $h++;
                }
            }
            ?>
        </div>
    </div>
    <?php echo get_template_part('templates/ads', 'aside');?>
    <div class="box-aside list-group my-4">
        <div class="list-group-item"><strong>Mais Populares</strong></div>
        <div class="list-group-item list-aside">
                <?php 
            $argsTips = array(
                'post_type' => 'post',
                'posts_per_page' => 5
            );
            $listTips = new WP_Query($argsTips);
            if ($listTips->have_posts()) {
                $h = 1;
                while ($listTips->have_posts()) {
                    $listTips->the_post();

                        ?>
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="box-articles">
                                <div class="img-box col-2">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        ?><img class="img-articles" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>"><?php
                                    }
                                    ?>
                                </div>
                                <div class="content col-10">
                                    <p><?php echo get_the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php
                    $h++;
                }
            }
            ?>
        </div>
    </div>
</aside>
