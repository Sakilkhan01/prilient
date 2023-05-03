@extends('front.layouts.app')


@section('link')  
@if (Session::has('ifWww'))
@section('meta_description', "We are Indian firm that continues to move forward in the development of IT solutions for mobile,web,desktop,Server Management,DevOps,Security,Game Development.")      
      <link rel="canonical" href="https://www.prilient.com/" />
@else       
      <link rel="canonical" href="https://prilient.com/" />
@endif
@stop

@section('content') 
      <section class="hero-card-web bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div class="col-lg-5">
                  <div class="hero-heading-sec hero-heading-sec-cus">
                     <div>
                        <h2 class="wow fadeIn name-text" data-wow-delay="0.3s"><span>IT Support-IT Solution</span> 
                      <span>Prilient Technologies</span></h2>
                     <p class="wow fadeIn" data-wow-delay="0.6s">Leading company in providing smart business solutions for transforming and innovating businesses</p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="hero-right-scmm">
                     <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                           <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('app_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img loading="lazy" alt="mobile app development" src="{{ url('public/assets/images/service/mobile app development.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Mobile App</span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('web_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img  loading="lazy" alt="Web develop" src="{{ url('public/assets/images/service/Web-develop.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Web </span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('/DevOps') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img  loading="lazy" alt="DevOps" src="{{ url('public/assets/images/service/DevOps.png') }}">
                                    </div>
                                    <div class="title-serv-c" style="padding-bottom: 60px;"><span></span>DevOps</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('blockchain_development') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img  loading="lazy" alt="blockchain" src="{{ url('public/assets/images/service/blockchain.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Blockchain </span> Development</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                              <a href="{{ url('cyber_security') }}">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img  loading="lazy" alt="Cyber security" src="{{ url('public/assets/images/service/Cyber security.png') }}">
                                    </div>
                                    <div class="title-serv-c"><span>Cyber </span> Security</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-sec-rpb pad-tb">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-lg-10">
                  <div class="common-heading">
                     <span>We Are Specialist</span>
                     <h1 class="mb30"><span class="text-second">Most Trusted</span> Mobile Applications and Website Development Company in India</h1>
                     <p><span class="text-bold">Prilient</span> is widely known for it's <span class="text-radius text-light text-animation bg-b">Website & Mobile Application Development</span>solutions globally. Our team of experienced backend and frontend developers makes every solution user friendly and also google friendly. 
                     </p>
                     <h3 class="mt30 mb30">Ideas, Creativity and Trending Technologies</h3>
                   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="service-section-prb pad-tb">
         <div class="container">
            <div class="row upset">
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".2s">
                  <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                     <h4 class="mb10">OUR SERVICES</h4>
                     <p>We continues to move forward by specialising in the development of custom IT solutions for mobile, web, desktop, Server Management, DevOps, Security, Game Development.</p>
                   </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".4s">
                  <div class="service-sec-list srvc-bg-nx srcl1">
                     <img  loading="lazy" alt="Web development" src="{{ url('public/assets/images/icons/Web development.svg') }}">
                     <h5 class="mb10">Web Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#"><strong>.</strong>Net</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">HTML & CSS</a></li>
                     </ul>
                     <p>Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses and social network services.</p>
                  </div>
               </div>
               <div data-tilt data-tilt-max="3" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".6s">
                  <div class="service-sec-list srvc-bg-nx srcl2">
                     <img  loading="lazy" alt="Cyber Security" src="{{ url('public/assets/images/icons/Cyber Security.svg') }}">
                     <h5 class="mb10">Cyber Security</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Penetration Testing </a> </li>
                        <li> <a href="#">Virtual CISO</a> </li>
                  
                     </ul>
                     <p>Cyber security provides Information Security Strategy and Design to give you better security.Cyber security provides a secure foundation to transform enterprise and support business.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay=".8s">
                  <div class="service-sec-list srvc-bg-nx srcl3">
                     <img  loading="lazy" alt="Mobile App" src="{{ url('public/assets/images/icons/Mobile App.svg') }}">
                     <h5 class="mb10">Mobile App Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">iOs </a> </li>
                        <li> <a href="#">Android</a> </li>
                        <li> <a href="#">Wear OS </a></li>
                     </ul>
                     <p>Mobile App Development is the process by which a mobile app is developed for mobile devices. The applications can be pre-installed on phones during the manufacturing process using server side..</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay="1s">
                  <div class="service-sec-list srvc-bg-nx srcl4">
                     <img  loading="lazy" alt="Blockchain" src="{{ url('public/assets/images/icons/Blockchain.svg') }}">
                     <h5 class="mb10">Blockchain Development</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Digital Currency </a> </li>
                        <li> <a href="#">IOT </a> </li>
                        <li> <a href="#"> Banking </a></li>
                     </ul>
                     <p>Blockchain is a distributed ledger technology where data exchange happens. Blockchain enables exchange of values to precede any transaction. Blockchain supports a wide range of application which is well known as cryptocurrency like Bitcoins.</p>
                  </div>
               </div>
               <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp" data-wow-delay="1.2s">
                  <div class="service-sec-list srvc-bg-nx srcl5">
                     <img  loading="lazy" src="{{ url('public/assets/images/icons/DevOps.svg') }}" alt="DevOps">
                     <h5 class="mb10">DevOps</h5>
                     <ul class="-service-list">
                        <li> <a href="#">Development </a> </li>
                        <li> <a href="#">Testing</a> </li>
                        <li> <a href="#">Integration </a></li>
                        <li> <a href="#">Delivery</a></li>
                     </ul>
                     <p>DevOps brings business, development and operation teams together and apply automated processes streamline IT. We make it possible to merge your code changes into a central repository.</p>
                  </div>
               </div>
            </div>
            <div class="-cta-btn mt70">
               <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
                  <p>Hire a <span>Dedicated Developer</span></p>
                  <a href="{{ url('dedicated-developer') }}" class="btn-main bg-btn2 lnk">Hire Now<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </section>
      <div class="statistics-section bg-gradient6 pad-tb tilt3d">
         <div class="container">
            <div class="row justify-content-center t-ctr">
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img  loading="lazy" src="{{ url('public/assets/images/icons/startup.svg') }}" alt="startup" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">3</span><span>+</span>
                        <p>Year In Business</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img  loading="lazy" src="{{ url('public/assets/images/icons/team.svg') }}" alt="team" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">40</span><span>+</span>
                        <p>Team Members</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row small t-ctr">
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img  loading="lazy" src="{{ url('public/assets/images/icons/deal.svg') }}" alt="deal" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">50</span><span>+</span>
                        <p>Happy Clients</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img  loading="lazy" src="{{ url('public/assets/images/icons/computers.svg') }}" alt="computers" class="img-fluid" />
                     </div>
                     <div class="statnumb counter-number">
                        <span class="counter">60</span><span>+</span>
                        <p>Projects Done</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="statistics mb0">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img  loading="lazy" src="{{ url('public/assets/images/icons/customer-service.svg') }}" alt="customer service" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">24</span><span>/</span><span class="counter">7</span>
                        <p>Support Available</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="why-choos-lg pad-tb deep-dark">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="common-heading text-l">
                     <span>Why Choose Us</span>
                     <h2 class="mb20">Why <span class="text-second text-bold">Prilient Technologies</span> Ranked Top Among The Leading Web & App Development Companies</h2>
                     <p>Prilient is a well-established and best web development company that is eager to collaborate with you</p>
                     <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img  loading="lazy" src="{{ url('public/assets/images/icons/computers.svg') }}" alt="computers icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Web & Interactive Design</h4>
                              <p>Our team collaborates closely with clients to design, implement, and utilise solutions that help your company prosper in this fast-changing and demanding world.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img  loading="lazy" src="{{ url('public/assets/images/icons/worker.svg') }}" alt="worker icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Branding & Strategy</h4>
                              <p>Prilient Technologies has expertise in web design, custom software development, web development, mobile app development, e-commerce website development, SEO, Social media optimization (SMO) & many more.</p>
                           </div>
                        </div>
                        <div class="media mt40">
                           <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img  loading="lazy" src="{{ url('public/assets/images/icons/deal.svg') }}" alt="deal icon" class="layer"></div>
                           <div class="media-body">
                              <h4>Trusted Partner</h4>
                              <p>Hundreds of different brands, ranging from big public sector operations to governments, media houses, banks, private companies, universities, social organisations, startups, and many more, rely on us as their technological partner.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img  loading="lazy" src="{{ url('public/assets/images/about/about-company.jpg') }}" alt="about company" class="img-fluid"></div>
         
                  <div class="cta-card mt60 text-center">
                     <h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
                     <p>We are excited to initiate a new project with you.  Our team will be in touch soon, but if you have any questions before then, please feel free to contact us directly at [email protected] and we will get back to you as soon as possible. Thank you for your interest in our services!</p>
                     <a href="javascript:void(0)"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="niwax-btn1 mt30"><span>Request A Quote <i class="fa fa-chevron-right fa-icon"></i></span></a>
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <section class="clients-section- bg-gradient15 pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our Clients</span>
                     <h2 class="mb30">Our Hard Clients</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="clients-logos text-center col-12">

                     @if(!$client->isEmpty())
                     <div class="container mt-5 pt-5">
                        <div class="banner_bootom_wrap">
                           <div class="middle_client">
                               <div class="owl-carousel career-slider">
                                 @foreach($client as $v)
                                <div class="service_card_slider">
                                   <img loading="lazy" alt="{{$v->name}}" src="{{ url('public/upload/client',$v->logo) }}">
                                </div>
                                @endforeach
                             </div>
                           </div>
                        </div>
                     </div>
                     @endif

                     <ul class="row text-center clearfix">
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="badges-section bg-gradient5  pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading w-tdxt">
                     <span>Our Technology</span>
                     <h2>Our Hard Technologies</h2>
                  </div>
               </div>
            </div>

            <div class="owl-carousel career-slider technology_slider">
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/azure.png') }}" alt="Azure">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/angular.png') }}" alt="Angular">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/cakephp.png') }}" alt="Cakephp">            
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/codeigniter.png') }}" alt="Codeigniter">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/django.png') }}" alt="Django">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/elasticsearch.png') }}" alt="Elasticsearch">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/flutter.png') }}" alt="Flutter">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/hyperledger.png') }}" alt="Hyperledger">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/laravel.png') }}" alt="Laravel">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/net.png') }}" alt=".net">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/node.png') }}" alt="Node">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/python.png') }}" alt="Python">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/react.png') }}" alt="React">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/vue.png') }}" alt="Vue">
                 </div>
                 <div class="item">
                    <img  loading="lazy" src="{{ url('public/assets/images/about/Java-Logo.png') }}" alt="Java">
                 </div>

            </div>
            <div class="col-lg-12 col-12 text-center">
               <a href="{{ url('technologies') }}" class="niwax-btn1 mt30"><span>More <i class="fa fa-chevron-right fa-icon"></i></span>
            </a>
            </div>

            <div class="-cta-btn mt70">
               <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                  <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                  <a href="{{ url('contact-us') }}" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
               </div>
            </div>
         </div>
      </section>
      <section class="work-category pad-tb">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 v-center">
                  <div class="common-heading text-l">
                     <span>Industries we work for</span>
                     <h2>Helping Businesses in All Domains</h2>
                     <p>Protecting your company’s digital footprint can be a tall order. At Prilient, all of our services are designed with your business goals in mind, but we offer special expertise in eCommerce, health services, finance, and more. We prioritize assessing your business’s needs and providing solutions designed to keep your data secure while allowing you to do business with ease.</p>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="work-card-set">
                     <div  class="icon-set wow fadeIn" data-wow-delay=".2s">
                        <div class="work-card cd1">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-1.png') }}" alt="E-Commerce Development" /></div>
                           <p>E-Commerce Development</p>
                        </div>
                     </div>
                     <div  class="icon-set wow fadeIn" data-wow-delay=".4s">
                        <div class="work-card cd2">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-2.png') }}" alt="Enterprise Services" /></div>
                           <p>Enterprise Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                        <div class="work-card cd3">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-3.png') }}" alt="Educational Servces" /></div>
                           <p>Educational Servces
                           </p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                        <div class="work-card cd4">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-4.png') }}" alt="Health Services" /></div>
                           <p>Health Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-5.png') }}" alt="Banking & Finance" /></div>
                           <p>Banking & Finance</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-6.png') }}" alt="Hospitality Services" /></div>
                           <p>Hospitality Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-7.png') }}" alt="Digital Marketing" /></div>
                           <p>Digital Marketing</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-8.png') }}" alt="Tour and Travels" /></div>
                           <p>Tour and Travels</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-9.png') }}" alt="Entertainment & Videos" /></div>
                           <p>Entertainment & Videos</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-10.png') }}" alt="Event Planner Services" /></div>
                           <p>Event Planner Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                        <div class="work-card cd11">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-11.png') }}" alt="Real Estate Services" /></div>
                           <p>Real Estate Services</p>
                        </div>
                     </div>
                     <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                        <div class="work-card cd12">
                           <div class="icon-bg"><img  loading="lazy" src="{{ url('public/assets/images/icons/icon-12.png') }}" alt="Government Organisations" /></div>
                           <p>Government Organisations</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="testinomial-section bg-none pad-tb">
         <div class="container">
            <div class="row justify-content-center ">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>What our clients say about Prilient.</span>
                     <h2>Over 50+ Satisfied Clients and Growing</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="owl-carousel testimonial-card-a pl25">
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Working with Prilient has been a positive experience. They were able to respond to the project's quick requirements and changes by making themselves available for daily standups.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info v-center">
                                 <h5>Amanta R.</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Prilient has been a pleasure to work with and has consistently delivered on their promises. I hope to enroll myself with them in the coming future. It was a nice experience to share our work with this developer. It comes highly recommended. As usual, fantastic work. Fantastic Business Partners. It is the best software development company around.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Helsinki Braithwaite</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>It was a once-in-a-lifetime opportunity. This is a very professional group. Work of outstanding quality. Communication was excellent. We will surely continue to collaborate with this outstanding web development company on future projects.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Luiz Fernandez</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>A truly exceptional service provider. Available, prompt, and precise. Always willing to take charge and make things right. Count yourself lucky if you can acquire this group.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Mary Daniels</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>It's been a pleasure working with Prilient. They were really receptive to the adjustments. They thoroughly considered our needs and delivered on time and on budget! Working with Prilient was the greatest because they were available all through the project.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Shinzo Markel</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                    <div class="testimonial-card">
                        <div class="t-text">
                           <p>Prilient Infotech was always reliable in terms of resolving problems in a timely manner &amp; can be called the topmost custom software development company in town. They have a lot of experienced engineers and developers, and Shalini is a great manager who always gets our requirements right. We will engage them again for future projects without a doubt.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Mbola Smith</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Excellent communication and knowledgeble about the subjects devliverd on. Will use again and highly recommend.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Realestatefree</h5>
                                 <span class="d-flex"><img loading="lazy" class="icon-flat" alt="United States" src="{{ asset('public/images/united-states.png') }}"> <small class="pl-2">United States</small></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Exceptional customer service, a quick reaction time, and most importantly, a flexible answer to our needs. The job was done flawlessly and to  our  full satisfaction. We'd be delighted to work with Prilient again.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Pracmanag</h5>
                                 <span class="d-flex"><img  loading="lazy" class="icon-flat" alt="Switzerland" src="{{ asset('public/images/switzerland.png') }}"> <small class="pl-2">Switzerland</small></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Great to work with! Great communication and very professional. Great quality to work. Will hire again.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Levimoroney</h5>
                                 <span class="d-flex"><img  loading="lazy" class="icon-flat" alt="australia" src="{{ asset('public/images/australia.png') }}"> <small class="pl-2">Australia</small></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Excellent work.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Dublinweb</h5>
                                 <span class="d-flex"><img  loading="lazy" class="icon-flat" alt="Ireland" src="{{ asset('public/images/ireland.png') }}"> <small class="pl-2">Ireland</small></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial-card">
                        <div class="t-text">
                           <p>Best experience.</p>
                        </div>
                        <div class="client-thumbs mt30">
                           <div class="media v-center">
                              <div class="media-body user-info">
                                 <h5>Verdzercof</h5>
                                 <span class="d-flex"><img  loading="lazy" class="icon-flat" alt="United States" src="{{ asset('public/images/united-states.png') }}"> <small class="pl-2">United States</small></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            </div>
         </div>
      </section>
      <style type="text/css">
         .icon-flat{
            width: 20px !important;
         }
      </style>
      <section class="cta-area pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Let's work together</span>
                     <h2>We Love to Listen to Your Requirements</h2>
                     <a href="{{ url('contact-us') }}" class="btn-outline">Estimate Project <i class="fa fa-chevron-right fa-icon"></i></a>
                     <p class="cta-call">Or call us now <a href="tel:7976026086"><i class="fa fa-phone"></i> +91 7976026086</a></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-a1"><img  loading="lazy" alt="shape-3" src="{{ url('public/assets/images/shape/shape-3.svg') }}" alt="shape"></div>
         <div class="shape shape-a2"><img  loading="lazy" alt="shape-4" src="{{ url('public/assets/images/shape/shape-4.svg') }}" alt="shape"></div>
         <div class="shape shape-a3"><img  loading="lazy" alt="shape-13" src="{{ url('public/assets/images/shape/shape-13.svg') }}" alt="shape"></div>
         <div class="shape shape-a4"><img  loading="lazy" alt="shape-11" src="{{ url('public/assets/images/shape/shape-11.svg') }}" alt="shape"></div>
      </section>
      <section class="our-office pad-tb">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="common-heading">
                     <span>Our Locations</span>
                     <h2>Our Office</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img  loading="lazy" alt="newyork" src="{{ url('public/assets/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>New York (U.S.A.)</h4>
                        <p>{{ADDRESS_USA}}</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="tel:7976026086" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="mailto:ankit@prilient.com" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="skype:Ankit Ola?chat" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img  loading="lazy" alt="jaipur" src="{{ url('public/assets/images/location/jaipur.png') }}" alt="Jaipur" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Jaipur (Rajasthan, India)</h4>
                        <p>{{ADDRESS_INDIA}}</p>
                        <a href="https://www.google.com/maps/place/Prilient+Information+Technologies/@26.9110729,75.7409566,17z/data=!3m1!4b1!4m5!3m4!1s0x396db57fb715b991:0xc48c1dd3f8718fe5!8m2!3d26.9110681!4d75.7431453" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="tel:7976026086" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="mailto:ankit@prilient.com" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="skype:Ankit Ola?chat" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>  
@endsection


