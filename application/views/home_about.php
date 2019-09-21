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
    <title>Helloabout</title>
</head>
<body>
<a href="/home/index"><h2>首頁</h2></a>
<a href="/home/about"><h2>關於我們</h2></a>

<div>
    <ul>
        <li>AAA</li>
        <li>BBB</li>
        <li>CCC</li>
        <li>DDD</li>
    </ul>
</div>

<!--共用-->
<?php $CI->load->view('top_menu'); ?>


</body>
</html>