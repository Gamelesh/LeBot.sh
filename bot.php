<?php

ini_set('error_reporting', E_ALL);

$botToken = "251155620:AAHuuhG6x4SxlZPfj7bhdQ-gYxvU2Na0BjE";
&website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatID = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
    
    case "/tag":
        sendMessage($chatId, "Guten Tag");
        break;
    case "/nacht":
        sendMessage($chatId, "Gute Nacht");
        break;
    default:
        sendMessage($chatId, "Bitte nutze einer der folgenden Commands /nacht , /tag");
}



function sendMessage ($chatId, $message) {
    
    $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
    file_get_contents($url);    
    
}




?>

<p>Works?</p>