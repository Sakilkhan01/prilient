@extends('front.layouts.app')
@section('content') 
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
                        <li><a href="#">Career</a></li>
                     </ul>
                  </div>
                  <div class="bread-title">
                     <h2>CAREER</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End why-choose-->
<!-- <div class="container">
   <div class="col-lg-12 text-center py-5">
      <div class="common-heading  ">
         <h3>Career @ Prilient</h3>
         <p>Pursue your career in a growing and rewarding environment while working along side a great group of professionals</p>
      </div>
   </div>
</div> -->
<!--Start statistics-->
<div class="statistics-section bg-gradient6 pad-tb tilt3d">
   <div class="container">
      <div class="row justify-content-center t-ctr">
         <div class="col-lg-4 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/startup.svg') }}" alt="years" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">15</span><span>+</span>
                  <p>Year In Business</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/team.svg') }}" alt="team" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">80</span><span>+</span>
                  <p>Team Members</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row small t-ctr">
         <div class="col-lg-3 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/deal.svg') }}" alt="happy" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">450</span>
                  <p>Happy Clients</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/computers.svg') }}" alt="project" class="img-fluid" />
               </div>
               <div class="statnumb counter-number">
                  <span class="counter">48</span><span>k</span>
                  <p>Projects Done</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/worker.svg') }}" alt="work" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">95</span><span>k</span>
                  <p>Hours Worked</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="statistics mb0">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ url('assets/images/icons/customer-service.svg') }}" alt="support" class="img-fluid" />
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
<!--End statistics-->
<!-- <div class="container">
   <div class="col-lg-12 py-5">
      <h3>Choose <span style="color:red">The Career</span></h3>
      <p>
         We work to deliver profitability in your business – with effective communication, consulting and interactive solutions. Following an Agile Work Approach, we make sure you get the ideal solutions at minimum expenses.
      </p>
   </div>
   <div class="row">
      <div class="col-md-4 col-sm-6">
         <div class="outer">
            <div class="value_heading">
               <span class="icon">
                  <img src="{{ url('frontent/images/career_icon1.png') }}">
               </span>
               <h5>The Right Approach</h5>
            </div>
            <p>Career development is a continuous process. It demands good exposure and growth opportunity to help an individual grow. Our standardized selection procedures and incisive hiring system allows us to establish right fit of job with the resource. We emphasize on the fine details and characteristics of the individuals to make them perform what they are best at and give them ample of scope to work, learn and grow.</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class="outer">
            <div class="value_heading">
               <span class="icon">
                  <img src="{{ url('frontent/images/career_icon2.png') }}">
               </span>
               <h5>Incessant Growth</h5>
            </div>
            <p>At Octal, we endorse policies that work in favor of your career growth. We emphasize on the activities and systems that go well with your career plans. <br>We also conduct employee counseling sessions from time to time to tune-in with their interrelated personal and professional needs that have a bearing on their career goals.</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class="outer">
            <div class="value_heading">
               <span class="icon">
                  <img src="{{ url('frontent/images/career_icon3.png') }}">
               </span>
               <h5>Rich Work Culture</h5>
            </div>
            <p>We promote a congenial and collaborative work environment at Octal. The work-life balance at Octal is such that it adds more living energy to our workforce and helps them create and contribute their best. They work better in teams and feel more positive and motivated towards the common and individual goals.</p>
         </div>
      </div>
   </div>
</div> -->
@if(!$posts->isEmpty())
<div class="container mt-5 pt-5">
   <div class="career_opening_wrap">
      <h2>Current Openings:</h2>
      <div class="current_opening_slider">
         <div class="item">
            <!-- <div class="outer mb-0">
               <div>
                  <h5>HR Recruiter</h5>
                  <p>Vacancies: 1 / Work Status: Full time / Experience: 1-3 Years / Location: Jaipur</p>
               </div>
               <a href="mailto:hr@prilient.com" class="btn">Apply Now <img src="{{ url('frontent/images/button_arrow_w.png ') }}" class="right_icon" alt="Mobile App Development Services"></a>
            </div> -->
            @foreach($posts as $post)
            <div class="outer">
               <div>
                  <h5>{{ $post->designation }}</h5>
                  <p>
                     Vacancies: {{ $post->vacancies }} / 
                     Work Status: 
                     @if($post->work_status ==1)
                     Full Time
                     @elseif($post->work_status ==2)
                     Part Time
                     @else
                     Internship
                     @endif / 
                     Experience: {{ $post->experience }} / 
                     Location: {{ $post->location }}
                  </p>
               </div>
               <a href="mailto:hr@prilient.com" class="btn">Apply Now <img src="{{ url('frontent/images/button_arrow_w.png ') }}" class="right_icon" alt="Mobile App Development Services"></a>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@endif
@if(!$clients->isEmpty())
<div class="container mt-5 pt-5">
   <div class="banner_bootom_wrap">
      <div class="middle_client">
          <div class="owl-carousel career-slider">
          	@foreach($clients as $v)
           <div class="text-center w-50">
              <img class="img-fluid" src="{{ url('upload/client/',$v->logo) }}">
           </div>
           @endforeach
        </div>
      </div>
   </div>
</div>
@endif
<style type="text/css">
   .outer {
   border-style: solid;
   border-width: 1px;
   border-color: #e7e7e7;
   border-radius: 10px;
   background-color: #fff;
   box-shadow: 0 31px 48px 0 rgb(231 231 231 / 8%);
   padding: 25px;
   margin: 0;
   height: 100%;
   }
   .value_heading {
   display: flex;
   align-items: center;
   margin-bottom: 20px;
   }
   .outer p {
   font-size: 16px;
   line-height: 26px;
   margin: 0;
   }
   .value_heading h5 {
   margin: 0 0 0 12px;
   color: #2f3f56;
   font-size: 18px;
   word-break: break-word; 
   }
   .career_opening_wrap {
   background: #1f2a3a;
   background-size: cover;
   padding: 35px;
   border-radius: 18px;
   }
   .career_opening_wrap h2 {
   text-align: center;
   color: #fff;
   font-size: 30px;
   margin-bottom: 20px;
   }
   .career_opening_wrap .outer {
   border-width: 1px;
   border-color: rgb(231, 231, 231);
   border-style: dashed;
   border-radius: 10px;
   background-color: rgb(255, 255, 255);
   box-shadow: 0px 0px 20px 0px rgb(57 73 99 / 10%);
   margin-bottom: 35px;
   padding: 16px 35px;
   display: flex;
   align-items: center;
   }
   .career_opening_wrap .outer a.btn {
   margin-left: auto;
   display: flex;
   align-items: center;
   }
   .career_opening_wrap .outer a.btn {
   border-radius: 10px;
   background: linear-gradient(to right,#673ab7 0,#2196f3 100%);
   color: #fff;
   font-size: 15px;
   font-weight: 300;
   padding: 12px 20px;
   border: none;
   }
   .career_opening_wrap .outer a.btn:hover {
   opacity: 0.8;
   }
   .career_opening_wrap .outer .btn .right_icon {
   margin-left: 12px;
   transition: .4s ease all;
   }
   @media (max-width: 575.98px){
   .career_opening_wrap .outer {
   padding: 15px;
   }
   @media (max-width: 479.98px){
   .career_opening_wrap {
   padding: 15px;
   }
   }
   }
   @media (max-width: 767.98px){
   .career_opening_wrap .outer {
   display: block;
   }
   .career_opening_wrap .outer a.btn {
   display: inline-block;
   margin-top: 10px;
   }
   }

   .banner_bootom_wrap {
    border-radius: 20px;
    background: linear-gradient(to right,#673ab7 0,#2196f3 100%);
    box-shadow: 0 0 20px 0 rgb(57 73 99 / 15%);
    padding: 20px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
	}
	.banner_bootom_wrap .middle_client {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    width: 100%;
	}
</style>
@endsection