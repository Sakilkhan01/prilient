<?php
$service = DB::table('services')->where('status', 1)->select('id', 'name', 'slug')->get();
?>
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
             <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                @csrf
                 <div class="row">
                     <div class="form-group col-sm-12 mb-3">
                         <input type="text" class="mb-0" id="name" name="name" placeholder="Enter name">
                         <span class="text-danger" id="nameErrorMsg"></span>
                     </div>
                     <div class="form-group col-sm-12 mb-3">
                         <input type="email" class="mb-0" id="email" name="email" placeholder="Enter email">
                         <span class="text-danger" id="emailErrorMsg"></span>
                     </div>
                 </div>
                 <div class="form-group mb-3">
                     <textarea id="message" class="mb-0" rows="5" name="message" placeholder="Enter your message"></textarea>
                     <span class="text-danger" id="messageErrorMsg"></span>
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
                     <a href="mailto:info@prilient.com"><span>info@prilient.com</span>
                         <span>Online Support</span></a>
                 </div>
             </div>
             <div class="media mt15">
                 <div class="icondive"><img src="{{ url('assets/images/icons/map.svg') }}" alt="icon"></div>
                 <div class="media-body getintouchinfo">
                     <a href="">Jaipur,
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
 <div id="progress-bar"></div>

 <div class="onloadpage" id="page_loader">
     <div class="pre-content">
         <div class="logo-pre"><img src="{{ url('assets/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>
         <div class="pre-text- text-radius text-light text-animation bg-b">Welcome to Prilient Technologies</div>
     </div>
 </div>

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
                             @if(!empty($service))
                             <style> 
.last-menu:nth-last-child(1) .dropdown-submenu{
    top: -199px;
} 
.last-menu:nth-last-child(3) .dropdown-submenu,.last-menu:nth-last-child(4) .dropdown-submenu,.last-menu:nth-last-child(5) .dropdown-submenu{
    top: -79px;
} 
</style>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                             @foreach($service as $v)
                            <?php
                            $subService = DB::table('services_sub')->where('service_id', $v->id)->select('title', 'slug', 'id')->get();
                            ?>
                                 <li class=" last-menu">
                                     <a class="dropdown-item" href="{{ url('service',$v->slug) }}">{{$v->name}} @if(!$subService->isEmpty()) &raquo; @endif</a>
                                     @if(!$subService->isEmpty())
                                     <ul class="dropdown-menu dropdown-submenu">
                                        @foreach($subService as $item)
                                         <li>
                                            <a class="dropdown-item" href="{{ url('services', $item->slug) }}">{{ $item->title }}</a>
                                        </li>
                                        @endforeach
                                     </ul>
                                     @endif
                                 </li>
                             @endforeach
                             </ul>
                             @endif
                         </div>
                     </li>
                     <li>
                         <a href="{{ url('technologies') }}" class="menu-links">Technologies</a>
                     </li>
                     <li>
                         <a href="{{ route('blog') }}" class="menu-links">Blog</a>
                     </li>
                     <li>
                         <a href="{{ url('contact-us') }}" class="menu-links">Contact us</a>
                     </li>

                 </ul>
                 <ul class="nav-list right-end-btn">
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

         <nav id="main-nav">
             <ul class="first-nav">
                 <li>
                     <a href="{{ url('/') }}" class="menu-links">Home</a>
                 </li>
                 <li>
                     <a href="{{ url('/about-us') }}" class="menu-links">About us</a>
                 </li>
                 <li>
                     <a href="#" class="menu-links">Services</a>
                     @if(!empty($service))
                     <ul>
                        @foreach($service as $v2)
                        <?php
                            $subService2 = DB::table('services_sub')->where('service_id', $v2->id)->select('title', 'slug', 'id')->get();
                            ?>
                            <li>
                             <a href="#">{{$v2->name}}</a>
                            @if(!$subService2->isEmpty())
                                <ul>
                                @foreach($subService2 as $item2)
                                    <li><a href="{{ url('services', $item2->slug) }}">{{$item2->title}}</a></li>
                                @endforeach
                                </ul>
                            @endif
                            </li>
                        @endforeach
                        </ul>
                     @endif
                </li>
                 <li>
                     <a href="{{ url('technologies') }}" class="menu-links">Technologies</a>
                 </li>
                 <li>
                     <a href="{{ route('blog') }}" class="menu-links">Blog</a>
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

