<?php include_once("../asterios-config/config.php");
 $methodUrlphotos = $config['protocol_ssl'].'://'.$_SERVER['HTTP_HOST'].'/asterios-config/photo.php';
 $jsonphotos = file_get_contents($methodUrlphotos, false);
 $photos = json_decode($jsonphotos, true);
 ///Images
$pht0 = $photos["photos"][0]["imgUrl"];
$pht1 = $photos["photos"][1]["imgUrl"];
$pht2 = $photos["photos"][2]["imgUrl"];
$pht3 = $photos["photos"][3]["imgUrl"];
$pht4 = $photos["photos"][4]["imgUrl"];
$pht5 = $photos["photos"][5]["imgUrl"];
$pht6 = $photos["photos"][6]["imgUrl"];
// you can add many photo add to $pht7 = $photos["photos"][7]["imgUrl"]; and other , paste in temlates folder paran $pht7

?>