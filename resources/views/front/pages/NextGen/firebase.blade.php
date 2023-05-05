@extends('front.layouts.app')
@section('title', "Firebase Service")
@section('meta_keywords', "Firebase Service")
@section('meta_description', "Firebase services is an application development software that enables developers to develop iOS, Android and Web apps. It provides tools for tracking analytics.")


@section('link')
@if (Session::has('ifWww'))
  <link rel="canonical" href="https://www.prilient.com/NextGen/firebase" />
@else
  <link rel="canonical" href="https://prilient.com/NextGen/firebase" />
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
                <h1>Firebase Service</h1>
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
            <h4>Firebase</h4>
            <p>
            Get an advantage of firebase documentation and cross-platform service that allow developers to develop and deploy applications on Android, iOS, the web C++ and Unity. Developers of prilient have enough knowledge and experience in developing applications on firebase. Firebase platform also provides analytics tracking tools, reporting, and fixing app crashes. 
            </p>
      </div>
      
      
      
     
      


    </div>
  <!-- content end -->
@endsection