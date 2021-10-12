<?php

define("WP_CACHE", true);
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
define('DB_NAME', 'cashplaydonor');

/** Имя пользователя MySQL */
define('DB_USER', 'cashplaydonor');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '23134Kirova123!');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '~&7U2F/!|KMP-[G WYum;n>eT^Pcw 0BQR/c8w,83H7g6t$A+Ac*ccJ$M^qDK.v3');
define('SECURE_AUTH_KEY',  'E:E6<T=-6mFRLE:60YaJ(O4c?s?zJ;PT>;1)I.@O/R>Ey+p;d*.;LrRhU5or^=89');
define('LOGGED_IN_KEY',    '1HJMHSxh&A?:i~ujq?I(V{5T/|bRY.L}4WDSn*P[jw$fF,jazhKDvYQAw||xgDqq');
define('NONCE_KEY',        '7G[yrg,fh6E%u:c.iScKKK|$)<h8TcRD__G7.FS@V<3C}kd|:sOjhENBJK3m-Z.e');
define('AUTH_SALT',        '4>k(lI{&n8SXf;)/Z=,/?Q.0.CMjO}oH&)FPAjy;nZjXS)0Aa.rbZFBz)WR>Q%m=');
define('SECURE_AUTH_SALT', 'EH#^C(=y_ZCSIA U)#@S8pd<O(URA;K3kP^c(bW>ClW8-GMd05:3-+96VsmjD_*B');
define('LOGGED_IN_SALT',   'Z#u1Sni<mn(fvagGZwkm|-#;IKPiQOCGY9b0*BFg7z!f*$~M^KS)fH{C|7n,#Y__');
define('NONCE_SALT',       'DvXkma/g?u/M_ju@CUwZuVWkeDQj%quh@X/?>vhl%ios4m @hH/k |~IkF^[LzHO');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpc_';

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
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if(!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');