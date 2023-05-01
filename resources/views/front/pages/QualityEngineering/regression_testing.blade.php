@extends('front.layouts.app')
@section('title', "Regression Testing Service")
@section('meta_keywords', "Regression Testing Service")
@section('meta_description', "Regression testing is done after functional testing has concluded, to verify that the other functionalities are working. testing has traditionally been performed")


@section('link')  
@if (Session::has('ifWww')) 
      <link rel="canonical" href="https://www.prilient.com/Quality_Engineering/regression-testing" />
@else      
      <link rel="canonical" href="https://prilient.com/Quality_Engineering/regression-testing" />
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
                <h1>Regression Testing Service</h1>
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
            <h4>Regression Testing</h4>
            <p>
            Evaluate the quality of your system or software or application after every change in the code. Regression testing helps to identify software's functionality after changing in the system. Our regression testing experts provide complete reports of bugs in order to make your system secure, reliable, and robust. We ensure a top-notch solution while maintaining your privacy and security.   
            </p>
      </div>
    </div>
  <!-- content end -->
@endsection