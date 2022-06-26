<h3 class="sidebar-title">Recent Posts</h3>

@foreach ($recents as $recent)

<div class="sidebar-item recent-posts">
    <div class="post-item clearfix">
        <img src="{{asset($recent -> pic)}}" alt="">
        <h4><a href="{{url('/blog/'.$recent -> id)}}">{{$recent -> title}}</a></h4>
        <time datetime="{{$recent -> created_at -> toDateString()}}">{{$recent -> created_at -> toFormattedDateString()}}</time>
    </div>
    
@endforeach


