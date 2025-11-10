<?php
/**
 * Template Name: Practice Area Parent
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="page-content" id="skip">

<?php get_template_part('block','on-page-cta'); ?>

    <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <section class="page-banner" style="background-image:url('<?php echo esc_attr( $background_img[0] ); ?>');">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                </div>
                <div class="spacer-break"></div>
                <div class="column-50">
                    <h1><?php the_field('banner_headline'); ?></h1>
                    <div class="spacer-separator__short"></div>
                    <?php the_field('banner_subheading'); ?>
                    <?php get_template_part('block','cta-block'); ?>
                </div>
            </div>
            <div class="spacer-60"></div>
            <a class="banner-read-more" href="#section_1">
                <span class="icon-arrow-down"></span>
            </a>
            <div class="spacer-15"></div>
        </div>
    </section>

    <div class="mobile-bg" style="background-image:url('<?php echo esc_attr( $background_img[0] ); ?>');">
        &nbsp;
    </div>
   
    <?php if( get_field('panel_1_add_anchor_label')) { 
        $str1 = get_field('panel_1_anchor_label');
    } ?>
    <?php if( get_field('panel_3_add_anchor_label')) { 
        $str3 = get_field('panel_3_anchor_label');
    } ?>
    <?php if( get_field('panel_4_add_anchor_label')) { 
        $str4 = get_field('panel_4_anchor_label');
    } ?>
    <?php if( get_field('panel_5_add_anchor_label')) { 
        $str5 = get_field('panel_5_anchor_label');
    } ?>

    <div class="on-page-nav">
        <ul class="on-page-nav">
            <li id="on-page-1" class="active"><a href="#section_1">01. <?php echo $str1; ?></a></li>
            <li id="on-page-2"><a href="#section_2">02. <?php echo $str3; ?></a></li>
            <li id="on-page-3"><a href="#section_3">03. <?php echo $str4; ?></a></li>
            <li id="on-page-4"><a href="#section_4">04. <?php echo $str5; ?></a></li>
            <li id="on-page-5"><a href="#contact_footer">05. Contact Us Today</a></li>
        </ul>
    </div>

    <div id="on-page-nav" class="mobile-on-page-nav">
        <ul>
			<li>
				<a class="expand"><span>On This Page</span> &nbsp; <span class="icon-expand"></span></a>
				<div class="detail">
                    <div class="links">
                        <a href="#section_1">01. <?php echo $str1; ?></a>
                        <a href="#section_2">02. <?php echo $str3; ?></a>
                        <a href="#section_3">03. <?php echo $str4; ?></a>
                        <a href="#section_4">04. <?php echo $str5; ?></a>
                        <a href="#contact_footer">05. Contact Us Today</a>
                    </div>
                </div>
			</li>
		</ul>
	</div>

    <div class="offset"></div>

    <section class="panel-1" id="section_1">
        <div class="container">
            <div class="columns">
            <?php if( have_rows('panel_1_content_blocks') ): ?>
                <div class="column-50 center block">
                <?php while( have_rows('panel_1_content_blocks') ): the_row(); ?>  
                    <?php the_sub_field('content'); ?>
                    <?php if (get_sub_field('add_video')) { ?>
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
                </div>
            <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="panel-2 tan">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <div class="stars">★★★★★</div>
                    <?php $post_object = get_field('panel_2_testimonial'); ?>
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
                </div>
            </div>
        </div>
    </section>

    <section class="panel-1" id="section_2">
        <div class="container">
            <div class="columns">
            <?php if( have_rows('panel_3_content_blocks') ): ?>
                <div class="column-50 center block">
                <?php while( have_rows('panel_3_content_blocks') ): the_row(); ?>  
                    <?php the_sub_field('content'); ?>
                    <?php if (get_sub_field('add_video')) { ?>
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
                </div>
            <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="panel-4 tan" id="section_3">
        <div class="container">
            <div class="columns">
                <div class="column-66 center">
                    <h3>Related Reading</h3>
                    <?php if( have_rows('panel_4_related_reading') ): ?>
                    <?php while( have_rows('panel_4_related_reading') ): the_row(); ?>
                        <?php $post_object = get_sub_field('panel_4_related_reading_posts'); ?>
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
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-5" id="section_4">
        <div class="container">
            <div class="columns">
            <?php if( have_rows('panel_5_content_blocks') ): ?>
                <div class="column-50 center block">
                <?php while( have_rows('panel_5_content_blocks') ): the_row(); ?>  
                    <?php the_sub_field('content'); ?>
                    
                    <?php if( have_rows('panel_5_faqs_repeater') ): ?>
                    <div class="accordions">
                        <?php while( have_rows('panel_5_faqs_repeater') ) : the_row(); 
                            $headline = get_sub_field('accordion_title');
                            $content = get_sub_field('accordion_content'); ?>
                            <div class="accordions_title"><h3><?php echo $headline; ?></h3><span></span></div>
                            <div class="accordions_content"><?php echo $content; ?></div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <div class="spacer-90"></div>
                    <?php if( get_field('add_more_resources')) { ?>
                        <h3><?php the_field('panel_5_more_resources_title'); ?></h3>
                        <div class="spacer-separator__short"></div>
                        <?php if( have_rows('panel_5_more_resources') ): ?>
                            <div class="child-links-container">
                            <?php while( have_rows('panel_5_more_resources') ): the_row(); ?>  
                                <div class="child-links"><a href="<?php the_sub_field('page_link'); ?>" title="<?php the_sub_field('page_title'); ?>" class="underlined"><?php the_sub_field('page_title'); ?></a></div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?> 
                    <?php } ?>
                <?php endwhile; ?>
                </div>
            <?php endif; ?> 
            <div class="spacer-60"></div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>