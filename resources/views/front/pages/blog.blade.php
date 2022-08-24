@extends('front.layouts.app')
@section('title',__('Blog -'))
@section('content')

<link href="{{ url('frontent/blog/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('frontent/blog/bootstrap/blog.css') }}" rel="stylesheet">
<link href="{{ url('frontent/blog/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

<!-- ======= ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
        </ol>
        <h2>Blog</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                @if(count($blog)>0)
                @foreach($blog as $row)
                <article class="entry">

                    <div class="entry-img">
                        <img src="{{url('upload/blog/'.$row->image)}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="{{url('blog/'.$row->slug)}}">{{$row->title}}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <!--                       <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{url('blog')}}">John Doe</a></li> -->
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                    href="{{url('blog')}}"><time
                                        datetime="2020-01-01">{{ date("d-M-Y ",strtotime($row->date)) }}</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                    href="{{url('blog/'.$row->slug)}}">{{$row->blog_post->count()}} Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            {!! $row->short_description !!}
                        </p>
                        <div class="read-more">
                            <a href="{{url('blog/'.$row->slug)}}">Read More</a>
                        </div>
                    </div>

                </article>
                @endforeach
                @endif
            </div>

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form method="get" action="">
                            <input type="text" id="txtSearch" name="txtSearch">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                    <div class="recent_post"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script type="application/javascript">
$(document).ready(function(){
    get_recent_post();
    $('#txtSearch').on('keyup', function(){
        var text = $('#txtSearch').val();
        get_recent_post(text);
        
    });

    function get_recent_post(text=''){
      
        $.ajax({
            type:"GET",
            url: "{{ url('/search') }}",
            data: {text: text},
            success: function(data) {
                var output = '';
                if(data.length > 0)
                {
                    for(var count = 0; count < data.length; count++)
                {
                    var d = new Date(data[count].date);
                    var y = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(d);
                    var m = new Intl.DateTimeFormat('en', { month: 'short' }).format(d);
                    var d = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(d);
                    var date = d+'-'+m+'-'+y;

                    output += '<div class="post-item clearfix">';
                    output += '<img src="upload/blog/'+data[count].image+'" alt="">';
                    output += '<h4><a href="blog/'+data[count].slug+'">'+data[count].title+'</a></h4>';
                    output += '<time datetime="2020-01-01">'+date+'</time>';
                    output += '</div>';
                }
                }
                else
                {
                    output += '<div class="post-item clearfix">';
                    output += '<p>No Recent Post</p>';
                    output += '</div>';
                }
                    $('.recent_post').html(output);
                }
        });
    }


});
</script>

@endsection
