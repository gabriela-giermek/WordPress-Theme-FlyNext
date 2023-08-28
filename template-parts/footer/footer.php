<?php
/**
 * Footer content
 */

 
//Custom fields
$logo = get_field( 'logo', 'option' );
$footer = get_field( 'footer', 'option' );
$slogan = $footer['slogan'];
$copy = $footer['copy'];
?>

<footer class="footer position-relative">
	<div class="container">
		<div class="footer__top position-relative">
			<div class="row">
				<div class="footer__about col-12 col-md-6 col-lg-5">
					<?php if( !empty( $logo ) ) : ?>
						<img src="<?php echo esc_url($logo['url']); ?>" class="footer__about-logo img-fluid" alt="<?php echo esc_attr($logo['alt']); ?>">
					<?php endif; ?>

					<?php if( $footer && !empty( $slogan ) ) : ?>
						<div class="footer__about-text">
							<?php echo $slogan; ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="footer__menu col-12 col-md-6 col-lg-7">
					<?php get_template_part( 'template-parts/footer/footer-menu' ); ?>
				</div>
			</div>
		</div>

		<div class="footer__bottom position-relative">
			<?php if( have_rows( 'social_media', 'option' ) ) : ?>
				<ul class="footer__media social-media d-flex flex-wrap justify-content-center list-unstyled">
					<?php while( have_rows( 'social_media', 'option' ) ) : the_row(); 
						$icon = get_sub_field( 'icon' );
						$link = get_sub_field( 'link' );
						?>
						<li class="social-media__item">
							<?php if( $link ) : ?>
								<a href="<?php echo $link; ?>" class="social-media__item-link m-0" target="_blank">
									<?php if( !empty( $icon ) ) : ?>
										<img src="<?php echo esc_url($icon['url']); ?>" class="social-media__item-icon img-fluid m-0" alt="<?php echo esc_attr($icon['alt']); ?>">
									<?php endif; ?>
								</a>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php if( $footer && !empty( $copy ) ) : ?>
				<div class="footer__copy text-center">
					<?php echo $copy; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="footer__bg position-absolute"></div>
</footer>