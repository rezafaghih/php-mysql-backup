<?php 

namespace backup;
use ZipArchive;
include_once "../autoload.php";

class backup {
    public static function simpleBackup(){
        global $connection;

        if ($connection){
            $database = db_database;
            $backupDir = backup_directory;
            $backupFile = $database . '_' . date('Y-m-d_H-i-s') . '.sql.gz';
    
            $export = '';
            $tables = array();
            $result = mysqli_query($connection, "SHOW TABLES");
            while($row = mysqli_fetch_row($result)) {
                $tables[] = $row[0];
            }

            foreach($tables as $table) {
                $result = mysqli_query($connection, "SELECT * FROM `$table`");
                $numFields = mysqli_num_fields($result);
                $export .= "DROP TABLE IF EXISTS $table;\n";
                $row2 = mysqli_fetch_row(mysqli_query($connection, "SHOW CREATE TABLE `$table`"));
                $export .= $row2[1] . ";\n";
                while($row = mysqli_fetch_row($result)) {
                    $export .= "INSERT INTO `$table` VALUES(";
                    for($j=0; $j < $numFields; $j++) {
                        $row[$j] = mysqli_real_escape_string($connection, $row[$j]);
                        $row[$j] = "'".$row[$j]."'";
                    }
                    $export .= implode(',',$row);
                    $export .= ");\n";
                }
                $export .= "\n\n";
            }
            

            $handle = fopen($backupFile,'w+');
            fwrite($handle,$export);
            fclose($handle);

            if ($handle !== false) {
                echo "Backup successful! File saved as: $backupFile";
            } else {
                echo "Backup failed!";
            }
        } 
    }

    public static function zipFile($file){
        $zip = new ZipArchive();
    }
}

backup::simpleBackup();