@extends('front.layouts.app')
@section('title', "Modern Data Warehouses Service")
@section('meta_keywords', "Modern Data Warehouses Service")
@section('meta_description', "A Modern Data Warehouse services is a cloud-based solution that gathers and stores that information. Organizations can process this data to make intelligent decisions.")

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
                <h1>Modern Data Warehouses Service</h1>
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
            <h4>Modern Data Warehouses</h4>
            <p>
            A modern data warehouse is used to store multiple sources of data on the cloud that helps to deliver better customer insights and more powerful functionalities. Our experts use a business intelligence framework, machine learning, and advanced technique to identify challenges or market trends, and predict future growth or opportunity. They will provide an in-depth report about your business. 
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