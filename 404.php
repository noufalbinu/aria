<?php include (TEMPLATEPATH . '/header.php'); ?> 
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/searchpage.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<style>
.column {
 background: url('img/our-network-bg.jpg')
}
</style>

<!-- Banner Section -->
<div class="banner">
    <div class="center-content">
        <h1>404</h1>
        <p>OOPS, THE PAGE YOU ARE LOOKING FOR CAN'T BE FOUND!</p>
            <form id="search-form" role="search" method="get" action="<?php echo home_url(); ?>">
                <input autocomplete="off" class="search-tab" id="search-text" name="s" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" type="text" value="<?php the_search_query(); ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                <input class="search-tab-button" type="button" value="Search"/>
            </form>
        </div>
</div>
<!-- Banner Section- EEND -->
<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?> 
<!-- Footer -->



