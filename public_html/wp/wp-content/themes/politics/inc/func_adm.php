<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++
//  管理画面の制御関数を記載   
//  Created by Soraha (2020/09/19)
//  Silence is Golden
//+++++++++++++++++++++++++++++++++++++++++++++++++

//カテゴリ・タームのラジオボタン化
function category_radio()
{
  echo '<script type="text/javascript">
  jQuery(document).ready(function($){
    $(".categorychecklist input[type=checkbox]").each(function(){
      $check = $(this);
      var checked = $check.attr("checked") ? \' checked="checked"\' : \'\';
      $(\'<input type="radio" id="\' + $check.attr("id")
        + \'" name="\' + $check.attr("name") + \'"\'
  + checked
  + \' value="\' + $check.val()
  + \'"/>\'
      ).insertBefore($check);
      $check.remove();
    });
  });
  </script>';
}
add_action('admin_print_footer_scripts', 'category_radio');

// 投稿のアイキャッチアクティブ
add_theme_support('post-thumbnails');

// 管理画面メニュー制御
function remove_menus()
{
  if (current_user_can('administrator')) {
    //remove_menu_page('index.php');                 // ダッシュボード
    //remove_menu_page('upload.php');                // メディア
    //remove_menu_page('edit.php?post_type=page');   // 固定ページ
    //remove_menu_page('edit-comments.php');         // コメント
    //remove_menu_page('themes.php');                // 外観
    //remove_menu_page('plugins.php');               // プラグイン
    //remove_menu_page('tools.php');                 // ツール
    //remove_menu_page('profile.php');               // 設定
  } else {
    remove_menu_page('index.php');                 // ダッシュボード
    remove_menu_page('upload.php');                // メディア
    remove_menu_page('edit.php?post_type=page');   // 固定ページ
    remove_menu_page('edit-comments.php');         // コメント
    remove_menu_page('themes.php');                // 外観
    remove_menu_page('plugins.php');               // プラグイン
    remove_menu_page('tools.php');                 // ツール
    remove_menu_page('profile.php');               // 設定
  }
}
add_action('admin_menu', 'remove_menus');

//ログイン画面ロゴ変更
function logo_custom()
{ ?>
<style>
.login #login h1 a {
  width: 100px;
  height: 100px;
  background: url(<?php echo get_stylesheet_directory_uri();
  ?>/assets/img/default_logo.png) no-repeat 0 0;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'logo_custom');


//ログイン画面ロゴリンク先
function custom_login_logo_url()
{
  return get_bloginfo('url');
}
add_filter('login_headerurl', 'custom_login_logo_url');


//ログイン画面背景セット
function login_custom()
{ ?>
<style>
.login {
  background-color: #3B5D50;
  background-size: cover;
}

.privacy-policy-page-link {
  display: none;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'login_custom');


//ログイン画面リンク削除
function login_nav_backtoblog_hide()
{ ?>
<style>
.login #nav,
.login #backtoblog {
  display: none;
}

#login_error a,
#nav a {
  display: none;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'login_nav_backtoblog_hide');

//ログイン画面ラベル変更
function change_loginpage_username_label($label)
{
  if (in_array($GLOBALS['pagenow'], array('wp-login.php'))) {
    if ($label == 'ユーザー名またはメールアドレス') {
      $label = 'ユーザー名';
    }
  }
  return $label;
}
add_filter('gettext', 'change_loginpage_username_label');

// add by soraha　, wp投稿だけ　gutenberg　有効化
add_filter( 'use_block_editor_for_post_type', 'disable_block_editor', 10, 2 );
function disable_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  return $use_block_editor;
}

?>