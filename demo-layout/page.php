<?php get_header(); ?>

<div class="container">
    <div class="row my-4">
        <div class="col">
  <?php // global $posts; print_r($posts); ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
    <h1 class="text-right text-light bg-dark">
     <?php the_title(); ?>
    </h1>
    
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p>There no posts to show</p>
  <?php endif; ?>
        </div>
  </div>
</div>

<?php get_footer(); ?>