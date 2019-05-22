<?php include_once("../asterios-config/config.php");
 $methodUrlphotos = $config['protocol_ssl'].'://'.$_SERVER['HTTP_HOST'].'/asterios-config/core.php';
 $jsonphotos = file_get_contents($methodUrlphotos, false);
 $news = json_decode($jsonphotos, true);
 ///Images
$nws0 = $news["posts"][0]["post"];
$nws_img0 = $news["posts"][0]["imgUrl"];
$nws_date0 = $news["posts"][0]["date"];
$nws_id0 = $news["posts"][0]["id"];

$nws1 = $news["posts"][1]["imgUrl"];
$nws_img1 = $news["posts"][1]["imgUrl"];
$nws_date1 = $news["posts"][1]["date"];


$nws2 = $news["posts"][2]["imgUrl"];
$nws_img2 = $news["posts"][2]["imgUrl"];


$nws3 = $news["posts"][3]["imgUrl"];
$nws_img3 = $news["posts"][3]["imgUrl"];


$nws4 = $news["posts"][4]["imgUrl"];
$nws_img4 = $news["posts"][4]["imgUrl"];


$nws5 = $news["posts"][5]["imgUrl"];
$nws_img5 = $news["posts"][5]["imgUrl"];


$nws6 = $news["posts"][6]["imgUrl"];
$nws_img6 = $news["posts"][6]["imgUrl"];


?>