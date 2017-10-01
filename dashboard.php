<?php
/**
 * Template Name: Dashboard Page
 *
 * @package Umentum_Theme
 */

$fields = CFS()->get( 'dashboard_icons' );


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="dashboard-header">
                <p class="dashboard-day">day</p>
                <div class="dashboard-circle">
                    <p class="dashboard-day-number">5</p>
                </div>
            </header>
            <section class="main-content">
                <h1 class="dashboard-welcome">Welcome, <?php echo CFS()->get('dashboard_welcome_name'); ?></h1>
                <h2 class="dashboard-quote">"<?php echo CFS()->get('dashboard_quote'); ?>"</h2>
                
                <div class="cta-button">
                    <div class="cta-rectangle"></div>
                    <div class="cta-rectangle">
                        <a href="<?php echo esc_url(home_url('/brief')) ?>">let's get it!</a>
                    </div>
                </div>
                <div class="dashboard-icons">
                    <?php foreach ( $fields as $field ) : ?>
                    <div class="dashboard-icon-block">
                        <a href="#<?php //echo esc_url(home_url().'/'.$field['dashboard_icon_link']); ?>">
                            <div class="dashboard-icon-wrapper">
                                <img src="<?php echo $field['dashboard_icon_picture']; ?>"/>
                            </div>
                            <p class="dashboard-icon-link"><?php echo $field['dashboard_icon_link'] ?></p>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
    <section class="dashboard-feedback-overlay">
        <div class="db-overlay-body">
            <div class="db-overlay-inner-body">
                <h1>it's time to give feedback!</h1>
                <p>Sharing is caring.  First, assess someone else’s work, then see what others have to say about yours.</p>
                <div class="cta-button">
                    <div class="cta-rectangle"></div>
                    <div class="cta-rectangle">
                        <a href="<?php echo esc_url(home_url('/feedback')) ?>">okay!</a>
                    </div>
                </div>
                <div class="db-overlay-back-arrow">
                    <img src="../wp-content/themes/umentum/images/back button.svg">
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>