<?php 
include_once("../asterios-config/language.php");
include_once("../asterios-config/config.php");
include_once('../asterios-config/profile.php');
include_once('../asterios-config/photo.php');

?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $lang['sitename']; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/main-page/css/normalize.css">
        <link rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/main-page/css/font-awesome.css">
        <link rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/main-page/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://repository.asterios.ws/asterios-cms/v1/main-page/css/templatemo-style.css">
        <style>
            .banner-bg {
  padding: 260px 80px;
  position: relative;
  background: url("<?php echo $obj->normalCoverUrl; ?>");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  z-index: 2;
}
        </style>
        <script src="https://repository.asterios.ws/asterios-cms/v1/main-page/js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>
    <body>
    
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="<?php echo $obj->bigPhotoUrl; ?>">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title"><?php echo $obj->fullname; ?></h3>
                                <p class="profile-description"><?php echo $obj->status; ?></p>
                                <p class="profile-location"><?php echo $obj->location; ?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                     
                        <li><a href="https://asterios.ws/<?php echo $obj->username; ?>/gallery"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="https://asterios.ws/<?php echo $obj->username; ?>"target="_blank"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="<?php echo $obj->bigPhotoUrl; ?>" alt="Volton">
                </div>
                <h3 class="profile-title"><?php echo $obj->fullname; ?></h3>
                <p class="profile-description"><?php echo $obj->status; ?></p>
               <p class="profile-location"><?php echo $obj->location; ?></p>
               <br>
              <strong> Like: <?php echo $obj->likesCount; ?> Post: <?php echo $obj->postsCount; ?></strong>

            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top1"><i class="fa fa-globe"></i>Welcome</a></li>
                   <li><a href="https://asterios.ws/<?php echo $obj->username; ?>/gallery"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="https://asterios.ws/<?php echo $obj->username; ?>"target="_blank"><i class="fa fa-envelope"></i>Contact Me</a></li>
                </ul>
            </div> 
        </div>
        <div class="banner-bg" id="top">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2><center><?php echo $lang['sitename']; ?></center></h2>
                <h5><?php echo $lang['headertext']; ?></h5>
            </div>
        </div>       <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                   <iframe src="https://widget.asterios.ws/<?php echo $obj->username; ?>" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="9990px" width="100%" allowfullscreen></iframe>
                   
                    </div>
                    <hr>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">Copyright &copy; <?php echo $lang['sitename']; ?> </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <script src="https://repository.asterios.ws/asterios-cms/v1/main-page/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="https://repository.asterios.ws/asterios-cms/v1/main-page/js/min/plugins.min.js"></script>
        <script src="https://repository.asterios.ws/asterios-cms/v1/main-page/js/min/main.min.js"></script>

    </body>
</html>