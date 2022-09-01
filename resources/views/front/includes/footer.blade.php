<!--Start Footer-->
      <footer>
         <div class="footer-row1">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="email-subs">
                        <h3>Get New Insights Weekly</h3>
                        <p>Drop your mail id and we will send you weekly insights on technology, development and other stuff.  You can unsubscribe anytime.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 v-center">
                     <div class="email-subs-form">
                        <form>
                           <input type="email" placeholder="Email Your Address" name="emails">
                           <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-row2">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                     <a class="navbar-brand mt30 mb25 f-dark-logo" href="#"> <img src="{{ url('assets/images/logo.png') }}" alt="Logo"/></a>
                     <a class="navbar-brand mt30 mb25 f-white-logo" href="#"> <img src="{{ url('assets/images/white-logo.png') }}" alt="Logo" /></a>
                     <p>Prilient is a technology and development company dedicated to creating cutting-edge products for businesses. </p>
                     <a href="{{ url('contact-us') }}" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h5>Contact Us</h5>
                     <ul class="footer-address-list ftr-details">
                        <li>
                           <span><i class="fa fa-envelope"></i></span>
                           <p>Email <span> <a href="#"><span class="__cf_email__" data-cfemail="abc2c5cdc4ebc9ded8c2c5ced8d8c5cac6ce85c8c4c6">info@prilient.com</span></a></span></p>
                        </li>
                        <li>
                           <span><i class="fa fa-phone"></i></span>
                           <p>Phone <span> <a href="tel:+7976026086">+91 7976026086</a></span></p>
                        </li>
                        <li>
                           <span><i class="fa fa-map-marker"></i></span>
                           <p>Address <span> 412-13, 4th Floor,
                              Ever Shine Tower, Amrapali Circle,
                              Vaishali Nagar Jaipur</span></p>
                                
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <h5>Our Services</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="{{ url('/web_design') }}">Web Designing</a></li>
                        <li><a href="{{ url('web_development') }}">Web Development</a></li>
                        <li><a href="{{ url('software_development') }}">Software Development</a></li>
                        <!-- <li><a href="#">Product Management</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Graphics & Video</a></li> -->
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <h5>Useful Links</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/service') }}">Services</a></li>
                        <!-- <li><a href="#">Technologies</a></li> -->
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ url('privacy_policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/career') }}">Career</a></li>
                     </ul>
                  </div>
                  
               </div>
            </div>
         </div>
         
         <div class="footer-row3">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                      
                        <div class="footer-">
                           <p>© Copyright Prilient. All Rights Reserved<a href="prilient.com"></a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--End Footer-->
      
      <!-- js placed at the end of the document so the pages load faster -->
      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ url('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
      <script src="{{ url('assets/js/jquery.min.js') }}"></script>
      <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script> 
      <script src="{{ url('assets/js/plugin.min.js') }}"></script>
      <script src="{{ url('assets/js/preloader.js') }}"></script>
      <script src="{{ url('assets/js/dark-mode.js') }}"></script>
      <!--common script file-->
      <script src="{{ url('assets/js/main.js') }}"></script>      
      <script src="{{ url('assets/js/progress-bar.js') }}"></script>  
      <script>
   $(window).on('load',function(){
   var delayMs = 4000; // delay in milliseconds
   setTimeout(function(){
        $('#leadModal').modal('show');
    }, delayMs);
   });   
   
      </script>  
      <style type="text/css">
    .whatsapp_icon{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        left:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }
    .whatsapp_icon:hover{
        opacity: 0.8;
        color:white;
    }

    .my-whatsapp_icon{
        margin-top:16px;
    }
    </style>
    <a href="https://api.whatsapp.com/send?phone=7976026086&text=Hello" class="float whatsapp_icon" target="_blank">
<i class="fa fa-whatsapp my-float my-whatsapp_icon"></i>
</a>