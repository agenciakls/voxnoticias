	<?php /* echo get_template_part('templates/ads', 'footer'); */ ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 footer-data">
					<div class="element-footer">
						<img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" class="img-fluid footer-logo" alt="">
					</div>
					<div class="list-footer">
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'footer', 
								'menu_class' => 'list-footer',
								'menu_id' => 'list-footer',
								'container_class' => 'list-footer-container', 
								'container_id' => 'list-footer-container' ,
								'walker' => new OrganizacaoMenuPrincipal()
							) 
						);
						?>
					</div>
					<div class="copyright-footer">
						VOX NOTÍCIAS - TODOS OS DIREITOS RESERVADOS
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bbf6f323dad74f2"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/inc/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.2.0"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions-store.js"></script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<?php wp_footer(); ?>
</body>
</html>