@extends('front.layouts.app')
@section('title', "Web design services")
@section('meta_keywords', "Web design services")
@section('meta_description', "A web design service provides you with a customized website included the design, programming, and development of a website that's perfect for business or personal website")

@section('link')
@if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/product-design/web-design" />
@else  
      <link rel="canonical" href="https://prilient.com/product-design/web-design" />
@endif
@stop

@section('content') 
<section class="hero-card-web-2 bg-service-banner">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                  <div class="col-lg-6 col-12 text-lg-left text-center">
                        <h1 class="">Web Designing</h1>
                        <p>Design Workshop / Custom Website Design
/ Responsive Website Design / Usability Testing</p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 get-start-btn wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                        <img alt="globe" src="{{ asset('public/assets/images/banner/globe.png') }}">
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
            <img alt="business" src="{{ asset('public/assets/services/business.svg') }}">
      </div>
      <div class="col-lg-7 col-12 mt-5">
          <div class="comman-service-heading">
             <h2>DESIGN YOUR<br> <span class="textRed fontWt50 sh1">Business Website</span> <span class=" fontWt50">In <br>The <span class="textPrim fontWt50 sh1">Most Appealing</span> Way</span></h2>
             <p>We have our own product design strategies to ensure that we are designing products that customers will adore. At the point when we start a project, every item needs a methodology before it goes into improvement. We really want to understand what it will do, how it will look and function, who will use it, and what its necessities are. When we comprehend these components, then, at that point, we can continue on and make ideas that tackle issues in astute ways.</p>
             <p>Our developers work as a group so they can guarantee nothing is overlooked or left out. We achieve both useful and appealing designs through this approach. Designing products should be tailored to our clients' needs. It doesn't matter whether you're working with us on one product or 100 products, we will always provide a fantastic experience</p>
          </div>
      </div>
      </div>
   </div>

   <div class="bgYellow BgRedcardHeight py-5 mt-4">
      <div class="container">
      <div class="comman-service-heading text-center">
             <h2 class="text-center fontWt40">The <span class="fontWt50">Methodology</span> and <span class="fontWt50">Process</span> <br><span class="fontWt50 textBgcolor">We Follow</span></h2>
             <p class="">There are a lot of things that go into a web design, and even more that need to be considered when doing it <br>for clients. Here are just some of them:</p>
      </div>  
      </div>
   </div>
</section>
      <div class="container on-card-tab-2">
            <div class="row justify-content-center">
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img alt="web design vactor 1" src="{{ asset('public/assets/services/web_design-vactor-1.png') }}">
                                </div>
                                </div>
                                <h5>Determining The Goals Of The Website</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">
                                Before designing a website, we need to determine your goals and objectives. Our experienced team of web designers will help you to design a website that fits your business needs. We can also help you with SEO (Search Engine Optimization) for getting higher rankings in search engines like Google, Yahoo, Bing etc.
                                </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img alt="Identifying" src="{{ asset('public/assets/services/Layer_1.png') }}">
                                </div>
                                </div>
                                <h5>Identifying The Need Of Business</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Through interaction with our customers and other relevant people, we try to identify whether there is a genuine need for a new website or not. If yes, then what kind of features it should have? What will be its purpose? These are some questions that help us in deciding how we can help them achieve their business goals through a new website.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img alt="Designing" src="{{ asset('public/assets/services/Layer_2.png') }}">
                                </div>
                                </div>
                                <h5>Designing That Meets Your Requirement</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">We know that there are many options out there when it comes to choosing a designer for your next project, so we want to show you why our designers are better than all of them.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img alt="Final Testing" src="{{ asset('public/assets/services/Layer_3.png') }}">
                                </div>
                                </div>
                                <h5>Final Testing</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">After your website is up and running, you will need to go through a final testing phase where you can check for any errors or problems. Now Your Site Should Be Live!</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img alt="Launch" src="{{ asset('public/assets/services/Layer_4.png') }}">
                                </div>
                                </div>
                                <h5>Launch</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Once you’ve completed your website, we can help you launch it. Getting traffic to your site is key to creating an effective business – and that’s where we come in.</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="hiredevlopercard py-5 text-center mt-4">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="text-white mb-0">Hire a <span class="fontWt50">Dedicated Developer</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('dedicated-developer') }}" class="hire-butn">Hire Now <i class="fa fa-chevron-right fa-ani"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="">
            <div class="container">
                  <div class="col-lg-12 text-center">
                      <span class="bg-service-text-heading">Services We Offered in </span><span class="textPrim txt-heading">Web Designing</span>
                  </div>
                              <div class="col-lg-12 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white p-0">
                                      <div class="custom-row">
                                      <div class="custom-w18 p-3">
                                        <div class="image-bg-crd bg-prim">
                                          <img alt="UI/UX Design" src="{{ asset('public/assets/services/Group58.png') }}">
                                        </div>
                                      </div>
                                        <div class="custom-w76 p-3">
                                          <h5 class="text-dark">UI/UX Design</h5>
                                          <p>User experience (UX) and user interface (UI) are two of several types of design that can make or break a product or service. Our UI/UX designers help you create digital products, services, and experiences that are intuitive, easy to use, and aesthetically pleasing for your customers. In order to showcase how your UX and UI services are tailored to particular business models, use our examples.</p>
                                        </div>
                                          <div class="custom-w6 bg-prim">
                                            <span>&#x2022;</span>
                                          </div>
                                      </div>
                                    </div>
                              </div>
                              <div class="col-lg-12 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white p-0">
                                      <div class="custom-row">
                                      <div class="custom-w18 p-3">
                                        <div class="image-bg-crd bg-dng">
                                          <img alt="Responsive Web Design" src="{{ asset('public/assets/services/Group59.png') }}">
                                        </div>
                                      </div>
                                        <div class="custom-w76 p-3">
                                          <h5 class="text-dark">Responsive Web Design</h5>
                                          <p>It is becoming increasingly important for companies to build a website that displays correctly on all devices. By making your site responsive, you are showing your potential customers that you care about their experience and will work hard to ensure they can find what they need quickly and easily on any device.</p>
                                        </div>
                                          <div class="custom-w6 bg-dng">
                                            <div>
                                            <span>&#x2022;</span>
                                            <span class="">&#x2022;</span>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                              </div>

                              <div class="col-lg-12 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white p-0">
                                      <div class="custom-row">
                                      <div class="custom-w18 p-3">
                                        <div class="image-bg-crd bg-prim">
                                          <img alt="Custom Website Design" src="{{ asset('public/assets/services/Group60.png') }}">
                                        </div>
                                      </div>
                                        <div class="custom-w76 p-3">
                                          <h5 class="text-dark">Custom Website Design</h5>
                                          <p>You'll get a custom-designed website that's tailored to your business's needs with our custom web design services. All designs are hand-coded to ensure quality and fast loading times. This allows us to provide you with a seamless, satisfying user experience on all devices, including desktops, tablets, and mobile phones.</p>
                                        </div>
                                          <div class="custom-w6 bg-prim">
                                            <span>&#x2022;</span>
                                          </div>
                                      </div>
                                    </div>
                              </div>
                              <div class="col-lg-12 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white p-0">
                                      <div class="custom-row">
                                      <div class="custom-w18 p-3">
                                        <div class="image-bg-crd bg-dng">
                                          <img alt="Usability Testing" src="{{ asset('public/assets/services/Group61.png') }}">
                                        </div>
                                      </div>
                                        <div class="custom-w76 p-3">
                                          <h5 class="text-dark">Usability Testing</h5>
                                          <p>Usability testing can help uncover opportunities to improve your website’s interface for your target audience. Whether you are looking to improve conversion on a key page, or simply want to gather feedback from users, usability testing is an essential part of website optimization. Our UX Design Services are backed by over 15 years of experience in usability design.</p>
                                        </div>
                                          <div class="custom-w6 bg-dng">
                                            <span>&#x2022;</span>
                                          </div>
                                      </div>
                                    </div>
                              </div>




</div>
      <div class="bottomUp40 mt140 text-center">
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
      <div class="bg-prim BgBLuecardHeight py-5 mt-4">
      <!-- <div class="rounded-circle-comm top-rounded-circle"></div> -->
      <div class="container">
      <div class="comman-service-heading text-center">
             <h2 class="text-center fontWt40 text-white">Why Do you Need a Website For Your Business?</h2>
      </div>  
      </div>
      <!-- <div class="rounded-circle-comm bottom-rounded-circle"></div> -->
   </div>
   <div class="container on-card-tab">
            <div class="row justify-content-center">
                  <div class="col-lg-6 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <h5 class="textRed">Build Trustworthiness and Credibility</h5>
                              <p>If your goal is to build your credibility and create trust with potential customers, then having a well-designed website will definitely help you achieve these goals. When people visit your site, they’ll be able to get a good idea of what you offer based on how professional it looks.</p>
                        </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <h5 class="textRed">Ease of Doing Business</h5>
                              <p>The website helps in doing business by providing information about your company and products to your customers. It also provides a platform for interaction between you and your customers. Besides serving as a means of communication, a website can also serve as a marketing and advertising tool.</p>
                        </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <h5 class="textRed">Get Better Business Analytics</h5>
                              <p>Web designing plays a vital role in any business and especially in those that deal with online marketing. The application helps you collect all the crucial information about your customers, such as their names, their email addresses, their phone numbers, where they live, etc.</p>
                        </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <h5 class="textRed">Keep track of Your Customer's Behaviour</h5>
                              <p>Understanding how your customers use your services can be easy with the help of a website. Marketing campaigns can be more effective when you know more about their behavior.</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="container py-5 footerCard">
            <div class="col-lg-10 col-12 text-center ml-auto mr-auto">
                  <h3 class="">Key Benefits of <br> <span class="bg-service-text-heading">Designing Your Website with Prilient</span></h3>
            </div>
            <div class="col-lg-11 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Transparency" src="{{ asset('public/assets/services/Group65.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Get 100% Transparency</h5> 
                                         <p>At Prilient, we stand by our work and offer transparency throughout each step of your project. If you see an opportunity to save on time or money, we can do that for you without ever sacrificing quality. You will feel confident about every decision made in your project’s execution because our team is committed to integrity. We are always honest about what can be done when it will be done, and how much it will cost—we do not believe in keeping anyone in the dark.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Industry Leader" src="{{ asset('public/assets/services/Group66.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Industry Leader</h5> 
                                         <p>We are an industry leader in web design. If you are looking for experts who understand your business and how to create an effective and attractive website, you’ve come to the right place.  Creating a successful online presence is our team's commitment.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Tools & Technology" src="{{ asset('public/assets/services/Group67.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Use Latest Tools & Technology</h5> 
                                         <p>Using HTML5, CSS3, and Responsive Layout, we create responsive websites that work across devices. Whether you need a simple brochure site or an advanced e-commerce website, our team of designers will ensure that it is compatible with all popular browsers & search engines.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Plans" src="{{ asset('public/assets/services/Group68.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Most Affordable Plans</h5> 
                                         <p>Don’t confuse affordable with cheap! The services offered by Affordable Web Solutions are of high quality, and they won’t cost you an arm and a leg.  Our team has years of experience in web design and development, so we know how to offer professional-grade results at a price that suits your budget.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Customer Support" src="{{ asset('public/assets/services/Group69.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>24/7 Customer Support</h5> 
                                         <p>Live chat, email, and phone support are available to our clients 24 hours a day. Any question or problem you may have can be answered by our expert team of designers.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
            </div>
      </div>

</div>
      <div class="pb-5 text-center " style="position:relative;bottom: 110px;">
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
      <style type="text/css">
        footer{
          position: relative;
          bottom: 100px;
        }
      </style>
@endsection