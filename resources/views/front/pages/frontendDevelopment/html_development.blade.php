@extends('front.layouts.app')
@section('title', "HTML 5 Development Service")
@section('meta_keywords', "HTML 5 Development Service")
@section('meta_description', "HTML 5 Development Service is a revision of the Hypertext Markup Language, the standard programming language for describing the content appearance of Web pages.")

@section('link')   
@if (Session::has('ifWww'))  
      <link rel="canonical" href="https://www.prilient.com/frontend_development/html-development" />
   @else       
      <link rel="canonical" href="https://prilient.com/frontend_development/html-development" />
@endif
@stop
@section('content') 
  <!-- content start -->
  <!--Breadcrumb Area-->
  <section class="breadcrumb-area banner-1" data-background="{{ url('public/assets/images/banner/9.jpg') }}">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>HTML 5 Development Service</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End why-choose-->
<div class="container">
      <div class="col-lg-12 mt-4">
            <h4>HTML 5 Development</h4>
            <p>
            HTML 5 offers developers a multitude of new elements and abilities to make websites more rich and interactive. Our HTML 5 Development Services use these new features to develop cleaner, faster sites. The new code is better for accessibility and readability, too. The standards are designed to work on any device that has access to an internet connection—from desktop computers down to mobile phones.     
            </p>
      </div>
     

    </div>
  <!-- content end -->
@endsection