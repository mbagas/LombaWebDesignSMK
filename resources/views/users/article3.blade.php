@extends('layout.home1')

@section('title')
  Article
@endsection

@section('content')
  <div class="breadcumb">
    <p>Article</p>
  </div>
  <div class="contains">

    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-10">

      <div class="indicator">
        <a class="link1" href="/home">Home</a>
        <a class="link" href="/home/blog">Blog</a>
        <a class="active" href="#">5 aspek industri Nusantara 4.0</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7 arts">

        <div class="article">
          <div class="title">
            <h1>5 aspek industri Nusantara 4.0</h1>
          </div>
          <div class="description">
            <p>
              Revolusi Industri 4.0 atau industri generasi ke empat merupakan perubahan sektor industri di dunia yang dipengaruhi
              oleh maraknya perkembangan teknologi serta internet.

            </p>
            <img src="{{asset('/image/post3.jpg')}}" alt="">
            <p>
              "Lima industri yang jadi fokus implementasi industri 4.0 di Indonesia yaitu industri makanan dan minuman, tekstil,
              otomotif, elektronik, dan kimia," kata Jokowi saat membuka Indonesia Industrial Summit 2018 di Jakarta Convention Center
              (JCC), Rabu (4/4/2018). <br> <br>

              Jokowi menjelaskan, kelima jenis industri tersebut ditetapkan menjadi tulang punggung dalam rangka meningkatkan daya saing
              yang sejalan dengan perkembangan industri generasi ke empat. Lima sektor tersebut juga dinilai Jokowi akan menyumbang penciptaan
              lapangan kerja lebih banyak serta investasi baru yang berbasis teknologi. <br> <br>




            </p>

          </div>
        </div>
        <div class="respons">
          <p>LEAVE YOUR REPLY</p>
          <hr>
          <div class="no-comments">
            <i class="fa fa-comments"></i>
            <p>NO COMMENTS</p>
          </div>
          <div class="input-reply">
            <div class="row">
              <div class="col col-1 offset"></div>
              <div class="col col-9">
                <label for="">Message : </label><br>
                <textarea name="name" rows="8" cols="78"></textarea>
              </div>
              <div class="col col-1">
                <button class="button-reply" type="button" name="button"><i class="fa fa-send"></i></button>
              </div>
              <div class="col col-1 offset"></div>
            </div>
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
          <p>RECENT POST</p>
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
                <img src="{{asset('/image/post3m.jpg')}}" alt="">
              </div>
              <div class="col col-9">

                <div class="title">
                  16 Agustus 2018<br>
                  <a href="/home/blog/3">5 aspek industri nusantara 4.0</a>
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
