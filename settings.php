<?php 
define('ADM_PASS', 'a69f982244c4957d99eddd840e4c7767');
define('DEV', FALSE);

/** database settings **/
define('HOST_SERVER','localhost');
define('HOST_NAME','root');
define('HOST_PASS','');
define('HOST_DB','svetarobski');
define('DB_TYPE','mysql');
define('HOST_DRIVER', DB_TYPE . ':dbname=' . HOST_DB . ";host=" . HOST_SERVER);

/* database dump */
define('MYSQL_BIN_PATH', 'C:/xampp/mysql/bin/');
define('MYSQLDUMP_PATH', MYSQL_BIN_PATH . 'mysqldump.exe'); //mysqldump if it is already defined
define('MYSQL_PATH', MYSQL_BIN_PATH . 'mysql.exe'); //mysql if it is already defined
define('DUMP_ONE_FILE', TRUE); // defines if we want to dump only in one filename or want to dump each time in new file
define('DUMP_DIR', 'data/db/dump/');
define('DUMP_FILE', DUMP_DIR . 'last.sql');

/* path settings */
define('BASE_PATH', dirname(__FILE__) . '/');
define('SITE_PATH', BASE_PATH . 'svetarobski/');
define('BASE_FOLDER', '');
define('PUB_FOLDER', BASE_FOLDER . 'front/');
define('TPL_FOLDER',  BASE_FOLDER . 'tpl/');
define('CLASS_FOLDER',  BASE_FOLDER . 'modules/');
define('DATA_FOLDER',  BASE_FOLDER . 'data/');
define('EXT_FOLDER',  BASE_FOLDER . 'external/');
define('THEME_FOLDER',  BASE_FOLDER . 'themes/');
define('UPLOADS_FOLDER', DATA_FOLDER . 'uploads/');


/* URL settings */
define('HOST', 'http://' . $_SERVER['SERVER_NAME']);
define('HOST_FOLDER', '/svetarobski');
define('BASE_URL', HOST . HOST_FOLDER . '/');
define('PUB_URL', BASE_URL . PUB_FOLDER);
define('IMG_URL', PUB_URL . 'img/');
define('UPLOADS_URL', BASE_URL . UPLOADS_FOLDER);

/* default settings */
define('DEFMODULE', 'pages');
define('DEFTHEME', 'svetarobski');


/** misc stettings **/
define('EXT_TPL', '.tpl.php');
