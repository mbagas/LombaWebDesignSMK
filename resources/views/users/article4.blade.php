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
        <a class="active" href="#">4 prinsip industri 4.0</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7 arts">

        <div class="article">
          <div class="title">
            <h1>4 prinsip industri 4.0</h1>
          </div>
          <div class="description">
            <p>
              Industri 4.0 adalah nama tren otomasi dan pertukaran data terkini dalam teknologi pabrik. Istilah ini mencakup sistem
              siber-fisik, internet untuk segala, komputasi awan dan komputasi kognitif.

              Industri 4.0 menghasilkan "pabrik cerdas". Di dalam pabrik cerdas berstruktur moduler, sistem siber-fisik mengawasi
              proses fisik, menciptakan salinan dunia fisik secara virtual, dan membuat keputusan yang tidak terpusat. Lewat Internet
              untuk segala (IoT), sistem siber-fisik berkomunikasi dan bekerja sama dengan satu sama lain dan manusia secara bersamaan.
              Lewat komputasi awan, layanan internal dan lintas organisasi disediakan dan dimanfaatkan oleh berbagai pihak di dalam rantai nilai

            </p>
            <img src="{{asset('/image/post4.jpg')}}" alt="">
            <p>
              Ada empat prinsip rancangan dalam Industri 4.0. Prinsip-prinsip ini membantu perusahaan mengidentifikasi dan mengimplementasikan
              skenario-skenario Industri 4.0.

              Interoperabilitas (kesesuaian): Kemampuan mesin, perangkat, sensor, dan manusia untuk berhubungan dan berkomunikasi dengan satu
              sama lain lewat Internet untuk segala (IoT) atau Internet untuk khalayak (IoP).
              IoT akan mengotomatisasikan proses ini secara besar-besaran <br> <br>

              Transparansi informasi: Kemampuan sistem informasi untuk menciptakan salinan dunia fisik secara virtual dengan memperkaya model
              pabrik digital dengan data sensor. Prinsip ini membutuhkan pengumpulan data sensor mentah agar menghasilkan informasi konteks bernilai tinggi. <br> <br>

              Bantuan teknis: Pertama, kemampuan sistem bantuan untuk membantu manusia dengan mengumpulkan dan membuat visualisasi informasi secara
              menyeluruh agar bisa membuat keputusan bijak dan menyelesaikan masalah genting yang mendadak. Kedua, kemampuan sistem siber-fisik untuk
              membantu manusia secara fisik dengan melakukan serangkaian tugas yang tidak menyenangkan, terlalu berat, atau tidak aman bagi manusia. <br> <br>

              Keputusan mandiri: Kemampuan sistem siber-fisik untuk membuat keputusan sendiri dan melakukan tugas semandiri mungkin. Bila terjadi
              pengecualian, gangguan, atau ada tujuan yang berseberangan, tugas didelegasikan ke atasan.<br> <br>





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
                  <img src="{{asset('/image/yavatar.png')}}" alt="">
                </div>
              </div>
              <div class="col col-10">
                <div class="comment">
                    <div class="body">
                      <span class="tip"></span>
                      <div class="name">
                      	<a href="">Yudha Nawawi</a>
                      </div><hr>
                      <div class="message">
                        <span>Thats Greats.</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reply">
            <div class="row">
              <div class="col col-2">
                <div class="profile-comments">
                  <img src="{{asset('/image/photos2.jpg')}}" alt="">
                </div>
              </div>
              <div class="col col-10">
                <div class="comment">
                    <div class="body">
                      <span class="tip"></span>
                      <div class="name">
                      	<a href="">Anonim</a>
                      </div><hr>
                      <div class="message">
                        <span>Article yang menarik untuk dibaca, saya akan menanti post anda selanjutnya.</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
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
                        <a href="">Floren</a>
                      </div><hr>
                      <div class="message">
                        <span>Teknologi sangat dibutuhkan untuk masa depan.</span>
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
