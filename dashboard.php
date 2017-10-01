<?php
/**
 * Template Name: Dashboard Page
 *
 * @package Umentum_Theme
 */

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
                <h1 class="dashboard-welcome">Welcome, Elan</h1>
                <h2 class="dashboard-quote">"One day, or day one. Your choice."</h2>
                
                <div class="cta-button">
                    <div class="cta-rectangle"></div>
                    <div class="cta-rectangle">
                        <a href="<?php echo esc_url(home_url('/brief')) ?>">let's get it!</a>
                    </div>
                </div>

                <div class="dashboard-icons">
                    <div class="dashboard-icon-block">
                        <div class="dashboard-icon-wrapper">
                            <img src="../wp-content/themes/umentum/images/comment2a.png"/>
                        </div>
                        <a href="#">feedback</a>
                    </div>
                    <div class="dashboard-icon-block">
                        <div class="dashboard-icon-wrapper">
                            <img src="../wp-content/themes/umentum/images/calendar3.png"/>
                        </div>
                        <a href="#">progress</a>
                    </div>
                    <div class="dashboard-icon-block">
                        <div class="dashboard-icon-wrapper">
                            <img src="../wp-content/themes/umentum/images/gallery.png"/>
                        </div>
                        <a href="#">gallery</a>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>
<section class="bottom-extension">
    <div class="bottom-ext-side"></div>
</section>