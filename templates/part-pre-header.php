<div class="pre-header">
	<div class="container">
		<div id="pre-list-container" class="pre-header-container">
			<div class="text-pre-header">
				<?php
				$diaSemana = strftime("%u");
				
				$dia = strftime("%d");
				$mes = strftime("%m");
				$ano = strftime("%Y");
				
				$dataFull = getNameDate($diaSemana, 'day') . ', ' . $dia . ' de ' . getNameDate($mes, 'month') . ' de ' . $ano;

				$dataMobile = strftime("%d/%m/%Y")
				
				?>
				<span class="d-none d-md-block"><?php echo $dataFull; ?></span><span class="d-block d-md-none"><?php echo $dataMobile; ?></span>
			</div>
		</div>
		<div id="pre-socials-container" class="pre-socials-container">
			<ul id="pre-list-ul" class="pre-header-list">
				<li id="nav-menu-item-6">
					<a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
						<i class="fab fa-facebook-square"></i>
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
				<li id="nav-menu-item-6">
					<a href="<?php echo InfoVar::show('twitter'); ?>" target="blank" class="menu-link main-menu-link">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>