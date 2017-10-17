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
define('DB_NAME', 'sanator_ksb');

/** Имя пользователя MySQL */
define('DB_USER', 'sanator_ksb');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1q2w3e');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.sanator.mass.hc.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N!k4@%oyu%lgZ7bv,.=Q;=81m;<f(XKOgxUg`:kNUZF:<b}=6nspVc&,|W@RZ37g');
define('SECURE_AUTH_KEY',  'yuuALoyNE|,2}*y*tlL3$pc68Hcbj|s&rhr.so:)%B5BGgqEn3>,O$&*?K(=?42|');
define('LOGGED_IN_KEY',    '5jL|(xvG%>2z5sv9QxOG03h3wLX|U_bgCyt/#PJ,;:n6(M7itIqN:PmaNw@G]6{i');
define('NONCE_KEY',        '+`F/;,gW5)y~=Qt]SxNoBbk^hE-4.}z%DB+nBKoptKwaQb$:fK.?;cRFdKcTi&g;');
define('AUTH_SALT',        'MzGrUhsXP(sTf/*5D7l>DE/^<L/@OPn3^)ZY09 eEp9n+Ee0lMVYKyix9?Q221@Z');
define('SECURE_AUTH_SALT', '4juy~q:pIi}Y,+:^{}K2:+ow%@4Hg^,PZfh.cpwwEp(iB h[pwAQOiE~C%CQl.mG');
define('LOGGED_IN_SALT',   'hw/ +|I&W>-JJ+zt bR!dl3v_}c %|l1E.!)!KYp,Y.-Wv0(k=jl}<,3let$m!Hr');
define('NONCE_SALT',       '*[3>DqncKXEgB[e<hi&6YDN>adgve}y%NOjaGQavl>U$!ci3),{C$vi^=3|46{<S');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
