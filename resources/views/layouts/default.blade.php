<!DOCTYPE html>
<html>
  <head>
    <title>LeJournalDuMonde.co</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <header id="header">
      <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.PNG')}}" alt=""></a></div>
          <div id="navbar" class="navbar-collapse collapse col-md-8">
            <ul class="nav navbar-nav custom_nav">
              <li class="active"><a href="index.html">Accueil</a></li>
              <li><a href="#">International</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">National</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Politique</a></li>
                  <li><a href="#">Economique</a></li>
                  <li><a href="#">Société</a></li>
                  <li><a href="#">Coopération</a></li>
                  <li><a href="#">Culture</a></li>
                </ul>
              </li>
              <li><a href="#">Reportages</a></li>
              <li><a href="#">Nos&nbspémissions</a></li>
              <li><a href="carte">Contact</a></li>
              <li><a href="login">Connexion</a></li>
              <li><a href="register">S'inscrir</a></li>
            </ul>
          </div>
          <div class="search"><a class="search_icon" href="#"><i class="fa fa-search"></i></a>
            <form action="#">
              @csrf
              <input class="search_bar" type="text" placeholder="Search here">
            </form>
          </div>
        </div>
      </nav>
    </header>
  @yield('content')
    <footer id="footer">
        <div class="footer_top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInLeftBig">
                  <h2>Labels</h2>
                  <ul class="labels_nav">
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Life &amp; Style</a></li>
                    <li><a href="#">Ver</a></li>
                    <li><a href="#">Sports</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInRightBig">
                  <h2>Flickr Images</h2>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInRightBig">
                  @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                @endif
                @if (\Session::has('failure'))
                  <div class="alert alert-danger">
                    <p>{{ \Session::get('failure') }}</p>
                  </div><br />
                @endif
                  <h2>Inscrivez-vous à notre newsletters</h2><br/>
                  <form method="post" action="{{url('index')}}">
                    @csrf
                    <p id="subscribe-text">We promise, we will only send you awesome stuff which will make your day!</p>
                    <p id="subscribe-email">                
                      <label for="Email" id="subscribe-text">Email:</label>
                      <input type="text" class="form-control" id="Email" name="email" placeholder="Entrer votre mail...">
                    </p>
                    <p id="subscribe-submit">
                      <input type="submit" value="Submit">
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bottom">
          <div class="container">
            <p class="copyright">Copyright &copy; 2020 <a href="index.html">LeJournalDuMonde</a></p>
            <p class="developer">Developed By Abdel-aziz</p>
          </div>
        </div>
      </footer>
      <script src="{{asset('js/jquery.min.js')}}"></script> 
      <script src="{{asset('js/wow.min.js')}}"></script> 
      <script src="{{asset('js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js/slick.min.js')}}"></script> 
      <script src="{{asset('js/custom.js')}}"></script>
    </body>
  </html>