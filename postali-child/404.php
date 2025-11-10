<?php
/**
 * Template Name: 404
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="page-content">

<?php get_template_part('block','on-page-cta'); ?>

    <section class="page-banner">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                </div>
                <div class="spacer-break"></div>
            </div>
        </div>
    </section>

    <section class="panel-1" id="section_1">
        <div class="container">
            <div class="columns">
                <div class="column-33">
                    <span class="section-title">
                    Whoops,<br>Sorry!
                    </span>
                </div>
                <div class="column-66 block">
                    <h1>404: Page not found.</h1>
                    <div class="spacer-separator__short"></div>
                    <p>We weren't able to find that page. Please click <a href="/" title="Return to the homepage" class="underlined">here</a> to return to the homepage.

                </div>
            </div>
        </div>
    </section>



</div><!-- #front-page -->

<?php get_footer();?>