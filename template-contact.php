<?php 
/*
Template name: Contato
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-contact">
				<?php echo do_shortcode('[contact-form-7 id="59" title="Contato"]'); ?>
			</div>
			<!--
			<div class="col-md-6 info-contact">
				<div class="list-info-contacts">
					<a href="https://www.facebook.com//">
						<div class="single-contact">
							<div class="contact-icon">
								<i class="icons icon-red icon-facebook"></i>
							</div>
							<div class="contact-icon">
								/
							</div>
						</div>
					</a>
					<a href="https://www.instagram.com//">
						<div class="single-contact">
							<div class="contact-icon">
								<i class="icons icon-red icon-instagram"></i>
							</div>
							<div class="contact-icon">
								@
							</div>
						</div>
					</a>
				</div>
			</div>
			-->
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>