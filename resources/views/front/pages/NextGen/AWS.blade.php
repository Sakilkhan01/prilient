@extends('front.layouts.app')
@section('title', "AWS Amplify & AWS Lamda Service")
@section('meta_keywords', "AWS Amplify & AWS Lamda Service")
@section('meta_description', "AWS Amplify & AWS Lamda Service is a set of purpose-built tools and features that enables frontend web and mobile developers to quickly and easily build full-stack applications")


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
                <h1>AWS Amplify & AWS Lamda Service</h1>
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
            <img src="{{ url('public/assets/images/banner/9.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>AWS Amplify & AWS Lamda</h4>
            <p>
            AWS Amplify and AWS Lambda allow mobile and web development experts to easily and quickly develop or deploy full-stack applications on AWS. At prilient, we have verified developers who are capable of developing any application on AWS. Our developers always keep updated with advanced tools or techniques and market trends. 
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