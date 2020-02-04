<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'legalendlaw' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P{:V#9IIQ>RKn-QW%LS@G9ZaP{9B;jBNtcHJ~U?XQEdTT%&J+vE_IpR)`5pnd+]]' );
define( 'SECURE_AUTH_KEY',  'oe1?`fD9-Mw_`.ZI]A`K*``-81@fdsy,3EmWxh?9FwlMap]_v S/,;B*`$k[iQYD' );
define( 'LOGGED_IN_KEY',    'LMd8#j0F<$EN>zAW5*78SCZn$8GH[[*T3##>*ERc+*!@RS+]AO]~}[:W,^#@e[Ih' );
define( 'NONCE_KEY',        '-#)uBBD@#RA_g/$>2TMFq}pW<1E$1=>[6m-iB})A&`$obSRU2upRs?+K2A;(GUie' );
define( 'AUTH_SALT',        'K#7QO&hThN*7N|I!FyBc|curL&6^)j_gdx8@gk! >~?a,MN6ZUx=Ls&zK>c)9[*1' );
define( 'SECURE_AUTH_SALT', '_I!JyF0FH%TNPufawLDRKBOUA+bO<kj-p@UsD<Ba^Fh-PLY;rv$c[g6?WY6D{8q^' );
define( 'LOGGED_IN_SALT',   'WgZX[aYp`:#7U}C ?ZNnQosZ@<$0Q{~ ?*CWZh3AqQ~ilNMPky(pLkj.R^CD`B53' );
define( 'NONCE_SALT',       '-H&-]vTRcPwUP@)mH H4y}@{}X;v4xE0riI1hgAmo_eY0L)m#c/]f5MDh_|`S>PS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'legal_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
