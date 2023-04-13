@extends('front.layouts.app')
@section('title', "ERP Development services")
@section('meta_keywords', "ERP Development services")
@section('meta_description', "Enterprise resource planning (ERP) Development services refers to a type of software that organizations use to manage business activities such as accounting, procurement, project management")


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
                <h1>ERP Development Services</h1>
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
            <img src="{{ url('public/assets/images/banner/ERP_Development.jpg') }}">
          </div>
      <div class="col-lg-12 mt-5">
            <h4>ERP Development</h4>
            <p>
            ERP stands for enterprise resource planning and is a software application that’s used to manage operations and processes. ERP systems serve as an enterprise-wide information system, which means they provide valuable data across departments. It’s important to find professionals who have experience with ERP systems in order to ensure your success. At Prilient, we have a proven track record of delivering high-quality applications within our client organizations.
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