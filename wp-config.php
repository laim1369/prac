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
define( 'DB_NAME', 'db-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q;U?6dq+QU4TUVEJB8?~|e/~b{,059dGR+vGLzCOVm*+3A*=S}_};3#]2!t$kGQC' );
define( 'SECURE_AUTH_KEY',  '7q&~1nD{k@B.6+e&bx8SrVV`)Pg`Mxp/. 5CnjZ,6DQ|~O6U!J09w{gv3}eeRk`7' );
define( 'LOGGED_IN_KEY',    '&;gfLN%8EM,:aG-u+v6~i(tY$uDDZFGt4:qRD{,_gJ5-A*]FpVx92@Y:yxIUBvo2' );
define( 'NONCE_KEY',        'x2`^3p45lDLt!zSS:|$<$9*l_@V(, 4LiuZ0r+Fkj@Rb7x+@%(O(?Tx8W#Xr=ycS' );
define( 'AUTH_SALT',        '$m>oH6G@HCW-=j<FxwiG99d,.JsNwJzZ[DrKDoaV:V=:Dd^G3]A49y]x!cdx6U&>' );
define( 'SECURE_AUTH_SALT', 'JGzx#@^`Gt5E8!_V7g7u9TUvAQ-rH~bSg;4pNb?,/?[Bl^vTN-LL<X*OW)&d;L;Q' );
define( 'LOGGED_IN_SALT',   'crYIs4ZQUP-L?r}8nrPkqJ4q5Y.zGiJo=c^5W88@F&@q&RfOvWqCrs~^o?u2t[B#' );
define( 'NONCE_SALT',       'xmtYx4^}uTGE&d>uP 7+-{WD#~>>4aYa*; urzON(ZYdi_n.YF^S|j]2G_vT*y_8' );

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
