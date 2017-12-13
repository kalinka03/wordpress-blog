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
define('DB_NAME', 'wordpress-blog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         ';ft3WlkXz&S^Vc@$Z8rac*vA]WugvTGNr>!t?7~3q)5Qv7t_}I(AV/z<E.a+%U`o');
define('SECURE_AUTH_KEY',  '`kv3u7ujwKRLE?qL.;Qs 9@!!BcFgaHzZ27BJ2&Iw:%w9Y7h57FQc tKhSj!?&aV');
define('LOGGED_IN_KEY',    ',2wn8pxc`lRQMb&M:]Y&>}Q8zObD0WEqVL{H_Z;u`Lb1~dd_g4V@+f^K j}3xlU]');
define('NONCE_KEY',        '?8WA`:9WzuUvdsOq`!HiU`qmTIPFR}ecoMT4Po(qht$Vj?@7kp13Kg-It3EG^V$|');
define('AUTH_SALT',        '8(e{E}?lfl=>dnW7Jm{{/i`fUr<`&|0zdgS.99#/~*O+Bozw}PZw5kIY,1%; /e7');
define('SECURE_AUTH_SALT', 'd`%d!/C$>E,2dC!wkB1]dq]f%k,{JHxu!;ei75qvr`v5h360qK{o=p|d]MZGb$k$');
define('LOGGED_IN_SALT',   'E(->FWgMVNSu3Py?>WE8-~+.R}#j/^Bd$-Tv0^HD,H38gHj9I?Iz0 ,Xy<(<HB.1');
define('NONCE_SALT',       'M#C,CU7j*5Hosh4d`I(nF@UIr|q<Dz9@ A~v>Td_,p d~U<-brw .Z2wM^_%Wz^$');

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
