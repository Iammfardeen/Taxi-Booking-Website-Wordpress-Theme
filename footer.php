<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
          <div class="logo-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <div class="logo-text"><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></div>
        </a>
        <p class="footer-desc">Delhi's most trusted outstation cab service. We connect you with verified drivers for safe, comfortable, and affordable journeys across India. No hidden charges, ever.</p>
        <div class="footer-social">
          <a class="social-btn" href="<?php echo esc_url( get_theme_mod('ncr_instagram','#') ); ?>" target="_blank" title="Instagram" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
          <a class="social-btn" href="<?php echo ncr_wa_link(); ?>" target="_blank" title="WhatsApp" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </a>
        </div>
      </div>

      <!-- Popular Routes -->
      <div>
        <div class="footer-col-title">Popular Routes</div>
        <div class="footer-links">
          <?php
          $routes = array('Delhi to Haridwar','Delhi to Agra','Delhi to Jaipur','Delhi to Shimla','Delhi to Dehradun','Delhi to Manali');
          foreach ( $routes as $r ) {
            echo '<a href="' . esc_url( home_url('/routes/') ) . '">' . esc_html($r) . '</a>';
          }
          ?>
        </div>
      </div>

      <!-- Cab Types -->
      <div>
        <div class="footer-col-title">Cab Types</div>
        <div class="footer-links">
          <?php
          $cabs = array('Sedan (4 Seater)','SUV Ertiga (6 Seater)','Innova Crysta (7 Seater)','Tempo Traveller (12 Seater)');
          foreach ( $cabs as $c ) {
            echo '<a href="' . esc_url( home_url('/our-fleet/') ) . '">' . esc_html($c) . '</a>';
          }
          ?>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <div class="footer-col-title">Quick Links</div>
        <div class="footer-links">
          <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
          <a href="<?php echo esc_url( home_url('/about-us') ); ?>">About Us</a>
          <a href="<?php echo esc_url( home_url('/blog') ); ?>">Blog</a>
          <a href="<?php echo esc_url( home_url('/contact') ); ?>">Contact</a>
          <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a>
          <a href="<?php echo esc_url( home_url('/terms-and-conditions') ); ?>">Terms &amp; Conditions</a>
          <a href="<?php echo esc_url( home_url('/disclaimer') ); ?>">Disclaimer</a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. | <?php echo ncr_get('ncr_address','Okhla, New Delhi – 110025'); ?></span>
      <span>Made with ♥ in Delhi</span>
    </div>
  </div>
</footer>

<!-- FLOATING BUTTONS -->
<div class="floating-btns" aria-label="Quick Contact">
  <a href="<?php echo ncr_wa_link('Hi, I want to book a cab. Please share a quote.'); ?>" target="_blank" class="float-btn float-wa" aria-label="WhatsApp Us">
    <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    <span class="float-label">WhatsApp Us</span>
  </a>
  <a href="<?php echo ncr_phone_link(); ?>" class="float-btn float-call" aria-label="Call Now">
    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.08 1.24 2 2 0 012.07 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
    <span class="float-label">Call Now</span>
  </a>
</div>

<!-- QUOTE MODAL -->
<div class="quote-modal" id="quoteModal" role="dialog" aria-modal="true" aria-label="Get Quote">
  <div class="quote-modal-inner">
    <button class="quote-modal-close" id="quoteModalClose" aria-label="Close">✕</button>
    <h3 style="font-size:1.2rem;font-family:'Syne',sans-serif;font-weight:800;color:var(--blue-900);margin-bottom:4px">Get Your Quote</h3>
    <p style="font-size:.82rem;color:var(--text-light);margin-bottom:22px">We'll call you within 15 minutes!</p>
    <form id="quoteModalForm">
      <?php wp_nonce_field('ncr_form_nonce','ncr_nonce'); ?>
      <div class="form-grid">
        <div class="form-group">
          <label>Name *</label>
          <input type="text" name="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
          <label>Phone *</label>
          <input type="tel" name="phone" required placeholder="+91 XXXXXXXXXX">
        </div>
        <div class="form-group">
          <label>From</label>
          <input type="text" name="from" id="modalFrom" placeholder="Pickup City">
        </div>
        <div class="form-group">
          <label>To</label>
          <input type="text" name="to" id="modalTo" placeholder="Destination">
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" name="date">
        </div>
        <div class="form-group">
          <label>Cab Type</label>
          <select name="cab">
            <option>Sedan (4 Seater)</option>
            <option>SUV Ertiga (6 Seater)</option>
            <option>Innova Crysta (7 Seater)</option>
            <option>Tempo Traveller (12 Seater)</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-full" style="margin-top:16px;padding:12px">Get Quote Now →</button>
      <div class="form-success" id="modalSuccess">✅ We'll call you within 15 minutes!</div>
    </form>
    <div style="display:flex;gap:10px;margin-top:14px">
      <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-secondary" style="flex:1;justify-content:center;font-size:.82rem">📞 Call Instead</a>
      <a href="<?php echo ncr_wa_link(); ?>" target="_blank" class="btn btn-green" style="flex:1;justify-content:center;font-size:.82rem">💬 WhatsApp</a>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
