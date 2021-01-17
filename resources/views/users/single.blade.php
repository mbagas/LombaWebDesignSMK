@extends('layout.home')

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
        <a class="active" href="#">APA ITU REVOLUSI INDUSTRI</a>
      </div>

      </div>

      <div class="col col-1 offset"></div>

    </div>
    <div class="row">

      <div class="col col-1 offset"></div>

      <div class="col col-7">

        <div class="article">
          <div class="title">
            <h1>Apa itu Revolusi Industri</h1>
          </div>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
            <img src="{{asset('/image/article1.jfif')}}" alt="">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
              qui officia deserunt mollit anim id est laborum<br><br>

              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
              qui officia deserunt mollit anim id est laborum<br><br>

              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
              qui officia deserunt mollit anim id est laborum<br><br>
            </p>

          </div>
        </div>
        <div class="respons">
          <p>LEAVE YOUR JEJAK</p>
          <hr>
          <div class="reply">
            <div class="row">
              <div class="col col-2">
                <div class="profile-comments">
                  <img src="{{asset('/image/photos1.jpg')}}" alt="">
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
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.</span>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="input-reply">
            <div class="row">
              <div class="col col-11">
                <label for="">Message : </label>
                {{-- <input type="text" name="" value="" placeholder="Email Adress">
                <input type="text" name="" value="" placeholder="Name">
                <input type="text" name="" value="" placeholder="No Telp"> --}}
                <textarea name="name" rows="8" cols="98"></textarea>
              </div>
              <div class="col col-1">
                <button class="button-reply" type="button" name="button"><i class="fa fa-send"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-3">
        <div class="side-widget">
          <p>RECENT POST</p>
          <div class="post">
            <div class="row">
              <div class="col col-3">
                <img src="{{asset('/image/photos2.jpg')}}" alt="">
              </div>
              <div class="col col-9">

                <div class="title">
                  23 Agustus 2018<br>
                  <a href="#">APA ITU REVOLUSI INDUSTRI</a>
                </div>

              </div>
            </div>
          </div>
          <hr style="background-color:#e6dce0;height: 1px;border:0;">
          <div class="post">
            <div class="row">
              <div class="col col-3">
                <img src="{{asset('/image/photos1.jpg')}}" alt="">
              </div>
              <div class="col col-9">

                <div class="title">
                  22 Agustus 2018<br>
                  <a href="#">PERKEMBANGAN TEKNOLOGI DI BIDANG PERTANIAN</a>
                </div>

              </div>
            </div>
          </div>
          <hr style="background-color:#e6dce0;height: 1px;border:0;">
          <div class="post">
            <div class="row">
              <div class="col col-3">
                <img src="{{asset('/image/photos3.jpg')}}" alt="">
              </div>
              <div class="col col-9">

                <div class="title">
                  16 Agustus 2018<br>
                  <a href="#">TEKNOLOGI TEKNOLOGI RAMAH LINGKUNGAN</a>
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
