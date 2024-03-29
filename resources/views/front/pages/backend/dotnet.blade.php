@extends('front.layouts.app')
@section('title', ".NET Development Services")
@section('meta_keywords', ".NET Development Services")
@section('meta_description', "High-performance web and mobile apps are designed, and deployed utilising Microsoft's .NET Development Services. The.NET platform includes the.NET Framework.")

@section('link')
  @if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/backend_development/dotnet-development" />
  @else 
      <link rel="canonical" href="https://prilient.com/backend_development/dotnet-development" />
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
                <h1>.NET Development Services</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End why-choose-->
<div class="container py-5">
<div class="col-lg-12">
            <h4>.NET Development</h4>
            <p>
            .NET is an open-source framework that helps in various development including cross-platform applications, mobile applications,  desktop applications, and web-based applications in less time. .NET developers of prilient are capable of developing various applications. We make sure to deliver secure, robust, top-quality, and scalable applications. They always keep updated with advanced tools, technology, human behavior, and the market.
            </p>
      </div>
    </div>
  <!-- content end -->
@endsection