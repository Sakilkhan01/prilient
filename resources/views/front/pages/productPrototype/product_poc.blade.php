@extends('front.layouts.app')
@section('title', "POC & Prototype")
@section('meta_keywords', "POC & Prototype")
@section('meta_description', "A POC is a method of validating assumption with target user and checking if idea is feasible technically. A proof of concept meant to determine the feasibility.")

@section('link')
@if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/product_prototype/poc" />
@else  
      <link rel="canonical" href="https://prilient.com/product_prototype/poc" />
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
                <h1>POC Service</h1>
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
            <img alt="POC" src="{{ url('public/assets/images/banner/9.jpg') }}">
          </div>
        <div class="col-lg-12 mt-5">
            <h4>POC</h4>
            <p>
            Proof of Concept (POC) is basically used to evaluate your business idea whether it can be turned into reality. With this concept, you can save lots of money or time, attract investors' attention, understand user needs, and check against the competition.
            </p>
            <p>
            We at prilient offer top-notch Proof of Concept (POC) service that helps to verify your idea will function as you think. Our experts have enough knowledge about the market, testing tools or techniques, human behavior, and data analysis. Also, we ensure to deliver high-quality service with maintaining security and privacy. 
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