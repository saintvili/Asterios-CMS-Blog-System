<?php include_once("../asterios-config/language.php");
include_once("../asterios-config/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo $lang['error404']; ?> </title>
	<link href="https://repository.asterios.ws/repo-css/family-Muli.css" rel="stylesheet">
	<link href="https://repository.asterios.ws/repo-css/PassionOne.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/error-page/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/error-page/css/style.css" />

</head>
<body>

	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1><?php echo $lang['404']; ?></h1>
			</div>
			<h2><?php echo $lang['404text']; ?></h2>
		
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
			<a href="<?php echo $config['siteurl']; ?>"><?php echo $lang['404gotohome']; ?></a>
		</div>
	</div>
</body>
</html>
