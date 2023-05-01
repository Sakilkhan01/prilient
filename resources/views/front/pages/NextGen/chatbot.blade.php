@extends('front.layouts.app')
@section('title', "Chatbot Service")
@section('meta_keywords', "Chatbot Service")
@section('meta_description', "Chatbot Service powered either by a script or by artificial intelligence, which can simulate a conversation or chat with a user, through websites, mobile apps,or by phone.")

@section('link')
@if (Session::has('ifWww'))
  <link rel="canonical" href="https://www.prilient.com/NextGen/chatbot-dvelopment" />
@else       
  <link rel="canonical" href="https://prilient.com/NextGen/chatbot-dvelopment" />
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
                <h1>Chatbot Service</h1>
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
            <h4>Chatbot Development</h4>
            <p>
            Improve your customer engagement and satisfaction by providing a Chatbots facility that is used to interact with your visitors as a virtual human. Our developers have enough knowledge and hands-on experience in developing chatbots as per business needs. They keep always updated with human behavior, advanced tools, or technique.   
            </p>
      </div>
      
      
      
     
      


    </div>
  <!-- content end -->
@endsection