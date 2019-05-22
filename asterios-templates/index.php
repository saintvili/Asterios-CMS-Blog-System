<?php 
include_once("../asterios-config/language.php");
include_once("../asterios-config/config.php");
include_once('../asterios-config/profile.php');
include_once('../asterios-config/security-photo.php');
include_once('../asterios-config/secure-news.php');


?>
<!DOCTYPE html>
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
                        <li><a href="#news"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#galler"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
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
                             <li><a href="#news"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#galler"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="https://asterios.ws/<?php echo $obj->username; ?>"target="_blank"><i class="fa fa-envelope"></i>Contact Me</a></li>
                </ul>
            </div> <!-- .main-navigation -->
          
        </div> <!-- .sidebar-menu -->
        

        <div class="banner-bg" id="top">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2><center><?php echo $lang['sitename']; ?></center></h2>
                <h5><?php echo $lang['headertext']; ?></h5>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                
                     <!-- ABOUT -->
                    <div class="page-section" id="news">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title"><a href="https://asterios.ws/<?php echo $obj->username; ?>/post/<?php echo $nws_id0; ?>_acms" target="_blank"><?php echo $nws_date0;?></a></h4>
                            <div class="about-image">
                                <img src="<?php echo $nws_img0;?>" >
                            </div>
                            <p><?php echo $nws0;?></p>
                            <hr>
                        </div>
                    </div> <!-- #about -->
                    </div>
                    <hr>
                  
                   
                    <!-- PROJECTS -->
                    <div class="page-section" id="galler">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">My Photo</h4>
                            <p>Photo user in Asterios Network.</p>
                        </div>
                    </div>
                    <div class="row projects-holder">
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht1 ?>">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht2 ?>" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht3 ?>" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht4 ?>" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht5 ?>" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo $pht6 ?>" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .projects-holder -->
                    </div>
                    <hr>
                    

                    
              <!-- CONTACT -->
                    <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title"><?php echo $lang['formdesc']; ?></h4>
                            <p><?php echo $lang['formdesctext']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="/aquarius" method="GET" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" name="your-name" placeholder="<?php echo $lang['youname']; ?>">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" name="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" name="your-subject" placeholder="<?php echo $lang['subject']; ?>">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="6" placeholder="<?php echo $lang['new_message']; ?>"></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="<?php echo $lang['botton_send']; ?>">
                            </fieldset>
                        </form>
                    </div> <!-- .contact-form -->
                    </div>

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