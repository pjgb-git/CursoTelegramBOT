<?php
require_once 'include/vendor/autoload.php';

use TelegramBot\Api\BotApi;

/*TODO Configura el token de acceso al Bot*/
$telegram = new BotApi('7686983061:AAHAXonp0DiTW4TZyBvt1daghZ6R_HarXDA');

/*TODO obtiene la actualización del webwook*/
$update = json_decode(file_get_contents('php://input'));

/*TODO Verificar si se recibió un mensaje de texto*/
if(isset($update->message_text)){
    $chatId = $update->message->chat->id;
    $text = $update->message->text;
$telegram->sendMessage($chatId,"Lo que escribió el usuario es: ".$text);

}
?>