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
                     <form method="post" id="subscribeForm" action="javascript:void(0)">
                        @csrf
                           <input type="email" placeholder="Email Your Address" id="subscribe_email" name="email" value="">
                           <button type="submit" name="submit" id="subscribe" class="lnk btn-main bg-btn">Subscribe <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                        <div class="error_msg"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-row2">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                     <a class="navbar-brand mt30 mb25 f-dark-logo" href="#"> <img src="{{ url('public/assets/images/logo.png') }}" alt="Logo"/></a>
                     <a class="navbar-brand mt30 mb25 f-white-logo" href="#"> <img src="{{ url('public/assets/images/white-logo.png') }}" alt="Logo" /></a>
                     <p>Prilient is a technology and development company dedicated to creating cutting-edge products for businesses. </p>
                     <a href="{{ url('contact-us') }}" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center text-lg-left">
                     <h5>Contact Us</h5>
                     <ul class="footer-address-list ftr-details">
                        <li>
                           <span><i class="fa fa-envelope"></i></span>
                           <p>Email <span> <a href="#"><span class="">info@prilient.com</span></a></span></p>
                        </li>
                        <li>
                           <span><i class="fa fa-phone"></i></span>
                           <p>Phone <span> <a href="tel:7976026086">+91 7976026086</a></span></p>
                        </li>
                        <li>
                           <span><i class="fa fa-map-marker"></i></span>
                           <p>Address <span> {{ADDRESS_INDIA}}</span></p> 
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6 text-center text-lg-left">
                     <h5>Our Services</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="{{url('/Analytics_and_BI/big-data')}}">Big Data </a></li>
                        <li><a href="{{url('/Analytics_and_BI/modern-data-warehouses')}}">Modern Data Warehouse</a></li>
                        <li><a href="{{ url('/NextGen/AI-&-ML-development') }}">AI & ML Development</a></li>
                        <li><a href="{{ url('blockchain_development/NFT-development') }}">NFT</a></li> 
                        <li><a href="{{ url('/DevOps') }}">Devops</a></li>
                        <li><a href="{{ url('/cyber_security') }}">Cyber Security</a></li>
                        <li><a href="{{ url('web_development') }}">Web Development</a></li>
                        <li><a href="{{ url('software_development') }}">Software Development</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-sm-6 text-center text-lg-left">
                     <h5>Useful Links</h5>
                     <ul class="footer-address-list link-hover">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/service') }}">Services</a></li>
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
      <div id="myPopup" class="popup hide">
        <div class="popup-header text-center">
          Congratulations!!
          <span class="close toggle" data-target="myPopup">close</span>
        </div>
        <div class="popup-body">
          <div class="message_success"></div>
        </div>
        <div class="popup-footer">
          <button class="toggle button" data-target="myPopup">Got it !</button>
        </div>
      </div>
      <script src="{{ url('public/assets/js/jquery.min.js') }}"></script>
      <script src="{{ url('public/assets/js/bootstrap.bundle.min.js') }}"></script> 
      <script src="{{ url('public/assets/js/plugin.min.js') }}"></script>
      <script src="{{ url('public/assets/js/preloader.js') }}"></script>
      <script src="{{ url('public/assets/js/dark-mode.js') }}"></script>
      <script src="{{ url('public/assets/js/main.js') }}" defer></script>      
      <script src="{{ url('public/assets/js/progress-bar.js') }}"></script>  
      
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

         .hide {
         visibility: hidden;
         opacity: 0;
         transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
         -moz-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
         -o-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
         -webkit-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
         }

         .close {
         position: fixed;
         right: 0;
         top: 0;
         width: 51px;
         height: 51px;
         font-size: 0;
         cursor: pointer;
         }

         .close:before,
         .close:after {
         content: "";
         position: absolute;
         background: #767676;
         -moz-border-radius: 1px;
         -webkit-border-radius: 1px;
         -o-border-radius: 1px;
         border-radius: 1px;
         left: 14px;
         right: 14px;
         top: 30px;
         height: 3px;
         -webkit-transform: rotate(45deg);
         -moz-transform: rotate(45deg);
         -o-transform: rotate(45deg);
         transform: rotate(45deg);
         transition: all 100ms ease-in;
         -moz-transition: all 100ms ease-in;
         -webkit-transition: all 100ms ease-in;
         -o-transition: all 100ms ease-in;
         }

         .close:after {
         -moz-transform: rotate(-45deg);
         -webkit-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
         transform: rotate(-45deg);
         }

         .popup {
         position: fixed;
         top: 50%;
         left: 50%;
         -webkit-transform: translateX(-50%) translateY(-50%);
         -moz-transform: translateX(-50%) translateY(-50%);
         -o-transform: translateX(-50%) translateY(-50%);
         transform: translateX(-50%) translateY(-50%);
         background: floralwhite;
         -moz-border-radius: 5px;
         -o-border-radius: 5px;
         -webkit-border-radius: 5px;
         border-radius: 5px;
         width: 600px;
         box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.09),
            0px 11px 12px 7px rgba(0, 0, 0, 0.02);
         -moz-transition: all 120ms;
         -webkit-transition: all 120ms;
         -o-transition: all 120ms;
         transition: all 120ms;
         z-index: 999999;
         padding: 25px;
         color: #5e5e5e;
         }

         @media screen and (max-width: 1000px) {
         .popup {
            width: 80%;
         }
         }

         .popup-header {
         text-transform: uppercase;
         font-size: 18px;
         }

         .popup-body {
         padding: 25px 0;
         }

         .button {
         padding: 10px 15px;
         border: 1px solid #f5f5f5;
         text-transform: uppercase;
         box-shadow: 1px 2px 3px #f5f5f5;
         color: #5e5e5e;
         cursor: pointer;
         transition: all 120ms ease-in;
         outline: none;
         }

         .button:hover {
         box-shadow: 1px 3px 5px #e9e9e9;
         transform: translateY(-1px);
         }

         .button:active,
         .button:visited {
         transform: translateY(1px);
         outline: none;
         box-shadow: 1px 2px 3px #f5f5f5;
         }

         .error{
color: #FF0000; 
}
    
    </style>
    <a href="https://api.whatsapp.com/send?phone=7976026086&text=Hello" class="float whatsapp_icon" target="_blank">
<i class="fa fa-whatsapp my-float my-whatsapp_icon"></i>
</a>

<script type="text/javascript">
   
   $(document).on('click', '.toggle', function(event) {
      event.preventDefault();
      var target = $(this).data('target');
      $('#' + target).toggleClass('hide');
   });
$('#subscribe').click(function(){
   let email = $('#subscribe_email').val();
   if(email == '' && email == 0){
      $('.error_msg').html('<p class="text-danger">Please enter an email address.</p>');
   }
   else if(IsEmail(email)==false){
      $('.error_msg').html('<p class="text-danger">Please enter valid email address.</p>');
   }
   else{
      $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $('.error_msg').html('');
      $('#subscribe').html('Please Wait...');
      $("#subscribe").attr("disabled", true);
      $.ajax({
         url: "{{url('subscribe')}}",
         type: "POST",
         data: $('#subscribeForm').serialize(),
      success: function( response ) {
         if(response.status){
            $('#subscribe').html('Subscribe  <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span>');
            $("#subscribe").attr("disabled", false);
            $('#subscribeForm')[0].reset();
            $('.message_success').html(response.message);
            $("#myPopup").removeClass("hide");
         }
         else{
            $('.error_msg').html('<p class="text-danger">'+response.message+'</p>'); 
            $('#subscribe').html('Subscribe  <i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span>');
            $("#subscribe").attr("disabled", false);
         }
      }
    });
   }
    
});

function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
}
    
  </script>
