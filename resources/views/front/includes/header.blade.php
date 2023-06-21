<div class="Prilientofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
     style="visibility: visible; z-index: 999999;">
     <div class="offcanvas-body">
         <div class="cbtn animation">
            <div class="btnclose"> 
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                     aria-label="Close"></button>
            </div>
         </div>
         <div class="form-block sidebarform">
             <h4>Request A Quote</h4>
             <p class="text-success" id="successMsg"></p>
             <form id="contactForm" action="javascript:void(0)" method="post" data-bs-toggle="validator" class="shake mt20">
                @csrf
                <div class="row">
                     <div class="form-group col-sm-12 mb-3">
                         <input type="text" class="mb-0" id="name" name="name" placeholder="Please enter name">
                     </div>
                     <div class="form-group col-sm-12 mb-3">
                         <input type="email" class="mb-0" id="email" name="email" placeholder="Please enter email">
                     </div>
                     <div class="form-group col-sm-12 mb-3">
                         <input type="text" maxlength="10" class="mb-0" id="phone" name="phone" placeholder="Please enter phone number">
                     </div>
                </div>
                 <div class="form-group mb-3">
                     <textarea id="message" class="mb-0 textarea_msg" name="message" placeholder="Enter your message"></textarea>
                 </div>
                   <button type="submit" id="submit" class="btn lnk btn-main bg-btn submit">Submit <span class="circle"></span></button>
                   <div id="msgSubmit" class="h3 text-center hidden"></div>
                   <div class="clearfix"></div>
             </form>
         </div>
         <div class="getintouchblock mt30">
             <h4>Get In Touch</h4>
             <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to
                 share with us.</p>
             <div class="media mt15">
                 <div class="icondive"><img  loading="lazy" src="{{ url('public/assets/images/icons/call.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="tel:7976026086">+91-7976026086 <span>Mon-Fri 9am - 6pm</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img  loading="lazy" src="{{ url('public/assets/images/icons/whatsapp.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="tel:7976026086">+91-7976026086 <span>Mon-Fri 9am - 6pm</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img  loading="lazy" src="{{ url('public/assets/images/icons/mail.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="mailto:{{EMAIL_SITE}}"><span>{{EMAIL_SITE}}</span>
                        <span>Online Support</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img  loading="lazy" src="{{ url('public/assets/images/icons/map.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="https://www.google.com/maps/place/Prilient+Information+Technologies/@26.9110729,75.7409566,17z/data=!3m1!4b1!4m5!3m4!1s0x396db57fb715b991:0xc48c1dd3f8718fe5!8m2!3d26.9110681!4d75.7431453">Jaipur,
                         Rajasthan, India<span>Visit Our Office</span></a>
                 </div>
             </div>
         </div>
         <div class="contact-data mt30">
             <h4>Follow Us On:</h4>
             <div class="social-media-linkz mt10">
                 <a href="{{FACEBOOK}}" target="blank"><i class="fa fa-facebook"></i></a>
                 <a href="{{TWITTER}}" target="blank"><i class="fa fa-twitter"></i></a>
                 <a href="{{INSTAGRAM}}" target="blank"><i class="fa fa-instagram"></i></a>
                 <a href="{{LINKEDIN}}" target="blank"><i class="fa fa-linkedin"></i></a>
             </div>
         </div>
     </div>
 </div>
 <div id="progress-bar"></div>

<!--  <div class="onloadpage" id="page_loader">
     <div class="pre-content">
         <div class="logo-pre"><img  loading="lazy" src="{{ url('public/assets/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
         <div class="pre-text- text-radius text-light text-animation bg-b">Welcome to Prilient Technologies</div>
     </div>
 </div> -->
 <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
     <div class="container-fluid m-pad">
         <div class="menu-header">
             <div class="dsk-logo"><a class="nav-brand" href="{{ url('') }}">
             @if(request()->is('/') || request()->is('blog') || request()->is('blog/*'))    
                     <img  loading="lazy" src="{{ url('public/assets/images/white-logo.png') }}" alt="Logo" class="mega-white-logo" />        
                @else
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
                     <img  loading="lazy" width="125" src="{{ url('public/assets/images/black_logo.png') }}" alt="Logo" class="mega-white-logo" /> 
                @endif
                     <img  loading="lazy" src="{{ url('public/assets/images/logo.png') }}" alt="Logo" class="mega-darks-logo" />
                 </a>
             </div>
             <div class="custom-nav" role="navigation">
                 <ul class="nav-list">
                     <li>
                         <a href="{{ url('') }}" class="menu-links">Home</a>
                     </li>
                     <li>
                         <a href="{{ url('about-us') }}" class="menu-links">About us</a>
                     </li>
                     <li>
                         <div class="dropdown">
                             <a class="menu-links" href="#">Services</a>
                             <ul class="dropdown-menu cs-dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <li>
                                     <a class="dropdown-item" href="{{ url('product-design') }}">Product Design  <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('product-design/ui-ux-design') }}">UI/UX
                                                 Design</a></li>
                                         <li><a class="dropdown-item" href="{{ url('product-design/app-design') }}">App Design</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ url('product-design/web-design') }}">Web Design</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{url('app_development')}}">Mobile App Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('app_development/ios-development')}}">ios
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development/android-development')}}">Android
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development/flutter-development')}}">Flutter App
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development/react-native-development')}}">React Native
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{url('web_development')}}">Web Development  <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('web_development/ecommerce-development')}}">Ecommerce
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('web_development/CMS-development')}}">CMS
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('web_development/CRM-development')}}">CRM
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('web_development/ERP-development')}}">ERP
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('web_development/enterprise-development')}}">Enterprise
                                                 Applications</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('DevOps') }}">DevOps</a>
                                 </li>
                                  <li>
                                     <a class="dropdown-item" href="{{ url('cyber_security') }}">Cyber Security</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('product_prototype') }}">Product Prototype  <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('product_prototype/mvp') }}">MVP</a></li>
                                         <li><a class="dropdown-item" href="{{ url('product_prototype/poc') }}">PoC</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Analytics & BI <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('Analytics_and_BI/modern-data-warehouses')}}">Modern Data
                                                 Warehouses</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Analytics_and_BI/big-data')}}">Big Data</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ url('Analytics_and_BI/data-visualization')}}">Data
                                                 Visualization</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Analytics_and_BI/data-science')}}">Data
                                                 Science</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('NextGen') }}">Next-Gen Technologies <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('NextGen/AWS-ampify-&-AWS-lamda') }}">AWS Ampify & AWS
                                                 Lamda</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen/firebase') }}">Firebase</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen/chatbot-dvelopment') }}">Chatbot Dvelopment</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen/AI-&-ML-development') }}">AI & ML
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen/RPA-development') }}">RPA Development</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('frontend_development') }}">Front-end Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('frontend_development/angular-development') }}">Angular
                                                 JS Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development/react-development') }}">React JS
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development/vue-development') }}">Vue
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development/html-development') }}">HTML5
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Quality Engineering <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/mobile-testing') }}">Mobile
                                                 Testing </a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/ERP-testing') }}">ERP
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/game-testing') }}">Game
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/big-data-testing') }}">Big Data
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/blockchain-testing') }}">Blockchain
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/security-testing') }}">Security
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/regression-testing') }}">Regression
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" rel="canonical"
                                                 href="{{ url('Quality_Engineering/localization-testing') }}">Localization Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/functional-testing') }}">Functional
                                                 Testing Services</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering/usability-testing') }}">Usability
                                                 Testing</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('backend_development') }}">Back-end Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('backend_development/php-development')}}">PHP
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/node-development')}}">Node Js
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/pyton-development')}}">Python
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/laravel-development')}}">Laravel
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/symfony-development')}}">Symfony
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/java-development')}}">Java
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development/dotnet-development')}}">.NET
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('blockchain_development') }}">Blockchain Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('blockchain_development/smart-contracts-development') }}">Smart
                                                 Contracts Development</a></li>
                                         <li><a class="dropdown-item" rel="canonical"
                                                 href="{{ url('blockchain_development/blockchain-wallet-development') }}">Blockchain Wallet
                                                 Development</a></li>
                                         <li><a class="dropdown-item" rel="canonical"
                                                 href="{{ url('blockchain_development/decentralized-development') }}">Decentralized Apps
                                                 (dApps)</a></li>
                                         <li><a class="dropdown-item" rel="canonical"
                                                 href="{{ url('blockchain_development/private-development') }}">Private 
                                                 Blockchain</a></li>
                                         <li><a class="dropdown-item" rel="canonical"
                                                 href="{{ url('blockchain_development/tokenization-development') }}">Tokenization</a></li>
                                         <li><a class="dropdown-item" href="{{ url('blockchain_development/NFT-development') }}">NFT</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('fullStack_development') }}">Full-stack Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('fullStack_development/MEAN-stack-development') }}">MEAN
                                                 Stack Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('fullStack_development/MERN-stack-development') }}">MERN
                                                 Stack Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('cloud_strategy') }}">Cloud Strategy & Development <span>&#187;</span></a>
                                     <ul class="dropdown-menu dropdown-submenu dropdown-submenu-last">
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/SaaS_Development') }}">SaaS Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/IaaS_Development') }}">IaaS Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/PaaS_Development') }}">PaaS Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/Cloud_App_Development') }}">Cloud App Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/Cloud_Migration') }}">Cloud Migration</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/Amazon_cloud') }}">Amazon cloud</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/Cloud_Security') }}">Cloud Security</a></li>
                                         <li><a class="dropdown-item" href="{{ url('cloud_strategy/Azure_Cloud_Service') }}">Azure Cloud Service</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li>
                         <a href="{{ url('technologies') }}" class="menu-links">Technologies</a>
                     </li>
                     <li>
                         <a href="{{ route('blog') }}" class="menu-links">Blog</a>
                     </li>
                     <li>
                         <a href="#" class="menu-links">guide</a>
                     </li>
                     <li>
                         <a href="{{ url('contact-us') }}" class="menu-links">Contact us</a>
                     </li>

                 </ul>
                 <ul class="nav-list right-end-btn">
                     <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-br bg-btn3 btshad-b2 lnk">Request A
                             Quote <span class="circle"></span></a> </li>
                     <li class=" darkmodeswitch">
                         <div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox"
                                     id="niwax" /> <span class="slider round"></span> </label> </div>
                     </li>
                     <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample"
                             class="btn-round- btn-br bg-btn2"><i class="fa fa-bars"></i></a></li>
                     <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                 </ul>
                 </ul>
             </div>
         </div>
    
         <nav id="main-nav">
             <ul class="first-nav">
                 <li>
                     <a href="{{ url('') }}" class="menu-links">Home</a>
                 </li>
                 <li>
                     <a href="{{ url('about-us') }}" class="menu-links">About us</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Services</a>
                     <ul>
                         <li>
                             <a href="#">Product Design</a>
                             <ul>
                                 <li><a href="{{ url('product-design/ui-ux-design') }}">UI/UX Design</a></li>
                                 <li><a href="{{ url('product-design/app-design') }}">App Design</a></li>
                                 <li><a href="{{ url('product-design/web-design') }}">Web Design</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Mobile Development</a>
                             <ul>
                                 <li><a href="{{url('app_development/ios-development')}}">ios Development</a></li>
                                 <li><a href="{{url('app_development/android-development')}}">Android Development</a></li>
                                 <li><a href="{{url('app_development/flutter-development')}}">Flutter App Development</a></li>
                                 <li><a href="{{url('app_development/react-native-development')}}">React Native Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Web Development</a>
                             <ul>
                                 <li><a href="{{ url('web_development/ecommerce-development')}}">Ecommerce Development</a></li>
                                         <li><a href="{{ url('web_development/CMS-development')}}">CMS Development</a></li>
                                         <li><a href="{{ url('web_development/CRM-development')}}">CRM Development</a></li>
                                         <li><a href="{{ url('web_development/ERP-development')}}">ERP Development</a></li>
                                         <li><a href="{{ url('web_development/enterprise-development')}}">Enterprise Applications</a></li>
                             </ul>
                         </li>

                         <li>
                            <a class="dropdown-item" href="{{ url('DevOps') }}">DevOps</a>
                        </li>
                          <li>
                             <a class="dropdown-item" href="{{ url('cyber_security') }}">Cyber Security</a>
                         </li>
                         <li>
                             <a href="#">Product Prototype</a>
                             <ul>
                                 <li><a href="{{ url('product_prototype/mvp') }}">MVP</a></li>
                                         <li><a href="{{ url('product_prototype/poc') }}">PoC</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Analytics & BI</a>
                             <ul>
                                 <li><a href="{{ url('Analytics_and_BI/modern-data-warehouses')}}">Modern Data
                                                 Warehouses</a></li>
                                         <li><a href="{{ url('Analytics_and_BI/big-data')}}">Big Data</a>
                                         </li>
                                         <li><a href="{{ url('Analytics_and_BI/data-visualization')}}">Data
                                                 Visualization</a></li>
                                         <li><a href="{{ url('Analytics_and_BI/data-science')}}">Data
                                                 Science</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Next-Gen Technologies</a>
                             <ul>
                                 <li><a href="{{ url('NextGen/AWS-ampify-&-AWS-lamda') }}">AWS Ampify & AWS
                                                 Lamda</a></li>
                                         <li><a href="{{ url('NextGen/firebase') }}">Firebase</a></li>
                                         <li><a href="{{ url('NextGen/chatbot-dvelopment') }}">Chatbot Dvelopment</a>
                                         </li>
                                         <li><a href="{{ url('NextGen/AI-&-ML-development') }}">AI & ML
                                                 Development</a></li>
                                         <li><a href="{{ url('NextGen/RPA-development') }}">RPA Development</a>
                                         </li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Front-end Development</a>
                             <ul>
                                  <li><a href="{{ url('frontend_development/angular-development') }}">Angular
                                                 JS Development</a></li>
                                         <li><a href="{{ url('frontend_development/react-development') }}">React JS
                                                 Development</a></li>
                                         <li><a href="{{ url('frontend_development/vue-development') }}">Vue
                                                 Development</a></li>
                                         <li><a href="{{ url('frontend_development/html-development') }}">HTML5
                                                 Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Quality Engineering</a>
                             <ul>
                                 <li><a href="{{ url('Quality_Engineering/mobile-testing') }}">Mobile
                                                 Testing </a></li>
                                         <li><a href="{{ url('Quality_Engineering/ERP-testing') }}">ERP
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/game-testing') }}">Game
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/big-data-testing') }}">Big Data
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/blockchain-testing') }}">Blockchain
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/security-testing') }}">Security
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/regression-testing') }}">Regression
                                                 Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/localization-testing') }}">Localization Testing</a></li>
                                         <li><a href="{{ url('Quality_Engineering/functional-testing') }}">Functional
                                                 Testing Services</a></li>
                                         <li><a href="{{ url('Quality_Engineering/usability-testing') }}">Usability
                                                 Testing</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Back-end Development</a>
                             <ul>
                                 <li><a href="{{url('backend_development/php-development')}}">PHP
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/node-development')}}">Node Js
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/pyton-development')}}">Python
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/laravel-development')}}">Laravel
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/symfony-development')}}">Symfony
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/java-development')}}">Java
                                                 Development</a></li>
                                         <li><a href="{{url('backend_development/dotnet-development')}}">.NET
                                                 Development</a></li>
                             </ul>
                         </li>
                         
                         <li>
                             <a href="#">Blockchain Development</a>
                             <ul>
                                 <li><a href="{{ url('blockchain_development/smart-contracts-development') }}">Smart
                                                 Contracts Development</a></li>
                                         <li><a href="{{ url('blockchain_development/blockchain-wallet-development') }}">Blockchain Wallet
                                                 Development</a></li>
                                         <li><a href="{{ url('blockchain_development/decentralized-development') }}">Decentralized Apps
                                                 (dApps)</a></li>
                                         <li><a href="{{ url('blockchain_development/private-development') }}">Private 
                                                 Blockchain</a></li>
                                         <li><a href="{{ url('blockchain_development/tokenization-development') }}">Tokenization</a></li>
                                         <li><a href="{{ url('blockchain_development/NFT-development') }}">NFT</a>
                                         </li>

                             </ul>
                         </li>
                         <li>
                             <a href="#">Full-stack Development</a>
                             <ul>
                                 <li><a href="{{ url('fullStack_development/MEAN-stack-development') }}">MEAN
                                                 Stack Development</a></li>
                                         <li><a href="{{ url('fullStack_development/MERN-stack-development') }}">MERN
                                                 Stack Development</a></li>

                             </ul>
                         </li>
                         <li>
                             <a href="#">Cloud Strategy & Development</a>
                             <ul>
                                 <li><a href="{{ url('cloud_strategy/SaaS_Development') }}">SaaS Development</a></li>
                                         <li><a href="{{ url('cloud_strategy/IaaS_Development') }}">IaaS Development</a></li>
                                         <li><a href="{{ url('cloud_strategy/PaaS_Development') }}">PaaS Development</a></li>
                                         <li><a href="{{ url('cloud_strategy/Cloud_App_Development') }}">Cloud App Development</a></li>
                                         <li><a href="{{ url('cloud_strategy/Cloud_Migration') }}">Cloud Migration</a></li>
                                         <li><a href="{{ url('cloud_strategy/Amazon_cloud') }}">Amazon cloud</a></li>
                                         <li><a href="{{ url('cloud_strategy/Cloud_Security') }}">Cloud Security</a></li>
                                         <li><a href="{{ url('cloud_strategy/Azure_Cloud_Service') }}">Azure Cloud Service</a></li>

                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="{{ url('technologies') }}" class="menu-links">Technologies</a>
                 </li>
                 <li>
                     <a href="{{ route('blog') }}" class="menu-links">Blog</a>
                 </li>
                <li>
                    <a href="#" class="menu-links">guide</a>
                </li>
                 <li>
                     <a href="{{ url('contact-us') }}" class="menu-links">Contact us</a>
                 </li>

             </ul>
             <ul class="bottom-nav">
                 <li class="prb">
                     <a href="tel:7976026086">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                             <path
                                 d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                         </svg>
                     </a>
                 </li>
                 <li class="prb">
                     <a href="mailto:ankit@prilient.com">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                             <path
                                 d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                             <path d="M0 0h24v24H0z" fill="none" />
                         </svg>
                     </a>
                 </li>
                 <li class="prb">
                     <a href="skype:Ankit Ola?chat">
                         <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                         </svg>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </header>

 <style>
/* .dropdown-menu > li .icon {
  box-sizing: border-box;
  transition: transform 0.3s;
  width: 14px;
  height: 14px;
  transform: rotate(180deg);
  position: relative;
} */

.dropdown-menu > li:hover {
    background:#e6e6e6;
}
/* .dropdown-menu > li:hover .icon {
    transform: rotate(0deg);
    } */
/* .dropdown-menu span{
    float:right;
} */
/*        
 .dropdown-menu > li .icon::before {
  content: "";
  display: block;
  width: 14px;
  height: 0px;
  border-bottom: solid 1.9px #212529;
  position: absolute;
  bottom: 5px;
  transform: rotate(90deg);
  transition: width 0.3s;
}
.dropdown-menu > li:hover  .icon::before {
  content: "";
  display: block;
  width: 0px;
  height: 0px;
  position: absolute;
  bottom: 5px;
  transform: rotate(90deg);
}
.dropdown-menu > li .icon::after {
  content: "";
  display: block;
  width: 14px;
  height: 0px;
  border-bottom: solid 1.9px #212529;
  position: absolute;
  bottom: 5px;
} */
</style>