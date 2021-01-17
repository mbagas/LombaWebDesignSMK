@extends('layout.home1')

@section('title')
  Blog
@endsection

@section('content')

  <div class="breadcumb">
    <p>BLOG</p>
  </div>

<div class="contains">

  <div class="row">

    <div class="col col-1 offset"></div>

    <div class="col col-10">

    <div class="indicator">
      <a class="link1" href="/home">Home</a>
      <a class="active" href="#">Blog</a>
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
              <a href="/home/blog/1"><img src="{{asset('/image/post.jpg')}}" alt=""></a>
            </div>
          </div>
          <div class="col col-8">
            <div class="title">
              <a href="/home/blog/1" class="title">Apa itu Internet of Things</a><br>
              <p>category : Event, Organizer, Product, Social</p>
            </div>
            <div class="description">
              <p>Internet of Things, atau dikenal juga dengan singkatan IoT) merupakan sebuah konsep yang bertujuan untuk
              memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus.
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
                <a href="/home/blog/2"><img src="{{asset('/image/post2.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/blog/2" class="title">Perkembangan industri Nusantara</a><br>
                <p>category : Event, Organizer, Product, Social</p>
              </div>
              <div class="description">
                <p>Industri adalah kegiatan ekonomi yang mengolah bahan mentah, bahan baku, bahan setengah jadi atau barang jadi menjadi
                barang yang bermutu tinggi dalam penggunaannya. Dengan demikian, industri merupakan bagiaan dari proses produksi.

              </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 6 <i class="fa fa-comments"> 1 </i></p>
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
                <a href="/home/blog/3"><img src="{{asset('/image/post3.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/blog/3" class="title">5 aspek industri Nusantara 4.0</a><br>
                <p>category : Event, Organizer, Product, Social</p>
              </div>
              <div class="description">
                <p>Revolusi Industri 4.0 atau industri generasi ke empat merupakan perubahan sektor industri di dunia yang dipengaruhi
                oleh maraknya perkembangan teknologi serta internet.
                </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 4 <i class="fa fa-comments"> 0 </i></p>
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
                <a href="/home/blog/4"><img src="{{asset('/image/post4.jpg')}}" alt=""></a>
              </div>
            </div>
            <div class="col col-8">
              <div class="title">
                <a href="/home/blog/4" class="title">4 prinsip industri 4.0</a><br>
                <p>category : Event, Organizer, Product, Social</p>
              </div>
              <div class="description">
                <p>Industri 4.0 adalah nama tren otomasi dan pertukaran data terkini dalam teknologi pabrik. Istilah ini mencakup sistem
                siber-fisik, internet untuk segala, komputasi awan dan komputasi kognitif.
              </div>
              <div class="like">
                <p><i class="fa fa-thumbs-up"></i> 6 <i class="fa fa-comments"> 3 </i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-3 side">
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
