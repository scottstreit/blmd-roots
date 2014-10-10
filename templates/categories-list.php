<div class="categories-list clearfix">
  <div class="entry-content  clearfix">
    <?php
      $args = array(
        'show_option_all'    => '',
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'none',
        'show_count'         => 0,
        'hide_empty'         => 1,
        'use_desc_for_title' => 1,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => 1,
        'title_li'           => __( 'Categories' ),
        'show_option_none'   => __( 'No categories' ),
        'number'             => null,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'pad_counts'         => 0,
        'taxonomy'           => 'category',
        'walker'             => null
      );
      wp_list_categories( $args );
    ?>

    <!-- <a class="all-links" href="<?php echo get_category_link($cat);?>">Browse our A-Z Health Library for thousands of Diseases &amp; Conditions</a> -->
  </div>
</div>
