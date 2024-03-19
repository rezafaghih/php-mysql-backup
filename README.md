# php mysql backup



# install and config

Clone or download the repository to your local environment.
```
git clone https://github.com/rezafaghih/php-mysql-backup.git
```
Configure the backup settings in the config.php file

```php
define("host", "localhost"); // your database host (localhost is default)
define("username", "root"); // your database username (root is default)
define("password", ""); // your database password
define("database", "localhost"); // your database name


define("backup_directory", "backup"); // your backup directory
define("backup_email", ""); // your backup email address
```

and if you want to compress the backup file, you can change compress value in the config.php file and set it to true

