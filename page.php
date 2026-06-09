<?php get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span style="opacity:.5"> › </span>
      <span><?php the_title(); ?></span>
    </div>
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<main class="section">
  <div class="container">
    <div class="policy-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
      <?php endwhile; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
