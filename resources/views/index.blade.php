@extends('layouts.default')

@section('content')
  
    <section id="content" class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="featured_slider">
            <h2 class="featured_title">Actualités</h2>
            <div class="slick_slider">              
              @foreach($actualites as $actualite)
                <div class="single_iteam"><img src="{{asset('storage').'/'.$actualite->image}}" alt="">
                  <h2><a class="slider_tittle" href="">{{$actualite->slug}}</a></h2>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="middle_content">
              <h2>Le Magazine</h2>              
              @foreach($actualites as $actualite)
              <ul class="featured_nav">
                <li class="wow fadeInDown">
                  <figure class="featured_img"><a href="#"><img src="{{asset('storage').'/'.$actualite->image}}" alt=""></a></figure>
                  <article class="featured_article">
                    <div class="article_category"><a href="#">{{$actualite->date}} <i class="fa fa-angle-right"></i></a><a href="#">{{$actualite->categorie->nom}} <i class="fa fa-angle-right"></i></a><a href="#">{{$actualite->titre}}</a></div>
                    <h2 class="article_titile"><a href="single">{{$actualite->slug}}</a></h2>
                    <p>{{$actualite->contenu}}</p>
                  </article>
                </li>
              </ul>
              @endforeach
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
                <h2>Actualités populaire</h2>
                @foreach($actualites as $actualite)
                <ul class="ppost_nav wow fadeInDown">
                  <li>
                    <div class="media"><a class="media-left" href="single"><img src="{{asset('storage').'/'.$actualite->image}}" style="width:50px;height:50px;" alt=""></a>
                      <div class="media-body"><a class="catg_title" href="single">{{$actualite->slug}}</a></div>
                    </div>
                  </li>
                </ul>
                @endforeach
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
                        <div class="media"><a class="media-left" href="single"><img src="images/70x70.jpg" alt=""></a>
                          <div class="media-body"><a class="catg_title" href="single">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"><a class="media-left" href="single"><img src="images/70x70.jpg" alt=""></a>
                          <div class="media-body"><a class="catg_title" href="#">Aliquam malesuada diam eget turpis varius</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"><a class="media-left" href="single"><img src="images/70x70.jpg" alt=""></a>
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
              @foreach($actualites as $actualite)
                    <ul class="ppost_nav wow fadeInDown">
                      <li>
                        <div class="media"><a class="media-left" href="single"><img src="{{asset('storage').'/'.$actualite->image}}" style="width:50px;height:50px;" alt=""></a>
                          <div class="media-body"><a class="catg_title" href="single">{{$actualite->slug}}</a></div>
                        </div>
                      </li>
                    </ul>                    
              @endforeach
                  </div>
                </div>
              </div>
              <div class="single_widget">
                <h2>Categories</h2>
                @foreach($actualites as $actualite)
                  <ul class="labels_nav">
                    <li><a href="{{$actualite->categorie->nom}} ">{{$actualite->categorie->nom}} </a></li>
                  </ul>
                  @endforeach
              </div>
              <div class="single_widget">
                <h2>Links</h2>
                <ul>
                  <li><a href="login">Log in</a></li>
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

    @endsection
