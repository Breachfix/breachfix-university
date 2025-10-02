<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>"><strong>Breachfix</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
        <?php
// Minimal helper: active if on page, any descendant, URL starts with /slug/, or any extra prefixes.
if ( ! function_exists('bf_active') ) {
  function bf_active( $slug, $extra_prefixes = array() ) {
    // Base paths
    $base = parse_url( home_url( '/' . trim($slug,'/') . '/' ), PHP_URL_PATH );
    $path = strtok( $_SERVER['REQUEST_URI'], '?' ); // strip query
    
    // Page + descendants
    if ( is_page($slug) ) return true;
    if ( ($p = get_page_by_path($slug)) && in_array( $p->ID, get_post_ancestors( get_queried_object_id() ), true ) ) return true;

    // URL prefix: /slug/...
    if ( 0 === strpos( trailingslashit($path), trailingslashit($base) ) ) return true;

    // Extra URL prefixes (e.g. "archives/events")
    foreach ( (array) $extra_prefixes as $pref ) {
      $pref = '/' . trim($pref, '/') . '/';
      if ( 0 === strpos( trailingslashit($path), trailingslashit($pref) ) ) return true;
    }

    return false;
  }
}
?>
<nav class="main-navigation">
  <ul>
    <li class="<?php echo bf_active('about-us') ? 'current-menu-item' : ''; ?>">
      <a href="<?php echo esc_url( site_url('/about-us') ); ?>">About Us</a>
    </li>
    <li class="<?php echo bf_active('programs') ? 'current-menu-item' : ''; ?>">
      <a href="<?php echo esc_url( site_url('/programs') ); ?>">Programs</a>
    </li>
    <li class="<?php echo bf_active('events', array('archives/events', 'past-events')) ? 'current-menu-item' : ''; ?>">
      <a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a>
    </li>
    <li class="<?php echo bf_active('campuses') ? 'current-menu-item' : ''; ?>">
      <a href="<?php echo esc_url( site_url('/campuses') ); ?>">Campuses</a>
    </li>
    <li class="<?php echo ( get_post_type() === 'post' ) ? 'current-menu-item' : ''; ?>">
      <a href="<?php echo esc_url( site_url('/blog') ); ?>">Blog</a>
    </li>
  </ul>
</nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>