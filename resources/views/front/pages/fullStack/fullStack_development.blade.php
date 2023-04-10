@extends('front.layouts.app')
@section('title', "Full-stack Development Services")
@section('meta_keywords', "Full-stack Development Services")
@section('meta_description', "Full stack developers have comprehensive knowledge about the front and back end web development process. This means that these developers contribute on both server-side")


<style type="text/css">
  .web-development-bg{
  background: url('{{ asset('assets/images/banner/bg-gray.png') }}') 0 0 / cover;
}
.web-development-bg2{
  background: url('{{ asset('assets/images/banner/web-development-bg.png') }}') 0 0 / cover;
}
.fontWt30{
  font-weight: 400 !important;
}
.common-color-heading{
  background: linear-gradient(90.21deg, #024A99 13.01%, #E43C5C 65.38%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 30px;
}
.request-quote-card-body{
border-radius: 36px 36px 0px 0px; 
}
.iconCircle{
  padding: 12px!important;
}
</style>

@section('content') 
<section class="hero-card-web-2 web-development-bg web-development-bg2">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                  <div class="col-lg-7 col-12 text-lg-left text-center mb-5">
                        <h1 class="fontWt30"><span class="fontWt50 common-color-heading">FULL-STACK DEVELOPMENT</span>  SERVICES</h1>
                        <p class="mt-3">It is easy to become overwhelmed by your obligations when beginning a business. We can assist you with dealing with your group and make a framework that upgrades productivity as far as conveying great items and administrations.</p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 get-start-btn wow fadeIn">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
                  <div class="col-lg-5 col-12 mt-4 mb-5">
                        
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
            <img src="{{ asset('assets/services/Group170.svg') }}">
      </div>
      <div class="col-lg-7 col-12 mt-5">
          <div class="comman-service-heading">
            <h2>Employ <span class="textRed fontWt50">Full-stack</span> <span class="textPrim fontWt50">Development</span> Services</h2>
             <p>Full-stack development services are dependably vital if you have any desire to capitalize on your investment and guarantee that your item will be acknowledged on the lookout. By employing our full-stack development team, you can anticipate that far-reaching item that allure should a worldwide crowd and will develop with your necessities as your business develops and extends. We have been creating web applications starting around 2007, and we are specialists in all parts of current innovation, from code to plan to content creation.</p>
             <p>We can build your entire application for you, from the back-end software to the front-end user interface, giving you access to a service that includes everything from design services to full project management and testing. With our stack development services, your product will be completely ready to launch within hours or days of your request!</p>
          </div>
      </div>
      </div>
   </div>
 </section>
   <div class="hiredevlopercard py-5 text-center" style="bottom: 0px">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="text-white mb-0">Hire a <span class="fontWt50">Full-Stack Developer</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('dedicated-developer') }}" class="hire-butn">Hire Now <i class="fa fa-chevron-right fa-ani"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="bgYellow py-5 bottomUp" style="position:unset;">
            <div class="container">
                  <div class="col-lg-9 col-12 text-center">
                        <h1 class="service_heading_text" style="line-height: 58px;">Our Full-stack Development<br> Services</h1>
                  </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img src="{{ asset('assets/services/Group171.svg') }}">
                                         </div>
                                         <div>
                                           <h5>MEAN Stack Development</h5>
                                          <p>
                                              MEAN (MongoDB, Express.js, AngularJS, and Node.js) is a full-stack JavaScript solution that enables single,... <a href="{{ url('fullStack_development/MEAN-stack-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5  offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img src="{{ asset('assets/services/Group172.svg') }}">
                                         </div>
                                         <div>
                                           <h5>MERN Stack Development</h5>
                                          <p>
                                              MEAN (MongoDB, Express.js, AngularJS, and Node.js) is a full-stack JavaScript solution that enables single ... <a href="{{ url('fullStack_development/MERN-stack-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
            </div>
      </div>
       <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-12 text-center mt-3">
                        <h1 class="service_heading_text" style="line-height: 58px;">Benefits of getting Blockchain<br> Development Service</h1>
              </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img src="{{ asset('assets/services/Group93.png') }}">
                                </div>
                                </div>
                                <h5>API Integration</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">
                              With the increasing popularity of mobile devices and apps, we are seeing an increasing number of companies building mobile applications that make use of third-party APIs. Our API Integration Services allow you to connect your application to any number of such services. is one of our key areas of expertise, with over 200+ live integrations across multiple industries.
                                </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img src="{{ asset('assets/services/Group94.png') }}">
                                </div>
                                </div>
                                <h5>Data Management</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Our team of data management experts can work with you to create a custom database solution. With over ten years of experience working with relational and non-relational databases, including PostgreSQL, MySQL, and MongoDB, we know which approaches work for different applications. If you are looking for expert Data Management services, then get in touch with us today!</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img src="{{ asset('assets/services/Group95.png') }}">
                                </div>
                                </div>
                                <h5>Quality Analysis</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">In order to ensure that our solutions are working as intended, we offer quality analysis services for all of our projects. Our team will perform a thorough audit of your project to make sure it’s functioning correctly and effectively. Even if you are having trouble with your website or application, we can assist you. It is a great way to identify problems before they become more serious.</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
     <section class="pt-5">
       <div class="container">
                              <div class="row">
                                    <div class="col-lg-5 col-12">
                                          <img class="img-fluid" src="{{ asset('assets/services/Group173.svg') }}">
                                    </div>   
                                    <div class="col-lg-7 col-12">
                                          <h3 class="fontWt50">Why does <span class="textRed fontWt70">Full Stack Services</span> matter?</h3>
                                          <p>Full Stack Services help businesses grow by providing a number of advantages over other development companies. By offering Full Stack Services, you can be your client’s single point of contact, which increases their peace of mind, as they know that all their technology needs are being taken care of in one place. Our expert Full Stack developers and project managers will work with you to get a strong vision and strategy down so that we can provide reliable solutions for your business needs.</p>
                                          <ul class="customList">
                                                <li>
                                                      Save Your Time
                                                </li>
                                                <li>
                                                      Cost Saving
                                                </li>
                                                <li>
                                                      High-Quality Workflow
                                                </li>
                                                <li>
                                                      Dedicated Professionals
                                                </li>
                                                <li>
                                                      Scalability and Easy to Upgrade
                                                </li>
                                          </ul>
                                    </div>   
                              </div>
                        </div>
     </section>
      <div class="text-center py-5">
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
              <h2>What makes Prilient<br> <span class="fontWt70 common-color-heading">Full Stack Services unique?</span></h2>
            </div>
            <div class="col-lg-11 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/Group81.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>An extremely goal-oriented team</h5> 
                                         <p>Blockchain developers are hard to find. There’s such a high demand for them, companies can afford to be picky. This isn’t true of most other tech jobs. If you want an iOS developer, for example, there are tons of companies who need your skills—they just need you to make your phone work on their network. Blockchain development, on the other hand, is complex and risky; it requires specific expertise, and that means you have options when it comes to hiring a company.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/Group82.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>One-Stop Solution For Development Services</h5> 
                                         <p>At Prilient, we offer full transparency. From showing you our work to giving you access to it via Call, skype, FTP or Git, you know what’s going on at all times. You can even see who’s working on your project and when they started. And if you have any questions about your project, just ask! We’re here to help.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/Group83.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Time Punctuality</h5> 
                                         <p>We have solved high money charge problem by bringing in a team of highly experienced and talented blockchain developers at a fraction of the cost. Our employees are here to stay, not to fill up our books or pocket your money. We deliver high-quality products every time at an affordable price, so you’ll never have to look elsewhere.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{asset('assets/services/Group23.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>24/7 Highly Dedicated Customer Support</h5> 
                                         <p>When you work with Prilient, our team will have your back. We pride ourselves on providing superior customer service that keeps you informed and updated at every step of your project. Our customer support channels are open to all clients 24/7, and we’re here to answer any questions you may have about custom development services.</p>   
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
