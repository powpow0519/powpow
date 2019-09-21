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
    <title>Register</title>
    <style>
		#registertext{
			
			width:300px;
			border: 3px dotted #000;
			margin:50px auto;
			padding:30px 0px 30px 50px;
			font-weight:bold;
			border-radius:30px;

		}
		</style>
</head>
<body>
<div id = "registertext">
    註冊會員
    <br><br>
			<form name="form" method="post" action="/home/register_finish">
			帳號：<input type="text" name="username" required /> <br><br>
			密碼：<input type="password" name="password" required /> <br><br>
			姓名：<input type="text" name="name" required /> <br><br>
			電話：<input type="text" name="phone" required /> <br><br>
				<input type="submit"  value="確定" /><br>
			</form>
		</div>

</form>
</body>
</html>