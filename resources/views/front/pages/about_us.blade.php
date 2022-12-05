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
              <div class="bread-title">
                <h1>About Prilient Technologies</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start About-->
  <section class="about-agency pad-tb block-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 v-center">
          <div class="about-image">
            <img src="{{ url('assets/images/about/company-about.png') }}" alt="about us" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="common-heading text-l ">
            <span>Know Who We Are </span>
            <h2>About Company</h2>
            <p>We are not just developers - we are designers, project managers, analysts, and strategists who work in an agile environment to ensure that we deliver the highest quality possible, on time and within budget. Our clients rely on us to bring their visions to life through cutting-edge technology and strategies that differentiate them from their competition, allowing them to stay ahead of the curve as new challenges arise in the ever-changing business landscape. By balancing an enterprise focus with an entrepreneurial spirit, we bridge our clients’ needs with their present realities to deliver the most effective solutions available.</p>
            <p>The team at Prilient Technology has been giving top-notch design services to clients across the globe starting around 2007. Whether you're keen on versatile or web development, blockchain development, Game Development, Cyber Security, Mobile App Development, or whatever else, our exceptionally talented and experienced engineers can assist your organization with tackling its innovation issues as fast and productively as could really be expected.
            </p>
          </div>
          <div class="row in-stats small about-statistics">
            <!-- <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb counter-number">
                  <span class="counter">40</span><span>+</span>
                  <p>Dedicated Team</p>
                </div>
              </div>
            </div> --><!-- 
            <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb">
                  <span class="counter">150</span><span>+</span>
                  <p>Current Projects</p>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 col-sm-4">
              <div class="statistics mb0">
                <div class="statnumb counter-number">
                  <span class="counter">60</span><span>+</span>
                  <p>Projects Done</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End About-->
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
                        <span class="counter">3</span><span>+</span>
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
                        <img src="{{ url('assets/images/icons/deal.svg') }}" alt="happy" class="img-fluid" />
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
                        <img src="{{ url('assets/images/icons/computers.svg') }}" alt="project" class="img-fluid" />
                     </div>
                     <div class="statnumb counter-number">
                        <span class="counter">60</span><span>+</span>
                        <p>Projects Done</p>
                     </div>
                  </div>
               </div>
               <!-- <div class="col-lg-3 col-sm-6">
                  <div class="statistics">
                     <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{ url('assets/images/icons/worker.svg') }}" alt="work" class="img-fluid" />
                     </div>
                     <div class="statnumb">
                        <span class="counter">95</span><span>k</span>
                        <p>Hours Worked</p>
                     </div>
                  </div>
               </div> -->
               <div class="col-lg-4 col-sm-6">
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
  <!--Start why-choose-->
  <section class="why-choose pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="common-heading">
            <span>We Are Awesome</span>
            <h2 class="mb30">Why Choose Us</h2>
      <p>While picking a technology and development organization, it's vital to find one that will assist you with arriving at your goals, not simply foster something that looks perfect on paper.</p>
          </div>
        </div>
      </div>
      <div class="row upset">
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="{{ url('assets/images/icons/research.svg') }}" alt="service" class="img-fluid"/></div>
            <h4>Reasearch and Analysis</h4>
            <p>We do in-depth research and analysis for your product so that you can create new innovative products. We cover a wide range of industries and are constantly updating our skillset. You will get an accurate report on how to improve your product or service, what features to add, what features to remove, etc. We provide Visualize and analyze the data to help you understand our conclusions in all reports.
      </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="{{ url('assets/images/icons/chat.svg') }}" alt="service" class="img-fluid"/></div>
            <h4>Negotiation and power</h4>
            <p>It is one of our biggest strengths that is being reviewed by most of our clients from time to time. We do negotiation and power so well that we would always win on any case even when we have very little chance to win. You can get things done in your favor by using a variety of negotiation tactics and strategies. In addition to website design, we offer services related to negotiation and power in India.
      </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="{{ url('assets/images/icons/monitor.svg') }}" alt="service" class="img-fluid"/></div>
            <h4>Creative and innovative solutions</h4>
            <p>We are not your average technology company. Instead of cookie-cutter solutions, we focus on finding creative and innovative solutions to specific business challenges with a long-term vision in mind. We deliver high-quality results that enable businesses to grow their brands, manage and store data more efficiently, and innovate creatively. That’s why our clients choose us again and again for their projects.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt30">
          <div class="s-block up-hor">
            <div class="s-card-icon"><img src="{{ url('assets/images/icons/trasparency.svg') }}" alt="service" class="img-fluid"/></div>
            <h4>Easy access to information and transparency</h4>
            <p>The thing about transparent technologies is that you don’t really think about them; you just notice how easy they make your work. And that, above all else, is what we strive for: to make sure our solutions are transparent to our clients. Our goal is to allow you to concentrate on what you do best, while we take care of everything else. In the end, technology should serve a purpose rather than become its own end.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End why-choose-->
<div class="container">
<div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h2>Our MISSION & VISION</h2>
             <p>Technology is one of our top priorities and we strive to be a leading provider of solutions for businesses and individuals. We will be recognized as a leader in our industry by providing high-quality, cost-effective products and services that exceed customer expectations. We are PASSIONATE about making an impact on people’s lives through our work and we are COMMITTED to being exceptional at what we do.</p>
          </div>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h2>Our Diverse Culture and Innovative Team</h2>
          <p>Being a great leader is about more than just being able to make decisions. It’s also about communicating your vision, motivating others, and working through conflict. The ability to lead well is essential for success in all areas of life, not just business.</p> 
          <br><p>At Prilient, we have a highly skilled team of developers and programmers who have been developing cutting-edge technology for more than a decade. We are always looking to improve, making us one of the Industry's best IT companies.</p> 
          </div>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h2>Get New Insights Weekly</h2>
             <p>Drop your mail id and we will send you weekly insights on technology, development, and other stuff.  You can unsubscribe anytime.</p>
          </div>
      </div>
    </div>
  <!-- content end -->
@endsection