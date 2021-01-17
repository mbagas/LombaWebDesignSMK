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
        <a class="active" href="#">Perkembangan industri Nusantara</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7 arts">

        <div class="article">
          <div class="title">
            <h1>Perkembangan industri Nusantara</h1>
          </div>
          <div class="description">
            <p>
               Industri adalah kegiatan ekonomi yang mengolah bahan mentah, bahan baku, bahan setengah jadi atau barang jadi menjadi
               barang yang bermutu tinggi dalam penggunaannya. Dengan demikian, industri merupakan bagiaan dari proses produksi.
               Bahan-bahan industry diambil secara langsung maupun tidak langsung, kemudian diolah sehingga menghasilkan barang yang
               bernilai lebih bagi masyarakat. Kegiatan proses produksi dalam industry itu disebut dengan peridustrian. Industry
               (perindustrian) di Indonesia merupakan salah satu komponen perekonomian yang penting. Perindustrian memungkinkan
               perekonomian kita berkembang pesat dan semakin baik, sehingga membawa perubahan dalam struktur perekonomian nasional.
            </p>
            <img src="{{asset('/image/post2.jpg')}}" alt="">
            <p>
              Sebagai negara agraris, peranan industri dalam perekonomian Indonesia dengan sejarah perkembangannya tidaklah begitu
              amat berarti. Di zaman dahulu, kalaupun beberapa penduduk menggunakan industri kerajinan sebagai salah satu mata pencaharian.
              Peranannya hanya sekedar untuk tambahan penghasilan atau pekerjaan sambilan. Biasanya malah lebih berupa kerajinan yang
              bertendensi artistik daripada kewiraswastaan; atau lebih berupa aspek kerja budaya daripada komersial. <br> <br>

              Jadi, hal itu sangat berbeda dari saat ini atau masa sekarang. Pertanian justru tidak mendapat respek yang mendalam,
              namun maufakturinglah yang diunggulkan. Padahal, kebutuhan akan bahan pangan terus meningkat. Maka seharusnyalah kita
              tidak mengesampingkan peran pertanian di Indonesia. Apalagi lahan di Indonesiapun terpampang luas di seluruh Nusantara.<br><br>


            </p>

          </div>
        </div>
        <div class="respons">
          <p>LEAVE YOUR REPLY</p>
          <hr>
          <div class="reply">
            <div class="row">
              <div class="col col-2">
                <div class="profile-comments">
                  <img src="{{asset('/image/profile.png')}}" alt="">
                </div>
              </div>
              <div class="col col-10">
                <div class="comment">
                    <div class="body">
                      <span class="tip"></span>
                      <div class="name">
                      	<a href="">Eric</a>
                      </div><hr>
                      <div class="message">
                        <span>Wow.</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
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
