<?php get_header(); ?>

<div class="container">

  <div class="row">
    <!--Left area -->
    <div class="col-8">
        <div class="row my-4">
              
        <?php // global $posts; print_r($posts); ?>
        
        <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
          <div class="col-4">
            <h2>
            <a href="<?php the_permalink() ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <?php the_excerpt(); ?>
          </div>
        <?php endwhile; else: ?>
          <p>There no posts to show</p>
        <?php endif; ?>
              
        </div>
    </div>
    <!--Right sidebar area -->
    <div class="col-4">
        <?php get_sidebar('Right sidebar'); ?>
    </div>

  </div>


   
</div>

<?php get_footer(); ?>