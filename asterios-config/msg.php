<?php include_once("config.php");
$url = "https://newapi.asterios.ws/api/v2/method/msg.new";
$post_data = array (
    "clientId" => "1743",
    "accountId" => $config['accountId'],
    "accessToken" => $config['accessToken'],
    "profileId" => $config['profileId'],
    "chatFromUserId" => $config['accountId'],
    "messageText" => $_GET['text'],
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
echo $output;
?>