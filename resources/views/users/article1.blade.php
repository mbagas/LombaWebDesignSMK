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
        <a class="active" href="#">Internet of Things</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7 arts">

        <div class="article">
          <div class="title">
            <h1>Apa itu Internet of Things (IoT) ?</h1>
          </div>
          <div class="description">
            <p>
              Internet of Things, atau dikenal juga dengan singkatan IoT) merupakan sebuah konsep yang bertujuan untuk
              memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus. Adapun kemampuan seperti
              berbagi data, remote control, dan sebagainya, termasuk juga pada benda di dunia nyata. Contohnya bahan pangan,
              elektronik, koleksi, peralatan apa saja, termasuk benda hidup yang semuanya tersambung ke jaringan lokal dan global
              melalui sensor yang tertanam dan selalu aktif.
            </p>
            <img src="{{asset('/image/post.jpg')}}" alt="">
            <p>
              Pada dasarnya, Internet of Things mengacu pada benda yang dapat diidentifikasikan secara unik sebagai representasi
              virtual dalam struktur berbasis Internet. Istilah Internet of Things awalnya disarankan oleh Kevin Ashton pada tahun
              1999 dan mulai terkenal melalui Auto-ID Center di MIT.Dan kini IoT menjadi salah satu tugas bagi seorang mahasiswa di
              sebuah perguruan tinggi.<br><br>

              Cara Kerja Internet of Things yaitu dengan memanfaatkan sebuah argumentasi pemrograman yang dimana tiap-tiap perintah
              argumennya itu menghasilkan sebuah interaksi antara sesama mesin yang terhubung secara otomatis tanpa campur tangan manusia
              dan dalam jarak berapa pun.Internetlah yang menjadi penghubung di antara kedua interaksi mesin tersebut, sementara manusia
              hanya bertugas sebagai pengatur dan pengawas bekerjanya alat tersebut secara langsung. <br><br>

              Tantangan terbesar dalam mengkonfigurasi Internet of Things ialah menyusun jaringan komunikasinya sendiri, yang dimana
              jaringan tersebut sangatlah kompleks, dan memerlukan sistem keamanan yang ketat. Selain itu biaya yang mahal sering menjadi
              penyebab kegagalan yang berujung pada gagalnya produksi.<br><br>

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
                      	<a href="">Ellen</a>
                      </div><hr>
                      <div class="message">
                        <span>Keren.</span>
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
                      	<a href="">Joi</a>
                      </div><hr>
                      <div class="message">
                        <span>Internet of Things is cool.</span>
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
