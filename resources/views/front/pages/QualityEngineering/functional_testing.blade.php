@extends('front.layouts.app')
@section('title', "Functional Testing Service")
@section('meta_keywords', "Functional Testing Service")
@section('meta_description', "Functional testing is a form of testing and is a quality assurance process that helps to validate the system or components to ensure quality in each phase of product")

@section('link')  
@if (Session::has('ifWww'))
  <link rel="canonical" href="https://www.prilient.com/Quality_Engineering/functional-testing" />
@else      
  <link rel="canonical" href="https://prilient.com/Quality_Engineering/functional-testing" />
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
                <h1>Functional Testing Service</h1>
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
            <h4>Functional Testing Service</h4>
            <p>
            Evaluate the functionality of the system or software with our functional testing service. Functional testing helps to verify the requirements of the application are working properly. Our functionality testing experts ensure to identify all the potential vulnerability issues. They have enough knowledge of market trends, automation tools, and the testing of systems.   
            </p>
      </div>
    </div>
  <!-- content end -->
@endsection