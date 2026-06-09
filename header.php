<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOPBAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <span class="topbar-badge">📍 <?php echo ncr_get('ncr_address','Okhla, Delhi – 110025'); ?></span>
      <a href="mailto:<?php echo ncr_get('ncr_email','ncrtravelco@gmail.com'); ?>">
        ✉ <?php echo ncr_get('ncr_email','ncrtravelco@gmail.com'); ?>
      </a>
    </div>
    <div class="topbar-right">
      <a href="<?php echo ncr_phone_link(); ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.08 1.24 2 2 0 012.07 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg>
        <?php echo ncr_get('ncr_phone','+91-9818545508'); ?>
      </a>
      <a href="<?php echo ncr_wa_link(); ?>" target="_blank">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
      </a>
    </div>
  </div>
</div>

<!-- HEADER -->
<header class="site-header">
  <div class="container">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
      <div class="logo-icon">
        <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <?php endif; ?>
      </div>
      <div class="logo-text">
        <?php bloginfo('name'); ?>
        <span><?php bloginfo('description'); ?></span>
      </div>
    </a>

    <nav class="main-nav" role="navigation" aria-label="Primary Navigation">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'nav-menu',
        'container'      => false,
        'fallback_cb'    => 'ncr_fallback_menu',
        'walker'         => new NCR_Walker_Nav_Menu(),
      ) );
      ?>
    </nav>

    <a href="<?php echo ncr_wa_link('Hi, I want to book a cab. Please share a quote.'); ?>" target="_blank" class="btn btn-primary">
      <svg viewBox="0 0 24 24" width="16" height="16" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Book Now
    </a>

    <button class="hamburger" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav-overlay" id="mobileNav" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
  <div class="mobile-nav-panel">
    <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">✕</button>
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo" style="margin-bottom:8px">
      <div class="logo-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
      <div class="logo-text"><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></div>
    </a>
    <div class="mobile-nav-divider"></div>
    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => 'mobile-menu',
      'container'      => false,
      'fallback_cb'    => 'ncr_fallback_menu_mobile',
    ) );
    ?>
    <div class="mobile-nav-divider"></div>
    <a href="<?php echo ncr_phone_link(); ?>" class="btn btn-primary" style="width:100%;justify-content:center">📞 Call Now</a>
    <a href="<?php echo ncr_wa_link(); ?>" target="_blank" class="btn btn-green" style="width:100%;justify-content:center;margin-top:8px">💬 WhatsApp</a>
  </div>
</div>

<?php
// ============================================================
// Fallback nav menus (shown when no menu is assigned)
// ============================================================
function ncr_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/our-fleet')) . '">Fleet</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '">Blog</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about-us')) . '">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '</ul>';
}
function ncr_fallback_menu_mobile() {
    echo '<a href="' . esc_url(home_url('/')) . '">🏠 Home</a>';
    echo '<a href="' . esc_url(home_url('/our-fleet')) . '">🚗 Fleet</a>';
    echo '<a href="' . esc_url(home_url('/blog')) . '">📝 Blog</a>';
    echo '<a href="' . esc_url(home_url('/about-us')) . '">ℹ️ About</a>';
    echo '<a href="' . esc_url(home_url('/contact')) . '">📞 Contact</a>';
}

// ============================================================
// Clean nav menu walker (strips <ul> wrapper from WP default)
// ============================================================
if ( ! class_exists( 'NCR_Walker_Nav_Menu' ) ) {
    class NCR_Walker_Nav_Menu extends Walker_Nav_Menu {
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            $classes  = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_str = implode( ' ', array_filter( $classes ) );
            $url      = $item->url ? $item->url : '#';
            $output  .= '<a href="' . esc_url($url) . '" class="' . esc_attr($class_str) . '">' . esc_html($item->title) . '</a>';
        }
        function end_el( &$output, $item, $depth = 0, $args = array() ) {}
        function start_lvl( &$output, $depth = 0, $args = array() ) {}
        function end_lvl( &$output, $depth = 0, $args = array() ) {}
    }
}
?>
