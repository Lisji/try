@extends('layouts.site')
@section('content')

<!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Profile</h2>

            <ol>
            <li><a href="/">Home</a></li>
            <li>Profile</li>
            </ol>
        </div>

        </div>
    </section>
<!-- End Blog Section -->

<div class="container">
<div class="main-body">

        <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="carda">
            <div class="carda-body">
                <div class="d-flex flex-column align-items-center text-center">
                <img src="{{asset ('assets/img/myfile/my.jpg')}}" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h4>湯智偉</h4>
                    <p class="text-secondary mb-1">實習生</p>
                    <br>
                    <p class="text-muted font-size-sm">國立雲林科技大學<br>資訊管理系</p>
                </div>
                </div>
            </div>
            </div>
            <div class="carda mt-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                <span class="text-secondary">http://localhost:8000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                <span class="text-secondary">Lisji</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                <span class="text-secondary">tang.lis.ji</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                <span class="text-secondary">湯智偉</span>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="carda mb-3">
            <div class="carda-body">
                <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">姓名</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    湯智偉
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">信箱</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    B10723059@gemail.yuntech.edu.tw
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">市內電話</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    (037)983-620
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">行動電話</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    0958-983620
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">地址</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    64002雲林縣斗六市大學路三段123號
                </div>
                </div>
                <hr>
                <div class="row">

                </div>
            </div>
            </div>

            <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
                <div class="carda h-100">
                <div class="carda-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <a href="http://libweb.yuntech.edu.tw/archives/">
                    <img src="{{asset ('assets/img/myfile/libweb.jpg')}}" width="200" alt="">
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="carda h-100">
                <div class="carda-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <a href="http://www.usr.yuntech.edu.tw/">
                        <img src="{{asset ('assets/img/myfile/usr.png')}}" width="200" alt="">
                        </a>
                    </div>
                </div>
                </div>
            </div>
            </div>



        </div>
        </div>

    </div>
</div>
@endsection