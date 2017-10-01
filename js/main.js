/**
 * main.js
 */

 (function($) {

    $('.dashboard-icon-block').on('click', function() {
        $('.dashboard-feedback-overlay').css({'display': 'flex'});
        // if($('.dashboard-icon-block').children('.a').children('.dashboard-icon-link').val() === 'feedback') {
        // }
    })

    $('.db-overlay-back-arrow').on('click', function() {
        $('.dashboard-feedback-overlay').css({'display': 'none'});
    })

 })( jQuery );