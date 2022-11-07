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
 * * Настройки базы данных
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
define( 'DB_NAME', "nukerkz_kk" );

/** Имя пользователя базы данных */
define( 'DB_USER', "nukerkz_kk" );

/** Пароль к базе данных */
define( 'DB_PASSWORD', "Pjf04!07b" );

/** Имя сервера базы данных */
define( 'DB_HOST', "srv-pleskdb23.ps.kz:3306" );

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
define( 'AUTH_KEY',         'L$%wdh_&[d)@&2j,h^vnjxDG*I^$a6B8{bF5pk-kOe^8[jFW7Cw0p9FS (#mP9V4' );
define( 'SECURE_AUTH_KEY',  '~BsZ+@YnL/UehT$+cPdFAFBHTI3@P9~>hy,jtK-`<NR$5VRt.Q%xEXI1dIoZIN1K' );
define( 'LOGGED_IN_KEY',    ':w~Tkydh6BZ(c}T)$J{W6B0cwvP=v2Tp0M<kyuQX!fw7n:rvB&?-K3sgA}W wYcq' );
define( 'NONCE_KEY',        'oYKtn1ol2.GG~S,8e*fsWnt4z&hVP*Pq1VQ+No~ciH8aXG{v+22?n[A[*]uLbzT>' );
define( 'AUTH_SALT',        '<*.LO0&}*j.)7A^0B5&YYZl$@?}XjOKzx.D.>%`z`vFnyHSTGl?4r;uq{02.+<QM' );
define( 'SECURE_AUTH_SALT', 'd}byh1&+6x?i]pk$T]X`!DcEn?IDHg{@bJ}KnW3N;]=Z3|:g]cqLpZQaHb[D]h)9' );
define( 'LOGGED_IN_SALT',   '&$V:cBb~l)@)%E>zG0B,o/=cddnGXBEA0~ej5TMOa/%!70HL5w`MHH#H.A:>>J|b' );
define( 'NONCE_SALT',       'pg^t@]2aR%5M@xo+qSRb!$J@Gg#eR2t^NITRbq47L;S|i_V/?&E(!?ha0>_XoQPa' );

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
define( 'WP_SITEURL', 'https://nuker.kz/kk/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
