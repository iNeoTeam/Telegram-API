<?php
/*
IN THE NAME OF ALLAH

Sample Name			:	Telegram API without Filtering
Coder				:	Amir Hossein Yeganeh [Sir.4m1R]
Coder Telegram		:	@Sir4m1R
GitHub Address		:	https://github.com/iNeoTeam/Telegram-API
Telegram Channel	:	@iNeoTeam
*/
error_reporting(0);
header("content-type: application/json; charset: UTF-8");
$token			= "YOUR BOT TOKEN";
$method			= "getMe";

function telegram($token, $method){
	$api = "https://api.ineo-team.ir"; //don't change it !
	$telegram = $api."/telegram.php?token=".$token."&method=".strtolower($method);
	$data = file_get_contents($telegram);
	return $data;
}

echo telegram($token, $method);

if(file_exists("error_log")){
	unlink("error_log");
}
?>
