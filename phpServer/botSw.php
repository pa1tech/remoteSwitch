<!--https://api.telegram.org/bot<TOKEN>/setwebhook?url=https://homenet2683.000webhostapp.com/botSw.php
https://nordicapis.com/how-to-build-your-first-telegram-bot-using-php-in-under-30-minutes/
-->

<?php
$path = "https://api.telegram.org/bot<TOKEN>";
$update = json_decode(file_get_contents('php://input'), TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

$help = 'Commands:%0A 1. /on - To turn on the switch%0A 2. /off - To turn off%0A 3. /lastping - Info of the last ping from ESP Client';

if ($message == "/start") {
	file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Welcome!%0A".$help);
}elseif ($message == "/help") {
	file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=".$help);
}elseif ($message == "/lastping") {
	$myfile = fopen("./tt.txt", "r");
    $time = fread($myfile,filesize("./tt.txt"));
    fclose($myfile);
	file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Last Ping:%0A".$time);
}
elseif ($message == "/on"){
	$myfile = fopen("./gg.txt", "w");
    fwrite($myfile, "10");
    fclose($myfile);
    file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Turned ON!");
}
elseif ($message == "/off"){
	$myfile = fopen("./gg.txt", "w");
    fwrite($myfile, "00");
    fclose($myfile);
    file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Turned OFF!");
}
?>

