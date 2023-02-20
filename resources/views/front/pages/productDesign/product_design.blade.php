@extends('front.layouts.app')
@section('title', "Product design services")
@section('meta_keywords', "product design")
@section('meta_description', "The definition of product design describes the process of imagining, creating, products that solve users' problems or specific needs. Our product design services create experiences.")


@section('content') 
<section class="hero-card-web-2 bg-service-banner">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                  <div class="col-lg-7 col-12 text-lg-left text-center">
                        <h1 class="">Product Design</h1>
                        <p>Our designers utilize their mastery to make products that are aesthetically pleasing, yet in addition functional and easy to understand.</p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 get-start-btn wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
                  <div class="col-lg-5 col-12 mt-4">
                        <img src="{{ asset('assets/images/banner/service-page-header-mobile.png') }}">
                  </div>
            </div>
         </div>
      </div>
</section>
<section class="request-quote-card">
      <style>
            .request-quote-card-body .error{
                  color:red;
            }
            .nav-bg-b .custom-nav .nav-list li a.menu-links{
                  color:#000;
            }
            .mtSM30{
                  margin-top:30px;
            }
            @media screen and (max-width: 767px) {
            .mtSM30{
                  margin-top:0px;
            }
            }
      </style>
      <div class="container">
            <div class="col-lg-12">
                  <div class="textCard">
                     <h5>Request A Quote</h5>
                  </div>
            </div>
            <div class="request-quote-card-body">
                  <form id="RequestQuoteForm" action="javascript:void(0)" method="post">
                  @csrf
                  <div class="row">
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Name:</label>
                              <input type="text" class="form-control"  id="name" name="name" placeholder="Enter Name">
                        </div>
                        </div>
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Email:</label>
                              <input type="email" class="form-control"  id="email" name="email" placeholder="Enter Email Address">
                        </div>
                        </div>
                        <div class="col-lg-3 col-12">
                        <div class="form-group">
                              <label for="exampleInputName">Message:</label>
                              <input type="text" class="form-control" id="message" name="message" placeholder="Description">
                        </div>
                        </div>
                        <div class="col-lg-3 col-12 mtSM30">
                              <button type="submit" class="btn">SUBMIT</button>
                        </div>
                  </div>
                  </form>
            </div>
      </div>
</section>
<section class="service-content-body">
    <div class="container pb-5">
      <div class="row">
      <div class="col-lg-7 col-12mt-5">
          <div class="comman-service-heading">
             <h1>We Make Your <br><span class="textRed fontWt50">Dreams</span> <span class="textPrim fontWt50">Come True</span></h1>
             <p>We have our own product design strategies to ensure that we are designing products that customers will adore. At the point when we start a project, every item needs a methodology before it goes into improvement. We really want to understand what it will do, how it will look and function, who will use it, and what its necessities are. When we comprehend these components, then, at that point, we can continue on and make ideas that tackle issues in astute ways.</p>
             <p>Our developers work as a group so they can guarantee nothing is overlooked or left out. We achieve both useful and appealing designs through this approach. Designing products should be tailored to our clients' needs. It doesn't matter whether you're working with us on one product or 100 products, we will always provide a fantastic experience</p>
          </div>
      </div>
      <div class="col-lg-5 col-12 text-center mt-5">
            <img src="{{ asset('assets/services/ui-vactor.svg') }}">
      </div>
      </div>
   </div>

   <div class="bgRed BgRedcardHeight py-5 mt-4">
      <div class="rounded-circle-comm top-rounded-circle"></div>
      <div class="container">
      <div class="comman-service-heading text-center">
             <h1 class="text-center fontWt40 text-white">How Do We Achieve <span class="fontWt50">Our Goal</span> ?</h1>
             <p class="text-white">In order to make products that people love, we must focus on our customers and what they need. Focusing on your user will help you in terms of both design decisions and functional decisions.</p>
      </div>  
      </div>
      <div class="rounded-circle-comm bottom-rounded-circle"></div>
   </div>
</section>
      <div class="container on-card-tab">
            <div class="row justify-content-center">
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <img src="{{ asset('assets/services/marketing-research.svg') }}">
                              </div>
                              <h5>Market Research & Development</h5>
                              <p>
                              In order to develop a successful product, we must first learn everything we can about your product and your target market. We want to know who you’re designing for, what they need, and how they use their products. In some cases, we may even conduct focus groups or surveys with your potential customers to get a sense of what they’re looking for in a new product.
                              </p>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <img src="{{ asset('assets/services/conpet.svg') }}">
                              </div>
                              <h5>Create a Solid Concept</h5>
                              <p>The second stage of any project is establishing a solid concept, which comes in many forms. Whether it’s a written brief or verbal discussion with your client, you want to be on the same page from day one. This will also allow you to get an idea of what your clients are looking for and what their true needs and wants are. We always set up meetings with our clients early on so we can start creating meaningful concepts together as quickly as possible.</p>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <img src="{{ asset('assets/services/prototype.svg') }}">
                              </div>
                              <h5>Taking the Prototype into Production</h5>
                              <p>The third step is to take a prototype into production. Once we have a working prototype, then we can move on to making our product in bulk and delivering it to customers. We’ll take your prototype and create a fully functional, optimized version. Your website or application will be ready to launch, without being changed or butchered by a programmer, with all features working perfectly.</p>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <img src="{{ asset('assets/services/feedback.svg') }}">
                              </div>
                              <h5>Getting Feedback From Your Customers</h5>
                              <p>Whether you have a product idea or a need for assistance, our product designers are ready to help. Using your feedback, we'll create a prototype and then send it to your customers. This process will ensure that your product solves real problems and will be something people love using.</p>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <img src="{{ asset('assets/services/feedback-hand.svg') }}">
                              </div>
                              <h5>Feedforward to Final Product</h5>
                              <p>Feedback from customers and users is very important to design a product. We get feedback from our customers so we can make the final product better.</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="hiredevlopercard py-5 text-center">
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
      <div class="bgYellow py-5 bottomUp">
            <div class="container">
                  <div class="col-lg-12 text-center">
                        <h1 class="service_heading_text">Our Areas of Specialization</h1>
                  </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-4 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                          <h5><span><img src="{{ asset('assets/services/ui-ux-icon.svg') }}"> </span> UI/UX Design</h5>
                                          <p>
                                          User Interface/User Experience <br>(UI/UX) design services are a <br> vital component of a company’s <br> success in an... <a href="{{ url('product-design/ui-ux-design') }}" class="readMoreService">Read More</a>
                                          </p>
                                    </div>
                              </div>
                              <div class="col-lg-4 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                          <h5><span><img src="{{ asset('assets/services/app-icon.svg') }}"> </span> App Design</h5>
                                          <p>
                                          A lot of companies make their <br> app to match specific products <br> and services, and it’s something <br> we really don’t... <a href="{{ url('product-design/app-design') }}" class="readMoreService">Read More</a>
                                          </p>
                                    </div>
                              </div>
                              <div class="col-lg-4 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                          <h5><span><img src="{{ asset('assets/services/web-icon.svg') }}"> </span> Web Design</h5>
                                          <p>
                                          An effective web presence <br> requires good web design. <br> Whether you need a mobile, <br> desktop, or tablet ...<a href="{{ url('product-design/web-design') }}" class="readMoreService">Read More</a>
                                          </p>
                                    </div>
                              </div>
                        </div>
                        <div class="mt70">
                              <div class="row">
                                    <div class="col-lg-4 col-12">
                                          <img class="img-fluid" src="{{ asset('assets/services/ui-ux-icon_full.svg') }}">
                                    </div>   
                                    <div class="col-lg-8 col-12">
                                          <h3 class="heading_medium">How Can The Best Product Enable You to be a Market Leader?</h3>
                                          <p>Ultimately, you want a product that solves your customer’s problems and helps you stand out from your competitors. This is why it’s so important to ensure that you’re designing an optimal user experience (UX) and user interface (UI). UX/UI designers are experts in visual and interaction designers who are responsible for making sure a product or app looks as good as it works. From mobile apps to websites, their designs create rich, engaging experiences for customers and users alike.</p>
                                          <ul class="customList">
                                                <li>
                                                      Enhances Your Customer’s Satisfaction Rate
                                                </li>
                                                <li>
                                                      Increases Market Share
                                                </li>
                                                <li>
                                                      Offers Best Customers Services
                                                </li>
                                                <li>
                                                      Real-time Customer Support
                                                </li>
                                                <li>
                                                      Manage Your User Data Efficiently
                                                </li>
                                          </ul>
                                    </div>   
                              </div>
                        </div>
            </div>
      </div>
      <div class="bottomUp40 text-center">
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
            <div class="col-lg-10 col-12 text-center ml-auto mr-auto">
                  <h3 class=""> Why <span class="fontWt50 textRed">Prilient</span> is<br> Most Suited For Your <span class="fontWt50 textPrim">Product Design</span>?</h3>
                  <p>Prilient’s product design services ensure that you get exactly what you need to make your project a success.</p>
            </div>
            <div class="col-lg-10 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/callander.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>1. On-time Delivery</h5> 
                                         <p>We are proud of our commitment to on-time delivery. We have an extensive network in multiple locations, meaning that we can get your product to you quickly and efficiently.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/collbrative.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>2. Collaborative Work Culture</h5> 
                                         <p>Collaboration is the key to success for companies in today's competitive environment. The collaborative work culture has been around for some time now. It is a work culture that promotes collaboration and teamwork among employees.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/goal.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>3. Goal-Oriented Team</h5> 
                                         <p>Our goal is to help companies build great digital products with the help of our team of product designers. Our team is focused on the user experience and our main goal is to make sure that the product we design is intuitive and easy to use.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/customer.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>4. 24/7 Customer Assistance</h5> 
                                         <p>For any questions or concerns, you may have, our customer support team is available 24/7. In the event of a technical issue, we are available to take your call and help solve the problem as soon as possible.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/chatboat.svg')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>5. Chatbot Facility</h5> 
                                         <p>It is a great way to interact with our customers and provide them with the best possible customer service. The live chat facility allows us to have a conversation with you in real-time.</p>   
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


  <!-- content end -->
@endsection