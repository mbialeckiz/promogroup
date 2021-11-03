<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

	<div class="container" id="top-bar-menu">
		<div class="site-header__body">

		<div class="site-header__logoholder">
			<a href="<?php echo esc_url(
       home_url()
   ); ?>" rel="home" class="site-header__title" title="Promo Group AS">
			Promo <span class="site-header__title-span">Group</span> AS</a>
		</div>

		<div class="site-header__nav-holder">
			<div class="site-header__nav-content">

				<div class="title-bar" data-responsive-toggle="main-navigation" data-hide-for="large">
					<button class="menu-icon" type="button" data-toggle="main-navigation"></button>
					<div class="title-bar-title">Menu</div>
				</div>

				<div class="top-bar" id="main-navigation">
					<nav class="main-navigation vertical menu nav dropdown-pane" id="mobile-dropdown" data-dropdown-menu>
						<?php joints_top_nav(); ?>
						<div class="site-header__cta--mobile">
							<a href="/for-jobbsokere/" type="button" class="button site-header__cta-link" data-toggle="modal" data-target="for-jobbsokere">
								Registrer din CV
							</a>
						</div>
					</nav>
					<nav class="main-navigation nav desktop-dropdown medium-centered show-for-large" data-hide-for="medium">
						<?php joints_top_nav(); ?> 
					</nav>
				</div>


			</div>
		</div>

		<div class="site-header__cta show-for-large">
			<a href="#form" type="button" class="button site-header__cta-link" data-toggle="modal" data-target="#form....">
				Registrer din CV
			</a>
		</div>

	</div>

	<!--<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			 <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> 
			<li><a data-toggle="off-canvas"><?php _e('Menu', 'jointswp'); ?></a></li>
		</ul>
	</div>-->
</div>