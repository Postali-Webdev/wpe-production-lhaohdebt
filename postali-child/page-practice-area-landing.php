<?php
/**
 * Template Name: Practice Area Landing
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

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
        <div class="container">
            <div class="columns">
                <div class="column-33">
                    <?php the_field('intro_copy'); ?>
                </div>
                <div class="column-66">
                <?php if( have_rows('practice_areas') ): ?>
                <?php while( have_rows('practice_areas') ): the_row(); ?>  
                    <?php 
                        $parent_title = get_sub_field('practice_area_title');
                        $parent_link = get_sub_field('practice_area_page_link');
                    ?>
                    <div class="bordered-box">
                        <div class="bordered-box-top">
                            <a href="<?php echo $parent_link; ?>" title="">
                                <p class="sans"><?php echo $parent_title; ?></p>
                                <span class="arrow-icon"></span>
                            </a>
                        </div>
                        <div class="bordered-box-bottom">
                            <div class="child-links"><a href="<?php echo $parent_link; ?>" title="" class="underlined"><?php echo $parent_title; ?> (Main)</a></div>
                            <?php if( have_rows('practice_area_child_pages') ): ?>
                            <?php while( have_rows('practice_area_child_pages') ): the_row(); ?>  
                                    <div class="child-links"><a  href="<?php the_sub_field('child_page_link'); ?>" title="" class="underlined"><?php the_sub_field('child_page_title'); ?></a></div>
                            <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                <div class="spacer-60"></div>
                </div>
            </div>
        </div>
    </section>
    
</div><!-- #front-page -->

<?php get_footer();?>