<!DOCTYPE html>
<html>
<head>
<title>Cyber Tech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
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
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a></div>
      <div id="navbar" class="navbar-collapse collapse">
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
          <li><a href="#">Contact</a></li>
          <li><a href="#">Connexion</a></li>
          <li><a href="#">S'inscrir</a></li>
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
<section id="content" class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="featured_slider">
        <h2 class="featured_title">On Featured</h2>
        <div class="slick_slider">
          <div class="single_iteam"><img src="images/300x250.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x2.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x3.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x4.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x5.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x6.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x3.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
          <div class="single_iteam"><img src="images/300x250x5.jpg" alt="">
            <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
          </div>
        </div>
    </div>
  </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="middle_content">
          <h2>What’s Hot</h2>
          <ul class="featured_nav">
            <li class="wow fadeInDown">
              <figure class="featured_img"><a href="#"><img src="images/550x400.jpg" alt=""></a></figure>
              <article class="featured_article">
                <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                <h2 class="article_titile"><a href="pages/single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
              </article>
            </li>
            <li class="wow fadeInDown">
              <figure class="featured_img"><a href="#"><img src="images/550x400.jpg" alt=""></a></figure>
              <article class="featured_article">
                <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                <h2 class="article_titile"><a href="pages/single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
              </article>
            </li>
            <li class="wow fadeInDown">
              <figure class="featured_img"><a href="#"><img src="images/550x400.jpg" alt=""></a></figure>
              <article class="featured_article">
                <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                <h2 class="article_titile"><a href="pages/single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
              </article>
            </li>
            <li class="wow fadeInDown">
              <figure class="featured_img"><a href="#"><img src="images/550x400.jpg" alt=""></a></figure>
              <article class="featured_article">
                <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                <h2 class="article_titile"><a href="pages/single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
              </article>
            </li>
            <li class="wow fadeInDown">
              <figure class="featured_img"><a href="#"><img src="images/550x400.jpg" alt=""></a></figure>
              <article class="featured_article">
                <div class="article_category"><a href="#">Technology <i class="fa fa-angle-right"></i></a><a href="#">Mobile <i class="fa fa-angle-right"></i></a><a href="#">Samsung</a></div>
                <h2 class="article_titile"><a href="pages/single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
              </article>
            </li>
          </ul>
          <nav>
            <ul class="pagination">
              <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="right_sidebar">
          <div class="single_widget">
            <h2>Popular Post</h2>
            <ul class="ppost_nav wow fadeInDown">
              <li>
                <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="pages/single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
              <li>
                <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                  <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_widget">
            <ul class="nav nav-tabs custom-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Recent Post</a></li>
              <li role="presentation" class=""><a href="#recentComent" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="mostPopular">
                <ul class="ppost_nav wow fadeInDown">
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="pages/single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="recentComent">
                <ul class="ppost_nav wow fadeInDown">
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="pages/single_page.html">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="pages/single_page.html"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="media"><a class="media-left" href="#"><img src="images/70x70.jpg" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_widget">
            <h2>Categories</h2>
            <ul>
              <li class="cat-item"><a href="#">Technology</a></li>
              <li class="cat-item"><a href="#">Games</a></li>
              <li class="cat-item"><a href="#">Business</a></li>
              <li class="cat-item"><a href="#">Gallery</a></li>
              <li class="cat-item"><a href="#">Slider</a></li>
              <li class="cat-item"><a href="#">Life &amp; Style</a></li>
              <li class="cat-item"><a href="#">Sports</a></li>
            </ul>
          </div>
          <div class="single_widget">
            <h2>Category Archive</h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_widget">
            <h2>Links</h2>
            <ul>
              <li><a href="#">Log in</a></li>
              <li><a href="#">Entries RSS</a></li>
              <li><a href="#">Comment RSS</a></li>
              <li><a href="#">Wordpress.org</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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