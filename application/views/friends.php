<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" Content="ie=edge">
    <title>HelloFriends</title>
</head>
<body>
    <?php
     
        //二維陣列
        foreach ( $alldata as $row ) {
            foreach ( $row as $row2 ) {
                echo $row2;
                echo '</br>';
            }
        }

    ?>
</body>
</html>