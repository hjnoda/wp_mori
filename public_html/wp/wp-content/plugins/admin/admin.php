<?php
/*
  Plugin Name: PickBOX CONFIG TOOL
  Plugin URI:
  Description: PICKBOX設定プラグイン
  Version: 1.0.0
  Author: pickbox
  Author URI: https://pickbox.online
  License: GPLv2
 */

add_action('init', 'Admin::init');

class Admin
{
  const VERSION           = '1.0.0';
  const PLUGIN_ID         = 'admin';
  const CREDENTIAL_ACTION = self::PLUGIN_ID . '-nonce-action';
  const CREDENTIAL_NAME   = self::PLUGIN_ID . '-nonce-key';
  const PLUGIN_DB_PREFIX  = self::PLUGIN_ID . '_';

  static function init()
  {
    return new self();
  }

  function __construct()
  {
    if (is_admin() && is_user_logged_in()) {
      add_action('admin_menu', [$this, 'set_plugin_menu']);
      add_action('admin_menu', [$this, 'set_plugin_sub_menu']);
    }
  }
  function set_plugin_menu()
  {
    add_menu_page(
      'サイト設定',
      'サイト設定',
      'level_7',
      'admin',
      [$this, 'show_initial_plugin'],
      'dashicons-admin-site',
      0
    );
  }

  function set_plugin_sub_menu()
  {
    add_submenu_page(
      'admin',
      '- 基本設定',
      '- 基本設定',
      'level_7',
      'base_admin',
      [$this, 'base_admin']
    );
    add_submenu_page(
      'admin',
      '- SNS設定',
      '- SNS設定',
      'level_7',
      'sns_admin',
      [$this, 'sns_admin']
    );
    add_submenu_page(
      'admin',
      '- マニュアル',
      '- マニュアル',
      'level_7',
      'manual_admin',
      [$this, 'manual_admin']
    );
    add_submenu_page(
      'admin',
      '- タグ設定',
      '- タグ設定',
      'level_7',
      'tag_admin',
      [$this, 'tag_admin']
    );
  }


  function show_initial_plugin()
  {
    require('admin/menu.php');
  }

  function base_admin($mess = '')
  {
    if (!empty($_POST)) {
      if ($_POST['mode'] === 'conf') {
        update_option('admin_sitename', $_POST['sitename']);
        update_option('admin_name',     $_POST['name']);
        update_option('admin_pref',     $_POST['pref']);
        update_option('admin_addr',     $_POST['addr']);
        update_option('admin_tel',      $_POST['tel']);
        update_option('admin_fax',      $_POST['fax']);
        update_option('admin_mail',     $_POST['mail']);
        $mess = "登録が完了しました。";
      }
    }
    $val = array(
      'sitename'   => get_option('admin_sitename'),
      'name'       => get_option('admin_name'),
      'pref'       => get_option('admin_pref'),
      'addr'       => get_option('admin_addr'),
      'tel'        => get_option('admin_tel'),
      'fax'        => get_option('admin_fax'),
      'mail'       => get_option('admin_mail'),
      'mess'       => $mess,
    );
    $val = (object) $val;
    require('admin/base.php');
  }

  function sns_admin($mess = '')
  {
    if (!empty($_POST)) {
      if ($_POST['mode'] === 'conf') {
        update_option('admin_twitter', $_POST['twitter']);
        update_option('admin_facebook', $_POST['facebook']);
        update_option('admin_instagram', $_POST['instagram']);
        update_option('admin_line', $_POST['line']);
        update_option('admin_note', $_POST['note']);
        update_option('admin_youtube', $_POST['youtube']);
        $mess = "登録が完了しました。";
      }
    }
    $val = array(
      'twitter'   => get_option('admin_twitter'),
      'facebook'  => get_option('admin_facebook'),
      'instagram' => get_option('admin_instagram'),
      'line'      => get_option('admin_line'),
      'note'      => get_option('admin_note'),
      'youtube'   => get_option('admin_youtube'),
      'mess'      => $mess,
    );
    $val = (object) $val;
    require_once('admin/sns.php');
  }

  function tag_admin($mess = '')
  {
    if (!empty($_POST)) {
      if ($_POST['mode'] == "conf") {
        update_option('admin_header', wp_unslash($_POST['header']));
        update_option('admin_body', wp_unslash($_POST['body']));
        update_option('admin_footer', wp_unslash($_POST['footer']));
        $mess = "登録が完了しました。";
      }
    }
    $val = array(
      'header'   => get_option('admin_header'),
      'body'       => get_option('admin_body'),
      'footer'       => get_option('admin_footer'),
    );
    $val = (object) $val;
    require_once('admin/tag.php');
  }

  function manual_admin()
  {
    require_once('admin/manual.php');
  }

}

function sc_conf($args)
{
  $str = $args[0];
  $index = 'admin_'.$str;
  ob_start();
  $rtn = get_option($index);
  echo $rtn;
  return ob_get_clean();
}
add_shortcode('conf', 'sc_conf');


function conf($str)
{
  $index = 'admin_' . $str;
  $val = get_option($index);
  return $val;
}
