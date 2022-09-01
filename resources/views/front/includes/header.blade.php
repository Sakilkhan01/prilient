 <!--Start sidebar -->
 <div class="Prilientofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
     style="visibility: visible; z-index: 999999;">
     <div class="offcanvas-body">
         <div class="cbtn animation">
             <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                     aria-label="Close"></button></div>
         </div>
         <div class="form-block sidebarform">
             <h4>Request A Quote</h4>
             <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                 <div class="row">
                     <div class="form-group col-sm-12">
                         <input type="text" id="name" placeholder="Enter name" required data-error="Please fill Out">
                         <div class="help-block with-errors"></div>
                     </div>
                     <div class="form-group col-sm-12">
                         <input type="email" id="email" placeholder="Enter email" required>
                         <div class="help-block with-errors"></div>
                     </div>
                 </div>
                 <!-- <div class="row">
              <div class="form-group col-sm-12">
                <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-sm-12">
                <select name="Dtype" id="Dtype" required>
                  <option value="">Select Requirement</option>
                  <option value="web">web</option>
                  <option value="graphic">graphic</option>
                  <option value="video">video</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div> -->
                 <div class="form-group">
                     <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                     <div class="help-block with-errors"></div>
                 </div>
                 <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span
                         class="circle"></span></button>
                 <div id="msgSubmit" class="h3 text-center hidden"></div>
                 <div class="clearfix"></div>
             </form>
         </div>
         <div class="getintouchblock mt30">
             <h4>Get In Touch</h4>
             <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to
                 share with us.</p>
             <div class="media mt15">
                 <div class="icondive"><img src="{{ url('assets/images/icons/call.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="tel:7976026086">+91-7976026086 <span>Mon-Fri 9am - 6pm</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img src="{{ url('assets/images/icons/whatsapp.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="tel:7976026086">+91-7976026086 <span>Mon-Fri 9am - 6pm</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img src="{{ url('assets/images/icons/mail.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="https://separateweb.com/cdn-cgi/l/email-protection#e0898e868fa097858293899485ce838f8d"><span
                             class="__cf_email__"
                             data-cfemail="dbb2b5bdb49bacbeb9a8b2afbef5b8b4b6">info@prilient.com</span>
                         <span>Online Support</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img src="{{ url('assets/images/icons/map.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="https://separateweb.com/cdn-cgi/l/email-protection#f990979f96b98e9c9b8a908d9cd79a9694">Jaipur,
                         Rajasthan, India<span>Visit Our Office</span></a>
                 </div>
             </div>
         </div>
         <div class="contact-data mt30">
             <h4>Follow Us On:</h4>
             <div class="social-media-linkz mt10">
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-facebook"></i></a>
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-twitter"></i></a>
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-instagram"></i></a>
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-linkedin"></i></a>
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-youtube"></i></a>
                 <a href="javascript:void(0)" target="blank"><i class="fa fa-pinterest-p"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!--end sidebar -->
 <!-- top progress bar start-->
 <div id="progress-bar"></div>
 <!-- top progress bar end -->

 <!--Start Preloader -->
 <div class="onloadpage" id="page_loader">
     <div class="pre-content">
         <div class="logo-pre"><img src="{{ url('assets/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
         <div class="pre-text- text-radius text-light text-animation bg-b">Welcome to Prilient Technologies</div>
     </div>
 </div>
 <!--End Preloader -->
 <!--Start Header -->
 <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
     <div class="container-fluid m-pad">
         <div class="menu-header">
             <div class="dsk-logo"><a class="nav-brand" href="{{ url('/') }}">
                     <img src="{{ url('assets/images/white-logo.png') }}" alt="Logo" class="mega-white-logo" />
                     <img src="{{ url('assets/images/logo.png') }}" alt="Logo" class="mega-darks-logo" />
                 </a>
             </div>
             <div class="custom-nav" role="navigation">
                 <ul class="nav-list">
                     <li>
                         <a href="{{ url('/') }}" class="menu-links">Home</a>

                     </li>
                     <li>
                         <a href="{{ url('/about-us') }}" class="menu-links">About us</a>
                     </li>
                     <li>
                         <div class="dropdown">
                             <a class="menu-links" href="#">Services</a>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <li>
                                     <a class="dropdown-item" href="#">Product Design &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('product_design') }}">UI/UX
                                                 Design</a></li>
                                         <li><a class="dropdown-item" href="{{ url('product_design') }}">App Design</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ url('product_design') }}">Web Design</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Mobile Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('app_development')}}">ios
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development')}}">Android
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development')}}">Flutter App
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('app_development')}}">React Native
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Web Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('web_development')}}">Ecommerce
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('web_development')}}">CMS
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('web_development')}}">ERP
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('web_development')}}">Enterprise
                                                 Applications</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="{{ url('/DevOps') }}">DevOps</a>
                                 </li>
                                  <li>
                                     <a class="dropdown-item" href="{{ url('/cyber_security') }}">Cyber Security</a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Product Prototype &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('product_strategy') }}">MVP</a></li>
                                         <li><a class="dropdown-item" href="{{ url('product_strategy') }}">PoC</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Analytics & BI &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Modern Data
                                                 Warehouses</a></li>
                                         <li><a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Big Data</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Business
                                                 Intelligence</a></li>
                                         <li><a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Data
                                                 Visualization</a></li>
                                         <li><a class="dropdown-item" href="{{url('Analytics_and_BI')}}">Data
                                                 Science</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Next-Gen Technologies &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('NextGen') }}">AWS Ampify & AWS
                                                 Lamda</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen') }}">Firebase</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen') }}">Chatbot Dvelopment</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen') }}">AI & ML
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('NextGen') }}">RPA Development</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Front-end Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('frontend_development') }}">Angular
                                                 JS Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development') }}">React JS
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development') }}">Vue
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{ url('frontend_development') }}">HTML5
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Quality Engineering &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Mobile
                                                 Testing </a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">ERP
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Game
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Big Data
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Blockchain
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Security
                                                 Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Regression
                                                 Testing</a></li>
                                         <li><a class="dropdown-item"
                                                 href="{{ url('Quality_Engineering') }}">Localization Testing</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Functional
                                                 Testing Services</a></li>
                                         <li><a class="dropdown-item" href="{{ url('Quality_Engineering') }}">Usability
                                                 Testing</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Back-end Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">PHP
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">Node Js
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">Pyton
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">Laravel
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">Symfony
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">Java
                                                 Development</a></li>
                                         <li><a class="dropdown-item" href="{{url('backend_development')}}">.NET
                                                 Development</a></li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Blockchain Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('blockchain_development') }}">Smart
                                                 Contracts Development</a></li>
                                         <li><a class="dropdown-item"
                                                 href="{{ url('blockchain_development') }}">Blockchain Wallet
                                                 Development</a></li>
                                         <li><a class="dropdown-item"
                                                 href="{{ url('blockchain_development') }}">Decentralized Apps
                                                 (dApps)</a></li>
                                         <li><a class="dropdown-item"
                                                 href="{{ url('blockchain_development') }}">Private/Public
                                                 Blockchain</a></li>
                                         <li><a class="dropdown-item"
                                                 href="{{ url('blockchain_development') }}">Tokenization</a></li>
                                         <li><a class="dropdown-item" href="{{ url('blockchain_development') }}">NFT</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a class="dropdown-item" href="#">Full-stack Development &raquo;</a>
                                     <ul class="dropdown-menu dropdown-submenu">
                                         <li><a class="dropdown-item" href="{{ url('fullStack_development') }}">MEAN
                                                 Stack Development:</a></li>
                                         <li><a class="dropdown-item" href="{{ url('fullStack_development') }}">MERN
                                                 Stack Development:</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </div>
                         <!-- <a href="{{ url('/service') }}" class="menu-links">Services</a>
                         <div class="nx-dropdown">
                           <div class="sub-menu-section">
                              <div class="container">
                                 <div class="col-md-12">
                                    <div class="sub-menu-center-block">
                                       <div class="sub-menu-column">
                                          <ul>  
                                          <div class="menuheading"> Overview <span class="badge bg-primary">New</span></div>
                                          <div class="menuheading">Product Design </div>
                                                                                   
                                             <li><a href="{{ url('product_design') }}">UI/UX Design</a></li>                                             
                                             <li><a href="{{ url('product_design') }}">App Design</a></li>                                             
                                             <li><a href="{{ url('product_design') }}">Web Design</a></li> 
                                             <li><a href="#"></a></li>                                              
                                            
                                               
                                              
                                             <div class="menuheading">Mobile Development</div>
                                                                                   
                                                <li><a href="{{url('app_development')}}">ios Development</a></li>                                             
                                                <li><a href="{{url('app_development')}}">Android Development</a></li>                                             
                                                <li><a href="{{url('app_development')}}">Flutter App Development</a></li> 
                                                <li><a href="{{url('app_development')}}">React Native Development</a></li>                                               
                                             
                                          </ul>
                                          <div class="menuheading">Web Development</div>
                                          <ul>
                                           
                                                 <li><a href="{{url('web_development')}}">Ecommerce Development</a></li>                                             
                                                <li><a href="{{url('web_development')}}">CMS Development</a></li>                                             
                                                <li><a href="{{url('web_development')}}">ERP Development</a></li> 
                                                <li><a href="{{url('web_development')}}">Enterprise Applications</a></li>
                                                <li><a href="#"></a></li> 
                                             </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          
                                             <div class="menuheading">Product Prototype </div>
                                             <ul>                                       
                                                <li><a href="{{ url('product_strategy') }}">MVP</a></li>                                             
                                                <li><a href="{{ url('product_strategy') }}">PoC</a></li> 
                                                <li><a href="#"></a></li>  
                                             </ul>
                                             <div class="menuheading">Analytics & BI</div>
                                             <ul>
                                              <li><a href="{{url('Analytics_and_BI')}}">Modern Data Warehouses</a></li>                                             
                                                   <li><a href="{{url('Analytics_and_BI')}}">Big Data</a></li>                                             
                                                   <li><a href="{{url('Analytics_and_BI')}}">Business Intelligence</a></li> 
                                                   <li><a href="{{url('Analytics_and_BI')}}">Data Visualization</a></li>
                                                   <li><a href="{{url('Analytics_and_BI')}}">Data Science</a></li>
                                                   <li><a href="#"></a></li> 
                                                </ul>
                                                <div class="menuheading">Next-Gen Technologies</div>
                                                <ul>
                                                 <li><a href="{{ url('NextGen') }}">AWS Ampify & AWS Lamda</a></li>                                             
                                                      <li><a href="{{ url('NextGen') }}">Firebase</a></li>                                             
                                                      <li><a href="{{ url('NextGen') }}">Chatbot Dvelopment</a></li> 
                                                      <li><a href="{{ url('NextGen') }}">AI & ML Development</a></li>
                                                      <li><a href="{{ url('NextGen') }}">RPA Development</a></li>
                                                      <li><a href="#"></a></li> 
                                                   </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          <div class="menuheading">Front-end Development</div>
                                          <ul>
                                          
                                                <li><a href="{{ url('fullStack_development') }}">Angular JS Development</a></li>                                             
                                                <li><a href="{{ url('fullStack_development') }}">React JS Development</a></li>                                             
                                                <li><a href="{{ url('fullStack_development') }}">Vue Development</a></li> 
                                                <li><a href="{{ url('fullStack_development') }}">HTML5 Development</a></li>
                                                <li><a href="#"></a></li> 
                                             
                                                <div class="menuheading">Quality Engineering</div>
                                                <ul>
                                                
                                                      <li><a href="{{ url('Quality_Engineering') }}">Mobile Testing </a></li>                                             
                                                      <li><a href="{{ url('Quality_Engineering') }}">ERP Testing</a></li>                                             
                                                      <li><a href="{{ url('Quality_Engineering') }}">Game Testing</a></li> 
                                                      <li><a href="{{ url('Quality_Engineering') }}">Big Data Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Blockchain Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Security Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Regression Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Localization Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Functional Testing Services</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}">Usability Testing</a></li>
                                                      <li><a href="{{ url('Quality_Engineering') }}"></a></li> 
                                          </ul>
                                       </div>
                                       <div class="sub-menu-column">
                                          
                                          <div class="menuheading">Back-end Development</div>
                                          <ul>
                                          
                                                <li><a href="{{url('backend_development')}}">PHP Development</a></li>                                             
                                                <li><a href="{{url('backend_development')}}">Node Js Development</a></li>                                             
                                                <li><a href="{{url('backend_development')}}">Pyton Development</a></li> 
                                                <li><a href="{{url('backend_development')}}">Laravel Development</a></li>
                                                <li><a href="{{url('backend_development')}}">Symfony Development</a></li>
                                                <li><a href="{{url('backend_development')}}">Java Development</a></li>
                                                <li><a href="{{url('backend_development')}}">.NET Development</a></li>
                                                <li><a href="#"></a></li> 
                                           </ul>
                                           <div class="menuheading">Blockchain Development</div>
                                          <ul>
                                          
                                                <li><a href="{{ url('blockchain_development') }}">Smart Contracts Development</a></li>                                             
                                                <li><a href="{{ url('blockchain_development') }}">Blockchain Wallet Development</a></li>                                             
                                                <li><a href="{{ url('blockchain_development') }}">Decentralized Apps (dApps)</a></li> 
                                                <li><a href="{{ url('blockchain_development') }}">Private/Public Blockchain</a></li>
                                                <li><a href="{{ url('blockchain_development') }}">Tokenization</a></li>
                                                <li><a href="{{ url('blockchain_development') }}">NFT</a></li>
                                                <li><a href="#"></a></li> 
                                    </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </li>
                     <li>
                         <a href="#" class="menu-links">Technologies</a>
                     </li>
                     <li>
                         <a href="#" class="menu-links">Portfolio</a>
                     </li>
                     <li>
                         <a href="{{ route('blog') }}" class="menu-links">Blog</a>
                     </li>
                     <li>
                         <a href="{{ url('contact-us') }}" class="menu-links">Contact us</a>
                     </li>

                 </ul>
                 <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                 <ul class="nav-list right-end-btn">
                     <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample"
                             class="btn-round- btn-br bg-btn2"><i class="fa fa-bars"></i></a></li>
                     <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-br bg-btn3 btshad-b2 lnk">Request A
                             Quote <span class="circle"></span></a> </li>
                     <li class="hidedesktop darkmodeswitch">
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

         <!--Mobile Menu-->
         <nav id="main-nav">
             <ul class="first-nav">
                 <li>
                     <a href="index.html" class="menu-links">Home</a>
                 </li>
                 <li>
                     <a href="about us.html" class="menu-links">About us</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Services</a>
                     <ul>
                         <li>
                             <a href="#">Overview</a>

                         </li>
                         <li>
                             <a href="#">Product Design</a>
                             <ul>
                                 <li><a href="#">UI/UX Design</a></li>
                                 <li><a href="#">App Design</a></li>
                                 <li><a href="#">Web Design</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Mobile Development</a>
                             <ul>
                                 <li><a href="#">iOS Development</a></li>
                                 <li><a href="#">Andriod Development</a></li>
                                 <li><a href="#">Flutter App Development</a></li>
                                 <li><a href="#">React Native Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Web Development</a>
                             <ul>
                                 <li><a href="#">Ecommerce Development</a></li>
                                 <li><a href="#">CMS Development</a></li>
                                 <li><a href="#">ERP Development</a></li>
                                 <li><a href="#">Enterprise Applications</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Product Prototype</a>
                             <ul>
                                 <li><a href="#">MVP</a></li>
                                 <li><a href="#">POC</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Analytics & BI</a>
                             <ul>
                                 <li><a href="#">Modern Data Warehouses</a></li>
                                 <li><a href="#">Big Data</a></li>
                                 <li><a href="#">Business Intelligence</a></li>
                                 <li><a href="#">Data Visualization</a></li>
                                 <li><a href="#">Data Science</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Next-Gen Technologies</a>
                             <ul>
                                 <li><a href="#">AWS Ampify & AWS Lamda</a></li>
                                 <li><a href="#">Firebase</a></li>
                                 <li><a href="#">Chatbot Development</a></li>
                                 <li><a href="#">AI & ML Development</a></li>
                                 <li><a href="#">RPA Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Front-end Development</a>
                             <ul>
                                 <li><a href="#">Angular JS Development</a></li>
                                 <li><a href="#">React JS Development</a></li>
                                 <li><a href="#">Vue Development</a></li>
                                 <li><a href="#">HTML5 Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Back-end Development</a>
                             <ul>
                                 <li><a href="#">PHP Development</a></li>
                                 <li><a href="#">Node JS Development</a></li>
                                 <li><a href="#">Python Development</a></li>
                                 <li><a href="#">Laravel Development</a></li>
                                 <li><a href="#">Symfony Development</a></li>
                                 <li><a href="#">Java Development</a></li>
                                 <li><a href="#">.NET Development</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Quality Engineering</a>
                             <ul>
                                 <li><a href="#">Mobile Testing</a></li>
                                 <li><a href="#">ERP Testing</a></li>
                                 <li><a href="#">Game Testing</a></li>
                                 <li><a href="#">Big Data Testing</a></li>
                                 <li><a href="#">Blockchain Testing</a></li>
                                 <li><a href="#">Security Testing</a></li>
                                 <li><a href="#">Regression Testing</a></li>
                                 <li><a href="#">Localization Testing</a></li>
                                 <li><a href="#">Functional Testing Services</a></li>
                                 <li><a href="#">Usability Testing</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Blockchain Development</a>
                             <ul>
                                 <li><a href="#">Smart Contracts Development</a></li>
                                 <li><a href="#">Blockchain Wallet Development</a></li>
                                 <li><a href="#">Decentralized Apps (dApps)</a></li>
                                 <li><a href="#">Private/Public Blockchain</a></li>
                                 <li><a href="#">Tokenization</a></li>
                                 <li><a href="#">NFT</a></li>

                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="#" class="menu-links">Technologies</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Portfolio</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Blog</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Contact us</a>
                 </li>

             </ul>
             <ul class="bottom-nav">
                 <li class="prb">
                     <a href="tel:+91 7610947287">
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
                     <a href="#">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                             <path
                                 d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                             <path d="M0 0h24v24H0z" fill="none" />
                         </svg>
                     </a>
                 </li>
                 <li class="prb">
                     <a href="skype:Prilient.company?call">
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
 <!--End Header -->