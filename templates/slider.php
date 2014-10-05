<?php
/**
 * Slider Part
 */

$args = array(
  'post_type' => 'slides',
  'order_by' => 'menu_order',
  'posts_per_page' => -1
);

$slides = new WP_Query($args);
$i = 0;

if ( $slides->have_posts() ) : ?>
<div id="home-carousel" class="carousel slide" data-ride="carousel" data-interval="3500">
  <div class="carousel-inner">
  <?php while( $slides->have_posts() ) : $slides->the_post(); ?>
    <div class="item <?php if ($i === 0) { echo('active'); } ?>">
      <?php the_post_thumbnail( 'slides' ) ?>
    </div>
    <?php $i++; ?>
  <?php endwhile; ?>

  </div>
</div>
<?php endif; ?>







  <!-- Indicators -->
<!--
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
-->
