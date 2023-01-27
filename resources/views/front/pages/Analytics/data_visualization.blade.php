@extends('front.layouts.app')
@section('title', "Data Visualization Service")
@section('meta_keywords', "Data Visualization Service")
@section('meta_description', "Data visualization is the graphical representation of information and data. By using Data visual elements like charts, graphs, and maps, data visualization tools.")

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
                <h1>Data Visualization Service</h1>
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
            <img src="{{ url('assets/images/banner/9.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>Data Visualization</h4>
            <p>
            Create a 360-degree view of data analytics reports with data visualization to understand data in a better format, save time, and make better decisions quickly. Our IT experts are capable of designing a report that is easy to understand or communicating complex reports. It allows to remove all distractions and helps to pay attention only to red flags areas.  
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