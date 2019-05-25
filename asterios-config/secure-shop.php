<?php include_once("../asterios-config/config.php");
 $methodUrlphotos = $config['protocol_ssl'].'://'.$_SERVER['HTTP_HOST'].'/asterios-config/shop.php';
 $jsonphotos = file_get_contents($methodUrlphotos, false);
 $shop = json_decode($jsonphotos, true);
 
$shp0 = $shop["items"][0]["imgUrl"];
$shp0_title = $shop["items"][0]["itemTitle"];
$shp0_content = $shop["items"][0]["itemContent"];
$shp0_price = $shop["items"][0]["price"];
/////////////
$shp1 = $shop["items"][1]["imgUrl"];
$shp1_title = $shop["items"][1]["itemTitle"];
$shp1_content = $shop["items"][1]["itemContent"];
$shp1_price = $shop["items"][1]["price"];
////////

/* DELETE COMENT AND USE 3th item in you temlates

$shp2 = $shop["items"][2]["imgUrl"];
$shp2_title = $shop["items"][2]["itemTitle"];
$shp2_content = $shop["items"][2]["itemContent"];
$shp2_price = $shop["items"][2]["price"];
*/

// USE in asterios-templates folder the next  param: $shp1 , $shp1_title , $shp1_content , $shp1_price , $shp0 , $shp0_title , $shp0_content , $shp0_price


//echo $shp1 , $shp1_title , $shp1_content , $shp1_price ."<br> <p>". $shp0 , $shp0_title , $shp0_content , $shp0_price ;


?>