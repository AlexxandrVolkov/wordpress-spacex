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
define( 'DB_NAME', 'testi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'alex' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '~Ga+r(.`Usqmx4fo^80,~%p?d7^z5?^+wCbwYLhY&zu[S)-#g5 oK`]!Dao/59}(' );
define( 'SECURE_AUTH_KEY',  'fQqRpWBTWaR?Wl8U/~:RO3SB-1V.krp8Nts=XtlRa;Hu?MYd?dKt+%&<j]/:@!f0' );
define( 'LOGGED_IN_KEY',    'j9MwYgw`,+#AC{6U$c?mo}K4ic+%NLwrvH}A.=cqUN4jz_^(CC?Ob);3|bw#Qhyj' );
define( 'NONCE_KEY',        '{R$8Q=1+UdJFbIm.$>s%e5Ge!`aiG&|Q~e3nT{o#/>Q RM>7e|ND/LJz_8/D+3qX' );
define( 'AUTH_SALT',        '4us$a@jf8?&m:HWeM-I7#*4vqW>Na#2fr_e*7H]w]}$!|<=5/=lAXMQ9wc7Q>85f' );
define( 'SECURE_AUTH_SALT', 'o*1;aBDi:4R3WjqpP[ow|z?A+wojUT|KfwK0IpIG4Hc6}C(:}$=5A S@[~7!T}|~' );
define( 'LOGGED_IN_SALT',   'sJ/=uH#dhS7 @V=oWI[WEFslT)[$:n@S6EAn*:qXPZK;7<Xn4qkm{)$tA=uwowbP' );
define( 'NONCE_SALT',       '6/|Q+2tn!GOW:7v`sylX+2t8HTiP&gm%IB%/rNu4:rWsz)j[7wSwkdtxH!ic3pX%' );

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
