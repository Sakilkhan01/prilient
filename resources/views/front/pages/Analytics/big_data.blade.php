@extends('front.layouts.app')
@section('title', "Big Data Service")
@section('meta_keywords', "Big Data Service")
@section('meta_description', "Big data service is the data platforms and tools a cloud provider to help organizations process, manage and analyse the data sets so they can generate insights.")


@section('link')
@if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/Analytics_and_BI/big-data" />
   @else
      <link rel="canonical" href="https://prilient.com/Analytics_and_BI/big-data" />
@endif
@stop

@section('content') 
  <!-- content start -->
  <!--Breadcrumb Area-->
  <section class="breadcrumb-area banner-1">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>Big Data Service</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End why-choose-->
  <div class="container pb-5">
    <div class="row">
        <div class="col-lg-8 col-12">
          <div class="frem-banner-img mt-5">
            <img alt="Big Data service" src="{{ url('public/assets/images/banner/9.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>Big Data</h4>
            <p>
            Improve the chance of making a better decision after getting an in-depth understanding of the market, business, competition, and future by getting our business intelligence service. business intelligence is used to create, build, and deeply business applications. IT experts of Prilient are capable of delivering business and infrastructure applications for BI platforms, data warehousing infrastructure, and reporting frameworks. 
            </p>
      </div>
        </div>
        <div class="col-lg-4 col-12 mt-5">
          @include('front.pages.request_quote')
        </div>
      </div>
    </div>
  <!-- content end -->
@endsection