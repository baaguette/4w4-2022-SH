<?php
/**
 * Plugin Solutions & Features Page
 *
 * @package WP News and Scrolling Widgets
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Taking some variables
$popup_add_link = add_query_arg( array( 'post_type' =>WPNW_POST_TYPE ), admin_url( 'post-new.php' ) );
?>

<div id="wrap">
	<div class="wpnw-sf-wrap">
		<div class="wpnw-sf-inr">
			<!-- Start - Welcome Box -->
			<div class="wpnw-sf-welcome-wrap">
				<div class="wpnw-sf-welcome-inr">
					<div class="wpnw-sf-welcome-left">
						<div class="wpnw-sf-subtitle">Getting Started</div>
						<h2 class="wpnw-sf-title">Welcome to News</h2>
						<p class="wpnw-sf-content">Display customizable news layouts, vertical scrolling news widgets in the most engaging and customized way.</p>
						<a href="<?php echo esc_url( $popup_add_link ); ?>" class="wpnw-sf-btn">Launch News and Scrolling Widgets</a></br> <b>OR</b> </br><a href="<?php echo WPNW_PLUGIN_LINK_WELCOME; ?>"  target="_blank" class="wpnw-sf-btn wpnw-sf-btn-orange">Grab Now Pro Features</a>
						<div class="wpnw-rc-wrap">
							<div class="wpnw-rc-inr wpnw-rc-bg-box">
								<div class="wpnw-rc-icon">
									<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
								</div>
								<div class="wpnw-rc-cont">
									<h3>14 Days Refund Policy. 0 risk to you.</h3>
									<p>14-day No Question Asked Refund Guarantee</p>
								</div>
							</div>
							<div class="wpnw-rc-inr wpnw-rc-bg-box">
								<div class="wpnw-rc-icon">
									<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
								</div>
								<div class="wpnw-rc-cont">
									<h3>Include Done-For-You News Setup</h3>
									<p>Our  experts team will design 1 free News for you as per your need.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wpnw-sf-welcome-right">
						<div class="wpnw-sf-fp-ttl">Free vs Pro</div>
						<div class="wpnw-sf-fp-box-wrp">
							<div class="wpnw-sf-fp-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wpnw-sf-box-ttl">1 Designs for News</div>
								<div class="wpnw-sf-tag">Free</div>
							</div>
							<div class="wpnw-sf-fp-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wpnw-sf-box-ttl">1 Designs for News List</div>
								<div class="wpnw-sf-tag">Free</div>
							</div>
							<div class="wpnw-sf-fp-box">
								<i class="dashicons dashicons-category"></i>
								<div class="wpnw-sf-box-ttl">Display Slides for Particular Categories</div>
								<div class="wpnw-sf-tag">Free</div>
							</div>
							<div class="wpnw-sf-fp-box">
								<i class="dashicons dashicons-block-default"></i>
								<div class="wpnw-sf-box-ttl">Gutenbreg Block Support</div>
								<div class="wpnw-sf-tag">Free</div>
							</div>
							<div class="wpnw-sf-fp-box">
								<i class="dashicons dashicons-tagcloud"></i>
								<div class="wpnw-sf-box-ttl">3 Design for News Widget</div>
								<div class="wpnw-sf-tag">Free</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-art"></i>
								<div class="wpnw-sf-box-ttl">120+ Designs</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-slides"></i>
								<div class="wpnw-sf-box-ttl">8 – (Post Grid, Slider, Carousel, List, Ticker, GridBox, GridBox Slider, Masonry)</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-html"></i>
								<div class="wpnw-sf-box-ttl">WP Templating Features </div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-layout"></i>
								<div class="wpnw-sf-box-ttl">Elementor, Beaver, SiteOrigin, and VC Page Builder Support</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-format-image"></i>
								<div class="wpnw-sf-box-ttl">Image Lazyload for Slider</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-align-center"></i>
								<div class="wpnw-sf-box-ttl">Center Mode</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-editor-rtl"></i>
								<div class="wpnw-sf-box-ttl">Slider RTL Support</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-move"></i>
								<div class="wpnw-sf-box-ttl">Drag & Drop Slide Order Change</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-admin-links"></i>
								<div class="wpnw-sf-box-ttl">Custom Read More link for Post</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
							<div class="wpnw-sf-fp-box wpnw-sf-pro-box">
								<i class="dashicons dashicons-shortcode"></i>
								<div class="wpnw-sf-box-ttl">Shortcode Generator</div>
								<div class="wpnw-sf-tag">Pro</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Welcome Box -->

			<!-- Start - WP News and Scrolling Widgets - Features -->
			<div class="wpnw-features-section">
				<div class="wpnw-center wpnw-features-ttl">
					<h2 class="wpnw-sf-ttl">Powerful Pro Features, Simplified</h2>
				</div>
				<div class="wpnw-features-section-inr">
					<div class="wpnw-features-box-wrap">
						<ul class="wpnw-features-box-grid">
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/blog-grid.png" /></div>
							News Grid View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/slider.png" /></div>
							News Slider View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/blog-list-view.png" /></div>
							News List View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/carousel.png" /></div>
							News Ticker View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/centermode.png" /></div>
							News Centermode View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/grid-box.png" /></div>
							News Gridbox View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/grid-box.png" /></div>
							News Gridbox Slider View</li>
							<li>
							<div class="wpnw-popup-icon"><img src="<?php echo WPNW_URL; ?>assets/images/popup-icon/blog-masonry.png" /></div>
							News Masonry View</li>
						</ul>
					</div>
					<a href="<?php echo WPNW_PLUGIN_LINK_WELCOME; ?>" target="_blank" class="wpnw-sf-btn wpnw-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Grab Now Pro Features</a>
					<div class="wpnw-rc-wrap">
						<div class="wpnw-rc-inr wpnw-rc-bg-box">
							<div class="wpnw-rc-icon">
								<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
							</div>
							<div class="wpnw-rc-cont">
								<h3>14 Days Refund Policy. 0 risk to you.</h3>
								<p>14-day No Question Asked Refund Guarantee</p>
							</div>
						</div>
						<div class="wpnw-rc-inr wpnw-rc-bg-box">
							<div class="wpnw-rc-icon">
								<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
							</div>
							<div class="wpnw-rc-cont">
								<h3>Include Done-For-You News Setup</h3>
								<p>Our  experts team will design 1 free News for you as per your need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Logo Showcase - Features -->

			<!-- Start - Testimonial Section -->
			<div class="wpnw-sf-testimonial-wrap">
				<div class="wpnw-center wpnw-features-ttl">
					<h2 class="wpnw-sf-ttl">Looking for a Reason to Use News? Here are 60+...</h2>
				</div>
				<div class="wpnw-testimonial-section-inr">
					<div class="wpnw-testimonial-box-wrap">
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">Simple and elegant</h3>
							<div class="wpnw-testimonial-desc">I have used this for 2 years and it just works! Very easy to use, and if you need support, they do respond. A big thanks to the developers.</div>
							<div class="wpnw-testimonial-clnt">@poinsy</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">Good plugin and helpful support</h3>
							<div class="wpnw-testimonial-desc">Useful and customizable plugin. Support questions are answered prompt and knowledgeable.</div>
							<div class="wpnw-testimonial-clnt">@njvermeer</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">great plugin and quick support</h3>
							<div class="wpnw-testimonial-desc">Awesome plugin, easy setup and a lot of graphic layouts. Quick and highly trained support</div>
							<div class="wpnw-testimonial-clnt">@matteotacconi</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">Great plugin and helpful support</h3>
							<div class="wpnw-testimonial-desc">I used this plug-in for my website and it was great. Also Ketan Patel (@patelketan) from the support team was very helpful. Highly recommend.</div>
							<div class="wpnw-testimonial-clnt">@nadiasakkaf</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">Quick and on the spot</h3>
							<div class="wpnw-testimonial-desc">Had a problem today with their news plugin. Sent them an e-mail at support@. Within a quarter of an hour they sent me the solution. Great plugin, perfect support!</div>
							<div class="wpnw-testimonial-clnt">@bertbulder</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
						<div class="wpnw-testimonial-box-grid">
							<h3 class="wpnw-testimonial-title">Fantastic support</h3>
							<div class="wpnw-testimonial-desc">Solved my problem in one minute. Perfekt support via livechat! Thank you, Maharshi!</div>
							<div class="wpnw-testimonial-clnt">@manuelu</div>
							<div class="wpnw-testimonial-rating"><img src="<?php echo WPNW_URL; ?>assets/images/rating.png" /></div>
						</div>
					</div>
					<a href="https://wordpress.org/support/plugin/sp-news-and-widget/reviews/?filter=5" target="_blank" class="wpnw-sf-btn"><span class="dashicons dashicons-star-filled"></span> View All Reviews</a> OR <a href="<?php echo WPNW_PLUGIN_LINK_WELCOME; ?>"  target="_blank" class="wpnw-sf-btn wpnw-sf-btn-orange">Grab Now Pro Features</a>
					<div class="wpnw-rc-wrap">
						<div class="wpnw-rc-inr wpnw-rc-bg-box">
							<div class="wpnw-rc-icon">
								<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/14-days-money-back-guarantee.png" alt="14-days-money-back-guarantee" title="14-days-money-back-guarantee" />
							</div>
							<div class="wpnw-rc-cont">
								<h3>14 Days Refund Policy. 0 risk to you.</h3>
								<p>14-day No Question Asked Refund Guarantee</p>
							</div>
						</div>
						<div class="wpnw-rc-inr wpnw-rc-bg-box">
							<div class="wpnw-rc-icon">
								<img src="<?php echo esc_url( WPNW_URL ); ?>assets/images/popup-icon/popup-design.png" alt="popup-design" title="popup-design" />
							</div>
							<div class="wpnw-rc-cont">
								<h3>Include Done-For-You News Setup</h3>
								<p>Our  experts team will design 1 free News for you as per your need.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Testimonial Section -->
		</div>
	</div><!-- end .wpnw-sf-wrap -->
</div><!-- end .wrap -->