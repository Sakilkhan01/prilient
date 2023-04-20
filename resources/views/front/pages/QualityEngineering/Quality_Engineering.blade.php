@extends('front.layouts.app')
@section('title', "Quality Engineering Service")
@section('meta_keywords', "Quality Engineering Service")
@section('meta_description', "Our Quality Engineering Service is the discipline of engineering concerned with the principles and practice of product and service quality assurance and control.")

@section('link')      
      <link rel="canonical" href="https://prilient.com/Quality_Engineering" />
      <link rel="canonical" href="https://www.prilient.com/Quality_Engineering" />
@stop
@section('content') 
<style type="text/css">
  .web-development-bg{
  background: url('{{ asset('public/assets/images/banner/bg-gray.png') }}') 0 0 / cover;
}
.web-development-bg2{
  background: url('{{ asset('public/assets/images/banner/web-development-bg.png') }}') 0 0 / cover;
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

<section class="hero-card-web-2 web-development-bg web-development-bg2">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                  <div class="col-lg-7 col-12 text-lg-left text-center mb-5">
                        <h1 class="fontWt30"><span class="fontWt50 common-color-heading">QUALITY ENGINEERING</span>  SERVICES</h1>
                        <p class="mt-3">Test your software and application before launch to ensure the quality, security, and user experience to meet your business goals</p>
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
            <img alt="Quality engineering service" src="{{ asset('public/assets/services/Group174.svg') }}">
      </div>
      <div class="col-lg-7 col-12 mt-5">
          <div class="comman-service-heading">
              
            <h2>World-class <span class="textRed fontWt50">reliable, robust, </span>And <span class="textPrim fontWt50"> efficient</span> software with us</h2>
             <p>In the era of the digital world, every business or customer depends on the application, chatbot, software, data, and security. Before launching any application or software anyone needs to be testing of security, user experience, performance, and reliability. Testing helps to identify bugs, challenges, and security issues so that we can prevent or eliminate issues.</p>
             <p>Prilient is a renowned IT and development service provider which offers quality engineering service to meet your business objectives. Prilient's trusted and experienced IT professional has enough knowledge of quality testing. They ensure to provide an in-depth report of bugs, challenges, and security issues. We use proper methodology and advanced tools or techniques to deliver top-notch solutions.</p>
          </div>
      </div>
      </div>
   </div>
 </section>
   <div class="hiredevlopercard py-5 text-center" style="bottom: 0px">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="text-white mb-0">Hire a <span class="fontWt50">Quality Engineer</span></h2>
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
                        <h1 class="service_heading_text" style="line-height: 58px;">We offer Quality Engineer</h1>
                        <p>As a renowned IT service provider, we offer the following Quality Engineer services</p>
                  </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img alt="Mobile Testing" src="{{ asset('public/assets/services/Group175.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Mobile Testing</h5>
                                          <p>
                                               Improve the user experience, security, performance, and quality of your mobile application to retain your... <a href="{{ url('Quality_Engineering/mobile-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5  offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img alt="ERP Testing" src="{{ asset('public/assets/services/Group176.svg') }}">
                                         </div>
                                         <div>
                                           <h5>ERP Testing</h5>
                                          <p>
                                              ERP testing is an essential process to make sure the quality, performance, usability, and security of ERP software... <a href="{{ url('Quality_Engineering/ERP-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              </div>
                              <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Game Testing" src="{{ asset('public/assets/services/Group177.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Game Testing</h5>
                                          <p>
                                            Gain a competitive edge by delivering great user experience, performance, reliability, security and... <a href="{{ url('Quality_Engineering/game-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Big Data Testing" src="{{ asset('public/assets/services/Group179.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Big Data Testing</h5>
                                          <p>
                                             Make sure all the functionalities and features of big data applications are working smoothly and error... <a href="{{ url('Quality_Engineering/big-data-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
                         <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Blockchain Testing" src="{{ asset('public/assets/services/Group180.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Blockchain Testing</h5>
                                          <p>
                                            Reduce the change of data hacking with the help of blockchain networks or cryptography techniques... <a href="{{ url('Quality_Engineering/blockchain-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Security Testing" src="{{ asset('public/assets/services/Group178.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Security Testing</h5>
                                          <p>
                                             Win the trust of customers by providing a secure platform, software, or application that may include some... <a href="{{ url('Quality_Engineering/security-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
                         <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Regression Testing" src="{{ asset('public/assets/services/Group181.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Regression Testing</h5>
                                          <p>
                                            Evaluate the quality of your system or software or application after every change in the code ... <a href="{{ url('Quality_Engineering/regression-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Localization Testing" src="{{ asset('public/assets/services/Group182.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Localization Testing</h5>
                                          <p>
                                             Make ready your product or system as per the local market. Localization testing helps to evaluate the quality... <a href="{{ url('Quality_Engineering/localization-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Functional Testing Service" src="{{ asset('public/assets/services/Group183.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Functional Testing Service</h5>
                                          <p>
                                            Evaluate the functionality of the system or software with our functional testing service. Functional testing... <a href="{{ url('Quality_Engineering/functional-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img alt="Usability Testing" src="{{ asset('public/assets/services/Group184.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Usability Testing</h5>
                                          <p>
                                            Improve the user experience to retain your customers for a long time and convert visitors into customers... <a href="{{ url('Quality_Engineering/usability-testing') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
            </div>
      </div>

     
      <div class="container mt-5">
            <div class="row justify-content-center">
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img alt="Compatibility Testing" src="{{ asset('public/assets/services/Group96.png') }}">
                                </div>
                                </div>
                                <h5>Compatibility Testing</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">
                              Compatibility testing is used to identify problems in order to improve customer satisfaction. Our experts have enough knowledge about human behavior, various configuration tools, and multiple platforms. They ensure to provide in-depth report of compatible issues in your system.
                                </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img alt="Code Review" src="{{ asset('public/assets/services/Group97.png') }}">
                                </div>
                                </div>
                                <h5>Code Review</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Code review refers to reviewing your system's code. Our code review professionals have hands-on experience in detecting vulnerability issues from the code of the software. They have knowledge about various coding languages and tools or techniques to identify issues.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img alt="Performance Engineering" src="{{ asset('public/assets/services/Group98.png') }}">
                                </div>
                                </div>
                                <h5>Performance Engineering</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Fix the potential bottlenecks early in the development cycle of software. Performance engineering is used to identify bugs before you deploy your product. Our performance engineers have enough knowledge of the required automation tools, language, and techniques.</p>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
       
       <section class="service-content-body">
   <div class="bgRed BgRedcardHeight py-5 mt-4">
      <div class="rounded-circle-comm top-rounded-circle"></div>
      <div class="container">
      <div class="comman-service-heading text-center">
            <h2 class="text-center fontWt30 text-white">Top <span class="fontWt50">advantages</span> of getting a <span class="fontWt50">Quality<br> Engineering</span> Service</h2>
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
                                    <svg width="104" height="76" viewBox="0 0 104 76" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_735_1253)">
<path d="M104 48.3616C103.552 49.3833 102.786 49.9211 101.672 50.063C100.702 50.1862 99.7507 50.4618 98.7819 50.597C97.3894 50.7912 96.375 50.0742 96.1595 48.8224C95.9551 47.6274 96.7651 46.6108 98.1367 46.3285C98.4962 46.2538 98.8527 46.1679 99.2898 46.0686C96.651 32.2943 94.0234 18.576 91.3689 4.71949C89.5863 5.05186 87.8403 5.3678 86.0988 5.70241C65.4851 9.66546 44.8711 13.6285 24.2569 17.5915C23.7953 17.6804 23.3157 17.7693 22.8518 17.7409C22.3568 17.7076 21.8899 17.4989 21.5346 17.1523C21.1792 16.8056 20.9588 16.3436 20.9126 15.849C20.8007 14.7242 21.4063 13.7771 22.5706 13.5165C24.5158 13.0803 26.4818 12.7352 28.4396 12.3595C39.8929 10.1607 51.3461 7.96302 62.7993 5.76664C72.6912 3.86752 82.5831 1.96642 92.475 0.0633173C93.9458 -0.219011 94.9654 0.480827 95.257 1.99853C96.9575 10.8393 98.6526 19.6821 100.342 28.5269C101.507 34.6106 102.67 40.6946 103.833 46.7789C103.857 46.9059 103.942 47.0216 103.998 47.1426L104 48.3616Z" fill="#004999"/>
<path d="M42.814 25.1568H82.5206C84.8044 25.1568 85.4846 25.8365 85.4846 28.1213C85.4846 43.1041 85.4846 58.0871 85.4846 73.0704C85.4846 75.2641 84.7507 75.999 82.5669 75.999H2.84863C0.734156 75.999 0.000976562 75.2559 0.000976562 73.1168C0.000976562 58.0662 0.000976562 43.0152 0.000976562 27.9637C0.000976562 25.8657 0.707297 25.1576 2.80238 25.1576C16.1396 25.1561 29.4768 25.1559 42.814 25.1568ZM4.37015 71.5722H81.0558V29.5501H4.37015V71.5722Z" fill="#004999"/>
<path d="M90.7206 58.9433C89.249 44.9128 87.7901 31.0093 86.326 17.0505C83.3904 17.3559 80.5718 17.648 77.7525 17.9467C71.5277 18.597 65.3031 19.2483 59.0788 19.9006C53.0568 20.5335 47.0349 21.1689 41.0129 21.8067C34.8557 22.454 28.6987 23.1013 22.542 23.7486C20.5573 23.957 18.5749 24.2057 16.585 24.3499C15.0985 24.4575 14.0819 23.3789 14.2124 21.9822C14.3094 20.9411 15.0545 20.1994 16.2404 20.0672C19.939 19.6556 23.6399 19.2687 27.3401 18.8774C34.2367 18.1474 41.1335 17.4202 48.0306 16.6957C54.6592 15.9986 61.2873 15.3035 67.9148 14.6103C74.1725 13.9516 80.4299 13.2906 86.687 12.6273C87.1577 12.5773 87.6313 12.5317 88.1041 12.5235C89.3818 12.5003 90.2522 13.2151 90.3909 14.4789C90.8794 18.9237 91.3404 23.3715 91.808 27.8185C92.5295 34.6581 93.2505 41.4972 93.971 48.3358C94.3924 52.3452 94.8242 56.3538 95.2322 60.3609C95.3963 61.9682 94.6937 62.8533 93.0692 63.0729C91.6283 63.2686 90.1806 63.4217 88.7321 63.5532C87.503 63.6644 86.4685 62.8541 86.3178 61.7225C86.156 60.5081 86.8287 59.5333 88.0803 59.2861C88.9059 59.124 89.7502 59.0658 90.7206 58.9433Z" fill="#004999"/>
<path d="M42.8096 31.7072H68.5942C70.6968 31.7072 71.286 32.2383 71.5172 34.3259C71.6231 35.3284 72.0726 36.2633 72.7893 36.9714C73.5059 37.6795 74.4453 38.1171 75.4478 38.2097C77.3766 38.3927 77.9979 39.0687 77.9986 41.0054C77.9986 47.4103 77.9986 53.8147 77.9986 60.2186C77.9986 61.9925 77.393 62.6759 75.6604 62.8963C73.1061 63.2209 71.7166 64.6525 71.4919 67.1909C71.374 68.5423 70.6458 69.2815 69.3073 69.4085C69.1059 69.4271 68.9015 69.4271 68.6987 69.4271H16.8251C16.5881 69.4312 16.3512 69.4232 16.115 69.4032C14.812 69.2725 14.1214 68.5667 13.9968 67.2484C13.75 64.6343 12.3709 63.2204 9.75969 62.8925C8.11882 62.6856 7.48635 62.0104 7.48486 60.3777C7.4764 53.8374 7.4764 47.2973 7.48486 40.7574C7.48486 39.0971 8.18596 38.3718 9.86038 38.218C12.1994 38.0036 13.7514 36.4515 13.9856 34.0913C14.1549 32.3787 14.8807 31.7102 16.6192 31.7095C25.3496 31.7045 34.0797 31.7037 42.8096 31.7072ZM67.3427 65.0667C67.4345 64.9174 67.5075 64.8427 67.5381 64.7463C68.4607 61.9178 70.3313 60.0215 73.0977 58.9489C73.3751 58.8413 73.6563 58.3193 73.6585 57.9876C73.6943 53.0394 73.6735 48.0912 73.6958 43.143C73.6958 42.5455 73.5168 42.2632 72.9388 42.057C70.4775 41.1809 68.7084 39.5176 67.7925 37.0662C67.4814 36.2305 67.0608 36.0512 66.2523 36.0527C52.0036 36.0736 37.7548 36.0786 23.5056 36.0676C21.9826 36.0676 20.4588 36.0938 18.9366 36.0557C18.3093 36.0407 18.0177 36.2327 17.7492 36.8444C17.3188 37.8228 16.8497 38.8924 16.0927 39.5952C14.859 40.741 13.3808 41.6231 11.7876 42.7733C11.7876 47.6804 11.7772 52.9655 11.8175 58.2498C11.8175 58.5142 12.2105 58.9018 12.5037 59.0161C14.9724 59.9774 16.7714 61.6303 17.6873 64.1212C17.9767 64.9099 18.3727 65.0847 19.1514 65.0832C34.8892 65.0608 50.6266 65.0553 66.3634 65.0667H67.3427Z" fill="#E43C5C"/>
<path d="M30.8106 50.589C30.7986 43.9805 36.1202 38.6185 42.7068 38.6035C49.3344 38.5879 54.6679 43.9581 54.6582 50.6368C54.6485 57.1498 49.2419 62.5544 42.756 62.5349C39.5906 62.5355 36.5543 61.2777 34.3145 59.0377C32.0746 56.7978 30.8143 53.759 30.8106 50.589ZM42.6762 58.1596C46.9216 58.1753 50.345 54.7986 50.3502 50.5973C50.3555 46.3959 46.9619 42.9849 42.7366 42.9415C38.6233 42.899 35.1596 46.3354 35.1342 50.4852C35.1074 54.7381 38.4547 58.1454 42.6762 58.1619V58.1596Z" fill="#E43C5C"/>
</g>
<defs>
<clipPath id="clip0_735_1253">
<rect width="104" height="76" fill="white"/>
</clipPath>
</defs>
</svg>

                              </div>
                              <h5>Save Money</h5>
                              <p>Hiring a Quality Engineering Service will allow your business to save a lot of money and will also help you in achieving many other objectives. You do not have to spend money on recruiting and training new employees every time a business project comes up.
                              </p>
                        </div>
                  </div>
                   <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <svg width="93" height="90" viewBox="0 0 93 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_735_1269)">
<path d="M0 65.8619V1.33021C0.432668 0.373533 1.16401 -0.00089416 2.23391 1.60305e-06C31.7422 0.0155282 61.2538 0.0203086 90.7688 0.0143369C92.3926 0.0143369 92.9991 0.632408 92.9991 2.25911C92.9991 22.9871 92.9952 43.715 92.9873 64.443C92.9913 65.1905 92.8942 65.9353 92.6986 66.6573C91.778 69.9537 88.9602 71.9056 85.1522 71.911C78.0696 71.9211 70.9867 71.9211 63.9035 71.911H62.7848C62.8943 72.2505 62.9441 72.4189 63.0038 72.5837C64.3483 76.3632 65.6942 80.1418 67.0417 83.9196C67.3269 84.715 67.1893 85.411 66.5638 85.9637C65.9384 86.5164 65.1934 86.5397 64.4503 86.1733C63.7469 85.8257 63.0554 85.4567 62.3584 85.0984C61.2722 84.5403 60.186 83.9841 59.051 83.3964C58.3268 85.145 57.6489 86.7717 56.9926 88.4127C56.6351 89.3085 56.1544 90.017 55.0519 89.9982C54.1468 89.983 53.6372 89.5208 53.2064 88.3169C51.3318 83.074 49.4499 77.8364 47.5943 72.5828C47.3934 72.014 47.1644 71.7641 46.5082 71.8402C45.7557 71.914 44.9977 71.914 44.2452 71.8402C43.7022 71.7954 43.4306 71.9405 43.2568 72.4672C42.7291 74.0572 42.1489 75.6311 41.5858 77.2094C40.248 80.9603 38.909 84.7099 37.5687 88.4584C37.1678 89.5781 36.5622 90.0439 35.6136 89.9911C34.7492 89.9427 34.2559 89.4357 33.949 88.6805C33.2376 86.9401 32.5116 85.205 31.764 83.3955C30.0279 84.2913 28.3651 85.1297 26.7195 86.0004C25.884 86.4429 25.0603 86.6355 24.2755 85.9735C23.4908 85.3116 23.5514 84.4911 23.8773 83.5971C25.1671 80.0526 26.4235 76.4964 27.6916 72.9438C27.8002 72.641 27.9007 72.3347 28.0473 71.9047H8.41982C3.70574 71.9047 1.54056 70.3505 0.066959 65.9129C0.0588126 65.8968 0.0226291 65.8816 0 65.8619ZM3.63241 18.0281V64.0166C3.63241 66.9457 5.00189 68.3163 7.95 68.3163C14.7604 68.3163 21.5709 68.3109 28.3813 68.327C29.015 68.327 29.4105 68.2554 29.6594 67.5468C29.9084 66.8383 29.7192 66.5113 29.1915 66.0598C22.2 60.0717 19.107 52.4926 20.2204 43.4159C22.0307 28.6823 36.8012 18.6372 51.4032 22.3179C61.3808 24.8332 67.8455 31.2559 70.1401 41.1854C72.4075 51.0173 69.3056 59.3694 61.6588 66.0356C61.1066 66.5167 60.9427 66.8741 61.179 67.5987C61.4297 68.3646 61.9149 68.3207 62.4987 68.3154C70.0043 68.3112 77.5105 68.3112 85.0174 68.3154C87.9872 68.3154 89.3712 66.9547 89.3712 64.0497C89.3712 49.0427 89.3712 34.0363 89.3712 19.0305V18.0272L3.63241 18.0281ZM3.66136 14.3188H89.3115V3.6798H3.66136V14.3188ZM45.4509 68.3019C57.5095 68.2545 67.2653 58.5327 67.2056 46.6245C67.1476 34.7413 57.323 25.1145 45.3224 25.1808C33.2837 25.248 23.5831 34.9061 23.6139 46.7974C23.6446 58.6599 33.4838 68.3512 45.4509 68.3037V68.3019ZM35.4869 82.8832L35.6996 82.8921C37.0718 79.0529 38.4432 75.2145 39.7873 71.4523L32.9986 68.8824C31.6182 72.7485 30.1998 76.7212 28.7018 80.9188C29.8441 80.3267 30.7402 79.8438 31.6535 79.396C32.8963 78.7833 33.9055 79.1487 34.4595 80.4073C34.8207 81.2251 35.1465 82.0582 35.4869 82.885V82.8832ZM51.0303 71.4613L55.2158 83.1465L56.2595 80.6662C56.9329 79.0645 57.848 78.7295 59.3985 79.5151C60.2322 79.937 61.0649 80.3598 62.114 80.8901L57.8199 68.8869L51.0303 71.4613Z" fill="#004999"/>
<path d="M23.5971 7.2214C23.832 7.21485 24.0659 7.25445 24.2853 7.3379C24.5047 7.42135 24.7052 7.547 24.8752 7.70759C25.0453 7.86818 25.1814 8.06053 25.2758 8.27351C25.3703 8.48649 25.4212 8.71588 25.4255 8.94844C25.4313 9.41767 25.2533 9.8709 24.9288 10.2131C24.6042 10.5553 24.1584 10.7598 23.6849 10.7839C23.4425 10.7891 23.2014 10.7468 22.9756 10.6594C22.7498 10.5721 22.5436 10.4414 22.3691 10.2749C22.1945 10.1084 22.0549 9.90932 21.9584 9.6892C21.8619 9.46908 21.8103 9.23225 21.8067 8.99233C21.8058 8.75946 21.8516 8.52873 21.9413 8.31344C22.031 8.09815 22.1628 7.90255 22.3292 7.73793C22.4957 7.57331 22.6934 7.44291 22.911 7.35426C23.1286 7.26561 23.3618 7.22045 23.5971 7.2214Z" fill="#E43C5C"/>
<path d="M9.05918 10.767C8.5865 10.7546 8.13688 10.5623 7.80389 10.2301C7.47089 9.8979 7.28017 9.45139 7.27148 8.98354C7.27334 8.74419 7.32385 8.50765 7.41999 8.28801C7.51613 8.06837 7.65595 7.87012 7.83111 7.70505C8.00627 7.53999 8.2132 7.41149 8.43958 7.3272C8.66595 7.2429 8.90715 7.20455 9.14881 7.21441C9.62102 7.2319 10.0676 7.43142 10.3931 7.77034C10.7187 8.10927 10.8975 8.56074 10.8912 9.02833C10.8707 9.49579 10.6689 9.93742 10.3276 10.2613C9.98635 10.5851 9.532 10.7663 9.05918 10.767Z" fill="#E43C5C"/>
<path d="M16.3816 10.7673C15.909 10.7702 15.4534 10.5923 15.1101 10.2709C14.7667 9.94944 14.562 9.50922 14.5387 9.04204C14.5264 8.57457 14.7003 8.12105 15.0229 7.77936C15.3455 7.43766 15.7909 7.23517 16.2631 7.21558C16.5046 7.20515 16.7457 7.24251 16.9724 7.32549C17.1991 7.40847 17.4068 7.53538 17.5834 7.69881C17.7599 7.86224 17.9017 8.05889 18.0004 8.27723C18.0992 8.49557 18.1529 8.73122 18.1585 8.97037C18.1657 9.91361 17.3402 10.7467 16.3816 10.7673Z" fill="#E43C5C"/>
<path d="M45.4473 64.7088C35.4814 64.7456 27.2779 56.6801 27.2462 46.8133C27.2367 44.4503 27.6983 42.1086 28.6045 39.9224C29.5107 37.7362 30.8437 35.7483 32.5273 34.0726C34.2109 32.397 36.212 31.0664 38.4159 30.1571C40.6199 29.2478 42.9834 28.7776 45.3712 28.7735C55.3769 28.7484 63.5351 36.761 63.5722 46.6485C63.6102 56.5753 55.4855 64.6712 45.4473 64.7088ZM45.3957 61.1132C53.372 61.1267 59.9208 54.6754 59.9398 46.7882C59.9472 44.8969 59.5771 43.0227 58.8508 41.2732C58.1245 39.5237 57.0563 37.9334 55.7075 36.5935C54.3586 35.2535 52.7556 34.1904 50.9906 33.465C49.2255 32.7396 47.3331 32.3663 45.4219 32.3664C37.414 32.3592 30.9022 38.7639 30.8796 46.67C30.8569 54.6207 37.3696 61.1007 45.4002 61.1132H45.3957Z" fill="#E43C5C"/>
<path d="M50.4198 56.0381C49.3708 55.8061 48.0926 55.5669 46.8399 55.2319C45.8795 54.9766 44.9671 54.9434 44.0031 55.2256C42.9622 55.5311 41.8905 55.7407 40.8242 55.9521C39.2936 56.2549 38.4472 55.6009 38.3124 54.062C38.1947 52.7184 38.0888 51.3747 37.9331 50.0391C37.8773 49.6594 37.7466 49.2941 37.5484 48.9642C36.8732 47.7997 36.1472 46.6567 35.4665 45.4922C34.7134 44.205 35.0212 43.0862 36.4532 42.6168C39.5054 41.6154 41.9511 39.8955 43.852 37.3139C44.7716 36.0599 46.0424 36.0536 46.9549 37.2951C48.8557 39.8785 51.2996 41.5885 54.35 42.5989C55.8218 43.0871 56.2201 44.3009 55.3014 45.537C53.3688 48.1428 52.4727 51.0146 52.48 54.2259C52.4827 55.3591 51.6943 56.0381 50.4198 56.0381ZM41.6995 52.0331C43.0844 51.7644 44.2665 51.3478 45.4496 51.347C46.6326 51.3461 47.7967 51.7626 49.1272 52.0268C48.9462 49.4587 49.7147 47.2202 51.4327 45.1411C48.7733 44.4809 46.8761 43.0809 45.4088 40.8173C43.956 43.1221 42.0063 44.4899 39.3705 45.1707C41.141 47.2381 41.8506 49.4721 41.6995 52.0331Z" fill="#E43C5C"/>
</g>
<defs>
<clipPath id="clip0_735_1269">
<rect width="93" height="90" fill="white"/>
</clipPath>
</defs>
</svg>

                              </div>
                              <h5>Better Quality</h5>
                              <p>
                              A Quality Engineering Service will help you to produce better quality products and services at all stages of manufacturing, which is why your customers will be more satisfied with your products and services. It is going to be as high in quality as possible. 
                              </p>
                        </div>
                  </div>
                   <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <svg width="81" height="83" viewBox="0 0 81 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M52.7626 68.4484C57.7123 65.9881 62.5649 63.5697 67.4167 61.1527C68.9734 60.377 70.5213 59.5825 72.0845 58.8212C75.1474 57.3305 78.249 58.3508 79.8539 61.338C80.6158 62.757 81.2418 64.1884 80.9043 65.86C80.5391 67.6756 79.5412 69.0186 77.886 69.861C71.4534 73.1356 65.0178 76.4038 58.5794 79.6655C57.0023 80.4665 55.4215 81.2574 53.8488 82.0665C52.6327 82.692 51.2803 83.0126 49.91 82.9999C33.9125 82.9889 17.915 82.9862 1.91751 82.992C0.434636 82.992 0 82.5578 0 81.0888C0 74.0595 0 67.0301 0 60.0007C0 58.5252 0.431728 58.0954 1.91387 58.0954C11.396 58.0954 20.8783 58.0935 30.3609 58.0896C32.6101 58.0896 34.4925 58.8429 36.0273 60.4906C36.2399 60.7186 36.6745 60.843 37.0076 60.8459C40.3525 60.8713 43.698 60.8597 47.0429 60.8618C51.3301 60.8618 53.7984 63.9735 52.7874 68.0982C52.771 68.2142 52.7627 68.3312 52.7626 68.4484ZM18.1714 80.2263H18.8406C29.2864 80.2263 39.7323 80.24 50.1781 80.1988C50.9817 80.1951 51.8458 79.9209 52.5821 79.5685C55.0417 78.394 57.4566 77.1284 59.8869 75.8953C65.3948 73.1007 70.9031 70.3072 76.4119 67.5149C77.425 67.0033 78.1504 66.2573 78.1709 65.132C78.1986 63.616 77.509 62.3185 76.3198 61.3973C75.2482 60.5673 74.1035 60.8987 72.964 61.4697C66.2786 64.8269 59.5826 68.1607 52.8758 71.471C52.3086 71.7473 51.6867 71.8956 51.0547 71.9052C44.945 71.9363 38.8352 71.924 32.7255 71.9233C32.4633 71.9233 32.1944 71.9486 31.9417 71.9001C31.1922 71.7554 30.7401 71.2952 30.7466 70.5252C30.7532 69.7553 31.2105 69.3067 31.9636 69.1742C32.2178 69.1294 32.4859 69.1547 32.7474 69.1547C37.5774 69.1547 42.4071 69.1559 47.2365 69.1583C48.4878 69.1583 49.4469 68.6923 49.9977 67.5583C50.9035 65.6943 49.585 63.6457 47.441 63.6305C43.6294 63.603 39.8177 63.6131 36.0061 63.6305C35.2851 63.6305 34.7044 63.4698 34.2902 62.8345C33.3727 61.4321 32.0418 60.838 30.369 60.8474C26.5873 60.8684 22.8049 60.8539 19.0224 60.8539H18.1787L18.1714 80.2263ZM15.3225 60.9226H2.86057V80.18H15.3225V60.9226Z" fill="#004999"/>
<path d="M12.5684 27.6233C12.5925 12.3864 25.1327 -0.0108474 40.5158 7.12235e-06C55.9341 0.010138 68.4844 12.4841 68.4297 27.7434C68.3756 42.986 55.8114 55.3666 40.4377 55.3276C25.053 55.2878 12.5436 42.8528 12.5684 27.6233ZM40.4377 52.5611C54.2941 52.5966 65.6137 41.4287 65.6392 27.7007C65.6619 14.0074 54.4344 2.82435 40.6057 2.76646C26.7477 2.70856 15.4107 13.854 15.3639 27.5813C15.3172 41.3086 26.5768 52.5257 40.4377 52.5611Z" fill="#004999"/>
<path d="M40.4822 5.53227C43.4267 5.53416 46.3418 6.11174 49.0605 7.23189C51.7792 8.35205 54.248 9.99277 56.3253 12.06C58.4027 14.1272 60.0477 16.5802 61.1661 19.2785C62.2846 21.9768 62.8544 24.8671 62.8429 27.784C62.8145 39.9367 52.7265 49.8396 40.4216 49.7955C28.0728 49.7506 18.123 39.8093 18.1544 27.5459C18.1843 15.4244 28.2438 5.50695 40.4822 5.53227ZM21.0025 26.2405C22.1464 26.3577 23.6578 25.9597 23.6892 27.6197C23.7228 29.3898 22.1077 28.949 21.0317 29.0873C21.2845 33.212 23.3021 37.9626 25.7382 40.2507C27.3555 38.9128 27.9961 38.7347 28.6667 39.4381C29.3117 40.1147 29.1218 40.7284 27.7478 42.3225C31.0064 45.0723 34.748 46.6252 39.0848 46.9653C39.1622 45.8292 38.7875 44.3451 40.4552 44.3125C42.2412 44.2785 41.7985 45.877 41.9337 46.9436C46.1076 46.6882 50.8916 44.696 53.2079 42.282C51.8595 40.6813 51.679 40.0438 52.3876 39.3824C53.0706 38.7441 53.6842 38.9308 55.2993 40.2927C58.0751 37.0653 59.6413 33.3596 59.9846 29.0858C58.8472 28.97 57.3388 29.3651 57.3081 27.7044C57.2745 25.9279 58.8947 26.3852 59.9649 26.2369C59.7063 22.1049 57.6901 17.3572 55.2576 15.0756C53.6725 16.3984 53.0728 16.5807 52.3912 15.9439C51.6754 15.2775 51.8565 14.6363 53.2094 13.045C50.8718 10.5919 45.2311 8.28137 41.9264 8.44202C41.8205 9.48622 42.2135 10.9805 40.5385 11.0109C38.7546 11.0442 39.1929 9.44714 39.0629 8.34939C34.7217 8.71844 30.986 10.2497 27.7478 12.998C29.1203 14.6052 29.3074 15.2073 28.6675 15.8831C27.9976 16.5901 27.3431 16.4085 25.6944 15.0336C22.9193 18.2429 21.3751 21.9443 21.0025 26.2405Z" fill="#E43C5C"/>
<path d="M48.9176 29.0466C47.6386 29.0466 46.361 29.0162 45.0812 29.0697C44.789 29.082 44.3887 29.3114 44.2382 29.5596C43.2564 31.1842 41.58 32.0584 39.8619 31.7682C38.9801 31.6254 38.1661 31.211 37.5356 30.5838C36.9052 29.9566 36.4902 29.1486 36.3497 28.2745C36.0678 26.5689 36.9517 24.9248 38.5996 23.9479C38.8472 23.8032 39.0715 23.3972 39.0803 23.1063C39.1263 21.4948 39.0956 19.8818 39.1044 18.2688C39.1102 17.2405 39.6267 16.6233 40.4674 16.6044C41.3389 16.5849 41.8875 17.2239 41.8933 18.2956C41.9014 19.9078 41.8707 21.5215 41.9189 23.1331C41.9269 23.4225 42.1972 23.7366 42.4186 23.9739C43.0029 24.5977 43.6041 25.2041 44.2338 25.7787C44.4719 25.9958 44.8014 26.2541 45.0928 26.2584C47.6218 26.2961 50.1514 26.2773 52.6811 26.2816C53.7987 26.2816 54.4342 26.7708 54.4569 27.6254C54.4824 28.5097 53.8192 29.0408 52.6686 29.0459C51.4188 29.0502 50.1711 29.0466 48.9176 29.0466ZM40.4302 29.0401C40.7942 29.0522 41.1489 28.9246 41.4202 28.6839C41.6916 28.4433 41.8587 28.1081 41.8868 27.7484C41.8966 27.5628 41.8688 27.3772 41.805 27.2024C41.7413 27.0276 41.6428 26.8672 41.5155 26.7307C41.3882 26.5942 41.2346 26.4844 41.0638 26.4076C40.8929 26.3308 40.7083 26.2887 40.5208 26.2838C40.1567 26.2819 39.8061 26.4199 39.5425 26.6687C39.279 26.9175 39.123 27.2578 39.1073 27.6181C39.0993 27.9787 39.2326 28.3282 39.4793 28.5934C39.726 28.8585 40.0668 29.0186 40.4302 29.0401Z" fill="#004999"/>
</svg>

                              </div>
                              <h5>Time-saving</h5>
                              <p>
                               Quality Engineering Service helps you to save lots of time with their expert approach. This can be a huge bonus for companies that are under tight deadlines and need to get their product out as soon as possible.
                              </p>
                        </div>
                  </div>
                   
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="custom-card custom-card-hover text-center card-service-equal h-100">
                              <div class="img-theme">
                                    <svg width="92" height="91" viewBox="0 0 92 91" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M71.2828 79.6523C71.2828 79.1159 71.267 78.5767 71.2828 78.0432C71.3301 76.6809 71.4004 75.5193 69.8487 74.6015C68.1427 73.5933 67.8337 71.2436 68.649 69.418C69.0431 68.5502 69.698 67.8269 70.5225 67.3487C71.347 66.8705 72.3001 66.6612 73.2491 66.7499C75.2081 66.937 76.805 68.3812 77.2475 70.3652C77.6627 72.2252 76.7892 74.2688 75.0532 75.1808C74.4372 75.5042 74.296 75.8634 74.3046 76.4858C74.334 78.662 74.3203 80.839 74.3139 83.0159C74.3103 84.2155 73.7589 84.9089 72.8203 84.9239C71.8816 84.939 71.2928 84.2392 71.2842 83.0596C71.2764 81.9231 71.2828 80.7873 71.2828 79.6523ZM72.7622 69.7686C72.367 69.7824 71.9925 69.9488 71.7175 70.233C71.4426 70.5172 71.2885 70.8969 71.2878 71.2923C71.2941 71.6877 71.4539 72.0651 71.7335 72.3448C72.0131 72.6245 72.3904 72.7845 72.7858 72.7909C72.9896 72.79 73.1911 72.7483 73.3786 72.6684C73.566 72.5885 73.7356 72.4719 73.8774 72.3256C74.0193 72.1793 74.1304 72.0061 74.2044 71.8162C74.2783 71.6263 74.3136 71.4236 74.3082 71.2199C74.2885 70.8249 74.1164 70.453 73.8281 70.1823C73.5397 69.9116 73.1576 69.7633 72.7622 69.7686Z" fill="#004999"/>
<path d="M59.1515 54.8378L59.1465 54.5718C59.1465 54.6607 59.1465 54.7496 59.1465 54.8392L59.1515 54.8378Z" fill="black"/>
<path d="M54.784 87.9149H47.3264C49.5981 75.6471 51.8583 63.4424 54.1695 50.9638C55.8374 51.8013 57.3741 52.5613 58.8936 53.3558C59.0191 53.4217 59.1087 53.6555 59.1295 53.8412L59.0578 49.9119C54.7962 47.5772 50.0305 47.0989 45.4979 45.7889V45.2504C45.4979 44.618 45.4441 43.9798 45.5194 43.3574C45.5588 43.0369 45.7517 42.6404 46.0041 42.4554C50.7863 38.8989 53.1154 34.1377 53.0817 28.1985C53.0745 26.9129 53.0817 25.6279 53.0817 24.2684C53.5585 24.2684 53.9307 24.2742 54.3007 24.2684C55.4258 24.2483 56.0991 23.7493 56.0934 22.7626C56.0776 19.954 56.1845 17.126 55.8955 14.3418C55.1519 7.19145 48.9241 0.965416 41.759 0.22113C38.9122 -0.0742893 36.0224 0.00601688 33.1476 0.0217917C25.9295 0.0669651 19.5389 4.90194 17.4135 11.802C16.2884 15.4553 16.7681 19.1983 16.7172 22.9096C16.7065 23.7263 17.331 24.2003 18.1643 24.2591C18.6562 24.2942 19.1531 24.2656 19.7139 24.2656C19.7139 25.6093 19.7261 26.8354 19.7139 28.0615C19.6422 34.0761 21.9691 38.901 26.8388 42.474C27.0403 42.6217 27.264 42.8935 27.2762 43.1193C27.3264 44.0221 27.297 44.9292 27.297 45.8341C25.0439 46.374 22.902 46.9096 20.7493 47.3986C8.1675 50.251 0.00215123 60.4667 0 73.3741C0 78.9029 0 84.432 0 89.9613V90.9974H58.4282C57.7606 90.9372 56.8062 90.7106 55.983 89.9548C55.3922 89.4069 54.9754 88.6976 54.784 87.9149ZM47.5508 49.5383L43.6385 55.4108L39.0671 51.7604C39.9398 51.2262 40.7257 50.7436 41.513 50.2632C41.7819 50.099 42.0953 49.9836 42.3183 49.7727C43.9798 48.2039 45.7237 48.9381 47.5508 49.5383ZM37.0478 49.4322C36.5853 49.719 36.2303 49.7297 35.7571 49.4322C34.3717 48.5545 32.9533 47.7292 31.5471 46.8852C30.1847 46.0671 30.1847 46.0685 30.4256 44.3864C34.3989 45.8735 38.3816 45.8642 42.3563 44.3957C42.631 46.0628 42.631 46.0628 41.2571 46.8888C39.8559 47.7342 38.4375 48.5624 37.0478 49.4322ZM38.2826 56.4541C38.2733 56.9145 37.1145 57.5297 36.3315 57.4924C35.3455 57.4429 34.4972 56.8893 34.5258 56.3143C34.5832 55.167 35.6925 53.5938 36.4232 53.6204C37.2134 53.6498 38.3049 55.3126 38.2826 56.4541ZM19.4851 21.1988C19.7404 18.3916 19.6601 15.6253 20.294 13.0339C21.7425 7.11258 27.1608 3.07781 33.2495 3.04984C35.9923 3.03694 38.7616 2.93297 41.4743 3.24846C47.7789 3.98056 52.8041 9.59281 53.058 15.9508C53.1297 17.6767 53.068 19.4076 53.068 21.1601C50.7863 21.4698 48.9154 20.9858 47.5136 19.0721C46.377 17.5204 45.1243 16.0526 43.9146 14.5547C42.9185 13.3214 41.9949 13.3357 40.986 14.5891C40.2538 15.4991 39.5354 16.4197 38.7932 17.3218C36.9159 19.6034 34.4907 21.0289 31.56 21.1572C27.6584 21.3279 23.7439 21.1988 19.4851 21.1988ZM22.7543 29.003C22.7378 27.4628 22.7543 25.9198 22.7543 24.2706C24.4201 24.2706 26.0199 24.305 27.6175 24.2612C29.5063 24.2103 31.4231 24.2713 33.2746 23.9615C36.6104 23.403 39.2836 21.6061 41.3832 18.9588C41.6772 18.588 41.977 18.2216 42.2775 17.856C42.3147 17.8101 42.375 17.7842 42.5148 17.6824C43.5739 18.991 44.623 20.3161 45.7044 21.6139C46.8158 22.9469 48.2658 23.7357 50.0613 24.1451C49.9487 27.0003 50.3216 29.8097 49.5235 32.5724C47.6828 38.9462 41.2836 43.2707 34.9253 42.3959C27.8714 41.4164 22.8289 35.8737 22.7543 29.003ZM28.2392 48.7345C28.4106 48.6943 28.6415 48.6965 28.7857 48.7811C30.4034 49.7333 32.0089 50.7049 33.7414 51.746L29.165 55.4137L25.2211 49.496C26.2924 49.2221 27.2619 48.9661 28.2392 48.7345ZM18.2001 87.8948V72.3415C18.2001 72.1522 18.2001 71.9629 18.2001 71.7736C18.193 70.483 17.6688 69.7846 16.7015 69.7724C15.7341 69.7602 15.1691 70.4665 15.1684 71.7356C15.165 75.8098 15.165 79.8838 15.1684 83.9575V87.9012H3.0813C3.06552 87.6861 3.03609 87.4768 3.03609 87.266C3.03609 82.2761 2.99452 77.2862 3.04758 72.2963C3.14438 63.1391 9.18003 54.6113 17.7477 51.4391C18.008 51.3431 18.2776 51.2706 18.6627 51.1523C20.9344 63.4137 23.1946 75.6184 25.4699 87.9005L18.2001 87.8948ZM28.9807 87.9306C28.7935 87.9264 28.5002 87.509 28.45 87.2466C27.5537 82.5715 26.6758 77.8928 25.8162 73.2106C24.4504 65.8327 23.088 58.4544 21.7289 51.0756C21.6851 50.8383 21.6679 50.5966 21.8443 50.2152C22.0673 50.4504 22.3284 50.6597 22.5069 50.925C24.0558 53.2289 25.5903 55.5435 27.1278 57.8531C28.1862 59.4413 28.8387 59.5445 30.3238 58.3679C30.5898 58.1564 30.8644 57.9563 31.3349 57.5985C31.0201 60.4624 30.7347 63.0932 30.4407 65.7233C29.911 70.4557 29.3758 75.1882 28.8351 79.9206C28.7469 80.6864 29.0345 81.2443 29.563 81.7691C31.5966 83.7862 33.6073 85.8261 35.7298 87.9608C33.423 87.9615 31.2008 87.978 28.9807 87.9306ZM36.3981 84.3132C34.9439 82.8519 33.5341 81.4608 32.1674 80.0289C31.9967 79.8503 31.9874 79.4467 32.0182 79.1591C32.6077 73.6671 33.2076 68.1762 33.8181 62.6866C33.9113 61.8427 34.0225 61.0001 34.1544 59.9167C35.6875 60.8244 37.1417 60.7355 38.6533 59.9475C38.9631 62.6809 39.2593 65.2479 39.544 67.8163C39.9613 71.5807 40.3872 75.3452 40.7587 79.1132C40.7974 79.5083 40.6016 80.0389 40.3284 80.3322C39.0821 81.668 37.7692 82.9372 36.3981 84.3132ZM37.0887 87.9278C39.1345 85.8756 41.1043 83.8579 43.1272 81.8925C43.8342 81.2055 44.03 80.4813 43.916 79.5169C43.1516 72.9374 42.4331 66.3528 41.7009 59.7697C41.6292 59.1172 41.5575 58.4647 41.4621 57.5662C42.0544 58.0359 42.418 58.3313 42.7887 58.6174C43.8486 59.437 44.6639 59.3251 45.4111 58.2159C47.0489 55.7822 48.6645 53.3336 50.2994 50.8978C50.4701 50.644 50.7096 50.436 50.9175 50.2073L51.2008 50.3442C48.8827 62.8661 46.5641 75.394 44.2451 87.9278H37.0887Z" fill="#E33C5C"/>
<path d="M59.1379 53.9092C59.1375 53.8864 59.1358 53.8637 59.1328 53.8411L59.1464 54.5717C59.1457 54.3487 59.1457 54.1336 59.1379 53.9092Z" stroke="black" stroke-miterlimit="10"/>
<path d="M90.9959 86.1587C91.0036 78.2603 91.0036 70.3619 90.9959 62.4635C91.0072 62.0542 90.9699 61.645 90.8848 61.2445C90.3284 58.9622 88.7622 57.8501 86.4511 57.5733C86.4511 54.5804 86.4669 51.6147 86.4432 48.6491C86.4332 47.4208 86.4274 46.1803 86.2675 44.9656C85.407 38.4198 79.56 33.3891 72.8582 33.3704C66.0918 33.3525 60.1982 38.3632 59.3377 44.9427C59.1283 46.5481 59.1512 48.1844 59.0609 49.9139L59.1326 53.8433C59.1356 53.8659 59.1373 53.8886 59.1376 53.9114C59.1419 54.1322 59.1441 54.3524 59.1462 54.5739L59.1513 54.84C59.157 55.7298 59.1513 56.6268 59.1513 57.5496C58.7604 57.6328 58.3998 57.6931 58.0455 57.7863C56.0556 58.2954 54.6243 59.989 54.6179 62.0311C54.5906 70.2054 54.6035 78.3868 54.6136 86.5646C54.6136 86.9998 54.7226 87.4351 54.7871 87.9155C54.9791 88.6978 55.3965 89.4066 55.9875 89.954C56.8107 90.7069 57.7651 90.9364 58.4327 90.9966H86.2073C89.0921 90.993 90.9931 89.0699 90.9959 86.1587ZM62.1938 46.8916C62.2691 41.5088 66.1212 37.2596 71.5875 36.4666C76.4077 35.7675 81.3226 38.931 82.8843 43.7682C83.1152 44.4852 83.3411 45.2403 83.3505 45.9802C83.3963 49.8264 83.372 53.6726 83.372 57.5862H81.8998C81.8998 54.2979 81.9099 51.0533 81.8927 47.8094C81.8884 47.0207 81.8604 46.2276 81.7328 45.4547C80.9698 40.8398 76.7605 37.5801 72.0715 37.9401C67.5066 38.29 63.8115 42.1254 63.7205 46.7073C63.6552 49.9584 63.7025 53.2123 63.7004 56.4648C63.7004 56.809 63.7004 57.1524 63.7004 57.5633H62.183C62.183 57.166 62.183 56.7659 62.183 56.3651C62.1838 53.2087 62.1493 50.0509 62.1938 46.8916ZM78.8658 57.5898H66.872C66.8297 57.5332 66.7616 57.4844 66.7616 57.4356C66.753 53.8067 66.6612 50.1749 66.7752 46.5503C66.8735 43.4046 69.6536 40.9416 72.8223 40.9509C75.9911 40.9603 78.6457 43.452 78.8508 46.5976C78.8673 46.8493 78.8651 47.0995 78.8651 47.3548C78.8651 50.732 78.8651 54.1071 78.8651 57.5912L78.8658 57.5898ZM59.7091 87.9614C58.1036 87.9614 57.6339 87.486 57.6332 85.8662C57.6332 78.1571 57.6332 70.4484 57.6332 62.7403C57.6332 61.132 58.105 60.6652 59.7264 60.6609C64.0862 60.6609 68.4462 60.6609 72.8065 60.6609C77.1668 60.6609 81.5269 60.6609 85.8868 60.6609C87.4937 60.6609 87.9663 61.1348 87.9663 62.7539C87.9663 70.4625 87.9663 78.1712 87.9663 85.8798C87.9663 87.4845 87.4887 87.9592 85.871 87.9592C77.1499 87.9631 68.4293 87.9642 59.7091 87.9628V87.9614Z" fill="#004999"/>
</svg>

                              </div>
                              <h5>Better security</h5>
                              <p>
                              The number of digital services and devices that surround us only continues to grow. Because so much information is being sent over networks, IT managers and computer engineers have taken on an even greater role in ensuring security is at its highest level possible.
                              </p>
                        </div>
                  </div>
                </div>
              </div>
<div class="text-center" style="bottom: 100px;position: relative;">
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
      <div class="container pb-5" style="bottom: 30px;position: relative;">
            <div class="col-lg-10 col-12 text-center ml-auto mr-auto">
              <h2>Why should you choose <br> <span class="fontWt70 common-color-heading">Prilient for Quality engineering?</span></h2>
            </div>
            <div class="col-lg-11 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Skilled Developers" src="{{ asset('public/assets/services/Group90.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Skilled Developers</h5> 
                                         <p>We have a highly skilled and talented professional who ensure to deliver top-notch solutions. Every tool is tested, tuned, and supported by our team of skilled experts. We understand that one size does not fit all when it comes to businesses, which is why we use our years of experience with different industries to deliver a tailored solution for your business needs.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Save Money" src="{{ asset('public/assets/services/Group92.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Save Money</h5>
                                         <p>Keeping your IT equipment and software updated with current versions is key to optimizing your technology performance. Whatever your reason, no matter how small or large your company is (or if you’re managing it all yourself), we provide high-quality quality engineering service that is completely worth it for you.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Transparency" src="{{ asset('public/assets/services/Group91.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Transparency</h5> 
                                         <p>We will be in contact with you throughout your project and we are available for questions, concerns, and feedback any time during or after your project. Our responsiveness is a top priority of ours. We’ll make sure you’re getting what you want and that you know where we are in your project at all times.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Deliver on time" src="{{ asset('public/assets/services/Group83.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Deliver on time</h5> 
                                         <p>It is one of our prime objectives to deliver your web or mobile applications on time. we don’t compromise with quality, but we also keep in mind that deadlines are an essential part of any project. It is one of our prime objectives to deliver your web or mobile applications on time. we don’t compromise with quality, but we also keep in mind that deadlines are an essential part of any project.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img alt="Support and Maintenance" src="{{ asset('public/assets/services/Group23.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Support and Maintenance</h5> 
                                         <p>Technology is a moving target, which means it’s essential for you to have someone supporting and maintaining your software. At Prilient, we offer 24/7 support services with real people who will help you sort out any issues that come up. We’ll be there whenever you need us, so there’s no such thing as an inconvenient hour—or day!</p>   
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
