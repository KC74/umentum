<?php
/**
 * Template Name: Feedback Page
 *
 * @package Umentum_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <header class="feedback-header">
                <p class="feedback-brief">Brief:</p>
                <p class="feedback-brief-description">Vancouver Airlines is looking to revamp the app design. The airline wants a login screen to draw users (25-35 year old, tech-savvy budgeters) to book a flight with their app. </p>
            </header>
            <section class="feedback-main-content">
                <div class="feedback-work-area">
                    <img src="../wp-content/themes/umentum/images/demo_screen.png"/>
                </div>
                <div class="feedback-wrapper">
                    <p class="feedback-description">Leave quality feedback to help others grow with you.</p>
                    <h2 class="feedback-category">Typography Rating:</h2>
                    <img src="../wp-content/themes/umentum/images/rating_bubbles.png"/>
                    <div class="feedback-textarea-container">
                        <div class="feedback-textarea"></div>
                        <div class="feedback-textarea">
                            <p class="feedback-text">
                            Please elaborate on your rating for this section. Be as detailed as possible! Some
things to consider are hierarchy, pairings, font personality & kerning. 
                            </p>
                        </div>
                    </div>
                    <div class="cta-button">
                        <div class="cta-rectangle"></div>
                        <div class="cta-rectangle">
                            <a href="<?php echo esc_url(home_url('/dashboard')) ?>">next</a>
                        </div>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>