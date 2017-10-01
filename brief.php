<?php
/**
 * Template Name: Brief Page
 *
 * @package Umentum_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="brief-main-content">
                <div class="brief-day-circle">
                    <p class="brief-day-number">5</p>
                </div>
                <h1 class="brief-title">Airline App</h1>
                <h2 class="brief-description">
                    ‘Vancouver Airlines’ is looking to revamp the app design.
The airline wants a login screen that will draw the users to book a flight.
                </h2>
                <div class="brief-info-container">
                    <div class="brief-info-block">
                        <p class="brief-info-title">Target<br>Audience</p>
                        <ul class="brief-info-list">
                            <li class="brief-info-item">25-35</li>
                            <li class="brief-info-item">Tech Savy</li>
                            <li class="brief-info-item">Discount</li>
                        </ul>
                    </div>
                    <div class="brief-info-block">
                        <p class="brief-info-title">Deliverables</p>
                        <p class="brief-list-title">Login screen with:</p>
                        <ul class="brief-info-list">
                            <li class="brief-info-item">Airline Logo</li>
                            <li class="brief-info-item">Username</li>
                            <li class="brief-info-item">Password</li>
                            <li class="brief-info-item">Sign-in Button</li>
                        </ul>
                    </div>
                    <div class="brief-info-block">
                        <p class="brief-info-title">Suggested<br>Software</p>
                        <ul class="brief-info-list">
                            <li class="brief-info-item">Sketch</li>
                        </ul>
                    </div>
                </div>
                <div class="cta-button">
                    <div class="cta-rectangle"></div>
                    <div class="cta-rectangle">
                        <a href="<?php echo esc_url(home_url('/dashboard')) ?>">join</a>
                    </div>
                </div>
                <a class="brief-back-arrow" href="<?php echo esc_url(home_url('/dashboard')) ?>">
                    <img src="../wp-content/themes/umentum/images/back button.svg">
                </a>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>