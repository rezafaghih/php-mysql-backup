<?php 

/**
 * @author Rezafaghih <connect.rezafaghih@gmail.com>
 * @name mysql backup with php
 */

define("db_host", "localhost"); // your database host (localhost is default)
define("db_username", "root"); // your database username (root is default)
define("db_password", ""); // your database password
define("db_database", "smpe"); // your database name
define("db_port", ini_get("mysqli.default_port")); // your database port

// if you have large database and you want to compress it you can use compress -> true
define("compress", true);
define("max_count", 5);
define("backup_log", true);


define("backup_directory", "../backup"); // your backup directory
define("backup_email", ""); // your backup email address