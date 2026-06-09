<?php get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a> <span style="opacity:.5"> › </span> <span>Blog</span></div>
    <h1>Travel Tips &amp; Guides</h1>
    <p>Useful articles to help you plan the perfect outstation trip from Delhi.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="blog-grid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="blog-card">
        <div class="blog-card-img" <?php if (has_post_thumbnail()) : ?>style="padding:0"<?php endif; ?>>
          <?php if (has_post_thumbnail()) : the_post_thumbnail('ncr-blog-medium', array('style'=>'width:100%;height:100%;object-fit:cover')); else : ?>
          <span class="blog-card-cat"><?php the_category(', '); ?></span>
          <?php endif; ?>
        </div>
        <div class="blog-card-body">
          <div class="blog-card-date">📅 <?php echo get_the_date(); ?></div>
          <div class="blog-card-title"><a href="<?php the_permalink(); ?>" style="color:inherit"><?php the_title(); ?></a></div>
          <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-secondary" style="font-size:.83rem;padding:7px 16px">Read More →</a>
        </div>
      </div>
      <?php endwhile; else : ?>
      <p>No posts found. Start writing!</p>
      <?php endif; ?>
    </div>
    <div style="margin-top:36px;text-align:center">
      <?php the_posts_pagination(array('mid_size'=>2)); ?>
    </div>
  </div>
</section>

<?php get_footer();
