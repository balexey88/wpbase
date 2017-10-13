<div class="section slide-five">
		<!-- box-letter form -->
		<div class="box-letter" id="letter">
				<div class="container">
						<div class="headings">
								<h1 class="box-subtitle">Discuss your project with us</h1>
						</div>
						<div class="text-cta text-center">
								<p class="">To get a free quote and discuss your project fill in the form</p>
						</div>
						<div class="contactus-form">
								<div class="letter">
										<div class="stamp"></div>
										<div class="contactus-form-inner">
											<?php
											echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]');
											?>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- /box-letter form -->
</div>

				<div class="section fp-auto-height">
						<!-- footer -->
						<footer class="footer">
								<div class="container">
										<div class="row align-items-center">
												<div class="col">
														<p class="copy"><?=get_option('abv_footer_copy');?></p>
												</div>
												<div class="col">
														<!-- list-social -->
														<ul class="list-social">
																<li>
																		<a class=link-fb href="<?=get_option('abv_footer_fb');?>" target="_blank">
																				<svg class="icon icon-fb" width="1em" height="1em">
																						<use xlink:href="<?=get_template_directory_uri();?>/images/svg-symbols.svg#fb" width="100%" height="100%"></use>
																				</svg>
																		</a>
																</li>
																<li>
																		<a class=link-in href="<?=get_option('abv_footer_linkedin');?>" target="_blank">
																				<svg class="icon icon-in" width="1em" height="1em">
																						<use xlink:href="<?=get_template_directory_uri();?>/images/svg-symbols.svg#in" width="100%" height="100%"></use>
																				</svg>
																		</a>
																</li>
														</ul>

												</div>
										</div>
								</div>
						</footer>
						<!-- /footer -->
				</div>

			<?php if ( is_front_page() ) : ?>
			</div>
			<?php endif; ?>
		</main>
	</div>
	<?php wp_footer(); ?>
</body>

</html>
