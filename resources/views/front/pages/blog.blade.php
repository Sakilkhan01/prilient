@extends('front.layouts.app')
@section('title',__('Blog | Prilient Technologies'))

@section('link')
  @if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/blog" />
  @else
      <link rel="canonical" href="https://prilient.com/blog" />
  @endif
@stop
@section('content')
<link href="{{ url('public/frontent/blog/bootstrap/blog.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">

<div class="container">
    <div class="category-tab">
      <span class="btn">Categories</span>
      <ul id="" class="scrolling-wrapper flex">
        <li><a class="active" href="">All</a></li>
        <li><a class="" href="">Technology</a></li>
        <li><a class="" href="">Cyber Security</a></li>
        <li><a class="" href="">Graphic Design</a></li>
        <li><a class="" href="">Digital Marketing</a></li>
        <li><a class="" href="">Business</a></li>
        <li><a class="" href="">Cyber Security</a></li>
        <li><a class="" href="">Graphic Design</a></li>
        <li><a class="" href="">Digital Marketing</a></li>
        <li><a class="" href="">Business</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col-lg-8 col-12 col-md-8 pt-4 mt-3">
            <h4>Latest Blogs</h4>
            <div class="row">
              @if(!empty($blog) && $blog->count())
                @foreach($blog as $row)
                    <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="{{url('public/upload/blog/'.$row->image)}}" alt="{{$row->title}}"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <span class="text-gray"> Prilient</span></li>
                                  <li class="ml10"><i class="fa fa-user-circle-o text-gray"></i> <span class="text-gray">5530</span></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>{{$row->title}}</h4>
                                <p>{!! $row->short_description !!}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="{{url('blog/'.$row->slug)}}" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href="{{LINKEDIN}}"><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href="{{TWITTER}}"><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href="{{FACEBOOK}}"><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
               
              </div>


              <!-- popular blog -->

            @if(!empty($popular_post) && $popular_post->count())
            <h4 class="mt-5">Popular Blogs</h4>
            <div class="row">
                @foreach($popular_post as $row)
                <div class="col-lg-6 col-12 mt-4 ">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="{{url('public/upload/blog/'.$row->image)}}" alt="{{$row->title}}"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Prilient</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>{{$row->title}}</h4>
                                <p>{!! $row->short_description !!}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="{{url('blog/'.$row->slug)}}" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href="{{LINKEDIN}}"><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href="{{TWITTER}}"><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href="{{FACEBOOK}}"><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                @endforeach
              </div> 
            @endif
            <div class="col-lg-12 py-5">
                {{ $blog->links('vendor.pagination.custom')}}
            </div>
        </div>
        <div class="col-lg-4 col-12 col-md-4 py-4">
            <div class="sidebar-item search-form">
              <form method="get" action=""> <input type="text" id="txtSearch" name="txtSearch" placeholder="Search.."> 
                <button type="submit"><i class="fa fa-search"></i></button> 
              </form>
            </div>
            <div class="blog_form_callback mt-4 mb-5">
                <h5>Get A Call back</h5>
                <p>Our representative will contact you soon.</p>
                <div class="form-group">
                  <label for="name">enter Your Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Enter Your Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="phone">Enter Your phone No. <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="phone">
                </div>
                 <div class="form-group">
                  <label for="message">Write Your Message/Query <span class="text-danger">*</span></label>
                  <textarea type="text" class="form-control" name="message"></textarea>
                </div>
                <div class="form-group text-center">
                  <button class="mt-3 lnk">Submit <span class="circle"></span></button>
                </div>
            </div>

            <div class="blog-post-card p-4">
                <div class="d-flex justify-content-between">
                    <div>
                      <h5>Recent Posts</h5>
                    </div>
                    <div>
                      <i class="fa fa-file text-gray"></i>
                    </div>
                </div>
                <div class="recent-posts">
                  <div class="undeline my-2 mb-3"></div>
                  <div class="recent_post"></div>
                 
                 <div class="read-more-pst text-center pt-3">
                    <a href="">View More...</a>
                 </div>
              </div>
            </div>
            <div class="blog_add mt-5" style="background-image: url({{asset('public/assets/images/blog/ad_bg.png')}});">
                <h3>Here is<br> The <br> Advertisement</h3>
            </div>

              <div class="blog-post-card p-4 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                      <h5>Trending Post</h5>
                    </div>
                    <div>
                      <i class="fa fa-file text-gray"></i>
                    </div>
                </div>
                <div class="recent-posts">
                  <div class="undeline my-2 mb-3"></div>
                  @if(!empty($popular_post) && $popular_post->count())
                    @foreach($popular_post as $row)
                   <div class="post-item clearfix">
                      <img src="{{url('public/upload/blog/'.$row->image)}}" alt="{{$row->title}}">
                      <h4><a href="{{url('blog/'.$row->slug)}}">{{$row->title}}</a></h4>
                      <span class="time"><i class="text-gray fa fa-clock-o"></i> {{ date('j-F-Y', strtotime($row->created_at)) }}</span>
                   </div>
                    @endforeach
                  <div class="read-more-pst text-center pt-3">
                    <a href="">View More...</a>
                 </div>
                  @else
                      <p>No data found</p>
                  @endif
              </div>
            </div>
        </div>
    </div>
</div>
<style>
  .fa-pencil-square:before {
    content: "\f14b";
  }
  .fa-user-circle-o:before {
  content: "\f2be";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-search:before {
  content: "\f002";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file:before {
  content: "\f15b";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-chevron-left:before {
  content: "\f053";
}
</style>
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

                    output +='<div class="post-item clearfix">';
                    output +='<img src="public/upload/blog/'+data[count].image+'" alt="'+data[count].title+'">';
                    output +='<h4><a href="blog/'+data[count].slug+'">'+data[count].title+'</a></h4>';
                    output +='<span class="time"><i class="text-gray fa fa-clock-o"></i> '+date+'</span></div>';
                    $('.read-more-pst').show();
                }
                }
                else
                {
                    output += '<div class="post-item clearfix">';
                    output += '<p>No Recent Post</p>';
                    output += '</div>';
                    $('.read-more-pst').hide();
                }
                    $('.recent_post').html(output);

                }
        });
    }


});
</script>
@endsection
