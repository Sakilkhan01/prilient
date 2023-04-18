@extends('front.layouts.app')
@section('title',__('Blog'))
@section('content')
<link href="{{ url('public/frontent/blog/bootstrap/blog.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">
<link href="{{ url('public/frontent/blog/bootstrap-icons/bootstrap-icons.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">
<style type="text/css">
    ol, ul {
    padding-left: 1rem !important;
    }

    .inner-card  {
  background-color: #fff;
  box-shadow: 0 1px 2px rgba(0,0,0,.1)
}
.img-wrapper {
  width: 100%;
  height: 250px;
  margin-bottom: 10px;
}
.img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: fill;
  object-position: center;
}
.content {
  margin-bottom: 20px;
}
.content h1 {
  font-weight: 700;
  font-size: 18px;
  color: #444;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: auto;
}
.content p {
  font-size: 14px;
  line-height: 1.5;
  color: #555;
     display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
}
.btn-wrapper {
  display: block;
  text-align: center;
}
.view-btn {
  width: 70%;
  height: 40px;
  border: none;
  background-color: steelblue;
  color: #fff;
  font-size: 16px;
  box-shadow: 0 3px 6px rgba(0,0,0,.4);
  cursor: pointer;
}
.blog-card-a .owl-dots{
    text-align: center;
    padding: 20px;
}


@media only screen and (max-width: 992px) {
  ol, ul {
    padding-left: 0rem !important;
    }
}

</style>
<!-- ======= ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{url('/')}}">Home</a></li>
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
                
                <div class="col-lg-12">
                  <div class="owl-carousel blog-card-a pl25">
                    @foreach($blog as $row)
                     <div class="testimonial-card">
                        <div class="card">
                              <div class="inner-card">
                                <div class="img-wrapper">
                                  <img src="{{url('public/upload/blog/'.$row->image)}}" alt="{{$row->title}}">
                                </div>
                                <div class="p-2">
                                    <div class="entry-meta">
                                    <ul class="d-flex justify-content-between">
                                        <li class=""><i class="bi bi-clock"></i> <a
                                                href="{{url('blog')}}"><time
                                                    datetime="2020-01-01">{{ date("d-M-Y ",strtotime($row->date)) }}</time></a></li>
                                        <li class=""><i class="bi bi-chat-dots"></i> <a
                                                href="{{url('blog/'.$row->slug)}}">{{$row->blog_post->count()}} Comments</a></li>
                                    </ul>
                                 </div>
                                 <div class="content">
                                  <h1>{{$row->title}}</h1>
                                  <p>{!! $row->short_description !!}</p>
                                </div>
                                <div class="btn-wrapper">
                                  <a class="view-btn btn" href="{{url('blog/'.$row->slug)}}">Read More</a>
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        @endforeach
                  </div>
               </div>
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
                    output += '<img src="public/upload/blog/'+data[count].image+'" alt="'+data[count].title+'">';
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
