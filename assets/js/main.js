/* NCR Travel Company - Main JS */
(function() {
  'use strict';

  // ── Set min date on all date inputs ──────────────────────
  document.querySelectorAll('input[type="date"]').forEach(function(el) {
    el.min = new Date().toISOString().split('T')[0];
  });

  // ── Mobile Nav ───────────────────────────────────────────
  var btn   = document.getElementById('hamburgerBtn');
  var nav   = document.getElementById('mobileNav');
  var close = document.getElementById('mobileNavClose');

  function openMobileNav() {
    if (!nav) return;
    nav.classList.add('open');
    document.body.style.overflow = 'hidden';
    if (btn) btn.setAttribute('aria-expanded', 'true');
  }
  function closeMobileNav() {
    if (!nav) return;
    nav.classList.remove('open');
    document.body.style.overflow = '';
    if (btn) btn.setAttribute('aria-expanded', 'false');
  }

  if (btn)   btn.addEventListener('click', openMobileNav);
  if (close) close.addEventListener('click', closeMobileNav);
  if (nav)   nav.addEventListener('click', function(e) {
    if (e.target === nav) closeMobileNav();
  });
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { closeMobileNav(); closeQuoteModal(); }
  });

  // ── Quote Modal ──────────────────────────────────────────
  var modal      = document.getElementById('quoteModal');
  var modalClose = document.getElementById('quoteModalClose');

  window.openQuoteModal = function(from, to) {
    var f = document.getElementById('modalFrom');
    var t = document.getElementById('modalTo');
    if (f) f.value = from || '';
    if (t) t.value = to  || '';
    if (modal) {
      modal.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  };

  function closeQuoteModal() {
    if (modal) {
      modal.classList.remove('open');
      document.body.style.overflow = '';
    }
  }
  window.closeQuoteModal = closeQuoteModal;

  if (modalClose) modalClose.addEventListener('click', closeQuoteModal);
  if (modal) modal.addEventListener('click', function(e) {
    if (e.target === modal) closeQuoteModal();
  });

  // ── Form Submission (AJAX to WP backend) ─────────────────
  function handleForm(form, successId) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var successEl = document.getElementById(successId);
      var submitBtn = form.querySelector('button[type="submit"]');
      var origText  = submitBtn ? submitBtn.textContent : '';

      if (submitBtn) { submitBtn.disabled = true; submitBtn.textContent = 'Sending...'; }

      var data = new FormData(form);
      data.append('action', 'ncr_form');

      // Try AJAX if ncrData is available
      if (typeof ncrData !== 'undefined' && ncrData.ajaxUrl) {
        data.append('nonce', ncrData.nonce);
        fetch(ncrData.ajaxUrl, { method: 'POST', body: data })
          .then(function(r) { return r.json(); })
          .then(function(resp) {
            if (successEl) { successEl.classList.add('show'); }
            form.reset();
            setTimeout(function() {
              if (successEl) successEl.classList.remove('show');
            }, 6000);
          })
          .catch(function() {
            if (successEl) { successEl.classList.add('show'); }
            form.reset();
          })
          .finally(function() {
            if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = origText; }
          });
      } else {
        // Fallback (static preview)
        if (successEl) { successEl.classList.add('show'); }
        form.reset();
        if (submitBtn) { submitBtn.disabled = false; submitBtn.textContent = origText; }
        setTimeout(function() {
          if (successEl) successEl.classList.remove('show');
        }, 6000);
      }
    });
  }

  // Attach to all enquiry forms
  var heroForm    = document.getElementById('heroForm');
  var contactForm = document.getElementById('contactForm');
  var modalForm   = document.getElementById('quoteModalForm');

  if (heroForm)    handleForm(heroForm,    'heroSuccess');
  if (contactForm) handleForm(contactForm, 'contactSuccess');
  if (modalForm)   handleForm(modalForm,   'modalSuccess');

  // ── Smooth scroll for anchor links ───────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        closeMobileNav();
      }
    });
  });

})();
