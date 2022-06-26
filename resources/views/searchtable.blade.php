@extends('layouts.site')
@section('content')
<!-- ======= Blog Section ======= -->

<section class="breadcrumbs">
    
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>

        <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
        </ol>
    </div>

    </div>
</section><!-- End Blog Section -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

    <div class="row">
        {{-- {{print_r($keyword)}} --}}
        <div class="col-lg-8 entries">

            <table class="table table-hover">
                <thead>
                    @if (count($searchPosts) > 0)
                        <tr>
                            <th scope="col">結果</th>
                            <th scope="col">看更多</th>
                        </tr>
                    @else
                        <h4>查無結果</h4>
                    @endif

                </thead>
                <tbody>
        
            @foreach ($searchPosts as $searchPost)
                <tr class="go" data-id="{{$searchPost -> id}}">
                {{-- <td ><img src="{{ $searchPost -> pic }}" width="15%" alt=""></td> --}}
                <td>{{$searchPost -> title}}</td>
                <td><a href="{{url('/blog/'. $searchPost -> id)}}"><b>＞＞＞</b></a></td>
                </tr>
            @endforeach

                </tbody>
            </table>

        {{-- {{$searchPosts->links()}} --}}

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
</section><!-- End Blog Section -->


<script>
    $('.go').on('click',function(){
        var id = $(this).attr('data-id');
        window.location.href = "/blog/" + id;
    })
</script>

@endsection