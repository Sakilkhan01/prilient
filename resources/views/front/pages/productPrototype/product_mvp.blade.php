@extends('front.layouts.app')
@section('title', "MVP & Prototype")
@section('meta_keywords', "MVP & Prototype")
@section('meta_description', "The meaning of MVP  Minimum Viable Product. Minimum version of a product that has enough functionality and features that still solves problem for your customers")

@section('link')
@if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/product_prototype/mvp" />
@else  
      <link rel="canonical" href="https://prilient.com/product_prototype/mvp" />
@endif
@stop
@section('content') 
  <section class="breadcrumb-area banner-1">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>MVP Service</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<div class="container pb-5">
  <div class="row">
        <div class="col-lg-8 col-12">
          <div class="frem-banner-img mt-5">
            <img alt="MVP" src="{{ url('public/assets/images/banner/9.jpg') }}">
          </div>
        <div class="col-lg-12 mt-5">
            <h4>MVP</h4>
            <p>
            Minimum Viable Product (MVP) is the first step in developing the first workable version of your product idea. MVP is an essential step for your product that helps to test your product, save money or time or resource, understand users, and attract investors. 
            </p>
            <p>
            At prilient, we offer a Minimum Viable Product (MVP) service that helps to test your product in the market. Our experts have years of experience and enough knowledge of delivering great service. They keep updated with market trends, human behaviors, and advanced tools or techniques.
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