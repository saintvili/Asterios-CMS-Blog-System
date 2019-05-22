<?php include_once("../asterios-config/config.php");
$post_name = $_GET['your-name'];
$post_email = $_GET['email'];
$yoursubject = $_GET['your-subject'];
$message  = $_GET['message'];

$asterios = $post_name.'\n\n'.$post_email.'\n\n'.$yoursubject.'\n\n'.$message;

$url = $config['protocol_ssl'].'://'.$_SERVER['HTTP_HOST'].'/asterios-config/msg.php?text='.$asterios;

$str = file_get_contents($url);
    
 
    echo "Messenge Send";
    
header('Location: /');


?>