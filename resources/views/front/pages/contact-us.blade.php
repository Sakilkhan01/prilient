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
                  <div class="bread-title">
                     <h1>CONTACT US</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>

   <div class="container mt-3">
   @if( Session::has( 'success' ))
   <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ Session::get('success') }}
  </div>
   @elseif( Session::has( 'error' ))
   <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ Session::get('error') }}
  </div>
   @endif
   </div>
   <div class="col-lg-12 col-12 text-center py-5">
      <h3>Request for service</h3>
   </div>
   <div class="container">
      <form class=" py-5" action="{{ route('contact_store') }} " enctype="multipart/form-data" method="post">
         @csrf
         <div class="row">
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
               <div class="form-group">
                  <label for="InputName">Name <span class="text-danger">*</span></label>
                   <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter your name" value="{{ old('name') }}">
                 @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
               <div class="form-group">
                  <label for="InputLastName">Last Name</label>
                   <input type="text" name="last_name" class="form-control" id="InputLastName" placeholder="Enter your last name" value="{{ old('last_name') }}">
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2 mt-lg-0">
                <div class="form-group numberDrop">
                  <label for="InputName">Phone Number <span class="text-danger">*</span></label>
                   <input type="tel" name="phone" class="form-control w-100" id="country-code" placeholder="Contact No" value="{{ old('phone') }}">
                   @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                 </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                  <label for="InputName">Business Email <span class="text-danger">*</span></label>
                   <input type="text" name="business_email" class="form-control" id="exampleInputName" placeholder="Business Email" value="{{ old('business_email') }}">
                   @if ($errors->has('business_email'))
                    <span class="text-danger">{{ $errors->first('business_email') }}</span>
                @endif
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                  <label for="InputName">Company</label>
                   <input type="text" name="company" class="form-control" id="exampleInputName" placeholder="Enter your company" value="{{ old('company') }}">
               </div>
            </div>
            <div class="col-lg-4 col-12 mt-2">
               <div class="form-group">
                  <label for="InputName">Subject <span class="text-danger">*</span></label>
                   <input type="text" name="subject" class="form-control" id="exampleInputName" placeholder="Enter your subject" value="{{ old('subject') }}">
                   @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                   @endif
               </div>
            </div>
            <div class="col-lg-12 col-12 mt-2">
               <div class="form-group">
                <label for="InputName">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" name="description" rows="10" placeholder="Tell us about your project"  value="{{ old('description') }}"></textarea>
              @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
              </div>
            </div>
         </div>
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
 
@endsection