<?php
/**
 * Attorneys Archive
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="page-content" id="skip">

    <?php get_template_part('block','breadcrumbs'); ?>

    <section class="panel-1">
        <div class="container">
            <div class="columns">
                <div class="column-33">
                    <?php the_field('attorneys_intro_copy','options'); ?>
                </div>
                <div class="column-66">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="bordered-box">
                        <div class="bordered-box-top">
                            <a href="<?php the_permalink(); ?>" title="Learn more about <?php the_title(); ?>">
                                <div class="headshot-name">
                                <?php 
                                $image = get_field('attorney_headshot');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="attorney-headshot" />
                                <?php endif; ?>
                                    <h2 class="small"><?php the_title(); ?></h2>
                                </div>
                                <span class="arrow-icon"></span>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="spacer-60"></div>
                </div>
            </div>
        </div>
    </div>

</div><!-- #front-page -->

<?php get_footer();?>