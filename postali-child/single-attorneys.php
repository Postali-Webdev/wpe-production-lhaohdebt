<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */


get_header();?>

<div class="page-content" id="skip">

<?php get_template_part('block','on-page-cta'); ?>

    <section class="breadcrumbs">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <p id="breadcrumbs"><span><span><a href="/">Home</a> / <a href="/attorneys/">Our Attorneys</a> / <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p> 
                </div>
            </div>
        </div>
    </section>

    <section class="panel-1">
        <div class="container">            
            <div class="columns skinny">
                <div class="column-33">
                    <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />                        
                </div>
                <div class="column-66">
                    <span class="section-title">Our<br>Attorneys</span>
                    <div class="spacer-15"></div>
                    <h1><?php the_title(); ?></h1>
                    <?php the_field('panel_1_intro_copy'); ?>
                    <div class="attorney-details">
                        <p class="sans"><strong>
                            <?php if (get_field('attorney_phone')) { ?>
                                P: <a href="tel:<?php the_field('attorney_phone'); ?>" title="Call <?php the_title(); ?>"><?php the_field('attorney_phone'); ?></a><br>
                            <?php } ?>
                            <?php if (get_field('attorney_email')) { ?>
                                E: <a href="mailto:<?php the_field('attorney_email'); ?>" title="Email <?php the_title(); ?>"><?php the_field('attorney_email'); ?></a>
                            <?php } ?>
                        </strong></p>
                    </div>
                    <div class="spacer-15"></div>
                    <a class="banner-read-more" href="#section_2">
                        <span class="icon-arrow-down"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-2" id="section_2">
        <div class="container">
            <div class="columns">
                <div class="column-50 center block">
                <?php if( have_rows('panel_2_content_blocks') ): ?>
                <?php while( have_rows('panel_2_content_blocks') ): the_row(); ?>  
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
                <h2>Awards & Accreditations</h2>
                <div class="spacer-separator__short"></div>
                <?php if( have_rows('awards_and_accreditations') ): ?>
                    <div class="accordions">
                        <?php while( have_rows('awards_and_accreditations') ) : the_row(); 
                            $headline = get_sub_field('accordion_title');
                            $content = get_sub_field('accordion_content'); ?>
                            <div class="accordions_title"><h3><?php echo $headline; ?></h3><span></span></div>
                            <div class="accordions_content"><?php echo $content; ?></div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="spacer-90"></div>
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

    <div class="spacer-60"></div>

</div>

<?php get_footer(); ?>