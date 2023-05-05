@extends('front.layouts.app')
@section('title', "Data Science Service")
@section('meta_keywords', "Data Science Service")
@section('meta_description', "Data Science service have revolutionized way products and services are developed to simplify strenuous real-world task.we provide the best data science services")


   @section('link')       
@if (Session::has('ifWww')) 
      <link rel="canonical" href="https://www.prilient.com/Analytics_and_BI/data-science" />
   @else      
      <link rel="canonical" href="https://prilient.com/Analytics_and_BI/data-science" />
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
                <h1>Data Science</h1>
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
            <img alt="Data Science" src="{{ url('public/assets/images/banner/9.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>Data Science</h4>
            <p>
            Predict the future growth, opportunity, future challenges, and human behavior to meet your business goals by getting our Data Science service. Data science is used to analyze data by data scientists. Prilient offers world-class data scientists who have enough knowledge and experience in data mining, predictive modeling, and other data analytics firms. 
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