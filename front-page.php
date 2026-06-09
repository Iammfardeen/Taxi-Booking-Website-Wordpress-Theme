<?php get_header(); ?>

<!-- HERO -->
<section class="hero-section" id="hero">
  <div class="hero-bg"></div>
  <div class="hero-pattern"></div>
  <div class="hero-glow"></div>
  <div class="hero-glow2"></div>
  <div class="container">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          Delhi's Trusted Cab Partner
        </div>
        <h1 class="hero-title">
          <?php
          $title = get_theme_mod('ncr_hero_title','Your Journey,<br><span>Our Responsibility</span>');
          echo wp_kses($title, array('br'=>array(),'span'=>array()));
          ?>
        </h1>
        <p class="hero-desc"><?php echo ncr_get('ncr_hero_desc','Premium outstation cab booking from Delhi. AC cabs, experienced drivers, no hidden charges. Call or WhatsApp to get your personalised quote instantly.'); ?></p>
        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-num"><?php echo ncr_get('ncr_stat_1_num','2000+'); ?></div>
            <div class="hero-stat-label"><?php echo ncr_get('ncr_stat_1_label','Happy Customers'); ?></div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num"><?php echo ncr_get('ncr_stat_2_num','150+'); ?></div>
            <div class="hero-stat-label"><?php echo ncr_get('ncr_stat_2_label','Routes Covered'); ?></div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num"><?php echo ncr_get('ncr_stat_3_num','24/7'); ?></div>
            <div class="hero-stat-label"><?php echo ncr_get('ncr_stat_3_label','Support Available'); ?></div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num">5★</div>
            <div class="hero-stat-label">Average Rating</div>
          </div>
        </div>
      </div>

      <!-- Booking Form -->
      <div class="booking-card">
        <div class="booking-card-title">Get an Instant Quote</div>
        <div class="booking-card-sub">Fill in your details — we'll call you back within minutes.</div>
        <form class="ncr-enquiry-form" id="heroForm">
          <?php wp_nonce_field('ncr_form_nonce','ncr_nonce'); ?>
          <div class="form-grid">
            <div class="form-group"><label>Your Name *</label><input type="text" name="name" placeholder="Rahul Sharma" required></div>
            <div class="form-group"><label>Phone Number *</label><input type="tel" name="phone" placeholder="+91 98XXXXXXXX" required></div>
            <div class="form-group"><label>WhatsApp Number</label><input type="tel" name="whatsapp" placeholder="+91 98XXXXXXXX"></div>
            <div class="form-group"><label>Cab Type</label>
              <select name="cab">
                <option value="">Select Cab Type</option>
                <option>Sedan (4 Seater)</option>
                <option>SUV Ertiga (6 Seater)</option>
                <option>Innova Crysta (7 Seater)</option>
                <option>Tempo Traveller (12 Seater)</option>
              </select>
            </div>
            <div class="form-group"><label>From *</label><input type="text" name="from" placeholder="Delhi / Noida / Gurugram" required></div>
            <div class="form-group"><label>To *</label><input type="text" name="to" placeholder="Shimla, Haridwar..." required></div>
            <div class="form-group"><label>Travel Date *</label><input type="date" name="date" required></div>
            <div class="form-group"><label>Passengers</label>
              <select name="passengers">
                <option>1-2 Passengers</option>
                <option>3-4 Passengers</option>
                <option>5-6 Passengers</option>
                <option>7+ Passengers</option>
              </select>
            </div>
          </div>
          <div style="margin-top:14px">
            <button type="submit" class="btn btn-primary btn-full" style="padding:13px;font-size:.95rem">🚗 Get My Quote Now</button>
          </div>
          <p class="form-note">🔒 Small advance required to confirm booking. Price given on call.</p>
          <div class="form-success" id="heroSuccess">✅ Thank you! Our team will call you within 15 minutes with your quote.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- TRUST STRIP -->
<div class="trust-strip">
  <div class="trust-strip-inner">
    <div class="trust-item"><svg viewBox="0 0 24 24" fill="white"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>No Hidden Charges</div>
    <div class="trust-item"><svg viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="0"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4" stroke="white"/><line x1="10" y1="1" x2="10" y2="4" stroke="white"/><line x1="14" y1="1" x2="14" y2="4" stroke="white"/></svg>AC Cabs Only</div>
    <div class="trust-item"><svg viewBox="0 0 24 24" fill="white"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg>Experienced Drivers</div>
    <div class="trust-item"><svg viewBox="0 0 24 24" fill="white"><line x1="12" y1="1" x2="12" y2="23" stroke="white" stroke-width="2"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="white" stroke-width="2" fill="none"/></svg>Best Price Guarantee</div>
    <div class="trust-item"><svg viewBox="0 0 24 24" fill="white"><polyline points="17 1 21 5 17 9" stroke="white" stroke-width="2" fill="none"/><path d="M3 11V9a4 4 0 014-4h14" stroke="white" stroke-width="2" fill="none"/><polyline points="7 23 3 19 7 15" stroke="white" stroke-width="2" fill="none"/><path d="M21 13v2a4 4 0 01-4 4H3" stroke="white" stroke-width="2" fill="none"/></svg>One Way &amp; Round Trip</div>
  </div>
</div>

<!-- POPULAR ROUTES -->
<section class="section" id="routes">
  <div class="container">
    <div class="section-tag">🗺 Popular Routes</div>
    <h2 class="section-title">Where Would You Like to Go?</h2>
    <p class="section-subtitle">We cover all major outstation routes from Delhi NCR. Call or WhatsApp for current pricing.</p>
    <div class="routes-grid">
      <?php
      $routes = array(
        array('from'=>'Delhi','to'=>'Haridwar','dist'=>'~214 km','time'=>'4-5 hrs','tags'=>array('Pilgrimage','Ganga Aarti','1-Way / Round Trip')),
        array('from'=>'Delhi','to'=>'Agra','dist'=>'~230 km','time'=>'3-4 hrs','tags'=>array('Taj Mahal','Heritage','Same-Day Trip')),
        array('from'=>'Delhi','to'=>'Jaipur','dist'=>'~280 km','time'=>'5-6 hrs','tags'=>array('Pink City','Rajasthan','Weekend Trip')),
        array('from'=>'Delhi','to'=>'Shimla','dist'=>'~360 km','time'=>'7-8 hrs','tags'=>array('Hill Station','Himachal','All Season')),
        array('from'=>'Delhi','to'=>'Dehradun','dist'=>'~290 km','time'=>'5-6 hrs','tags'=>array('Mussoorie','Uttarakhand','Family Trip')),
        array('from'=>'Delhi','to'=>'Manali','dist'=>'~540 km','time'=>'12-14 hrs','tags'=>array('Adventure','Snow','All India')),
      );
      foreach ( $routes as $r ) :
      ?>
      <div class="route-card">
        <div class="route-card-header">
          <div class="route-from-to"><?php echo esc_html($r['from']); ?> <span class="route-arrow">→</span> <?php echo esc_html($r['to']); ?></div>
          <div class="route-meta"><span>📍 <?php echo esc_html($r['dist']); ?></span><span>⏱ <?php echo esc_html($r['time']); ?></span></div>
        </div>
        <div class="route-card-body">
          <div class="route-tags">
            <?php foreach($r['tags'] as $t) echo '<span class="route-tag">' . esc_html($t) . '</span>'; ?>
          </div>
        </div>
        <div class="route-card-footer">
          <span class="route-price-note">💬 Price on request</span>
          <button class="btn-quote" onclick="openQuoteModal('<?php echo esc_js($r['from']); ?>','<?php echo esc_js($r['to']); ?>')">Get Quote</button>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:32px">
      <p style="color:var(--text-light);margin-bottom:14px;font-size:.9rem">Don't see your destination? We cover all of India!</p>
      <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-primary">📞 Call for Custom Route</a>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section section-alt">
  <div class="container text-center">
    <div class="section-tag">🔄 How It Works</div>
    <h2 class="section-title">Book Your Cab in 4 Simple Steps</h2>
    <p class="section-subtitle" style="margin:0 auto">From enquiry to pick-up — we make it simple, fast, and hassle-free.</p>
    <div class="steps">
      <div class="step">
        <div class="step-num"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.08 1.24 2 2 0 012.07 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg></div>
        <div class="step-title">1. Contact Us</div>
        <div class="step-desc">Call or WhatsApp us with your travel details — from, to, date, and number of passengers.</div>
      </div>
      <div class="step">
        <div class="step-num"><svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23" stroke="white" stroke-width="2"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="white" stroke-width="2" fill="none"/></svg></div>
        <div class="step-title">2. Get Your Quote</div>
        <div class="step-desc">We'll provide a transparent, competitive quote tailored to your trip — no hidden charges.</div>
      </div>
      <div class="step">
        <div class="step-num"><svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" fill="none" stroke="white" stroke-width="2"/><line x1="1" y1="10" x2="23" y2="10" stroke="white" stroke-width="2"/></svg></div>
        <div class="step-title">3. Pay Booking Fee</div>
        <div class="step-desc">A small advance confirms your booking. We'll send you a booking confirmation instantly.</div>
      </div>
      <div class="step">
        <div class="step-num"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="none" stroke="white" stroke-width="2"/><polyline points="12 6 12 12 16 14" stroke="white" stroke-width="2" fill="none"/></svg></div>
        <div class="step-title">4. Enjoy Your Journey</div>
        <div class="step-desc">Your driver arrives on time. Sit back, relax, and enjoy a safe, comfortable journey!</div>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section">
  <div class="container">
    <div class="section-tag">⭐ Why Choose Us</div>
    <h2 class="section-title">Delhi's Most Trusted Cab Partner</h2>
    <p class="section-subtitle">Thousands of travellers trust NCR Travel Company for safe, comfortable outstation trips.</p>
    <div class="why-grid">
      <?php
      $why = array(
        array('icon'=>'<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>','title'=>'Instant Response','desc'=>'Our team responds within minutes on WhatsApp and phone. No waiting, no delays — just fast, friendly service.'),
        array('icon'=>'<line x1="12" y1="1" x2="12" y2="23" stroke="var(--blue-600)" stroke-width="2"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" stroke="var(--blue-600)" stroke-width="2" fill="none"/>','title'=>'Fair & Transparent Pricing','desc'=>'No hidden tolls, no surprise charges. The quote we give is the price you pay. Full transparency guaranteed.'),
        array('icon'=>'<circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/>','title'=>'Experienced Drivers','desc'=>'All our drivers are verified, trained, and experienced in outstation travel on highways and hill routes.'),
        array('icon'=>'<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>','title'=>'Clean AC Cabs','desc'=>'Well-maintained, sanitised AC cabs — from sedans to SUVs to Tempo Travellers for groups.'),
        array('icon'=>'<polyline points="17 1 21 5 17 9" stroke="var(--blue-600)" stroke-width="2" fill="none"/><path d="M3 11V9a4 4 0 014-4h14" stroke="var(--blue-600)" stroke-width="2" fill="none"/><polyline points="7 23 3 19 7 15" stroke="var(--blue-600)" stroke-width="2" fill="none"/><path d="M21 13v2a4 4 0 01-4 4H3" stroke="var(--blue-600)" stroke-width="2" fill="none"/>','title'=>'One Way & Round Trip','desc'=>'We offer flexible trip options — one-way drops or round trips. Multi-city itineraries also available.'),
        array('icon'=>'<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>','title'=>'Pan-India Coverage','desc'=>'From Delhi to Manali, Goa, Varanasi, Amritsar and beyond — we cover all major outstation destinations across India.'),
      );
      foreach ($why as $w) : ?>
      <div class="why-card">
        <div class="why-icon"><svg viewBox="0 0 24 24" fill="var(--blue-600)"><?php echo $w['icon']; ?></svg></div>
        <div class="why-title"><?php echo esc_html($w['title']); ?></div>
        <div class="why-desc"><?php echo esc_html($w['desc']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section-alt">
  <div class="container">
    <div class="section-tag">💬 Customer Stories</div>
    <h2 class="section-title">What Our Passengers Say</h2>
    <p class="section-subtitle">Real reviews from real travellers who chose NCR Travel Company.</p>
    <div class="testimonials-grid">
      <?php
      $reviews = array(
        array('init'=>'RS','name'=>'Ramesh Sharma','trip'=>'Delhi → Haridwar','text'=>'Booked a cab to Haridwar for our family pilgrimage. The driver was punctual, polite, and the car was spotless. Got the quote within 10 minutes of calling. Highly recommend!'),
        array('init'=>'PG','name'=>'Priya Gupta','trip'=>'Delhi → Jaipur (Group Trip)','text'=>'Used NCR Travel for our office trip to Jaipur with 8 colleagues. The Tempo Traveller was comfortable and the driver was very professional. No hidden charges — exactly as quoted!'),
        array('init'=>'AK','name'=>'Amit & Kavita','trip'=>'Delhi → Shimla (Honeymoon)','text'=>'Went to Shimla for our honeymoon. The Innova Crysta was fantastic — smooth ride on the mountain roads. WhatsApp communication was super easy throughout. Will book again!'),
      );
      foreach ($reviews as $rv) : ?>
      <div class="review-card">
        <div class="review-stars">★★★★★</div>
        <p class="review-text"><?php echo esc_html($rv['text']); ?></p>
        <div class="reviewer">
          <div class="reviewer-avatar"><?php echo esc_html($rv['init']); ?></div>
          <div>
            <div class="reviewer-name"><?php echo esc_html($rv['name']); ?></div>
            <div class="reviewer-trip"><?php echo esc_html($rv['trip']); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="container">
    <h2>Ready to Plan Your Trip?</h2>
    <p>Don't wait — call or WhatsApp us now and get your personalised quote in minutes.</p>
    <div class="cta-buttons">
      <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-white" style="font-size:1rem;padding:14px 28px">📞 Call: <?php echo ncr_get('ncr_phone','+91-9818545508'); ?></a>
      <a href="<?php echo ncr_wa_link(); ?>" target="_blank" class="btn btn-green" style="font-size:1rem;padding:14px 28px">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp Us
      </a>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="section" id="contact">
  <div class="container">
    <div class="section-tag">📞 Get In Touch</div>
    <h2 class="section-title">Contact NCR Travel Company</h2>
    <p class="section-subtitle">Have a question or ready to book? Reach out via any of the options below.</p>
    <div class="contact-grid">
      <div>
        <div class="contact-methods">
          <div class="contact-method">
            <div class="contact-method-icon" style="background:var(--blue-100)">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="var(--blue-600)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.08 1.24 2 2 0 012.07 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
            </div>
            <div><div class="contact-method-title">Call Us</div><a href="<?php echo ncr_phone_link(); ?>" style="color:var(--blue-600);font-weight:600;font-size:.88rem"><?php echo ncr_get('ncr_phone','+91-9818545508'); ?></a></div>
          </div>
          <div class="contact-method">
            <div class="contact-method-icon" style="background:#e8f5e9">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div><div class="contact-method-title">WhatsApp</div><a href="<?php echo ncr_wa_link(); ?>" target="_blank" style="color:#25D366;font-weight:600;font-size:.88rem"><?php echo ncr_get('ncr_phone','+91-9818545508'); ?></a></div>
          </div>
          <div class="contact-method">
            <div class="contact-method-icon" style="background:#FFF3E0">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#F57C00" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div><div class="contact-method-title">Email Us</div><a href="mailto:<?php echo ncr_get('ncr_email','ncrtravelco@gmail.com'); ?>" style="color:#F57C00;font-weight:600;font-size:.88rem"><?php echo ncr_get('ncr_email','ncrtravelco@gmail.com'); ?></a></div>
          </div>
          <div class="contact-method">
            <div class="contact-method-icon" style="background:var(--blue-50)">
              <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="var(--blue-600)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div><div class="contact-method-title">Our Office</div><div style="font-size:.88rem;color:var(--text-light)"><?php echo ncr_get('ncr_address','Okhla, New Delhi – 110025'); ?></div></div>
          </div>
        </div>
      </div>
      <div class="contact-form-card">
        <h3 style="font-size:1.15rem;margin-bottom:5px;color:var(--blue-900)">Send an Enquiry</h3>
        <p style="font-size:.83rem;color:var(--text-light);margin-bottom:22px">We'll get back to you with a quote ASAP.</p>
        <form class="ncr-enquiry-form" id="contactForm">
          <?php wp_nonce_field('ncr_form_nonce','ncr_nonce'); ?>
          <div class="form-grid">
            <div class="form-group"><label>Full Name *</label><input type="text" name="name" placeholder="Your Name" required></div>
            <div class="form-group"><label>Phone *</label><input type="tel" name="phone" placeholder="+91 XXXXXXXXXX" required></div>
            <div class="form-group"><label>From</label><input type="text" name="from" placeholder="Delhi / Noida..."></div>
            <div class="form-group"><label>To</label><input type="text" name="to" placeholder="Destination"></div>
            <div class="form-group"><label>Travel Date</label><input type="date" name="date"></div>
            <div class="form-group"><label>Cab Type</label>
              <select name="cab">
                <option value="">Select...</option>
                <option>Sedan (4 Seater)</option>
                <option>SUV Ertiga (6 Seater)</option>
                <option>Innova Crysta (7 Seater)</option>
                <option>Tempo Traveller (12 Seater)</option>
              </select>
            </div>
          </div>
          <div class="form-group" style="margin-top:12px">
            <label>Message</label>
            <textarea name="message" rows="3" placeholder="Any special requirements..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full" style="margin-top:14px;padding:12px">Send Enquiry →</button>
          <div class="form-success" id="contactSuccess">✅ Enquiry received! We'll call you within 15 minutes.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
