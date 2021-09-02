<?php

if(!defined('OptimalCMS')) {
  die('OptimalCMS');
}

?>
<!DOCTYPE html>
<html lang="<?= $site->lang ?>">
  <head>
    <meta charset="<?= $site->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title ?> - <?= $site->subtitle ?></title>
    <meta name="keywords" content="<?= $site->keywords ?>">
    <meta name="description" content="<?= $site->description ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/animate.min.css' ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/et-line-font.css' ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/font-awesome.min.css' ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/vegas.min.css' ?>">
    <link rel="stylesheet" href="<?= $site->url . '/themes/' . $site->theme . '/css/style.css' ?>">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
    <?php execute_action("head") ?>
  </head>
  <body>
    <section class="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </section>
    <section id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8 col-sm-12">
            <div class="home-thumb">
              <h1 class="wow fadeInUp" data-wow-delay="0.4s"><?= $site->title ?></h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.6s">You are <strong>ready to launch</strong> your <strong>new optimized</strong> website!</h3>
              <a href="#home" class="btn btn-lg btn-default smoothScroll wow fadeInUp" data-wow-delay="0.8s">Let's begin</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <img src="<?= $site->url . '/themes/' . $site->theme . '/images/about-img.png' ?>" class="img-responsive wow fadeInUp" alt="<?= $site->title ?>">
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="about-thumb">
              <div class="section-title">
                <h1 class="wow fadeIn" data-wow-delay="0.2s"><?= $site->title ?></h1>
                <h3 class="wow fadeInUp" data-wow-delay="0.4s"><?= $site->subtitle ?></h3>
              </div>
              <div class="wow fadeInUp" data-wow-delay="0.6s">
                <p><?= $site->description ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="feature">
      <div class="container">
        <div class="row">
          <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
            <path d="M0 0 L50 100 L100 0 Z"></path>
          </svg>
          <div class="col-md-4 col-sm-6">
            <div class="media wow fadeInUp" data-wow-delay="0.4s">
              <div class="media-object media-left">
                <i class="icon icon-laptop"></i>
              </div>
              <div class="media-body">
                <h2 class="media-heading"><?= $widgets->sections->first->title ?></h2>
                <p><?= $widgets->sections->first->text ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="media wow fadeInUp" data-wow-delay="0.8s">
              <div class="media-object media-left">
                <i class="icon icon-refresh"></i>
              </div>
              <div class="media-body">
                <h2 class="media-heading"><?= $widgets->sections->second->title ?></h2>
                <p><?= $widgets->sections->second->text ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-8">
            <div class="media wow fadeInUp" data-wow-delay="1.2s">
              <div class="media-object media-left">
                <i class="icon icon-chat"></i>
              </div>
              <div class="media-body">
                <h2 class="media-heading"><?= $widgets->sections->third->title ?></h2>
                <p><?= $widgets->sections->third->text ?></p>
              </div>
            </div>
          </div>
          <div class="clearfix text-center col-md-12 col-sm-12">
            <a href="https://github.com/OptimalCMS/OptimalCMS" target="_blank" class="btn btn-default smoothScroll">Download Now</a>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0 L50 100 L100 0 Z"></path>
          </svg>
          <div class="col-md-4 col-sm-6">
            <h2><?= $site->title ?></h2>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
              <p><?= $site->description ?></p>
              <p class="copyright-text"><?= $widgets->footer ?> <a href="<?= $site->url ?>"><?= $site->title ?></a><br>
                Powered by <a href="https://cms.sysa.ml/" target="_parent">OptimalCMS</a></p>
            </div>
          </div>
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-4 col-sm-5">
            <h2>Stay Connected</h2>
            <ul class="social-icon">
              <li><a href="<?= $widgets->social->facebook->url ?>" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
              <li><a href="<?= $widgets->social->twitter->url ?>" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
              <li><a href="<?= $widgets->social->email->url ?>" class="fa fa-email wow bounceIn" data-wow-delay="1.4s"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/jquery.js' ?>"></script>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/bootstrap.min.js' ?>"></script>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/vegas.min.js' ?>"></script>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/wow.min.js' ?>"></script>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/smoothscroll.js' ?>"></script>
    <script src="<?= $site->url . '/themes/' . $site->theme . '/js/custom.js' ?>"></script>
    <?php execute_action("script") ?>
  </body>
</html>
