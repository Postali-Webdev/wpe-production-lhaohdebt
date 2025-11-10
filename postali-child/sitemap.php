<?php
/**
 * Template Name: Sitemap
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
                <div class="column-33">
                    <span class="section-title">
                    Sitemap
                    </span>
                </div>
                <div class="column-66 block">
                <?php if (have_posts()) : 
		        while (have_posts()) : the_post(); ?>
					<h2>Pages</h2> 
					<div class="spacer-30"></div>
					<ul class="sitemap">
						<?php wp_list_pages("title_li=" ); ?>
						<li><a href="/case-results/">Case Results</a></li>
						<li><a href="/testimonials/">Testimonials</a></li>
					</ul> 
					<h2>Blog Posts</h2> 
					<div class="spacer-30"></div>
					<ul class="sitemap">
						<?php wp_get_archives('type=postbypost'); ?>
					</ul>
                <?php endwhile; ?>
	            <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



</div><!-- #front-page -->

<?php get_footer();?>