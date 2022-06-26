<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LISJI BLOG - PRACTICE VERSION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('assets/img/favicon.ico')}}" rel="icon">
  {{-- <link href="{{asset ('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">

  {{-- jquery
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> --}}

  <!-- =======================================================
  * Template Name: Moderna - v4.5.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
      
      
      <a href="/blog">
      <div class="logo" >
        
        <img src="{{asset ('assets/img/logo.png')}}" alt="" class="img-fluid">
        <h1 class="text-light">LISJI BLOG</h1>
        
      </div>
      </a>
      
      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="{{$routeName == 'home' ? 'active' : ''}}" href="/">Home</a></li>
          <li><a class="{{$routeName == 'github' ? 'active' : ''}}" href="https://github.com/Lisji">GitHub</a></li>
          <li><a class="{{$routeName == 'myInfo' ? 'active' : ''}}" href="/myInfo">Profile</a></li>
          <li><a class="{{$routeName == 'blog' ? 'active' : ''}}" href="/blog">Blog</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          
          <li><a class="{{$routeName == 'contact' ? 'active' : ''}}" href="/contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

@yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

{{-- 訂閱 --}}
  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>最新消息</h4>
          <p>訂閱將可以及時得到我們最新動態</p>
        </div>
        <div class="col-lg-6">
          <form id="subscribeform">
            <input class = 'formemail' type="email" name="email">
            <input type="submit" value="訂閱">
          </form>
        </div>
      </div>
    </div>
  </div>
{{-- 訂閱 --}}

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>網站連結</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/">首頁</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://github.com/Lisji">我的作品</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/myFile">我的檔案</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/blog">文章</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/contactus">聯絡我們</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>服務項目</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">網頁設計</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">網頁開發</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">資料庫開發</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">系統分析與設計</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Python</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>聯絡我們</h4>
          <p>
            64002雲林縣斗六市<br>
            大學路三段123號<br><br>
            <strong>電話｜</strong>0958-983620<br>
            <strong>信箱｜</strong>B10723059@gemail.yuntech.edu.tw<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>LISJI BLOG</h3>
          <p>這是一個我用來練習Laravel的網站，這裡包含了我一些資訊，謝謝你們的觀看。</p>
          <div class="social-links mt-3">
            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
            <a href="https://www.facebook.com/Tang.zhi.wei.s" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/tang.lis.ji/" class="instagram"><i class="bx bxl-instagram"></i></a>
            {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset ('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset ('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset ('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset ('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset ('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset ('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset ('assets/js/main.js')}}"></script>
<script>
  $('#subscribeform').on('submit',function(e){
    e.preventDefault();
    $.ajax({
      url: "/subscribe",
      type:"POST",
      data:$('form').serialize(),
      success: function () {
        $('.formemail').val('');
        alert('--您將會收到最新消息--');
      },
      error: function(){
        alert('--以訂閱或輸入格式錯誤，請重新嘗試--');
      }
    }) 
  })
</script>
<script>
  $('#message').on('submit',function(e){
    e.preventDefault();
    $.ajax({
      url: "/contact/send",
      type:"POST",
      data:$('.php-email').serialize(),
      success: function () {
        $('.form-control').val('');
        alert('--已經收到您的消息囉!感謝您--');
      },
      error: function(){
        alert('--傳送失敗，請重試--');
      }
    }) 
  })
</script>

</body>

</html>