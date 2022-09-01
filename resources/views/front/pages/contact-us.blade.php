@extends('front.layouts.app')
@section('content') 
{!! NoCaptcha::renderJs() !!}
<!-- content start -->
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-1" data-background="{{ url('assets/images/banner/9.jpg') }}">
   <div class="text-block">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 v-center">
               <div class="bread-inner">
                  <div class="bread-menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="bread-title">
                     <h2>CONTACT US</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="col-lg-12 col-12 text-center py-5">
      <h3>Request for service</h3>
   </div>
   <div class="container">
      <form class=" py-5" action="{{ route('contact_store') }} " enctype="multipart/form-data" method="post">
         @csrf
         <div class="row">
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
               <div class="form-group">
                   <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name" value="{{ old('name') }}">
                 @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
               <div class="form-group">
                   <input type="text" name="last_name" class="form-control" id="exampleInputName" placeholder="Last Name (Optional)" value="{{ old('last_name') }}">
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
                <div class="form-group numberDrop">
                   <input type="tel" name="phone" class="form-control w-100" id="country-code" placeholder="Contact No" value="{{ old('phone') }}">
                   @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                 </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                   <input type="text" name="business_email" class="form-control" id="exampleInputName" placeholder="Business Email" value="{{ old('business_email') }}">
                   @if ($errors->has('business_email'))
                    <span class="text-danger">{{ $errors->first('business_email') }}</span>
                @endif
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                   <input type="text" name="company" class="form-control" id="exampleInputName" placeholder="Company (Optional)" value="{{ old('company') }}">
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                   <input type="text" name="request_type" class="form-control" id="exampleInputName" placeholder="Subject" value="{{ old('request_type') }}">
               </div>
               <!-- <div class="form-group">
               <select class="form-select" name="request_type">
                 <option value="Request for Proposal">Request for Proposal</option>
                 <option value="Gereral Query">Gereral Query</option>
               </select>
               </div> -->
            </div>
            <div class="col-lg-12 col-12 mt-2">
               <div class="form-group">
                <textarea class="form-control" name="description" rows="10" placeholder="Tell us about your project"  value="{{ old('description') }}"></textarea>
              @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>
            </div>
         </div>
         <!-- <div class="row">
            <div class="col-lg-6 col-12">
               <div>
                  <input type="file" name="attach">
               </div>
               <div class="form-check-inline mt-lg-4 mt-2">
                 <label class="form-check-label">
                   <input checked type="checkbox" class="form-check-input" value=""> Subscribe to newsletter
                 </label>
               </div>
            </div>
            <div class="col-lg-6 col-12">
               {!! NoCaptcha::display() !!}
               @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
            </div>
            
         </div> -->
         <div class="col-lg-12 text-right mt-3">
               <div>
                  <button class="btn custom_cont_button buttons" type="submit">Submit</button>
               </div>
            </div>
      </form>
   </div>
</section>
<section>
   <div class=" py-4">
      <div class="col-lg-12 col-12 text-center">
         <h2>Contact Details</h2>
      </div>
      <section class="our-office pad-tb">
         <div class="container">
            <div class="row justify-content-center upset shape-numm">
               <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                  <div class="office-card">
                     <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                        <img src="{{ url('assets/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>New York (U.S.A.)</h4>
                        <p>603 FA Forest Avenue, New York, USA 10021</p>
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
                        <img src="{{ url('assets/images/location/jaipur.png') }}" alt="Jaipur" class="img-fluid" />
                     </div>
                     <div class="office-text">
                        <h4>Jaipur (Rajasthan, India)</h4>
                        <p>412-13, 4th Floor, Ever Shine Tower, Amrapali Circle, Vaishali Nagar Jaipur</p>
                        <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fa fa-map-marker"></i></a>
                        <a href="tel:7976026086" target="blank" class="btn-outline rount-btn"><i class="fa fa-phone"></i></a>
                        <a href="mailto:ankit@prilient.com" target="blank" class="btn-outline rount-btn"><i class="fa fa-envelope"></i></a>
                        <a href="skype:Ankit Ola?chat" target="blank" class="btn-outline rount-btn"><i class="fa fa-skype"></i></a>
                     </div>
                  </div>
               </div>
                
            </div>
         </div>
      </section>
   </div>
</section>
     


<style type="text/css">
   .numberDrop .iti{
      width: 100%;
   }
   .g-recaptcha{
      float: right;
   }
   .custom_cont_button {
    background: #e66d70!important;
    border-radius: 5px;
    color: #fff!important;
    padding: 7px 30px!important;
    transition: 0.3s ease-in-out!important;
   }
   .custom_cont_button:hover {
       box-shadow: 6px 6px 17.6px 0.4px rgb(0 0 0 / 17%);
   }
   .bg-graylight{
      background-color: #f8f8f8;
   }
</style>
 
  <script>
    var input = document.querySelector("#country-code");
    intlTelInput(input, {
      initialCountry: "auto",
      geoIpLookup: function (success, failure) {
        $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          success(countryCode);
        });
      },
    });
  </script>
@endsection