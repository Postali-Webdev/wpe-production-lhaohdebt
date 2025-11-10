<?php

global $wp_query;

$id = $wp_query->get_queried_object_id();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

if( isset($_GET['sortby']) ){
	$sortby = $_GET['sortby'];
} else {
	$sortby = 'date-low';
}

if( isset($_GET['filterby']) ){
	$filterby = $_GET['filterby'];
} else {
	$filterby = '';
}

// sorting logic

if ( $sortby == "date-high"){
	$order_b = 'ASC';	
} elseif ( $sortby == "date-low" ) {
	$order_b = 'DESC';
}

if ( $filterby <> "" ) {
	
	$args = array(
        'post_type' => 'post',          // name of post type.
	    'orderby' => "date",
		'category_name' => $filterby,
	    'paged' => $paged
		);
	$wp_query = new WP_Query($args); 

} elseif ( $sortby == "date-high" || $sortby == "date-low" ) {
	
	$args = array(
        'post_type' => 'post',          // name of post type.
	    'orderby' => "date",
		'order' => $order_b,
	    'paged' => $paged
		);
	$wp_query = new WP_Query($args); 

} 
?>

<div class="blog-filters">
    <div id="date-filter">
        <div id="select-box">
            <input type="checkbox" id="options-view-button">
            <div id="select-button" class="brd">
                <div id="selected-value">
                    <span class="filter-holder"><span class="yellow">Sort by</span></span>
                </div>
                <div id="chevrons">
                    <span class="icon-down-tick"></span>
                </div>
            </div>
            <div id="options">
                <div class="option">
                    <a href="?sortby=date-low">Newest</a>
                    <a href="?sortby=date-high">Oldest</a>
                </div>
                <div id="option-bg"></div>
            </div>
        </div>
    </div> 

    <div id="category-filter">
        <div id="select-box">
            <input type="checkbox" id="options-view-button">
            <div id="select-button" class="brd">
                <div id="selected-value">
                <?php if ($filterby <> "") { ?>
                    <span class="filter-holder"><?php echo $filterby; ?></span>
                <?php } else { ?>
                    <span class="filter-holder">Filter by Category</span>
                <?php } ?>
                </div>
                <div id="chevrons">
                    <span class="icon-down-tick"></span>
                </div>
            </div>
            <div id="options">
            <?php if( $terms = get_terms( array(
                'taxonomy' => 'category', 
                'orderby' => 'name'
            ) ) ) : ?>
                <div class="option">
                    <a href="/blog/">All Posts</a>
                </div>
                <?php foreach ( $terms as $term ) : ?>
                    <div class="option">
                    <span class="category"><a href="/blog/?filterby=<?php echo $term->name; ?>"><?php echo $term->name; ?></a></span>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <div id="option-bg"></div>
            </div>
        </div>
    </div>
    <div id="filter-clear">
        <a href="/blog/" title="Clear all filters"><span>Clear all</span> x</a>
    </div>
</div>