@extends('front.layouts.app')
@section('title', $blog->meta_title)
@section('meta_keywords', $blog->meta_keywords)
@section('meta_description', $blog->meta_description)

@section('link')  
  @if (Session::has('ifWww'))      
    <link rel="canonical" href="https://www.prilient.com/blog/{{$blog->slug}}" />
  @else
    <link rel="canonical" href="https://prilient.com/blog/{{$blog->slug}}" />
  @endif
@stop


@section('content')

<link href="{{ url('public/frontent/blog/bootstrap/blog.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">

<div class="container">
  
    <div class="row mt-5 pt-5">
        <div class="col-lg-8 col-12 col-md-8 pt-4 mt-3">
          <div class="col-lg-12 col-12">
            <p class="slug_txt">{{ url('/blog',$blog->slug) }}</p>
            <h4>
              <a href="{{ url('/blog') }}" class="back_btn"><i class="fa fa-chevron-left fa-icon ml-0"></i> Back</a>
            </h4>
          </div>

          <div class="col-lg-12 col-12">
            <div class="blog-card mt-2">
              <img src="{{url('public/upload/blog/'.$blog->image)}}" alt="{{$blog->title}}" class="img-fluid rounded">
              <div class="p-3">
              <div class="d-flex justify-content-between">
                <div>
                  <ul class="d-flex">
                    <li class=""><i class="fa fa-pencil-square text-gray"></i> <span class="text-gray"> Prilient</span></li>
                    <li class="ml10"><i class="fa fa-clock-o text-gray"></i> <span class="text-gray">1 hour ago</span>
                    </li>
                    <li class="ml10"><i class="fa fa-user-circle-o text-gray"></i> <span class="text-gray">5530</span>
                    </li>
                    <li class="ml10"><i class="fa fa-comment-o text-gray"></i> <span class="text-gray">0 Comments</span>
                    </li>
                  </ul>
                </div>
                <div>
                  <div class="d-flex align-items-center blog-social-icon mt-1"> 
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
                <h2 class="titleText mt-3">{{$blog->title}}</h2>
                <div class="description text">
                    @if(strlen($blog->description) > 600)

                    {!! Glob::substr($blog->description,600) !!}
                    <div class="moreText" id="add_text_more">
                        {!! Glob::moreText($blog->description,600) !!}
                    </div>
                  @else
                      {!! $blog->description !!}
                  @endif
                </div>
                <div class="col-lg-12 text-center py-2">
                  <button class="read-more-btn">Read More</button>
                </div>
              </div>
            </div>
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
    <div class="col-lg-12 py-5">
        <h4 class="comments-count">{{count($blog->blog_post)}} Comments</h4>
            <div id="comment-1" class="comment">
                @foreach($blog->blog_post as $row)  
                  <div>
                    <h5>
                    <i class="fa fa-comment-o mr-1"></i>
                    {{$row->name}}</h5>
                    <h6>
                    <i class="fa fa-clock-o mr-1"></i>
                    {{ date("d-M-Y ",strtotime($row->created_at)) }}</h6>
                    <p>
                      {{$row->comment}}
                    </p>
                  </div>
                @endforeach
            </div>
        <div class="blog-card p-4 mt-4">
          <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form  name="contactUsForm" id="contactUsForm" method="post" action="javascript:void(0)">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="hidden" value="{{ $blog->id }}" name="blog_id">
                      <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email*" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input type="text" name="website" value="{{ old('website') }}" class="form-control" placeholder="Your Website" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" value="{{ old('comment') }}" placeholder="Your Comment*" required>{{old('comment')}}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 pb-5 mb-3">
                    <button class="mt-3 lnk" type="submit">Submit <span class="circle"></span></button>
                  </div>
                </form>

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
.fa-comment-o:before {
  content: "\f0e5";
}
</style>
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

                    output +='<div class="post-item clearfix">';
                    output +='<img src="'+url+'" alt="'+data[count].title+'">';
                    output +='<h4><a href="'+data[count].slug+'">'+data[count].title+'</a></h4>';
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

if ($("#contactUsForm").length > 0) {
            $("#contactUsForm").validate({
            rules: {
              name: {
                required: true,
              },
              email: {
                required: true,
                email: true,
              },  
              website: {
                required: true,
              },  
              comment: {
                required: true,
              },   
            },
            messages: {
              name: {
                required: "Please enter name",
              },
              email: {
                required: "Please enter valid email",
                email: "Please enter valid email",
              },   
              website: {
                required: "Please enter message",
              },   
              comment: {
                required: "Please enter message",
              },
            },
            submitHandler: function(form) {
              $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $('.btnSubmit').html('Please Wait...');
              $(".btnSubmit").attr("disabled", true);
            $.ajax({
                url: "{{route('store-comment')}}",
                type: "POST",
                data: $('#contactUsForm').serialize(),
                success: function( response ) {
                  $('.btnSubmit').html('Submit');
                  $(".btnSubmit"). attr("disabled", false);
                  document.getElementById("contactUsForm").reset();
                  location.reload(true); 
                }
              });
            }
            })
            }
</script>
<script>

const readMoreBtn = document.querySelector(".read-more-btn");
const text = document.querySelector(".text");

readMoreBtn.addEventListener("click", (e) => {
    text.classList.toggle("show-more");
    if (readMoreBtn.innerText === "Read More") {
        readMoreBtn.innerText = "Read Less";
    } else {
        readMoreBtn.innerText = "Read More";
    }
});
</script>
<style type="text/css">
 
.moreText {
    display: none;
}
.read-more-btn {
    border-radius: 43px;
    border: 1px solid #9E9E9E;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    cursor: pointer;
    padding: 12px 24px;
    color: #004999;
    font-weight: 600;
    text-transform: capitalize;
}
.text.show-more .moreText {
    display: inline;
}
.text.show-more .dots {
    display: none;
}
</style>
@endsection
