@extends('front.layouts.app')
@section('title', "CRM Development services")
@section('meta_keywords', "CRM Development services")
@section('meta_description', "CRM Development services offers an intuitive and fast way to create & manage websites, intranets, ecommerce, mobile solutions for public and private enterprises")

@section('link')
@if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/web_development/CRM-development" />
@else   
      <link rel="canonical" href="https://prilient.com/web_development/CRM-development" />
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
                <h1>CRM Development Services</h1>
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
            <img alt="CRM Development" src="{{ url('public/assets/images/banner/CMS_Development.jpg') }}">
          </div>
    <div class="col-lg-12 mt-5">
            <h4>CRM Development</h4>
            <p>
            Content management systems are essential to most online companies. They allow you to manage and organize your website’s content—for example, text, images, audio files, video files, and so on—from one place. You can then publish it or keep it private as you see fit. We specialize in creating CRM solutions that work seamlessly with your business goals. Our team of developers has years of experience working with some of today’s most popular CRM platforms, including WordPress, Drupal, and Joomla!
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