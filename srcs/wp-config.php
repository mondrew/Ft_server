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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O_:ByZm/)FZ$XLo5e>({mLq- iw@L!,cU;Jozxknf`TNsARHJmMyc]EB<{ey:Avi' );
define( 'SECURE_AUTH_KEY',  'J,ngE)jMe^Hk6U/P>I6)>~e]IC0RLiD;l}01;!7B[gF_9s:V,}o`[~`Wq@JE_Uda' );
define( 'LOGGED_IN_KEY',    '6B+P-A,[Fu7Cl<!D{qo<gdEN=oNu>-Jf;XUb%qJ{[>brj-g[>t=;Gy54Rj}f`d?m' );
define( 'NONCE_KEY',        'p23/Qxu58jo$bw}VnR}<!!~g&1]k*FFa5euw^K5#u?tHtU_He S10|gK;D-xnuGs' );
define( 'AUTH_SALT',        '[y]jsd|$Mq]Y>@vY<M4[M=<.y;}N+&}cY8!Fc,|U0]bu*nID|V !pw=JJcvq*;EQ' );
define( 'SECURE_AUTH_SALT', 'mxJy_29&~i3=$aP~;r>0SbhUw5bpNOMndLEc{_M2K.|H74YhK|Y(?>aYz@O1z<g8' );
define( 'LOGGED_IN_SALT',   's4sGr?/<p+3qt$iK)D[%m0Dob]V!#;lBxKZG09MLc/Y~02,n9lIENnqYoDi;bQh1' );
define( 'NONCE_SALT',       '9ol)bh?|q<>.tG9Ft440Ek[B/F]Ut>Q2hnceQst<a/<9,Z,PkdfQvbU,7D(mD%$O' );

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
