@extends('front.layouts.app')
@section('title', "Security Testing Service")
@section('meta_keywords', "Security Testing Service")
@section('meta_description', "Security testing services are needed to detect, analyze, and help remediate flaws in software, IT infrastructure, IT policies and procedures to prevent security")

@if (Session::has('ifWww'))
   @section('link')
      <link rel="canonical" href="https://www.prilient.com/Quality_Engineering/security-testing" />
   @stop
   @else
   @section('link')   
      <link rel="canonical" href="https://prilient.com/Quality_Engineering/security-testing" />
   @stop
@endif
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
                <h1>Security Testing Service</h1>
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
            <h4>Security Testing</h4>
            <p>
            Win the trust of customers by providing a secure platform, software, or application that may include some elements like integrity, authentication, authorization, confidentiality, and non-repudiation. Security testing helps to identify the threats in the solution. Our tester ensures to provide a detailed report of every potential vulnerability in the system by using advanced automation tools.   
            </p>
      </div>
    </div>
  <!-- content end -->
@endsection