<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col">
       <h1><?php the_category($post->ID); ?></h1>
    </div>
  </div>

    <div class="row my-4">
        <div class="col">
  <?php // global $posts; print_r($posts); ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
   
    <h2>
      <a href="<?php the_permalink() ?>">
        <?php the_title(); ?>
      </a>
    </h2>
    <?php the_excerpt(); ?>
  <?php endwhile; else: ?>
    <p>There no posts to show</p>
  <?php endif; ?>
        </div>
  </div>
</div>

<?php get_footer(); ?>