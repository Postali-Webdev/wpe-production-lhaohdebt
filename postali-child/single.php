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
                    <p id="breadcrumbs"><span><span><a href="/">Home</a> / <a href="/blog/">Legal Blog</a> / <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p> 
                </div>
            </div>
        </div>
    </section>

    <section class="blog-post">
        <div class="container">            
            <div class="columns skinny">
                <div class="blog-header">
                    <div class="column-25">
                        <span class="section-title">Consumer Law Blog</span>
                    </div>
                    <div class="column-75">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="spacer-separator"></div>
                <div class="column-25">
                    <div class="post-meta">
                        <div class="headshot">
                        <img src="/wp-content/uploads/2022/02/jeremiah-heck-thumb.png" alt="Jeremiah E. Heck" class="attorney-headshot__small"> 
                        </div>
                        <div class="blog-meta">
                            <p><span>Written By:</span><br>Jeremy Heck</p>
                            <p><span>Date Posted:</span><br> <?php the_date( 'm.d.Y' ); ?></p>
                            <p><span>Category:</span><br>
                            <?php $categories = get_the_category();
                            $separator = ', ';
                            $output = '';
                            if ( ! empty( $categories ) ) {
                            foreach( $categories as $category ) {
                                $output .= '<a href="/blog/?filterby=' . ( $category->name ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                            }
                            echo trim( $output, $separator );
                            } ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column-75">
                    <article>
                        <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                        <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                            <div class="spacer-90"></div>
                        <?php } else { ?>

                        <?php } ?>
                        <?php the_content(); ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-60"></div>

</div>

<?php get_footer(); ?>