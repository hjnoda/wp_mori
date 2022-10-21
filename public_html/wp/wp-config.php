<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp' );

/** データベースのユーザー名 */
define( 'DB_USER', 'wp' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'pass' );

/** データベースのホスト名 */
define( 'DB_HOST', 'politics_db' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XQhgI*8H(Z+dfl[H9TYy2^zS#w&q,.o5o&4*Y#T_0tNn#<Rl;i;)+zWiAb^]x4k*' );
define( 'SECURE_AUTH_KEY',  '3T0xdERdln&|!`@a1?Few|u=Y`nKx8oR%0rzz]f,KS^Tr@bgDmIe_m;P7HGxs[M:' );
define( 'LOGGED_IN_KEY',    '/K#+nnTL#/{um<P_qYk;|cOXE!F*m6DT+LoT9F{2~Wy8!nf|^&+hh:41T4;A.,EW' );
define( 'NONCE_KEY',        'K`QtC:GR0&/{`z;F*pqJ^QxIq#dQ^).;GUnD!|} E#R0_V<{#[uoAsPkiui`#,vF' );
define( 'AUTH_SALT',        '02Z*FR gwlUJYC]}DtTbod9 P%hyrDY_Q5HIy8Ugxcw]l?k2]zvz9)j!D0lft|~4' );
define( 'SECURE_AUTH_SALT', 'dE6}`;[ $5q,23q9us6&f=X+nD4990e* WzQcE>y]txK> n{X3U^7<-Z}3`t`Dd1' );
define( 'LOGGED_IN_SALT',   'n*T86:|k#{#mGmoiiwOlj!j+iSAw+hvi_Uk}]^sS#{iyCn2S[cwV(Vo!LBHbskJ%' );
define( 'NONCE_SALT',       'k4UOuM1EHpzMw:;Y9gI=]n!V#4l-3&M{)I(|b)wloi{J|i1sPQ2L~xM<L-4|;3 I' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

