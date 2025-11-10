<?php
/**
 * Contact Template
 * Template Name: Contact
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="page-content" id="skip">

<?php get_template_part('block','on-page-cta'); ?>

    <section class="breadcrumbs">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                </div>
            </div>
        </div>
    </section>

    <section class="panel-1">
        <div class="container wide">
            <div class="columns">
                <div class="column-33" style="background-image:url('<?php the_field('left_column_image'); ?>');"> 
                    <div class="caption">
                        <p class="sans caps small"><strong><?php the_field('left_column_image_caption'); ?></strong></p>
                    </div>
                </div>
                <div class="column-66">
                    <div id="tabs-container">
                        <div class="tabs-content">
                            <div id="tab1" class="hide">
                                <h1>Contact Us</h1>
                                <?php the_field('tab_1_content'); ?>
                                <span class="cta-block">
                                    <span class="cta-text">
                                        <p>Get Your <span>100% Free</span><br>Debt Relief Consult</p>
                                    </span>
                                    <span class="cta-button">
                                        <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn" title="Call Ohio Debt Help today"><?php the_field('global_phone','options'); ?></a>
                                    </span>
                                </span>
                                <span class="spacer-90"></span>
                                <span class="contact-tabs">
                                    <ul>
                                        <li><span id="#tab2" class="btn"><?php the_field('tab_1_button_text'); ?>  <span class="icon-arrow-right"></span></span></li>                                
                                    </ul>
                                </span>
                            </div>
                            <div id="tab2" class="hide">
                                <?php the_field('tab_2_content'); ?>
                                <span class="contact-tabs">
                                    <ul>
                                        <li class="active"><span id="#tab1"><span class="icon-arrow-left"></span> <p class="underlined sans"><?php the_field('tab_2_button_text'); ?></p></span></li> 
                                    </ul>
                                </span>
                            </div<
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </section>

    <section class="tan">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('bottom_panel_headline'); ?></h2>
                </div>
                <div class="spacer-separator__short"></div>
                <div class="column-33 block">
                    <?php the_field('bottom_panel_content'); ?>
                </div>
                <div class="column-66">
                    <iframe src="<?php the_field('bottom_panel_map_embed'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    
</div><!-- #front-page -->

<?php get_footer();?>