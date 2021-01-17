@extends('layout.home1')

@section('title')
  Article
@endsection

@section('content')
  <div class="breadcumb">
    <p>About Us</p>
  </div>
  <div class="contains">

    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-10">

      <div class="indicator">
        <a class="link1" href="#">Home</a>
        <a class="link" href="#">Blog</a>
        <a class="active" href="#">About Us</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7 arts">

        <div class="article">
          <div class="title">
            <h1>About Us</h1>
          </div>
          <div class="description">
            <img src="{{asset('/image/article1.jfif')}}" alt="">
            <p>
              Kami adalah sebuah perushaaan yang bergerak dalam Revolusi Industri
              Nusantara 4.0. Kami fokus mengembangkan produk-produk yang dapat digunakan
              dalam industri 4.0. Kami juga membantu startup baru yang bergerak dalam
              bidang ini untuk menciptakan produk mereka.

              <br><br>

              Dengan ini kami juga menciptakan lapangan kerja baru. dikatakan bahwa industry 4.0
              dapat mengurangi lapangan pekerjaan bagi manusia dikarenakan tenaga yang digunakan
              bukan tenaga manusia melainkan tenaga robot.

              <br><br>

              <div class="visi">
                <strong>VISION</strong> <br> <br>

                <i> Menjadi perusahaan yang berhasil mewujudkan revolusi industri nusantara 4.0 </i>

                <br><br>

                <strong>MISION</strong> <br> <br>

                <i> Berperan aktif dalam menciptakan, mendorong dan membangun pertumbuhan industri dan ekonomi digital. <br>
                Menjadi media yang nyata dalam berkarya dan menciptakan lapangan pekerjaan. </i>

              </div>


              <br><br>
            </p>

          </div>
        </div>

      </div>

      <div class="col col-3 art">
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

      <div class="col col-1 offset"></div>

    </div>

  </div>
@endsection
