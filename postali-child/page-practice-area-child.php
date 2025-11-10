<?php
/**
 * Template Name: Practice Area Child
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
                <div class="column-33 col1">
                    <span class="section-title">
                        <?php the_field('parent_category'); ?>
                    </span>
                </div>
                <div class="column-66 block">
                    <h1><?php the_title(); ?></h1>
                    <div class="spacer-separator__short"></div>
                <?php if( have_rows('panel_1_content_blocks') ): ?>
                <?php while( have_rows('panel_1_content_blocks') ): the_row(); ?>  
                    <?php the_sub_field('content'); ?>
                    <?php if (get_sub_field('add_video')) { ?>
                        <div class="spacer-30"></div>
                        <div class="video-box">
                            <div class="video-box-left">
                                <?php the_sub_field('video_content'); ?>
                                <div class="spacer-15"></div>
                                <p class="small caps sans">Time: <?php the_sub_field('video_runtime'); ?></p>
                            </div>
                            <div class="video-box-right">
                            <a href="<?php the_sub_field('video_url'); ?>" title="" data-lity><img src="/wp-content/uploads/2022/03/video_thumb.jpg" alt="Watch this video"></a>
                                <div class="spacer-15"></div>
                                <p class="sans"><a href="<?php the_sub_field('video_url'); ?>" title="" data-lity>Watch video </a><span class="icon-arrow-right"></span></p>
                            </div>
                        </div>
                        <div class="spacer-90"></div>
                    <?php } ?>
                <?php endwhile; ?>
                <?php endif; ?> 

                <div class="spacer-60"></div>

                <?php if( have_rows('panel_1_related_reading') ): ?>
                <div id="related-reading">
                <h3>Related Reading</h3>
                <?php while( have_rows('panel_1_related_reading') ): the_row(); ?>
                    <?php $post_object = get_sub_field('panel_1_related_reading_posts'); ?>
                    <?php if( $post_object ): ?>
                        <?php // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <div class="bordered-box">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                                <div class="bordered-box-top">
                                    <p class="sans"><?php the_title(); ?></p>
                                    <span class="arrow-icon"></span>
                                </div>
                                <div class="bordered-box-bottom">
                                    <div class="column-full">
                                        <div class="blog-detail-block">
                                            <p><span>Written By:</span><br><?php the_author(); ?></p>
                                        </div>
                                        <div class="blog-detail-block">
                                            <p><span>Date Posted:</span><br> <?php the_date( 'm.d.Y' ); ?></p>
                                        </div>
                                        <div class="blog-detail-block">
                                            <p>
                                                <span>Category:</span><br>
                                                <?php
                                                // to display categories without a link
                                                foreach((get_the_category()) as $category) {
                                                    echo '<span class="category">' . $category->cat_name . '</span>';
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <div class="spacer-60"></div>

                <?php if( get_field('add_more_resources')) { ?>
                    <h3><?php the_field('panel_1_more_resources_title'); ?></h3>
                    <div class="spacer-separator__short"></div>
                    <?php if( have_rows('panel_1_more_resources') ): ?>
                        <div class="child-links-container">
                        <?php while( have_rows('panel_1_more_resources') ): the_row(); ?>  
                            <div class="child-links"><a href="<?php the_sub_field('page_link'); ?>" title="<?php the_sub_field('page_title'); ?>" class="underlined"><?php the_sub_field('page_title'); ?></a></div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?> 
                <?php } ?>

                </div>
            </div>
        </div>
    </section>



</div><!-- #front-page -->

<?php get_footer();?>