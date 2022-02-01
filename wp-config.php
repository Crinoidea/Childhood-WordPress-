<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VEm@aa>e]>hH:U/am9HtpwbfDjc|KCD)]{@ZzOW~>uA9AOlzKp:-H}%Lv~T|aLNs' );
define( 'SECURE_AUTH_KEY',  '6YZd{((^KOJl6}GTy|HY`|b7+,2BmIsllU75/58},!^?&wulKM6=|k!P(ILb<gr+' );
define( 'LOGGED_IN_KEY',    ':_~_kN9e~Itmw*WI8sgUFcuwn,yvV@GOzLyM))XFR#(|6lhM&wVl8IXD7g~FVqy}' );
define( 'NONCE_KEY',        ',VB~M6GH*;3>rHLh&(pAu4jMJlvuLJ+AK1 d79Uf6z9um`-[rdS%>0X>p_r^JSYx' );
define( 'AUTH_SALT',        'iA,}mquSvoW:lKeU@oa#Z4Bq.I@EWRU4qLHy;XF5-4( f?swY3_?tbwJsKMWl6Hh' );
define( 'SECURE_AUTH_SALT', 'p]HdkMRB ?ls7oc9&eGqD!UNY_+&s4{ld?<r,j4Q$HC@uYj|f5q|h%wX0R3xoAZZ' );
define( 'LOGGED_IN_SALT',   '=zT$t/5-n@&A(;rtvc+e`tP*OZ7U<b;*NfJ1JNX%M6-Wg|[+~MFUBLMr,U>hbcNB' );
define( 'NONCE_SALT',       '{kGjAB>glSjVN#$|qJx+Mmg}*o>9j/8jiY$,P0$&)2Zy~HtlvTh$52p+o%1((1mV' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
