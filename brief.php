<?php
/**
 * Template Name: Brief Page
 *
 * @package Umentum_Theme
 */
$target_fields = CFS()->get( 'brief_target_audience' );
$software_fields = CFS()->get( 'suggested_softwares' );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="brief-main-content">
                <div class="brief-day-circle">
                    <p class="brief-day-number">5</p>
                </div>
                <h1 class="brief-title"><?php echo CFS()->get('brief_name'); ?></h1>
                <h2 class="brief-description"><?php echo CFS()->get('brief_description'); ?></h2>
                <div class="brief-info-container">
                    <div class="brief-info-block">
                        <p class="brief-info-title">Target<br>Audience</p>
                        <ul class="brief-info-list">
                            <?php foreach ( $target_fields as $field ) : ?>
                                <li class="brief-info-item"><?php echo $field['brief_point']; ?></li>
                            <?php endforeach; ?>
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
                            <?php foreach ( $software_fields as $field ) : ?>
                                <li class="brief-info-item"><?php echo $field['brief_suggested_software']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="cta-button">
                    <div class="cta-rectangle"></div>
                    <div class="cta-rectangle">
                        <a href="<?php echo esc_url(home_url('/dashboard')) ?>">submit</a>
                    </div>
                </div>
                <a class="brief-back-arrow" href="<?php echo esc_url(home_url('/dashboard')) ?>">
                    <img src="../wp-content/themes/umentum/images/back button.svg">
                </a>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>