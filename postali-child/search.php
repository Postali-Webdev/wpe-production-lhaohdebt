<?php
/**
 * Search results template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

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

    <section>
        <div class="container">
            <div class="columns">
                <div class="column-66 center">
                    <h1 class="post-title"><?php printf( esc_html__( 'Search results for "%s"', 'postali' ), get_search_query() ); ?></h1>
                    <?php if ( have_posts() ) : ?>
                        <div class="spacer-separator__short"></div>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="spacer-break"></div>
                            <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                            <div class="spacer-30"></div>
                            <div class="spacer-separator__short"></div>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <p><?php printf( esc_html__( 'Our apologies but there\'s nothing that matches your search for "%s"', 'postali' ), get_search_query() ); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- #content -->
    </section>

</div>

<?php get_footer();
