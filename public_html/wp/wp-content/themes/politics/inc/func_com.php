<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++
//  共通の制御関数を記載   
//  Created by Soraha (2020/09/19)
//  Silence is Golden
//+++++++++++++++++++++++++++++++++++++++++++++++++

function sc_img($args){
  set_query_var('args', $args);
  ob_start();
  $rtn = get_template_directory_uri();
  $rtn = $rtn . '/assets/img/' . $args[0];
  echo $rtn;
  return ob_get_clean();
}
add_shortcode('img', 'sc_img');

function img($name){
  $uri = get_template_directory_uri();
  $rtn = $uri . '/assets/img/' . $name;
  return $rtn;
}

function uri(){
  $uri = get_template_directory_uri();
  return $uri;
}

// Get post category
function get_cat($id){
  $c = get_the_category($id);
  return $c[0];
}
//カテゴリラベル
function the_cLable(){
  foreach ((get_the_category()) as $cat) {
    echo $cat->name;
  }
}
function the_cLableSlug(){
  foreach ((get_the_category()) as $catslug) {
    echo $catslug->slug;
  }
}
//サムネイル画像取得
function get_eye_image($id,$type = 'thumbnail'){
  $media_id = get_post_thumbnail_id($id);
  if ($media_id) {
    $media = wp_get_attachment_image_src($media_id, $type);
    $thumb = $media[0];
  } else {
    $thumb = img('noimg.png');
  }
  return $thumb;
}

// 日付整形関数
function tm_date($d = '', $before = '', $after = '', $echo = true){
  global $id, $post, $day, $previousday, $newday;
  $the_date = '';
  $the_date .= $before;
  if ($d == '')
    $the_date .= mysql2date(get_option('date_format'), $post->post_date);
  else
    $the_date .= mysql2date($d, $post->post_date);
  $the_date .= $after;
  $previousday = $day;
  $the_date = apply_filters('the_date', $the_date, $d, $before, $after);
  if ($echo)
    echo $the_date;
  else
    return $the_date;
}

// 画像IDからURL取得
function get_img_url($id, $size){
  $rtn = wp_get_attachment_image_url($id, $size);
  if (empty($rtn)) {
    $rtn = get_template_directory_uri() . "/assets/images/noimg.jpg";
  }
  return $rtn;
}

// 投稿一覧取得
function get_postsByType($post_type, $num, $offset = "0", $orderby = "date", $order = 'DESC'){
  $args = array(
    'post_type'      => $post_type,
    'offset'         => $offset,
    'posts_per_page' => $num,
    'orderby'        => $orderby,
    'order'          => $order,
  );
  $rtn = get_posts($args);
  return $rtn;
}

function get_postByTax($post_type, $num, $tax, $slug, $offset = "0", $orderby = "date", $order = 'DESC'){
  $args = array(
    'post_type'      => $post_type,
    'offset'         => $offset,
    'posts_per_page' => $num,
    'orderby'        => $orderby,
    'order'          => $order,
    'tax_query'      => array(
      array(
        'taxonomy' => $tax,
        'field'    => 'slug',
        'terms'    => $slug
      )
    )
  );
  $rtn = get_posts($args);
  return $rtn;
}

// [.html]形式に変更
add_action('init', 'html_ext_init');
if (!function_exists('html_ext_init')) {
  function html_ext_init(){
    global $wp_rewrite;
    $wp_rewrite->use_trailing_slashes = false;
    $wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
  }
}

// 不要なmeta情報を削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// feedの禁止
remove_action('do_feed_rdf', 'do_feed_rdf');
remove_action('do_feed_rss', 'do_feed_rss');
remove_action('do_feed_rss2', 'do_feed_rss2');
remove_action('do_feed_atom', 'do_feed_atom');

// wpautop制御
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content){
  global $post;
  $remove_filter = false;

  $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述
  $post_type = get_post_type($post->ID);
  if (in_array($post_type, $arr_types)) $remove_filter = true;

  if ($remove_filter) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  return $content;
}

// アーカイブページネーション
function bootstrap_pagination(){
  global $wp_query;
  $paged = $wp_query->get('paged');
  $posts_per_page = get_option('posts_per_page');
  if ((!$paged || $paged < 2) && $wp_query->found_posts < $posts_per_page)
    return;
  $range = 2; //表示件数の指定
  $showitems = ($range * 2) + 1;
  global $paged;
  if (empty($paged)) $paged = 1;
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }
  if (1 != $pages) {
    echo '<ul class="pagination justify-content-center">';
    if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<li class='page-item'><a href='" . get_pagenum_link(1) . "' class='page-link'>&laquo;</a></li>";
    if ($paged > 1 && $showitems < $pages) echo "<li class='page-item'><a href='" . get_pagenum_link($paged - 1) . "' class='page-link'>&lsaquo;</a></li>";
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        echo ($paged == $i) ? "<li class='page-item active'><span class='page-link'>" . $i . "</span></li>" : "<li class='page-item'><a href='" . get_pagenum_link($i) . "' class='inactive page-link'>" . $i . "</a></li>";
      }
    }
    if ($paged < $pages && $showitems < $pages) echo "<li class='page-item'><a href='" . get_pagenum_link($paged + 1) . "' class='page-link'>&rsaquo;</a></li>";
    if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<li class='page-item'><a href='" . get_pagenum_link($pages) . "' class='page-link'>&raquo;</a></li>";
    echo "</ul>\n";
  }
}

// 文字の長さ制御
function the_strlen($str, $num){
  $str = mb_ereg_replace("\r\n", "", $str);
  $str = strip_tags(trim($str));
  $str = str_replace("　", "", $str);
  $str = str_replace(" ", "", $str);
  if (mb_strlen($str) > $num) {
    $str = mb_substr($str, 0, $num, 'UTF-8') . "...";
  }
  echo $str;
}

// サイドバー　投稿アーカイブリスト整形
function get_archive_list()
{
  ob_start();
  wp_get_archives('show_post_count=true&type=yearly');
  $output = ob_get_contents();
  ob_end_clean();
  $output = str_replace("&nbsp;", "", $output);
  $output = str_replace("</a>(", "<span class='badge'>", $output);
  $output = str_replace(")", "</span></a>", $output);
  $output = str_replace("<li", "<li class='list-group-item'", $output);
  $output = str_replace("<a", "<a class='d-flex justify-content-between align-items-center'", $output);
  echo $output;
}

// サイドバー　投稿カテゴリリスト整形
 function get_category_list($child=0)
 {
  ob_start();
  wp_list_categories('title_li=&show_count=true&depth=2&orderby=id&child_of='.$child);
  $output = ob_get_contents();
  ob_end_clean();
  $output = str_replace("&nbsp;", "", $output);
  $output = str_replace("</a> (", "<span class='badge'>", $output);
  $output = str_replace(")", "</span></a>", $output);
  $output = str_replace('<li class="', '<li class="list-group-item ', $output);
  $output = str_replace("<a", "<a class='d-flex justify-content-between align-items-center'", $output);
  echo $output;
 }

 // サイドバー　投稿タグリスト整形
 function get_tags_list()
 {
  ob_start();
  $args = array(
    'orderby' => 'slug' ,
    'order' => 'ASC' ,
    'show_count' => 1 ,
  );
  wp_list_tags($args);
  $output = ob_get_contents();
  ob_end_clean();
  echo $output;
 }

 function wp_list_tags ( $args ) {
  $current_url = $_SERVER['REQUEST_URI'];
  $tags = get_tags( $args );
  $html = '';
  foreach ($tags as $tag){
    $tag_link = get_tag_link($tag->term_id);
    $html .= "<li class='list-group-item tag_item {$tag->slug}";
    
    if(  substr($tag_link, -strlen($current_url) ) === $current_url ) {
        $html.=" current-tag"; 
    }
    $html .= "'><a href='{$tag_link}' class='d-flex justify-content-between align-items-center'>";
    $html .= "{$tag->name}";
    
    if( $args['show_count'] == true) {
        $html .= "<span class='badge bg-default badge-pill'>".$tag->count."</span>";
    }
    
    $html .= "</a></li>";
  }
  $html .= '';
  echo $html; 
}

//投稿・固定ページ内にPHPファイルをインクルード(挿入/実行)させる [myphp file='xxx']
function Include_my_php($params = array()){
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/inc/$file.php");
  return ob_get_clean();
}

add_shortcode('myphp', 'Include_my_php');

// 検索範囲
add_filter('template_include', 'custom_search_template');
function custom_search_template($template){
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type)
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}

function truncate_str($str) {
  $len = mb_strlen($str);
  if ($len > 15) {
    $str = mb_substr($str, 0, 15);
    $str = $str . "...";
  }
  return $str;
}

//block editor styling (gutenberg)
function my_theme_setup() {
  //Default block styles を有効に
  add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'my_theme_setup');

?>