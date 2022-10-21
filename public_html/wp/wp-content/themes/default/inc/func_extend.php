<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++
//  拡張関数記載  
//  Created by Soraha (2022/08/31)
//  Silence is Golden
//+++++++++++++++++++++++++++++++++++++++++++++++++

// 内部ページ用リンクメニュー
function get_all_parent_pages(){ //全ての親ページを取得
  $pages_array = array();
  $args = array(
    'parent' => 0,
    'order' => 'asc',
  );
  $pages = get_pages($args);
  foreach ($pages as $page) {
    $pmlink = get_permalink($page->ID);
    $pmlink = str_replace('https://', '', $pmlink);
    $pmlink = str_replace('.html', '', $pmlink);
    $pmlink = explode('/', $pmlink);
    array_push($pages_array, ["$page->ID", "$pmlink[1]"]);
  }

  return $pages_array;
}

function get_current_url(){ //現在ページのURLを取得
  $cur_url = $_SERVER['REQUEST_URI'];
  $cur_url = str_replace('.html', '', $cur_url);
  $cur_url = explode('/', $cur_url);

  return $cur_url;
}

function get_page_navbar(){
  $pages_array = get_all_parent_pages();
  $cur_url = get_current_url();
  $rtn = "";

  foreach ($pages_array as $val) {
    if ($val[1] == $cur_url[1]) {
      // print_r($val);
      $children = get_children(array(
        'post_parent' => $val[0],
        'post_type' => 'page',
        'post_status' => 'publish',
      ));
      foreach ($children as $child) {
        $rtn .= '<a class="page-nav-border__item" href="' . get_permalink($child->ID) . '">' . $child->post_title . '</a>';
      }
    }
  }

  return $rtn;
}

//youtube一覧(チャンネルきばん)
function get_ytlist_O($cid, $num){
  $rss = 'https://www.youtube.com/feeds/videos.xml?channel_id=' . $cid;
  $data = simplexml_load_file($rss);
  $obj_array = array();
  $i = 0;
  foreach ($data->entry as $value) {
    if ($i >= $num) {
      break;
    }
    $id = str_replace("yt:video:", "", $value->id);
    $title = strval($value->title);
    $date =  date("Y.m.d", strtotime($value->published));
    $cap_url = "https://i.ytimg.com/vi/" . $id . "/hqdefault.jpg";
    $data_array = array(
      'id' => $id,
      'title' => strval($title),
      'date' => $date,
      'thumb' => $cap_url
    );
    $obj = (object) $data_array;
    array_push($obj_array, $obj);
    $i = $i + 1;
  }
  return $obj_array;
}

// サイドバー　投稿カテゴリリスト整形
function get_categories($child=0)
{
  ob_start();
  wp_list_categories('title_li=&show_count=true&depth=-1&orderby=id&child_of='.$child);
  $output = ob_get_contents();
  ob_end_clean();
  $output = str_replace("&nbsp;", "", $output);
  $output = str_replace("</a> (", "<span class='badge badge-secondary badge-pill'>", $output);
  $output = str_replace(")", "</span></a>", $output);
  $output = str_replace('<li class="', '<li class="list-group-item ', $output);
  $output = str_replace("<a", "<a class='d-flex justify-content-between align-items-center'", $output);
  echo $output;
}
?>