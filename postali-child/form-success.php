<?php
/**
 * Template Name: Form Success
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="page-content" id="skip">

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
                    Thank<br>You!
                    </span>
                </div>
                <div class="column-66 block">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="spacer-90"></div>
                </div>
            </div>
        </div>
    </section>



</div><!-- #front-page -->

<?php get_footer();?>