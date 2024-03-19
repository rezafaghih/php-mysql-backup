<?php 

$inc_list = [
    "inc/php-backup.php", 'config.php', "inc/mysqldump.php", "inc/mysql.php"
];

foreach ($inc_list as $key => $value) {
    if (basename($_SERVER['PHP_SELF']) != $value){
        include_once $value;
    }
}