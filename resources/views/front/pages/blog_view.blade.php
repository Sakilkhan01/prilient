@extends('front.layouts.app')
@section('title', $blog->meta_title)
@section('meta_keywords', $blog->meta_keywords)
@section('meta_description', $blog->meta_description)
@section('content')
<link href="{{ url('public/frontent/blog/bootstrap/blog.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">
<link href="{{ url('public/frontent/blog/bootstrap-icons/bootstrap-icons.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">
<style type="text/css">
    ol, ul {
    padding-left: 1rem !important;
    }
    @media only screen and (max-width: 992px) {
  ol, ul {
    padding-left: 0rem !important;
    }
}
</style>
      <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('blog')}}">Blog</a></li>
          <li>{{$blog->title}}</li>
        </ol>
        <h2>{{$blog->title}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{url('public/upload/blog/'.$blog->image)}}" alt="{{$blog->title}}" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{url('blog/'.$blog->slug)}}">{{$blog->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li> -->
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{url('blog/'.$blog->slug)}}"><time datetime="2020-01-01">{{ date("d-M-Y ",strtotime($blog->date)) }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{url('blog/'.$blog->slug)}}">{{$blog->blog_post->count()}} Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                {!! $blog->description !!}

              </div>


            </article><!-- End blog entry -->


            <div class="blog-comments">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                @foreach($blog->blog_post as $row)  
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">{{$row->name}}</a> <!-- <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> --></h5>
                    <time datetime="2020-01-01">{{ date("d-M-Y ",strtotime($blog->created_at)) }}</time>
                    <p>
                      {{$row->comment}}
                    </p>
                  </div>
                </div>
                @endforeach
              
              </div><!-- End comment #1 -->

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="{{ url('blog-post') }}" method="post">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="hidden" value="{{ $blog->id }}" name="blog_id" class="form-control" placeholder="Your Name*">
                      <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email*" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" value="{{ old('website') }}" class="form-control" placeholder="Your Website" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" value="{{ old('comment') }}" placeholder="Your Comment*" required>{{old('comment')}}</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
              <form method="get" action="">
                            <input type="text" id="txtSearch" name="txtSearch">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
              </div><!-- End sidebar search formn-->

              
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              <div class="recent_post"></div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
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
                    var loc = $(location).attr('href');
                    var ret = loc.replace(loc,'../public/upload/blog');
              
                    let url = ""+ret+"/"+data[count].image; 

                    output += '<div class="post-item clearfix">';
                    output += '<img src="'+url+'" alt="'+data[count].title+'">';
                    output += '<h4><a href="'+data[count].slug+'">'+data[count].title+'</a></h4>';
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
  