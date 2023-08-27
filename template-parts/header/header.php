<?php
/**
 * Header content
 */

 
//Custom fields
$logo = get_field( 'logo', 'option' );
$header = get_field( 'header', 'option' );
?>

<header class="header w-100">
	<div class="container h-100">
		<nav class="header__nav d-flex justify-content-between align-items-center h-100">
			<?php if( !empty( $logo ) ) : ?>
				<a href="<?php echo home_url(); ?>" class="header__logo flex-shrink-0 d-block">
					<img src="<?php echo esc_url($logo['url']); ?>" class="header__logo-img img-fluid" alt="<?php echo esc_attr($logo['alt']); ?>">
				</a>
			<?php endif; ?>

			<div class="header__actions d-flex align-items-center">
				<?php if( $header ) :
					$contact = $header['contact'];
					$booking = $header['booking'];
					
					if( $contact ) : 
						$contact_url = $contact['url'];
						$contact_title = $contact['title'];
						$contact_target = $contact['target'] ? $contact['target'] : '_self';
						?>
						<a href="<?php echo esc_url( $contact_url ); ?>" class="header__contact btn btn-link btn-link--white d-none d-lg-flex align-items-center" target="<?php echo esc_attr( $contact_target ); ?>">
							<svg class="header__contact-icon" viewBox="0 0 66 66" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
								<g transform="matrix(2.02367,0,0,1.98353,-235.926,-267.517)">
									<path d="M132.889,134.869C123.898,134.869 116.583,142.184 116.583,151.176C116.583,154.695 118.012,157.855 118.625,159.05C118.911,159.606 119.595,159.826 120.151,159.54C120.708,159.254 120.927,158.571 120.641,158.015C120.102,156.966 118.849,154.2 118.849,151.176C118.849,143.433 125.148,137.135 132.889,137.135C140.632,137.135 146.931,143.433 146.931,151.176C146.931,158.918 140.632,165.217 132.889,165.217C129.862,165.217 127.455,164.168 126.562,163.717C126.297,163.583 125.989,163.559 125.706,163.65L118.57,165.931C117.974,166.121 117.645,166.758 117.835,167.355C117.99,167.836 118.435,168.143 118.914,168.143C119.029,168.143 119.144,168.126 119.26,168.089L125.966,165.946C127.368,166.597 129.838,167.483 132.889,167.483C141.882,167.483 149.197,160.167 149.197,151.176C149.197,142.184 141.882,134.869 132.889,134.869ZM129.674,148.395C129.178,148.777 129.084,149.487 129.466,149.984C129.847,150.48 130.558,150.574 131.054,150.192C131.402,149.925 132.324,149.217 132.189,147.95C132.106,147.197 131.371,146.163 130.769,145.428C129.888,144.354 129.143,143.718 128.556,143.539C128.008,143.368 127.445,143.395 126.885,143.619C125.732,144.08 124.918,144.843 124.53,145.827C124.154,146.786 124.223,147.858 124.73,148.929C125.911,151.425 127.492,153.581 129.426,155.337C129.434,155.344 129.442,155.351 129.449,155.357C131.411,157.092 133.732,158.428 136.349,159.33C136.845,159.5 137.333,159.585 137.8,159.585C138.389,159.585 138.946,159.451 139.454,159.184C140.389,158.69 141.058,157.797 141.389,156.598C141.549,156.017 141.513,155.456 141.285,154.933C141.041,154.367 140.326,153.697 139.161,152.94C138.365,152.423 137.257,151.807 136.496,151.807L136.494,151.807C135.224,151.812 134.621,152.807 134.394,153.182C134.07,153.717 134.241,154.414 134.777,154.738C135.311,155.062 136.008,154.891 136.332,154.356C136.422,154.208 136.479,154.129 136.515,154.088C137.154,154.274 138.866,155.394 139.217,155.865C139.223,155.89 139.224,155.928 139.205,155.997C139.093,156.401 138.862,156.934 138.397,157.18C137.962,157.409 137.444,157.31 137.086,157.187C134.757,156.385 132.697,155.202 130.961,153.671C130.961,153.67 130.96,153.67 130.96,153.669C129.241,152.112 127.833,150.191 126.777,147.961C126.615,147.618 126.46,147.114 126.64,146.656C126.832,146.167 127.336,145.878 127.725,145.723C127.792,145.696 127.829,145.692 127.856,145.696C128.363,145.993 129.664,147.57 129.92,148.185C129.883,148.225 129.811,148.29 129.674,148.395Z" style="fill-rule:nonzero;"/>
								</g>
							</svg>

							<span class="header__contact-text">
								<?php echo esc_html( $contact_title ); ?>
							</span>
						</a>
					<?php endif; ?>

					<?php if( $booking ) : 
						$booking_url = $booking['url'];
						$booking_title = $booking['title'];
						$booking_target = $booking['target'] ? $booking['target'] : '_self';
						?>
						<a href="<?php echo esc_url( $booking_url ); ?>" class="header__book btn btn-outline btn-outline--primary d-none d-sm-inline-block">
							<?php echo esc_html( $booking_title ); ?>
						</a>
					<?php endif; ?>
				<?php endif; ?>

				<div class="header__toggler navbar-toggler flex-shrink-0">
					<div class="navbar-toggler__closed w-100 h-100">
						<div class="navbar-toggler__closed-dots w-100 h-100">
							<span class="navbar-toggler__closed-dot"></span>
							<span class="navbar-toggler__closed-dot"></span>
							<span class="navbar-toggler__closed-dot"></span>
							<span class="navbar-toggler__closed-dot"></span>
							<span class="navbar-toggler__closed-dot"></span>
							<span class="navbar-toggler__closed-dot"></span>
						</div>
						<span class="navbar-toggler__closed-text">
							<?php _e( 'Menu', 'flynext' ); ?>
						</span>
					</div>

					<div class="navbar-toggler__opened">
						<span class="navbar-toggler__opened-bar"></span>
						<span class="navbar-toggler__opened-bar"></span>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>