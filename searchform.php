<?php
// Template Name : Search Page

?>


<!-- <form role="search" method="get" id="search-form" action="<?php echo esc_url(home_url('/')); ?>" class="input-group mb-3">
    <div class="input-group">
        <input type="search" class="form-control border-0" placeholder="Search" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr(get_search_query()); ?>">
        <div class="input-group-append">
            <span class="input-group-append p-0">
                <i class="fas fa-search text-muted"></i>
            </span>
        </div>
    </div>
</form> -->
<!-- /**
* Add HTML5 theme support.
*/ -->

<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
</form>