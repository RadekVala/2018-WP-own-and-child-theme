<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="col">
        <a href="<?php echo home_url() ?>">Back</a>
      </div>
      <div class="col text-right">
       <?php previous_post_link(); ?> | 
      <?php next_post_link(); ?>
      </div>
    </div>

    <div class="row my-4">
        <div class="col">
  <?php // global $posts; print_r($posts); ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
    <h1>
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