<header>
	<div class="header-area">
		<div class="header-background<?php if (!is_front_page()) { echo ' front-header'; } ?>"></div>
		<div class="header-main">
			<div class="container header-container">
				<div class="nav-button">
					<div class="menu">
						Menu
					</div>
					<div class="hamburger hamburger--squeeze">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				<div class="logo">
					<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" alt=""></a>
				</div>
				<div class="header-search search row clearfix" id="search" tabindex="-1">
				    <form role="search" name="search_form" id="search-form">
				        <input type="search" name="s" class="search-input" id="search-input" autocomplete="off" placeholder="Faça sua busca" aria-label="Faça Sua Busca">
						<div class="icon-search"><i class="fa fa-search"></i></div>
				        <!-- <div class="search-clear-field"><i class="fas fa-times"></i></div> -->
				        <!-- <button class="search-submit" type="submit" aria-label="Rechercher"><i class="fa fa-search"></i></button> -->
				    </form>
				    <div class="header-search-autosuggest">
				    	<div class="content-autosuggest" id="autosuggest-insert"><div class="autosuggest-pre"><div class="p-3 text-center"><h4>Insira sua pesquisa</h4></div></div></div>
				    </div>
					<div class="search-close btn btn-danger d-block d-md-none">Fechar <i class="fas fa-times-circle"></i></div>
				</div>
				<button class="search-show d-block d-md-none" type="button" aria-label="Rechercher"><i class="fa fa-search"></i></button>
				<?php 
				/* 
				?>
				<nav>
					<?php 
					wp_nav_menu( 
						array( 
							'theme_location' => 'principal', 
							'menu_class' => 'header-menu',
							'menu_id' => 'header-nav',
							'container_class' => 'menu-principal-header', 
							'container_id' => 'menu-principal-header' ,
							'walker' => new OrganizacaoMenuPrincipal()
						) 
					);
					?>
				</nav>
				*/
				?>
			</div>
		</div>
	</div>
</header>
<nav class="header-bar">
	<?php 
	wp_nav_menu( 
		array( 
			'theme_location' => 'menumobile', 
			'menu_class' => 'header-menu',
			'menu_id' => 'header-nav',
			'container_class' => 'menu-principal-header', 
			'container_id' => 'menu-principal-header' ,
			'walker' => new OrganizacaoMenuPrincipal()
		) 
	);
	?>
	<div id="pre-socials-container" class="pre-socials-container">
		<ul id="pre-list-ul" class="pre-header-list">
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li id="nav-menu-item-6">
				<a href="<?php echo InfoVar::show('youtube'); ?>" target="blank" class="menu-link main-menu-link">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
<?php get_template_part('templates/home', 'banner'); ?>