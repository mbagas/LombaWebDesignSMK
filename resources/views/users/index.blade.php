@section('js')
  <script type="text/javascript">

  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 5000);
  }

  </script>
@stop

@extends('layout.home')

@section('title')
  Home
@endsection

@section('content')

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="slide1"></div>
      </div>

      <div class="mySlides fade">
        <div class="slide2"></div>
      </div>

      <div class="mySlides fade">
        <div class="slide3"></div>
      </div>

      <div class="back-caption">
      </div>

        <div class="caption">
          <p> <strong>
            AYO MAJUKAN INDUSTRI NUSANTARA </strong> </p>
            <p style="font-size:16px;">  WITH YOUR OWN CREATIVITY
            </p>
          </div>
          <a onclick="document.getElementById('signup').style.display='block'" class="cta col-4">Join Us Now</a>

    </div>

    <div class="ribbon">
      <div class="row">
        <div class="col col-4">
          <a href="#">Makanan</a>
        </div>
        <div class="col col-4">
          <a href="#">otomotif</a>
        </div>
        <div class="col col-4">
          <a href="#">tekstil</a>
        </div>
      </div>
    </div>

    <div class="section2" id="blog">

      <div class="contains">
        <div class="news-contains">
          <div class="row">
            <div class="col col-1 offset"></div>

            <div class="col col-10">

              <div class="article-box">
                <div class="row">

                  <div class="col col-3">

                    <div class="blog-box">

                      <div class="picture">
                        <img src="{{asset('/image/post.jpg')}}" alt="">
                      </div>

                      <div class="title">
                        <p href="#">Apa itu Internet of Things(IoT)</p>
                      </div>

                      <div class="article-link">
                        <a href="/home/blog/1">Read More</a>
                      </div>

                    </div>

                  </div>
                  <div class="col col-3">

                    <div class="blog-box">

                      <div class="picture">
                        <img src="{{asset('/image/post2.jpg')}}" alt="">
                      </div>

                      <div class="title">
                        <p href="#">Perkembangan industri ...</p>
                      </div>

                      <div class="article-link">
                        <a href="/home/blog/2">Read More</a>
                      </div>

                    </div>

                  </div>
                  <div class="col col-3">

                    <div class="blog-box">

                      <div class="picture">
                        <img src="{{asset('/image/post3.jpg')}}" alt="">
                      </div>

                      <div class="title">
                        <p href="#">5 aspek industri Nusantara 4.0</p>
                      </div>

                      <div class="article-link">
                        <a href="/home/blog/3">Read More</a>
                      </div>

                    </div>

                  </div>
                  <div class="col col-3">

                    <div class="blog-box">

                      <div class="picture">
                        <img src="{{asset('/image/post4.jpg')}}" alt="">
                      </div>

                      <div class="title">
                        <p href="#">4 prinsip industri 4.0</p>
                      </div>

                      <div class="article-link">
                        <a href="/home/blog/4">Read More</a>
                      </div>

                    </div>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col col-2 offset"></div>
            <div class="col col-8" style="text-align:center;">

              <a href="/home/blog">
                <button class="button-more" type="button" name="button">All Article</button>
              </a>

            </div>
            <div class="col col-2 offset"></div>
          </div>
        </div>
      </div>

    </div>

    <div class="section1" id="about">

      <div class="contains">
        <div class="strike about">
          What is..
        </div>

        <div class="row">
          <div class="col col-1 offset"></div>
          <div class="col col-10">
            <p class="about-text">
              <strong> Revolusi Industri Nusantara 4.0</strong> adalah perubahan industri di Nusantara
        menjadi generasi ke-4 dimana industri generasi ke-4 adalah industri yang
        menggabungkan teknologi otomatisasi dengan teknologi cyber.
        Industri 4.0 menghasilkan "pabrik cerdas" yang berstruktur moduler,
        sistem siber-fisik mengawasi proses fisik, menciptakan salinan dunia fisik secara virtual,
        dan membuat keputusan yang tidak terpusat. Lewat Internet of Things (IoT), sistem siber-fisik
        berkomunikasi dan bekerja sama dengan satu sama lain dan manusia secara bersamaan. Revolusi Industri Nusantara 4.0
        memiliki 5 aspek industri yang akan dimajukan yaitu dalam aspek makanan, otomotif, tekstil, kimia dan elektronik.
            </p>
            <div class="row">
              <div class="col col-4">
                <div class="aspek1" style="border-right:2px dashed  #126493;border-left:2px dashed  #126493;">
                  <i class="fa fa-building about-aspek"></i>
                  <p class="name">Industry</p>
                  <p class="description">industri sebagai tempat untuk pembangunan produk</p>
                </div>
              </div>
              <div class="col col-4">
                <div class="aspek1" style="border-right:2px dashed  #126493">
                  <i class="fa fa-wifi about-aspek"></i>
                  <p class="name">Internet of Things</p>
                  <p class="description">Internet of Things sebagai teknologi terkini yang digunakan</p>
                </div>
              </div>
              <div class="col col-4">
                <div class="aspek1" style="border-right:2px dashed  #126493;">
                  <i class="fa fa-dollar about-aspek"></i>
                  <p class="name">Market</p>
                  <p class="description">Market sebagai tempat untuk memasarkan produk</p>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="col col-1 offset"></div> --}}
        </div>

      </div>

    </div>

    <div class="section4" id="product">
      <div class="contains">
        <div class="row">
          <div class="col col-1 offset"></div>
          <div class="col col-2">
            <div class="strike product" style="color: #ffffff;">
              OUR PRODUCT
            <a href="/home/produk"><button  class="btn-product" type="button" name="button">view more <i class="fa fa-arrow-right"></i></button></a>
            </div>
          </div>
          <div class="col col-8">
            <div class="product-box">

              <ul>

                <li>
                  <div class="Slides">
                    <div class="row">
                      <div class="col col-4">
                        <div class="box">
                          <a href="#"><img src="{{asset('/image/product1.1.jpg')}}" alt=""></a>
                          <div class="title">
                            <p><a href="/home/produk/1">E-Door</a> </p>
                          </div>
                          <div class="product-link">
                            <a href="/home/produk/1">Details</a>
                          </div>
                        </div>
                      </div>
                      <div class="col col-4">
                        <div class="box">
                          <img src="{{asset('/image/product2.jpg')}}" alt="">
                          <div class="title">
                            <p><a href="/home/produk/2">IoT Camp</a> </p>
                            <div class="product-link">
                              <a href="/home/produk/2">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-4">
                        <div class="box">
                          <img src="{{asset('/image/product3.3.jpg')}}" alt="">
                          <div class="title">
                            <p><a href="/home/produk/3">Smart Farm</a> </p>
                            <div class="product-link">
                              <a href="/home/produk/3">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="Slides">
                    <div class="row">
                      <div class="col col-4">
                        <div class="box">
                          <img src="{{asset('/image/product4.1.jpg')}}" alt="">
                          <div class="title">
                            <p><a href="/home/produk/4">Smart-House</a> </p>
                            <div class="product-link">
                              <a href="/home/produk/4">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-4">
                        <div class="box">
                          <img src="{{asset('/image/product5.1.jpg')}}" alt="">
                          <div class="title">
                            <p><a href="/home/produk/5">Smart-Refrigerator</a> </p>
                            <div class="product-link">
                              <a href="/home/produk/5">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-4">
                        <div class="box">
                          <img src="{{asset('/image/product6.1.jpg')}}" alt="">
                          <div class="title">
                            <p><a href="/home/produk/6">Smart-Helmet</a> </p>
                            <div class="product-link">
                              <a href="/home/produk/6">Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>

          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="section5">
    <div class="row">

      <div class="col col-1 offset"></div>
      <div class="col col-10">
        <div class="row">
          <div class="col col-6 bag">
            <div class="about-text">
              Auto-Industry memiliki produk-produk seperti diatas. Produk-produk dibuat untuk mendukung
              industri nusantara 4.0 yang menggunakan Internet of Things. Dengan menggunakan IoT benda-benda
              seperti diatas dapat dikontrol dari jarak jauh dimanapun dan kapanpun anda berada. Produk-produk
              diatas dibangun dengan kerja sama dengan beberapa komunitas lain yang bekerja di bidang ini. Ayo tunggu
              apa lagi, segera bangun produkmu bersama kami dengan mengirim proposal usaha kamu.
            </div>
          </div>
          <div class="col col-6 bag">
            <div class="contact">
              <p>Make your own product with us</p>
            <div class="row hq">
              <div class="col col-6 forms">
                  <form class="" action="index.html" method="post">
                    <div class="row">
                      <label for="" class="col col-3">nama : </label>
                      <input type="text" name="" value="" class="col col-9">
                    </div>
                    <div class="row">
                      <label for="" class="col col-3">no telp : </label>
                      <input type="text" name="" value="" class="col col-9">
                    </div>
                    <div class="row">
                      <label for="" class="col col-3">email : </label>
                      <input type="text" name="" value="" class="col col-9">
                    </div>

                  </form>
              </div>

            <div class="col col-6 forms">
              proposal usaha : <br>
              <label class="filer">
                <i class="fa fa-file" style="color: rgb(101, 98, 97);"></i> choose a file <input type="file" name="file" value=""  style="display:none;">
              </label>

            </div>
            <input type="button" name="" value="submit" class="button-sbm">
          </div>
        </div>
      </div>
    </div>


      </div>

    </div>
  </div>


  <div class="section3" id=team>

    <div class="contains">
      <div class="strike our-team" style="color: #ffffff;">
        Our Team
      </div>
      <div class="row">

        <div class="col col-1 offset"></div>

        <div class="col col-10">

          <div class="profile">

            <div class="ul">

              <div class="row">
                <div class="col col-3">

                  <div class="box-profile">
                    <div class="hex" style="background-image: url('/image/yavatar.png');">
                      <a href="#"></a>
                      <div class="corner-1"></div>
                      <div class="corner-2"></div>
                    </div>
                    <p class="name">Yudha Nawawi</p><br>
                    <p class="p">Developer</p>
                    <div class="social">
                      <div class="row">
                        <div class="col col-4">
                          <a class="fa fa-facebook team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-google team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-twitter team" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col col-3">

                  <div class="box-profile">
                    <div class="hex" style="background-image: url('/image/bagas.jpg');">
                      <a href="#"></a>
                      <div class="corner-1"></div>
                      <div class="corner-2"></div>
                    </div>
                    <p class="name">Muksin Bagaskara</p><br>
                    <p class="p">Developer</p>
                    <div class="social">
                      <div class="row">
                        <div class="col col-4">
                          <a class="fa fa-facebook team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-google team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-twitter team" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col col-3">

                  <div class="box-profile">
                    <div class="hex" style="background-image: url('/image/profile.png');">
                      <a href="#"></a>
                      <div class="corner-1"></div>
                      <div class="corner-2"></div>
                    </div>
                    <p class="name">Imagination</p><br>
                    <p class="p">Developer</p>
                    <div class="social">
                      <div class="row">
                        <div class="col col-4">
                          <a class="fa fa-facebook team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-google team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-twitter team" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col col-3">

                  <div class="box-profile">
                    <div class="hex" style="background-image: url('/image/profile.png');">
                      <a href="#"></a>
                      <div class="corner-1"></div>
                      <div class="corner-2"></div>
                    </div>
                    <p class="name">Imagination</p><br>
                    <p class="p">Developer</p>
                    <div class="social">
                      <div class="row">
                        <div class="col col-4">
                          <a class="fa fa-facebook team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-google team" href=""></a>
                        </div>
                        <div class="col col-4">
                          <a class="fa fa-twitter team" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>


          </div>

        </div>

        <div class="col col-1 offset"></div>

      </div>
    </div>

  </div>
@endsection
