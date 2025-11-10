<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="page-content" id="skip">

<?php get_template_part('block','on-page-cta'); ?>

    <section id="hp-header">
        <div class="container">
            <div class="columns">
                <div class="column-50" id="header-left">&nbsp;</div>
                <div class="column-50" id="header-right">
                    <div id="content-right">
                        <h1><?php the_field('banner_headline_h1'); ?></h1>
                        <?php the_field('banner_subheadline'); ?>
                        <?php the_field('banner_main_content'); ?>
                        <?php get_template_part('block','cta-block'); ?>
                    </div>
                </div>
                <div class="column-full" id="header-bottom">
                <?php if( have_rows('banner_bottom_content') ): ?>
                <?php while( have_rows('banner_bottom_content') ): the_row(); ?>  
                    <div class="column-25"><?php the_sub_field('bottom_content_text'); ?></div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
                <div class="column-full" id="header-bottom-black">
                    <a href="<?php the_field('banner_bottom_cta_link'); ?>" title="<?php the_field('banner_bottom_cta_text'); ?>"><?php the_field('banner_bottom_cta_text'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <div class="stars">★★★★★</div>
                    <?php $post_object = get_field('testimonial'); ?>
                    <?php if( $post_object ): ?>
                        <?php // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                    <div class="testimonial-container">
                        <?php the_content(); ?>
                        <p class="small sans caps"><strong><?php the_field('testimonial_author'); ?></strong></p>
                        <div class="spacer-separator"></div>
                        <img src="/wp-content/uploads/2022/02/google-reviews-logo.png" alt="Google Reviews logo">
                    </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <div class="spacer-60"></div>
                    <div class="video-box">
                        <div class="video-box-left">
                            <?php the_field('video_content'); ?>
                            <div class="spacer-15"></div>
                            <p class="small caps sans">Time: <?php the_field('video_runtime'); ?></p>
                        </div>
                        <div class="video-box-right">
                        <a href="<?php the_field('video_url'); ?>" title="" data-lity><img src="/wp-content/uploads/2022/03/video_thumb.jpg" alt="Watch this video"></a>
                            <div class="spacer-15"></div>
                            <p class="sans"><a href="<?php the_field('video_url'); ?>" title="" data-lity>Watch video </a><span class="icon-arrow-right"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-2">
        <div class="container">
            <div class="columns">
                <div class="column-full"><h2><?php the_field('panel_2_headline'); ?></h2></div>
                <div class="spacer-separator__short"></div>
                <div class="column-66"><p class="large"><?php the_field('panel_2_left_column_copy'); ?></p></div>
                <div class="column-33"><?php the_field('panel_2_right_column_copy'); ?></div>
            </div>
        </div>
    </section>

    <section id="hp-panel-3">
        <div class="container">
            <div class="columns">
                <div class="column-66 main-left">
                    <h2><?php the_field('panel_3_headline'); ?></h2>
                    <div class="spacer-separator__short"></div>
                    <p class="large"><?php the_field('panel_3_left_column_top_copy'); ?>  </p>
                    <div class="column-66">
                        <?php the_field('panel_3_left_column_bottom_copy'); ?>  
                        <div class="spacer-90 mobile"></div>
                    </div>
                </div>
                <div class="column-33" style="background-image:url('<?php the_field('panel_3_right_column_photo'); ?>');"> 
                    <div class="caption">
                        <p class="sans caps small"><strong><?php the_field('panel_3_right_column_photo_caption'); ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-scroller">
        <div class="container">
            <div class="columns">
                <div class="scroller-content">
                    <p class="featured">Jeremy has been featured by</p>
                    <div id="slider" class="slide">
                        <?php if( have_rows('featured_in') ): ?>
                        <?php while( have_rows('featured_in') ): the_row(); ?>  
                            <div class="featured-text">
                                <?php the_sub_field('featured_in_text'); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-4">
        <div class="container">
            <div class="columns">
                <div class="column-full"><h2><?php the_field('panel_4_headline'); ?></h2></div>
                <div class="spacer-separator__short"></div>
                <div class="column-50">
                <?php $n=1 ?>
                <?php if( have_rows('panel_4_repeater') ): ?>
                <?php while( have_rows('panel_4_repeater') ): the_row(); ?>  
                    <div class="bordered-box">
                        <p class="large">0<?php echo $n; ?>. <?php the_sub_field('panel_4_repeater_headline'); ?></p>
                        <p><?php the_sub_field('panel_4_repeater_body_copy'); ?></p>
                        <span class="child-link">
                            <a href="<?php the_sub_field('panel_4_repeater_page_link'); ?>" title="<?php the_sub_field('panel_4_repeater_link_text'); ?>" class="underlined"><?php the_sub_field('panel_4_repeater_link_text'); ?></a>
                        </span>
                    </div>
                    <?php $n++; ?>
                <?php endwhile; ?>
                <?php endif; ?> 
                <div class="spacer-60"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-5" class="blue">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('panel_5_headline'); ?></h2>
                </div>
                <div class="spacer-separator__short"></div>
                <div class="column-66">
                    <p class="large"><?php the_field('panel_5_top_left_column_copy'); ?></p>
                </div>
                <div class="column-33">
                    <?php the_field('panel_5_top_right_column_copy'); ?>
                </div>
            </div>
        </div>
        <div class="spacer-90"></div>
        <div class="container dkblue">
            <div class="columns">
                <div class="column-33">
                    <h3><?php the_field('panel_5_middle_left_column_copy'); ?></h3>
                </div>
                <div class="column-66">
                    <div class="column-50" id="first">
                        <h3><?php the_field('panel_5_middle_center_column_copy'); ?></h3>
                    </div>
                    <div class="column-50" id="second"> 
                        <?php the_field('panel_5_middle_right_column_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer-90"></div>
        <div class="container">
            <div class="columns">
                <div class="column-full"><h2><?php the_field('panel_5_bottom_headline'); ?></h2></div>
                <div class="spacer-separator__short"></div>
                <div class="column-66">
                    <p class="large"><?php the_field('panel_5_bottom_left_column_copy'); ?></p>
                </div>
                <div class="column-33">
                    <?php the_field('panel_5_bottom_right_column_copy'); ?>
                    <div class="cta-block__thin">
                        <div class="cta-text">
                            <p>Get Your <span>100% Free</span><br>Debt Relief Consult</p>
                        </div>
                        <div class="cta-button">
                            <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn" title="Call Ohio Debt Help today"><?php the_field('global_phone','options'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-6">
        <div class="container">
            <div class="columns">
                <div class="column-full"><h2><?php the_field('panel_6_headline'); ?></h2></div>
                <div class="spacer-separator__short"></div>
                <div class="column-66"><p class="large"><?php the_field('panel_6_left_column_copy'); ?></p></div>
                <div class="column-33">
                <?php if( have_rows('panel_6_repeater') ): ?>
                <?php while( have_rows('panel_6_repeater') ): the_row(); ?>  
                    <div class="bordered-box">
                        <div class="bordered-box-top">
                            <a href="<?php the_sub_field('panel_6_repeater_practice_area_link'); ?>" title="<?php the_sub_field('panel_6_repeater_practice_area_title'); ?>">
                                <p class="sans"><?php the_sub_field('panel_6_repeater_practice_area_title'); ?></p>
                                <span class="arrow-icon"></span>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-7">
        <div class="container">
            <div class="columns">
                <div class="column-full"><h3><?php the_field('panel_7_headline'); ?></h3></div>
                <div class="spacer-separator__short"></div>
                <div class="column-66"><p class="large"><?php the_field('panel_7_left_column_copy'); ?></p></div>
                <div class="column-33"><?php the_field('panel_7_right_column_copy'); ?></div>
                <div class="spacer-60"></div>
                <div class="column-75 center">
                <?php if( have_rows('panel_7_repeater') ): ?>
                <?php while( have_rows('panel_7_repeater') ): the_row(); ?>  
                    <div class="blue-circle-container">
                        <div class="blue-circle">
                            <div class="circle-content">
                            <?php 
                            $image = get_sub_field('panel_7_repeater_circle_icon');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <div class="spacer-15"></div>
                            <?php endif; ?>
                                <p class="large sans"><strong><?php the_sub_field('panel_7_repeater_circle_text'); ?></strong>
                            </div>
                        </div>
                        <div class="blue-circle-caption">
                            <p><?php the_sub_field('panel_7_repeater_circle_caption'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section id="hp-panel-8">
        <div class="container">
            <div class="columns">
                <div class="column-full"><h2><?php the_field('panel_8_headline'); ?></h2></div>
                <div class="spacer-separator__short"></div>
                <div class="spacer-30"></div>
                <div class="column-66 col1">
                    <?php if( have_rows('panel_8_posts_repeater') ): ?>
                    <?php while( have_rows('panel_8_posts_repeater') ): the_row(); ?>
                        <?php $post_object = get_sub_field('panel_8_posts'); ?>
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
                    <?php endif; ?>
                    <div class="spacer-30"></div>
                    <a href="/blog/" title="View All Blog Articles" class="btn">View All Blog Articles</a>
                </div>
                <div class="column-33"><?php the_field('panel_8_right_column_copy'); ?></div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>