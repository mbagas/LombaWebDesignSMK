@extends('layout.home1')

@section('title')
  Product
@endsection

@section('content')

  <div class="breadcumb">
    <p>PRODUCT</p>
  </div>

<div class="contains">

  <div class="row">

    <div class="col col-1 offset"></div>

    <div class="col col-10">

    <div class="indicator">
      <a class="link1" href="/home">Home</a>
      <a class="active" href="#">Product</a>
    </div>

    </div>

    <div class="col col-1 offset"></div>

  </div>

  <div class="row">

  <div class="col col-1 offset"></div>
  <div class="col col-7 blogs">
    <div class="blog-boxs">
      <div class="article-box">
        <div class="row">
          <div class="col col-4">
            <div class="picture">
              <a href="/home/produk/1"><img src="{{asset('/image/product1.1.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col col-8">
            <div class="title">
              <a href="/home/produk/1" class="title">E-Door</a><br>
              <p>category : Product, material, organizer</p>
            </div>
            <div class="description">
              <p>E-Door atau Electronic Door adalah pintu yang bisa anda manipulasi dari jauh. Yang dapat dimanipulasi
              dari pintu ini adalah anda bisa melihat apakan pintu ini sudah terkunci...
              </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 8 <i class="fa fa-comments"></i>  2 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col col-1 offset"></div>
    <div class="col col-7 blogs">
      <div class="blog-boxs">
        <div class="article-box">
          <div class="row">
            <div class="col col-4">
              <div class="picture">
                <a href="/home/produk/2"><img src="{{asset('/image/product2.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/produk/2" class="title">IoT Camp</a><br>
                <p>category : Product, material, organizer</p>
              </div>
              <div class="description">
                <p>IoT Camp adalah tempat untuk pelatihan dalam belajar Internet of Things.
                  Tujuan pembentukan pelatihan ini adalah untuk mengembangkan
                  penggunaan IoT dalam Nusantara...
              </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 6 <i class="fa fa-comments"></i> 1 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col col-1 offset"></div>
    <div class="col col-7 blogs">
      <div class="blog-boxs">
        <div class="article-box">
          <div class="row">
            <div class="col col-4">
              <div class="picture">
                <a href="/home/produk/3"><img src="{{asset('/image/product3.3.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/produk/3" class="title">Smart Farm</a><br>
                <p>category : Product, material, organizer</p>
              </div>
              <div class="description">
                <p>E-Farm adalah pertanian yang menggunakan teknologi Internet of Things. Tujuan pembangunan E-Farm adalah
                untuk memudahkan petani dalam bertani...
                </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 4 <i class="fa fa-comments"></i> 0 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col col-1 offset"></div>
    <div class="col col-7 blogs">
      <div class="blog-boxs">
        <div class="article-box">
          <div class="row">
            <div class="col col-4">
              <div class="picture">
                <a href="/home/produk/4"><img src="{{asset('/image/product4.1.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/produk/4" class="title">Smart-House</a><br>
                <p>category : Product, material, organizer</p>
              </div>
              <div class="description">
                <p>Smart-House adalah rumah pintar yang dapat mengontrol keaadan dirumah. Seperti CCTV, Lampu, Keran, Listrik
                dan lain-lain...
                </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 4 <i class="fa fa-comments"></i> 0 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col col-1 offset"></div>
    <div class="col col-7 blogs">
      <div class="blog-boxs">
        <div class="article-box">
          <div class="row">
            <div class="col col-4">
              <div class="picture">
                <a href="/home/produk/5"><img src="{{asset('/image/product5.1.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/produk/5" class="title">Smart-Refrigerator</a><br>
                <p>category : Product, material, organizer</p>
              </div>
              <div class="description">
                <p>Smart-Refrigerator adalah kulkas pintar yang dapat membantu anda mengontrol keaadan kulkas anda.
                Seperti menyesuaikan dingin sesuai kebutuhan ini derajat terhad...
                </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 4 <i class="fa fa-comments"></i> 0 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-bottom: 100px;">
    <div class="col col-1 offset"></div>
    <div class="col col-7 blogs">
      <div class="blog-boxs">
        <div class="article-box">
          <div class="row">
            <div class="col col-4">
              <div class="picture">
                <a href="/home/produk/6"><img src="{{asset('/image/product6.1.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/produk/6" class="title">Smart-Helmet</a><br>
                <p>category : Product, material, organizer</p>
              </div>
              <div class="description">
                <p>Smart-Helmet adalah helm cerdas. Helm ini membuat anda mematuhi peraturan berkendara
                karena helm ini dapat membuat motor anda tidak bisa hidup...
              </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 6 <i class="fa fa-comments"> </i> 3</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-3 sides">
      <div class="search">
        <p>SEARCH</p>
        <div class="input-query">
          <input type="text" name="" value="" placeholder="Search article or product">
          <button class="btn-search" type="button" name="button"><i class="fa fa-search"></i></button>
        </div>
      </div>
      <div class="side-widget">
        <p>POPULAR POST</p>
        <div class="post">
          <div class="row">
            <div class="col col-3">
              <img src="{{asset('/image/post1m.jpg')}}" alt="">
            </div>
            <div class="col col-9">

              <div class="title">
                23 Agustus 2018<br>
                <a href="/home/blog/1">Apa itu Internet of Things</a>
              </div>

            </div>
          </div>
        </div>
        <hr style="background-color:#e6dce0;height: 1px;border:0;">
        <div class="post">
          <div class="row">
            <div class="col col-3">
              <img src="{{asset('/image/footerimg2.jpg')}}" alt="">
            </div>
            <div class="col col-9">

              <div class="title">
                22 Agustus 2018<br>
                <a href="/home/blog/2">Perkembangan industri Nusantara</a>
              </div>

            </div>
          </div>
        </div>
        <hr style="background-color:#e6dce0;height: 1px;border:0;">
        <div class="post">
          <div class="row">
            <div class="col col-3">
              <img src="{{asset('/image/post4m.jpg')}}" alt="">
            </div>
            <div class="col col-9">

              <div class="title">
                16 Agustus 2018<br>
                <a href="/home/blog/4">4 prinsip industri 4.0</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
