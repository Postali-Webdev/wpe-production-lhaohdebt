<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
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

    <section id="blog-holder">
        <div class="container blog-posts">
            <div class="columns">
                <div class="column-33">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php get_template_part('block','blog-filters'); ?>
                </div>
                <div class="column-66">
                    <?php while( have_posts() ) : the_post(); ?>
                    <div class="bordered-box">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                            <div class="bordered-box-top">
                                <p class="sans"><?php the_title(); ?></p>
                                <span class="arrow-icon"></span>
                            </div>
                            <div class="bordered-box-bottom">
                                <div class="column-full">
                                    <div class="blog-detail-block">
                                        <p><span>Written By:</span><br>Jeremy Heck</p>
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
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60 mobile"></div>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div><!-- #content -->
    </div>
    
</div>

<?php get_footer(); ?>
