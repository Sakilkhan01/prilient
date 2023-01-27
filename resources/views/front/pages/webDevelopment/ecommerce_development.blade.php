@extends('front.layouts.app')
@section('title', "Ecommerce Development services")
@section('meta_keywords', "Ecommerce Development Services")
@section('meta_description', "Ecommerce development refers to the process of creating and maintaining an online store or marketplace.This can involve anything from building a simple website")

@section('content') 
<section class="breadcrumb-area banner-1">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>Ecommerce Development Services</h1>
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
            <img src="{{ url('assets/images/banner/Ecommerce_Development.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>Ecommerce Development</h4>
            <p>
            When it comes to developing an e-commerce website, we’re able to do all of it. We don’t outsource any work and when we work with our clients on eCommerce development projects, they know that we will be there every step of the way. Because in today’s fast-paced marketplace companies can no longer stand still and must continually innovate in order to succeed. However, as much as technology changes so do consumer habits; mobile is now more important than ever before.
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