<?php 

$inc_list = [
    "inc/php-backup.php", 'config.php'
];

foreach ($inc_list as $key => $value) {
    include_once $value;
}