@extends('layouts.site')
@section('content')
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="/">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            @foreach ($posts as $post)
              <article class="entry">

                <div class="entry-img">
                  <img src="{{ $post -> pic }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="{{url('/blog/'.$post ->id)}}">
                    {{ $post -> title}}
                  </a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('/blog/'. $post -> id)}}">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('/blog/'. $post -> id)}}"><time datetime="{{$post -> created_at -> toDateString()}}">{{$post -> created_at -> toFormattedDateString()}}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{url('/blog/'. $post -> id)}}">{{$post -> comments_count}} Comments</a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {!! $post->content !!}
                  </p>
                  <div class="read-more">
                    <a href="{{url('/blog/'. $post -> id)}}">看更多</a>
                  </div>
                </div>

              </article><!-- End blog entry -->
            @endforeach

            {{$posts->links()}}

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              @include('partials.search')
              @include('partials.categories')
              @include('partials.recents')
              
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
      <div id="app" v-cloak>
        <example-component></example-component>
        </div>
      </body>
      <script src="/js/app.js"></script>
    </section><!-- End Blog Section -->
@endsection