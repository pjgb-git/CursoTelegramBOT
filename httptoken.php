<?php
/*TODO Token de acceso a tu BOT*/
$botToken ="7686983061:AAHAXonp0DiTW4TZyBvt1daghZ6R_HarXDA";

/*TODO url del webhook*/
$webhookurl="http://lavieinformatica.com/index.php";

/*TODO configura el webhook mediante una solicitud http*/
$apiurl ="https://api.telegram.org/bot$botToken/setWebhook?url=$webhookurl";
$response = file_get_contents($apiurl);

/*TODO verifica la configuración del webhook esté bien*/
if ($response === false){
    $error = error_get_last();
    echo "Error al configurar el webhook:".$error['message'];
}else{
    /*TODO verifica la respuesta de telegram*/
    $responsedata =json_decode($response,true);
    if($responsedata['ok']===true){
        echo "wehbook configurado con exito";
    }else{
        echo "error";
    }
}

?>
