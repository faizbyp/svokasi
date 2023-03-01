<?php
require_once 'action/setup-theme.php';
function load_bootstrap()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.css', array(), false, 'all'); // memanggil dir stylesheet
  wp_enqueue_style('bootstrap'); // memasang stylesheet

  wp_register_script('bootstrapjs', get_template_directory_uri() . '/bootstrap/bootstrap.bundle.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');


function getImageFromTemplate($image)
{
  return get_template_directory_uri() . '/assets/img/' . $image;
}

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme')
  )
);

class Walker_Top_Menu extends Walker_Nav_menu
{
  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $output .= ' <li class="nav-item"><a class="nav-link text-white" href="' . $item->url . '">' . $item->title . '</a></li>';
  }
}


function svokasiGetPostBy($categorySlug)
{
  $args = array(
    'post_type'              => array('post'),
    'post_status'            => array('publish'),
    'nopaging'               => false,
    'posts_per_page'         => '4',
    'tax_query'              => array(
      array(
        'taxonomy'         => 'category',
        'terms'            => $categorySlug,
        'field'            => 'slug',
        'operator'        => 'IN',
      ),
    ),
  );

  $query = new WP_Query($args);

  return $query->posts;
}
