<?php

function load_bootstrap() {
  wp_register_style('bootstrap', get_template_directory_uri().'/bootstrap/bootstrap.css', array(), false, 'all'); // memanggil dir stylesheet
  wp_enqueue_style('bootstrap'); // memasang stylesheet

  wp_register_script('bootstrapjs', get_template_directory_uri().'/bootstrap/bootstrap.bundle.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');

  wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme')
  )
);

class Walker_Top_Menu extends Walker_Nav_menu
{
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
      $output .= '<li class="nav-item">' . $this->generate_menu_link($item) . '</li>';
  }

  private function generate_menu_link($item)
  {
      $url = $item->url;
      $title = $item->title;

      return sprintf(
          '<a class="nav-link text-white" href="%s">%s</a>',
          esc_url($url),
          esc_html($title)
      );
  }
}

?>