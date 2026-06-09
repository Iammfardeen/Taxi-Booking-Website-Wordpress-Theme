<?php get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span style="opacity:.5"> › </span>
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Blog</a>
      <span style="opacity:.5"> › </span>
      <span><?php the_title(); ?></span>
    </div>
    <h1><?php the_title(); ?></h1>
    <p style="color:rgba(255,255,255,.7);font-size:.88rem">
      <?php echo get_the_date(); ?> &nbsp;·&nbsp;
      <?php echo get_the_category_list(', '); ?>
    </p>
  </div>
</div>

<section class="section">
  <div class="container" style="max-width:800px">
    <?php while (have_posts()) : the_post(); ?>
      <?php if (has_post_thumbnail()) : ?>
        <div style="border-radius:var(--radius-lg);overflow:hidden;margin-bottom:32px">
          <?php the_post_thumbnail('ncr-blog-thumb', array('style'=>'width:100%;height:auto')); ?>
        </div>
      <?php endif; ?>
      <div class="entry-content policy-content" style="padding-top:0">
        <?php the_content(); ?>
      </div>
      <div style="margin-top:32px;padding:20px;background:var(--blue-50);border-radius:var(--radius-md);display:flex;align-items:center;gap:14px;flex-wrap:wrap">
        <div>
          <p style="font-weight:700;color:var(--blue-900);margin-bottom:4px">Ready to Book Your Trip?</p>
          <p style="font-size:.85rem;color:var(--text-light)">Call or WhatsApp for an instant quote — no pricing online, full transparency on call.</p>
        </div>
        <div style="display:flex;gap:10px;flex-shrink:0;flex-wrap:wrap">
          <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-primary" style="font-size:.85rem">📞 Call Now</a>
          <a href="<?php echo ncr_wa_link(); ?>" target="_blank" class="btn btn-green" style="font-size:.85rem">💬 WhatsApp</a>
        </div>
      </div>
      <div style="margin-top:24px;padding-top:24px;border-top:1px solid var(--gray-100)">
        <?php the_post_navigation(array('prev_text'=>'← %title','next_text'=>'%title →')); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer();
