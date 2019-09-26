<?php
/**
 * Template name: About
 */

get_header(); ?>

<div class="about">
  <div class="bg-blue px-3 py-lg-5 pb-5 text-center text-white rwb-cover-image" style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.45)), url('<?php the_field('rwb_cover_image_url'); ?>') no-repeat;">
    <div class="py-5">
      <h1 class="font-xr text-uppercase"><?php the_field('about_cover_title'); ?></h1>
    </div>
    <div class="subtitle">
      <?php the_field('about_cover_subtitle'); ?>
    </div>
</div>

<?php get_footer(); ?>
