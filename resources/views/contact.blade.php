@extends('layouts.site')
@section('content')




<main id="main">

<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
        <li><a href="/">Home</a></li>
        <li>Contact</li>
        </ol>
    </div>

    </div>
</section><!-- End Contact Section -->

<!-- ======= Contact Section ======= -->
<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

    <div class="row">

        <div class="col-lg-6">

        <div class="row">
            <div class="col-md-12">
            <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>地址</h3>
                <p>64002雲林縣斗六市大學路三段123號</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>信箱</h3>
                <p>B10723059@gemail.yuntech.edu.tw</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>聯絡我</h3>
                <p>0958983620</p>
            </div>
            </div>
        </div>

        </div>

        <div class="col-lg-6">
        <form id= "message" class="php-email">
            <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="姓名" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="信箱" required>
            </div>
            </div>
            <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="標題" required>
            </div>
            <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="留言" required></textarea>
            </div>
            <div class="my-3">
            
            </div>
            <div class="text-center"><button type="submit">送出</button></div>
        </form>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->

<!-- ======= Map Section ======= -->
<section class="map mt-2">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1826.733408073113!2d120.5342942080645!3d23.695018196154145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6Zuy5p6X56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1634807675569!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section><!-- End Map Section -->

</main><!-- End #main -->

@endsection

