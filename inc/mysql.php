<?php 

// mysql connection

/**
 * @author rezafaghih <connect.rezafaghih@gmail.com>
 */

 include_once "../autoload.php";

$connection = mysqli_connect(
    db_host, db_username, db_password, db_database, db_port
);