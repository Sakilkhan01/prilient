@extends('front.layouts.app')
@section('title', "Flutter App Development")
@section('meta_keywords', "Flutter App Development")
@section('meta_description', "Flutter app development is the building an application from scratch or migrating your old business app for quick performance build a range of iOS and Android apps")

@section('link') 
@if (Session::has('ifWww'))       
      <link rel="canonical" href="https://www.prilient.com/app_development/flutter-development" />
@else      
      <link rel="canonical" href="https://prilient.com/app_development/flutter-development" />
@endif
@stop

@section('content') 

<style>
.common-color-heading{
      background: linear-gradient(90.66deg, #004794 6.68%, #E7123B 92.79%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-fill-color: transparent;
}
.fontSize20{
      font-size:30px;
      line-height:1;
      font-weight:400;

}
.hero-main-rp h1{
      line-height:55px;
}



</style>
<section class="hero-card-web-2 bg-service-banner" style="background-image: url({{ asset('public/assets/images/banner/bg-gray.png') }});">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 align-items-center d-flex text-lg-left text-center">
                  <div>
                  <h1><span class="fontWt50 common-color-heading">Flutter App<br></span>
                  <span class="fontWt40">Development Services</span></h1>
                  <a href="{{ url('contact-us') }}" class="niwax-btn2 get-start-btn wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
                  </div>
                  <div class="col-lg-5 col-12 mt-4">
                        <img alt="iOS App" src="{{ asset('public/assets/images/subcategory/Group8.png') }}">
                </div>
            </div>
         </div>
      </div>
</section>
@include('front.pages.rq')
<section class="service-content-body">
    <div class="container pb-5">
      <div class="row">
      <div class="col-lg-5 col-12 text-center mt-5">
            <img alt="Mobile App" style="max-width:75%" src="{{ asset('public/assets/images/subcategory/Group9.png') }}">
      </div>
      <div class="col-lg-7 col-12 mt-5 d-flex align-items-center">
          <div class="comman-service-heading">
            <h2><span class="textRed fontWt50">Flutter App </span><span class="textPrim fontWt50"> Development</span></h2>
             <p>The advancements in mobile devices and improvements in our App development services have dramatically changed how we communicate. Android application developers are experienced in all aspects of Android app development, including native and hybrid applications. A good android application developer needs to keep up with all new technologies, as well as understand older ones and how they can integrate into newer platforms that may not yet be mainstream</p>
          </div>
      </div>
      </div>
   </div>
</section>
      <div class="hiredevlopercard py-5 text-center" style="position:unset;">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="text-white mb-0">Hire an <span class="fontWt50">Flutter Developer</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('dedicated-developer') }}" class="hire-butn">Hire Now <i class="fa fa-chevron-right fa-ani"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="container">
            <div class="col-lg-12 col-12 text-center ml-auto mr-auto pt-5">
                  <h3 class="fontWt40">Why is it Necessary To Develop a
                    <br><span class="textRed fontWt70">Mobile Application?</span></h3>
            </div>
            <div class="row justify-content-center">
                            <div class="col-lg-5 col-12 mt-5">
                                    <div class="single-safety overly-one text-center card-service-equal h-100"> 
                                       <div class="overly-two">
                                          <div class="d-flex align-items-center">
                                                <div style="width:40px">
                                                     <img src="{{ asset('public/assets/images/subcategory/Group3.png') }}"> 
                                                </div>
                                                <div class="ml-2">
                                                      <h5 class="text-left">Reduces Marketing Expenses</h5> 
                                                </div>
                                          </div>
                                    <p>Having an app for your business can help you save money by reducing expenses related to marketing and advertising. By having a mobile application, you are able to reach out to more customers without having to spend as much on traditional forms of advertising such as print ads or television commercials.
                                    </p> 
                                       </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="single-safety overly-one text-center card-service-equal h-100"> 
                                    <div class="overly-two">
                                          <div class="d-flex align-items-center">
                                                <div style="width:40px">
                                                     <img src="{{ asset('public/assets/images/subcategory/Group4.png') }}"> 
                                                </div>
                                                <div class="ml-2">
                                                      <h5 class="text-left">Improves Your Customer Satisfaction Rate</h5> 
                                                </div>
                                          </div>
                                    <p>If you are one of those business professionals, who are striving hard to make your customers happy, then it is just the right time for you to go with mobile application development services.
                                    </p> 
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-12 mt-5">
                                    <div class="single-safety overly-one text-center card-service-equal h-100"> 
                                    <div class="overly-two">
                                          <div class="d-flex align-items-center">
                                                <div style="width:40px">
                                                     <img src="{{ asset('public/assets/images/subcategory/Group5.png') }}"> 
                                                </div>
                                                <div class="ml-2">
                                                      <h5 class="text-left">Boost your business growth</h5> 
                                                </div>
                                          </div>
                                    <p>If you are one of those business professionals, who are striving hard to make your customers happy, then it is just the right time for you to go with mobile application development services.
                                    </p> 
                                    </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="single-safety overly-one text-center card-service-equal h-100"> 
                                    <div class="overly-two">
                                          <div class="d-flex align-items-center">
                                                <div style="width:40px">
                                                     <img src="{{ asset('public/assets/images/subcategory/Group6.png') }}"> 
                                                </div>
                                                <div class="ml-2">
                                                      <h5 class="text-left">Set Yourself Apart from the Crowd</h5> 
                                                </div>
                                          </div>
                                    <p>Mobile applications are an innovative tool that has become a necessity in today’s world. To stay ahead of your competitors, you need to stand out from others with a mobile application.
                                    </p> 
                                    </div>
                                </div>
                              </div>
                        </div>
                  </div>
      </div>
      
      
     
<div class="mt-5 text-center">
            <div class="container">
                  <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="mb-0 fontWt40">We <span class="fontWt50">Promise.</span> We <span class="fontWt50">Deliver.</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('contact-us') }}" class="promiseBtn">Let’s Work Together <i class="fa fa-chevron-right"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="container py-5">
            <div class="col-lg-12 col-12 text-center ml-auto mr-auto">
                  <h3 class="fontWt40">Invest in Prilient App Development Services for
                    <br><span class="textBlueRed fontWt70">the Best ROI</span></h3>
            </div>
            
            <div class="col-lg-12 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Investment" src="{{ asset('public/assets/services/Group77.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>100% Return on Investment</h5> 
                                         <p>We guarantee that our mobile app development services will give you a 100% return on your investment. This means that you will make back what you invested in mobile app development services with our company, and then some.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Flexibility" src="{{ asset('public/assets/services/Group78.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Great Flexibility</h5> 
                                         <p>Our development team has great flexibility in developing mobile applications and can work on both native as well as cross-platform apps. We have created apps for all major platforms including iOS, Android, Windows Phone, Blackberry, and HTML5.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Flexibility" src="{{ asset('public/assets/services/Group24.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Transparency</h5> 
                                         <p>Our pricing and what we offer are completely transparent. The cost of each of our services is clearly stated on our website, so you know exactly what you are paying for.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Affordable Pricing" src="{{ asset('public/assets/services/Group79.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Affordable Pricing</h5> 
                                         <p>Our app development services are very affordable. We have a fixed pricing structure that makes it easy to budget for your app. For even more convenience, we offer monthly payment plans that make it even easier to stay on budget.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Customer Support Team" src="{{ asset('public/assets/services/Group80.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>24/7 Customer Support Team</h5> 
                                         <p>To address any questions or concerns you may have, we have a dedicated support team available 24/7.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="pb-5 text-center">
            <div class="container">
                  <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8 col-12">
                              <h2 class="mb-0 fontWt40">We Love to Listen to Your Requirements</h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('contact-us') }}" class="promiseBtn">Estimate Project <i class="fa fa-chevron-right"></i></a>
                        </div>
                  </div>
            </div>
      </div>


@endsection