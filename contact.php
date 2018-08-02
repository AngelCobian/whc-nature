<?php
/**
 * The template for displaying all single posts
 *
 *  Template Name: Contact Us
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hike
 */

get_header();
?>

	<div id="primary" class="content-area col-12  ">
    <h1>Contact Us!!</h1>
		<main id="main" class="site-main row">
        <div class="col-md-12 col-sm-12 mb-2">
        <?php echo do_shortcode( '[contact-form-7 id="32" title="Contact form 1"]' ); ?>
        </div>
        <div class="col-md-12 mb-5">
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
        </div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
