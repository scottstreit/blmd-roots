<?php
/*
Template Name: Health Page Layout
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/categories', 'list'); ?>
<?php endwhile; ?>
