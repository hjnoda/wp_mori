<?php
/*
  Plugin Name: CLEARdeSIGN CONFIG TOOL
  Plugin URI:
  Description: CLEARdeSIGN設定プラグイン
  Version: 1.0.0
  Author: soraha
  Author URI: https://clear-design.jp
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
      'CLD設定',
      'CLD設定',
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

  function tag_admin()
  {
    if ($_POST['mode'] == "conf") {
      update_option('admin_header', wp_unslash($_POST['header']));
      update_option('admin_body', wp_unslash($_POST['body']));
      update_option('admin_footer', wp_unslash($_POST['footer']));
      $mess = "登録が完了しました。";
    }
    $header         = get_option("admin_header");
    $body           = get_option("admin_body");
    $footer         = get_option("admin_footer");
    require('admin/tag.php');
  }
 
  function manual_admin()
  {
    require('admin/manual.php');
  }
}