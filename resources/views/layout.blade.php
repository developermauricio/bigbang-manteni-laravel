<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/main/logo_dark.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Big Bang Ideas Group SAS
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="/css/main.css" rel="stylesheet">
  </head>
  <body class="top backgroud_page" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  @if(Session::has('exito'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('exito') }}
    </div>
    @endif
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    
    <!-- Header-->
    <header class="intro intro-fullscreen backgroud_page">
    
      <div class="magic2" id="magic2">
        <canvas id="magic2-canvas"></canvas>
      </div>
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h1 class="no-pad"><span class="rotate">crear, conectar, ejecutar</span></h1>
              <p class="no-pad"><span class="rotate" style="font-size: 1.8rem;">nuevas posibilidades., con los seres humanos indicados., con las tecnologías adecuadas.</span></p>
              <!-- countdown-->
              <div class="no-pad-top" id="clock"></div>
              <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
             <form class="small-form subscribe-form" id="mc-embedded-subscribe-form2" action="{{ route('newsletter') }}" method="POST">
             @csrf
               <div class="input-group input-group-lg">
                  <input class="form-control" id="mce-EMAIL2" type="email" name="email" placeholder="Email..."><span class="input-group-btn">
                    <button class="btn btn-unibody" id="mc-embedded-subscribe2" type="submit" name="subscribe">Notificarme!</button></span>
                </div>
                @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                    @endif
                <div id="mce-responses2">
                  <div class="response" id="mce-error-response2" style="display:none;"></div>
                  <div class="response" id="mce-success-response2" style="display:none;"></div>
                </div>
              </form>
              <img src="/img/main/logo.png" width="150" alt="">
            
              <!-- End MailChimp Signup Form-->
             <!--  <ul class="list-inline">
                <li><a href="/"><i class="fa fa-twitter fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-facebook fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-google-plus fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-linkedin fa-fw fa-2x"></i></a></li>
              </ul> -->
              <div class="row">
                <div class="col-12">
                  <p style="font-weight: 600; line-height: 2.5rem;font-size: 1.7rem; font-style: oblique; font-family: Arial, Helvetica, sans-serif; text-align: center;">Estamos rediseñando nuestro sitio web para contarle porque no hablamos de transformación digital, hablamos de competitividad tecnológica y cómo esta le ayudará a que su idea se convierta en un negocio de otro planeta.</p>
                </div>
              </div>
               <div class="row" style="padding-top: 0px !important;">
                <div class="col-12">
                  <p style="font-weight: 700; font-family: Arial, Helvetica, sans-serif; line-height: 2rem; font-size: 1.8rem;">Estamos en:</p>
                </div>
              </div>
              <div class="row" style="padding-top: 0px !important;">
                <div class="col-12">
                  <p style="margin-bottom: 0px !important; font-weight: 700; font-family: Arial, Helvetica, sans-serif; line-height: 2.8rem; font-size: 1.8rem;">COLOMBIA - PANAMÁ</p>
                  <p  style="font-weight: 700; font-family: Arial, Helvetica, sans-serif; line-height: 2.8rem; font-size: 1.8rem;">BOGOTÁ - BUCARAMANGA - QUITO - SAN JOSÉ - MIAMI - BARCELONA</p>
                </div>
              </div>
              <p class="small"><a href="http://bbigroup.com.co">©2021 <i class="fa fa-heart fa-fw"></i>Powered by Big Bang Ideas Group SAS</a></p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- jQuery-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/device.min.js"></script>
    <script src="/js/form.min.js"></script>
    <script src="/js/jquery.placeholder.min.js"></script>
    <script src="/js/jquery.shuffle.min.js"></script>
    <script src="/js/jquery.parallax.min.js"></script>
    <script src="/js/jquery.circle-progress.min.js"></script>
    <script src="/js/jquery.swipebox.min.js"></script>
    <script src="/js/smoothscroll.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/text-rotator.min.js"></script>
    <script src="/js/magic2.min.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="/js/main.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </body>
</html>