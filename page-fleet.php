<?php
/**
 * Template Name: Our Fleet
 */
get_header(); ?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a> <span style="opacity:.5"> › </span> <span>Our Fleet</span></div>
    <h1>Our Fleet</h1>
    <p>Choose from our range of well-maintained AC cabs — all with experienced, verified drivers.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div style="background:var(--blue-50);border:1px solid var(--blue-200);border-radius:var(--radius-md);padding:14px 18px;margin-bottom:36px;display:flex;align-items:center;gap:10px">
      <span style="font-size:1.1rem">💬</span>
      <p style="font-size:.88rem;color:var(--blue-700)"><strong>No pricing listed.</strong> Rates vary daily based on fuel, route, and season. <a href="<?php echo ncr_phone_link(); ?>" style="color:var(--blue-600);font-weight:700">Call us</a> or <a href="<?php echo ncr_wa_link(); ?>" target="_blank" style="color:#25D366;font-weight:700">WhatsApp</a> for today's quote.</p>
    </div>
    <div class="fleet-grid">

      <?php
      $fleet = array(
        array(
          'name'   => 'Sedan',
          'models' => 'Swift Dzire / Toyota Etios / Hyundai Aura',
          'seats'  => '4',
          'best'   => 'Short & medium trips, solo or couples, day outings',
          'wa_msg' => 'Hi, I want to book a Sedan cab. Please share the quote.',
        ),
        array(
          'name'   => 'SUV – Ertiga',
          'models' => 'Maruti Suzuki Ertiga',
          'seats'  => '6',
          'best'   => 'Family trips, small groups, comfortable long journeys',
          'wa_msg' => 'Hi, I want to book an Ertiga SUV cab. Please share the quote.',
        ),
        array(
          'name'   => 'Innova Crysta',
          'models' => 'Toyota Innova Crysta (GX / VX)',
          'seats'  => '7',
          'best'   => 'Premium comfort, hill routes, long trips, large families',
          'wa_msg' => 'Hi, I want to book an Innova Crysta. Please share the quote.',
        ),
        array(
          'name'   => 'Tempo Traveller',
          'models' => 'Force Tempo Traveller (12 Seater)',
          'seats'  => '12',
          'best'   => 'Group tours, corporate outings, pilgrimage groups, weddings',
          'wa_msg' => 'Hi, I want to book a Tempo Traveller for a group. Please share the quote.',
        ),
      );
      foreach ($fleet as $cab) : ?>
      <div class="fleet-card">
        <div class="fleet-card-img">
          <svg viewBox="0 0 120 70" fill="var(--blue-400)">
            <rect x="5" y="28" width="110" height="28" rx="6"/>
            <rect x="18" y="12" width="70" height="20" rx="4" fill="var(--blue-500)"/>
            <circle cx="28" cy="60" r="9" fill="var(--blue-700)"/>
            <circle cx="95" cy="60" r="9" fill="var(--blue-700)"/>
          </svg>
        </div>
        <div class="fleet-card-body">
          <div class="fleet-card-name"><?php echo esc_html($cab['name']); ?></div>
          <div class="fleet-card-models"><?php echo esc_html($cab['models']); ?></div>
          <div class="fleet-specs">
            <div class="fleet-spec">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>
              <span><strong><?php echo esc_html($cab['seats']); ?></strong> Seater</span>
            </div>
            <div class="fleet-spec">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="none" stroke="var(--blue-500)" stroke-width="2"/><line x1="12" y1="8" x2="12" y2="12" stroke="var(--blue-500)" stroke-width="2"/><line x1="12" y1="12" x2="15" y2="14" stroke="var(--blue-500)" stroke-width="2"/></svg>
              <span>Full <strong>AC</strong></span>
            </div>
            <div class="fleet-spec">
              <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" fill="none" stroke="var(--blue-500)" stroke-width="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" stroke="var(--blue-500)" stroke-width="2" fill="none"/></svg>
              <span>Luggage Space</span>
            </div>
            <div class="fleet-spec">
              <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" fill="var(--blue-500)"/></svg>
              <span>Verified Driver</span>
            </div>
          </div>
        </div>
        <div class="fleet-card-footer">
          <div class="fleet-best">✅ Best for: <?php echo esc_html($cab['best']); ?></div>
          <a href="<?php echo ncr_wa_link($cab['wa_msg']); ?>" target="_blank" class="btn btn-primary btn-full">Book This Cab</a>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php get_footer();
