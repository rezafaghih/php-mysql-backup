﻿# php mysql backup



# install and config

Clone or download the repository
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

include autoload.php file inside your project
```php
    include_once "autoload.php";
```

then you can use backup class methods

```php 
    backup::simpleBackup($maxCount : int);
```

## note : max count is optional (default value exist in config.php file)
_______________________________________________________________________
- [ ] add schedule in project
- [ ] add email backup (send backup to email)
- [ ] add client GUI to having better experince
