
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="artikel/img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Ruft Blog</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">
  <!--
      CSS
      ============================================= -->
  
</head>

<body>
  <!-- Top Stories Area -->
  <section class="top-stories-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel active-stories-carousel">
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a1.jpg" style="padding-top: 10px;" alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">Dampak Buruk Telat  <br>
                    Ganti Oli Gardan Skutik</a></h6>
                <p>September 14, 2019</p>
              </div>
            </div>
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a2.jpg" style="padding-top: 10px;"  alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">6 Tips Berkendara<br>
                    Agar tetap Aman<br> Saat Hujan</a></h6>
                <p>Januari 14, 2019</p>
              </div>
            </div>
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a3.jpg" alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">Penyebab dan <br>Cara
                    Mengatasi<br> Rem Blong pada<br> Mobil </a></h6>
                <p>Desember 20, 2019</p>
              </div>
            </div>
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a4.jpg" alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">Begini Cara Mengencangkan<br> Mur Roda yang Benar</a></h6>
                <p>Maret 01, 2019</p>
              </div>
            </div>
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a6.jpg"  style="padding-top: 10px;" alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">Mau Ganti Busi<br> Sepeda Motor, Pahami <br>Kodenya <br> </a></h6>
                <p>Oktober 07, 2019</p>
              </div>
            </div>
            <!-- single stories carousel -->
            <div class="single-stories-carousel d-flex align-items-center">
              <div class="stories-thumb">
                <img class="img-fluid" src="image/a5.jpg"  style="padding-top: 10px;" alt="">
              </div>
              <div class="stories-details">
                <h6><a href="">Supaya Awet, <br>Ini Tips Merawat<br> Kain Microfiber</a></h6>
                <p>September 23, 2019</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Stories Area -->

  <!-- Start Post Silder Area -->
  <section class="post-slider-area">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="owl-carousel active-post-carusel">
            <!-- single carousel item -->
            <div class="single-post-carousel">
              <div class="post-thumb">
                <img class="img-fluid" src="image/c3.jpg" alt="">
              </div>
              <div class="post-details">
                <h2><a href="#">Cara Memulai Usaha Bengkel  <br>
                    Motor dan Sparepart</a></h2>
                <div class="post-content d-flex justify-content-between">
                  <div class="post-meta">
                    <div class="thumb "><img class="rounded-circle" src="about/dev_img/ampas.png" alt=""></div>
                    <div class="c-desc">
                      <h6>Abdul Arahman</h6>
                      <p><span class="lnr lnr-calendar-full"></span>02 Okt, 2019</p>
                    </div>
                  </div>
                  <div class="details">
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                      It’s exciting to think about setting up your own viewing station.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single carousel item -->
            <div class="single-post-carousel">
              <div class="post-thumb">
                <img class="img-fluid" src="image/aa.jpg" alt="">
              </div>
              <div class="post-details">
                <h2><a href="#">5 Keuntungan Servis <br>
                    Motor Secara Berkala</a></h2>
                <div class="post-content d-flex justify-content-between">
                  <div class="post-meta"> 
                    <div class="thumb "><img class="rounded-circle" src="about/dev_img/rizky5.jpg" alt=""></div>
                    <div class="c-desc">
                      <h6>Rizky Fazri</h6>
                      <p><span class="lnr lnr-calendar-full"></span>14 Sep, 2019</p>
                    </div>
                  </div>
                  <div class="details">
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                      It’s exciting to think about setting up your own viewing station.</p>
                  </div>
                </div>
              </div>
            </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Post Silder Area -->

  <!-- Start main body Area -->
  
    @yield('content')
  <!------------------------------>
        <div class="col-lg-4 sidebar">
          <div class="single-widget popular-posts-widget">
            <div class="jq-tab-wrapper" id="horizontalTab">
              <div class="jq-tab-menu">
                <div class="jq-tab-title active" data-tab="1">Popular</div>
                <div class="jq-tab-title" data-tab="2">Latest</div>
              </div>
              <div class="jq-tab-content-wrapper">
                <div class="jq-tab-content active" data-tab="1">
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories1.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories2.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories3.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories4.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                </div>

                <div class="jq-tab-content active" data-tab="2">

                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories2.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories3.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories1.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                  <div class="single-popular-post d-flex flex-row">
                    <div class="popular-thumb">
                      <img class="img-fluid" src="artikel/img/posts/carousel/stories4.jpg" alt="">
                    </div>
                    <div class="popular-details">
                      <h6><a href="">2nd Gen Smoke Alarm <br>
                          get up from sleep</a></h6>
                      <p>September 14, 2018</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="single-widget category-widget">
            <h4 class="title">Post Categories</h4>
            <ul>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">International (56)</p>
                </a>
              </li>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">Tours and Travels (45)</p>
                </a>
              </li>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">Cooking Tips (23)</p>
                </a>
              </li>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">Life Style and Fashion (72)</p>
                </a>
              </li>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">Organic News (37)</p>
                </a>
              </li>
              <li>
                <a href="#" class="justify-content-between align-items-center d-flex">
                  <p><img src="artikel/img/bullet.png" alt="">Games and Sports (19)</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="single-widget tags-widget">
            <h4 class="title">Post Tags</h4>
            <ul>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Art</a></li>
              <li><a href="#">Adventure</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Techlology</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Architecture</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Technology</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Start main body Area -->

  

  
</body>

</html>

