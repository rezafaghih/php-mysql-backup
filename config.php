<?php 

define("host", "localhost"); // your database host (localhost is default)
define("username", "root"); // your database username (root is default)
define("password", ""); // your database password
define("database", "localhost"); // your database name
define("port", ini_get("mysqli.default_port")); // your database port

// if you have large database and you want to compress it you can use compress -> true
define("compress", true);