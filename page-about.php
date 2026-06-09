<?php
/**
 * Template Name: About Us
 */
get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a> <span style="opacity:.5"> › </span> <span>About Us</span></div>
    <h1>About NCR Travel Company</h1>
    <p>Delhi's trusted outstation cab partner — connecting families, corporates, and travellers.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="story-grid">
      <div>
        <div class="section-tag">📖 Our Story</div>
        <h2 class="section-title">Born from Delhi's Roads</h2>
        <p style="color:var(--text-light);line-height:1.8;margin-bottom:16px">NCR Travel Company was founded with one simple mission: to make outstation travel from Delhi safe, comfortable, and affordable for everyone. We saw that travellers were frustrated by surprise charges, unreliable drivers, and poor communication — and we decided to do it better.</p>
        <p style="color:var(--text-light);line-height:1.8;margin-bottom:16px">Starting with just a handful of trusted drivers in Okhla, Delhi, we've grown to serve 2000+ happy customers across 150+ routes — from short trips to Agra to long journeys to Manali.</p>
        <p style="color:var(--text-light);line-height:1.8;margin-bottom:24px">Our approach is simple: <strong>no hidden charges, instant response, and drivers you can trust.</strong></p>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-primary">📞 Call Us Now</a>
          <a href="<?php echo ncr_wa_link(); ?>" target="_blank" class="btn btn-green">💬 WhatsApp</a>
        </div>
      </div>
      <div class="story-img-placeholder">
        <div class="story-img-inner">
          <?php if ( has_post_thumbnail() ) : the_post_thumbnail('ncr-fleet-thumb'); else : ?>
          <svg viewBox="0 0 100 60" fill="var(--blue-300)"><rect x="5" y="25" width="90" height="25" rx="5"/><rect x="15" y="10" width="55" height="20" rx="4"/><circle cx="25" cy="52" r="8" fill="var(--blue-400)"/><circle cx="75" cy="52" r="8" fill="var(--blue-400)"/></svg>
          <p style="font-size:.85rem;color:var(--blue-400);font-style:italic;margin-top:12px">NCR Travel Company Fleet</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-tag">📊 Our Numbers</div>
    <h2 class="section-title text-center" style="margin-bottom:40px">Growing with Every Journey</h2>
    <div class="about-stats">
      <div class="about-stat-card"><div class="about-stat-num">2000+</div><div class="about-stat-label">Happy Customers</div></div>
      <div class="about-stat-card"><div class="about-stat-num">150+</div><div class="about-stat-label">Routes Covered</div></div>
      <div class="about-stat-card"><div class="about-stat-num">50+</div><div class="about-stat-label">Verified Drivers</div></div>
      <div class="about-stat-card"><div class="about-stat-num">4.9★</div><div class="about-stat-label">Average Rating</div></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-tag">👥 Our Team</div>
    <h2 class="section-title text-center" style="margin-bottom:40px">The People Behind Your Journey</h2>
    <div class="grid-3">
      <div class="team-card"><div class="team-avatar">RK</div><div class="team-name">Rajesh Kumar</div><div class="team-role">Founder & Operations Head</div><div class="team-desc">With 15+ years in the travel industry, Rajesh founded NCR Travel Company to bring honesty and reliability to Delhi's cab market.</div></div>
      <div class="team-card"><div class="team-avatar">AM</div><div class="team-name">Anjali Mehta</div><div class="team-role">Customer Relations Manager</div><div class="team-desc">Anjali ensures every customer enquiry is answered promptly. She's the friendly voice behind our WhatsApp and phone support.</div></div>
      <div class="team-card"><div class="team-avatar">VS</div><div class="team-name">Vijay Singh</div><div class="team-role">Fleet & Driver Coordinator</div><div class="team-desc">Vijay manages our entire driver network — ensuring every cab is clean, serviced, and the driver is briefed before your trip.</div></div>
    </div>
  </div>
</section>

<?php get_footer();
