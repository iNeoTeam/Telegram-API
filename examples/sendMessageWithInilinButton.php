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
$method			= "sendMessage";
$chat_id		= "USER/CHAT/GROUP/SUPERGROUP/CHANNEL ID";
$message		= "YOUR TEXT MESSAGE";
$button			= urlencode(json_encode(['inline_keyboard' => [
[['text' => "✅عضویت در کانال رسمی آی نئو", 'callback_data' => "null"]],
[['text' => "📣گروه ربات سازی آی نئو", 'url' => "https://t.me/iNeoTeam"]],
]]));
$parameters		= "chat_id=".$chat_id."&text=".$message."&reply_markup=".$button;

function telegram($token, $method, $parameters){
	$api = "https://api.ineo-team.ir"; //don't change it !
	$_parameters = urlencode($parameters);
	$telegram = $api."/telegram.php?token=".$token."&method=".strtolower($method)."&parameters=".$_parameters;
	$data = file_get_contents($telegram);
	return $data;
}

echo telegram($token, $method, $parameters);

if(file_exists("error_log")){
	unlink("error_log");
}
?>
