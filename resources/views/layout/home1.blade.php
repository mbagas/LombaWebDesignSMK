<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/home-layout.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/single.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">
  </head>
  <body data-spy="scroll" data-target=".navbar">
    <div class="nav" id="nav">
      <div class="contains">
        <a class="logo" href="/home"><span>Λ</span> - INDUSTRY</a>
        <div class="link">
          <a onclick="document.getElementById('login').style.display='block'" class="nav-link" >Login</a>
        </div>
        <div class="link">
          <a onclick="document.getElementById('signup').style.display='block'" class="nav-link" >Sign In</a>
        </div>
        <div class="link">
          <a href="/home/produk" class="nav-link active">Product</a>
        </div>
        <div class="link">
          <a href="/home/blog" class="nav-link">Blog</a>
        </div>
        <div class="link">
          <a href="/home/about" class="nav-link" >About</a>
        </div>
          <a href="javascript:void(0);" class="icon" onclick="collapse()"><i class="fa fa-bars fa-5"></i></a>
      </div>
    </div>

    <div id="login" class="modal">

      <form class="modal-content animate" action="/action_page.php">
        <div class="headcontainer">
          <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h1>Login</h1>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input class="login-input" type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input class="login-input" type="password" placeholder="Enter Password" name="psw" required>

          <button class="button submit" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('login').style.display='none'" class="button cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>

    </div>
    <div id="signup" class="modal">

      <form class="modal-content animate" action="/action_page.php">
        <div class="headcontainer">
          <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>

          <label style="cursor:pointer">
            <img src="{{asset('/image/click.png')}}" alt="Avatar" class="avatar" id=showgambar>
            <input type="file" name="file" value="" style="display:none" id="inputgambar">
          </label>
        </div>

        <div class="container">
          <div class="row">
            <div class="col col-6">

              <label for="name"><b>Username</b></label><br>
              <input class="signup-input" type="text" placeholder="Masukan nama" name="name" required>

            </div>
            <div class="col col-6">

              <label for="email"><b>Email</b></label><br>
              <input class="signup-input" type="text" placeholder="Masukan E-mail" name="email" required>

            </div>
          </div>

          <label for="psw"><b>Password</b></label>
          <input class="signup-input2" type="password" placeholder="Masukan Password" name="psw" required>

          <button class="button submit" type="submit">Login</button>

        </div>

      </form>

    </div>

    @yield('content')

    <footer class="foot">
      <div class="footer-content">
        <div class="contains">
          <div class="row">
            <div class="col col-1 offset"></div>
            <div class="col col-2">
              <div class="footer-widget">

                <p class="header-foot">Contact</p>
                <p class="content-foot"><i class="fa fa-map-marker ifoot"></i>  Jalan baru</p>
                <p class="content-foot"><i class="fa fa-envelope ifoot"></i> mail@email.com</p>
                <p class="content-foot"><i class="fa fa-phone ifoot"></i>  1-234-567-8910</p>
                <p class="content-foot"></p>

              </div>
            </div>
            <div class="col col-2">
              <div class="footer-widget">

                <p class="header-foot">Usefull Links</p>
                <p class="content-foot"><a href="/home"><i class="fa fa-home ifoot"></i>  Home</a></p>
                <p class="content-foot"><a href="/home#blog"><i class="fa fa-bars ifoot"></i>  Blog</a></p>
                <p class="content-foot"><a href=/home#team><i class="fa fa-user ifoot"></i>  Team</a></p>
                <p class="content-foot"></p>

              </div>
            </div>
            <div class="col col-3">
              <div class="footer-widget">

                <p class="header-foot aboutf">About us</p>
                <p class="content-foot text">
                  Kami adalah sebuah perushaaan yang bergerak dalam Revolusi Industri
                  Nusantara 4.0. Kami fokus mengembangkan produk-produk yang dapat digunakan
                  dalam industri 4.0. Kami juga membantu startup baru yang bergerak dalam
                  bidang ini untuk menciptakan produk mereka.
                </p>

              </div>
            </div>
            <div class="col col-3">
              <div class="footer-widget">
                <p class="header-foot galery">Photos</p>
                <div class="photos">
                  <a href="/home/produk/2"><img src="{{asset('/image/footerimg1.jpg')}}" alt=""></a>
                  <a href="/home/blog/2"><img src="{{asset('/image/footerimg2.jpg')}}" alt=""></a>
                  <a href="/home/produk/3"><img src="{{asset('/image/footerimg3.jpg')}}" alt=""></a>
                  <a href="/home/produk/1"><img src="{{asset('/image/footerimg4.jpg')}}" alt=""></a>
                  <a href="/home/produk/5"><img src="{{asset('/image/footerimg5.jpg')}}" alt=""></a>
                  <a href="/home/produk/6"><img src="{{asset('/image/footerimg6.jpg')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="contains">
          <div class="row">
            <div class="col col-1 offset"></div>
            <div class="col col-10">
              <p>SMKN 4 TEAM &copy; 2018</p>
            </div>
            <div class="col col-1 offset"></div>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <script src="/js/main.js" charset="utf-8"></script>

    @section('js')

    @show
  </body>
</html>
