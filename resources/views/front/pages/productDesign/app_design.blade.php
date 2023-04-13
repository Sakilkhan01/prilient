@extends('front.layouts.app')
@section('title', "App design services")
@section('meta_keywords', "App design services")
@section('meta_description', "We offer app design services to carve your design to help you develop creative and immersive app designs trends for your business vertical, end-user needs and best user")

@section('content') 
  <section class="breadcrumb-area banner-1" >
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>App Design</h1>
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
            <img src="{{ url('public/assets/images/banner/app_design.jpg') }}">
          </div>
          <div class="col-lg-12 mt-5">
            <h4>App Design</h4>
            <p>
            A lot of companies make their app to match specific products and services, and it’s something we really don’t recommend. Your app should be designed in such a way that it can stand on its own, or serve as an additional tool to your product/service offering. By offering exceptional experiences, you won’t need to rely on convincing users they need your app; they will use it because they want to use it.
            </p>
      </div>
      <div class="col-lg-12 ">
            <h4>How Can The Best Product Enable You to be a Market Leader?</h4>
            <p>
            Ultimately, you want a product that solves your customer’s problems and helps you stand out from your competitors. This is why it’s so important to ensure that you’re designing an optimal user experience (UX) and user interface (UI). UX/UI designers are experts in visual and interaction designers who are responsible for making sure a product or app looks as good as it works. From mobile apps to websites, their designs create rich, engaging experiences for customers and users alike.
            </p>
            <ul class="p-3" style="list-style-type: circle;">
                <li class="mb-3">Enhances Your Customer’s Satisfaction Rate</li>
                <li class="mb-3">Increases Market Share</li>
                <li class="mb-3">Offers Best Customers Services</li>
                <li class="mb-3">Real-time Customer Support</li>
                <li class="mb-3">Manage Your User Data Efficiently</li>
            </ul>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>Why Prilient is Most Suited For Your Product Design?</h3>
            <p>Prilient’s product design services ensure that you get exactly what you need to make your project a success.</p>
          </div>
      </div>
      <div class="col-lg-12">
            <h4>1. On-time Delivery</h4>
            <p>
            We are proud of our commitment to on-time delivery. We have an extensive network in multiple locations, meaning that we can get your product to you quickly and efficiently. 
            </p>
      </div>
      <div class="col-lg-12 ">
            <h4>2. Collaborative Work Culture</h4>
            <p>
            Collaboration is the key to success for companies in today's competitive environment. The collaborative work culture has been around for some time now. It is a work culture that promotes collaboration and teamwork among employees.
            </p>
      </div>
      <div class="col-lg-12 ">
            <h4>3. Goal-Oriented Team</h4>
            <p>
            Our goal is to help companies build great digital products with the help of our team of product designers. Our team is focused on the user experience and our main goal is to make sure that the product we design is intuitive and easy to use. 
            </p>
      </div>
      <div class="col-lg-12 ">
            <h4>4. 24/7 Customer Assistance</h4>
            <p>
            For any questions or concerns, you may have, our customer support team is available 24/7. In the event of a technical issue, we are available to take your call and help solve the problem as soon as possible.
            </p>
      </div>
      <div class="col-lg-12  mb-5">
            <h4>5. Chatbot Facility</h4>
            <p>
            It is a great way to interact with our customers and provide them with the best possible customer service. The live chat facility allows us to have a conversation with you in real-time.
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