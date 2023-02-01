@extends('front.layouts.app')
@section('title', "front-end development services")
@section('meta_keywords', "front-end development services")
@section('meta_description', "front-end development services is the process of building components that interact with users. Examples are the user interface, buttons, user-entered data, websites.")

@section('content') 
  <section class="hero-card-web-2 bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="container">
              <div class="row">
               <div class="col-lg-5 alignCenter">
                  <div class="hero-heading-sec text-center">
                     <h2 class="wow fadeIn name-text" data-wow-delay="0.3s"><span>Front-end Development</span></h2>
                     <p class="wow fadeIn" data-wow-delay="0.6s">Whether you need to add new functionality to your website or want to re-design it, getting a professional front-end developer on board is a good way to go.</p>
                     <p class="wow fadeIn" data-wow-delay="0.6s"></p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
               </div>
               <div class="col-lg-2"></div>
               <div class="col-lg-5 mt-sm-3">
                   @include('front.pages.request_quote')
               </div>
            </div>
            </div>
         </div>
      </section>
  
  <!--End why-choose-->
<div class="container">
      <!-- <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>Get the best front-end development services from the experts!</h3>
            <p>Whether you need to add new functionality to your website or want to re-design it, getting a professional front-end developer on board is a good way to go.</p>
          </div>
      </div> -->
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>World-class Front-end Development Services</h3>
            <p>If you want to offer the best user experience possible to your customers, then you must have an expertly designed website that works great across all platforms and devices. Our Front End Development Services have been designed to provide you with the most powerful tools and resources available to build outstanding web applications, desktop software, and more. Regardless of your experience level or skill set, we can help you get started with some of the most powerful tools available today, or take your existing projects to the next level of excellence.</p>
            <p class="mt-2">
            Priilient believes that a website should reflect your business. That’s why we offer a wide range of front-end development services to help you create an online presence that will make an impact on your customers.            </p>  
        </div>
      </div>
      <div class="col-lg-12 text-center">
          <div class="common-heading  ">
            <h3>How Do We Get Best Results?</h3>
            <p>Our process starts with gathering information about your goals and objectives, so we can build a custom plan to meet your needs.</p>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-4 col-12 mt-4">
            <div class="card-service-equal h-100">
                <h4>Figuring-out Business Requirements</h4>
                <p>
                Our team will figure out your business requirements and create a design plan to give you exactly what you need. This means that we’ll ask you questions, listen to your answers, and then use them to create a design that is perfect for your business.
            </p>
          </div>
          </div>
          <div class="col-lg-4 col-12 mt-4">
            <div class="card-service-equal h-100">
                <h4>Creating Sample Product</h4>
                <p>
                We create sample products for our clients to help them understand how we work and what we can do for them. This helps both parties get a better idea of what they’re looking for and whether or not it’s worth pursuing.            </p>
          </div>
          </div>
          <div class="col-lg-4 col-12 mt-4">
            <div class="card-service-equal h-100">
                <h4>Product Development</h4>
                <p>
                Then we’ll work with you to finalize your product. With us, you can rest assured your design will be implemented correctly and will look just the way you want.            </p>
          </div>
          </div>
          <div class="col-lg-4 col-12 mt-4">
            <div class="card-service-equal h-100">
                <h4>Bug Testing</h4>
                <p>
                After product development, Our team of QA engineers performs a thorough round of testing to ensure that your site is running smoothly. We use both manual and automated testing methods to provide you with an extensive report on our findings.           </p>
          </div>
          </div>
          <div class="col-lg-4 col-12 mt-4">
            <div class="card-service-equal h-100">
                <h4>Delivery</h4>
                <p>
                Finally, we’ll get to you. We’ll deliver everything you need for your website to be a success. Our team will work with you on a regular basis to make sure that your website is always meeting or exceeding your expectations.                    </p>
          </div>
          </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
          <div class="common-heading  ">
            <h3>The Services We Provide for Front-end Development</h3>  
            <p>Front-end Development is, simply put, a bundle of technologies used to make websites and apps appear visually attractive. Let us take care of your Front-end development needs by working with our Front-end Development team.</p>  
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-4 col-12 mt-4">
                <div class="card-service-equal h-100 card service-content line3">
                <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                <h5 class="mb10">Angular JS Development</h5>
                <p>
                As AngularJS developers, we have extensive experience. Angular is a popular client-side JavaScript framework to build well-structured, testable, and maintainable single-page applications. You can get extensive knowledge on angular js from our training series, or you can choose any of our Development Services like Web Application Development, Mobile App Development, and Ecommerce Website Development based on your requirement. A team of expert architects and developers works hard to deliver high-quality products that give a good ROI to clients.    </p>  
                <a href="{{ url('product-design/ui-ux-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
            </div>
          <div class="col-lg-4 col-12 mt-4">
                <div class="card-service-equal h-100 card service-content line3">
                <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                <h4>React JS Development</h4>
                <p>
                Our React JS developers use features like two-way data binding, directives, and controllers to build a highly interactive web interface. We develop faster and more engaging web applications that increase your conversion rates. Moreover, We ensure high performance by leveraging AOT (Ahead Of Time) compilation to produce static code during build time, giving our React JS apps unmatched speed for faster page loads and quick response times even on mobile devices.
    </p>
    <a href="{{ url('product-design/ui-ux-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
          </div>
          </div>
          <div class="col-lg-4 col-12 mt-4">
                <div class="card-service-equal h-100 card service-content line3">
                <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                <h4>Vue JS Development</h4>
                <p>
                Building user interfaces with Vue.js is easy. It offers data-reactive components with a simple and flexible API. Vue’s composable, modular architecture means you can build encapsulated components that are only responsible for themselves, and then combine them however you like. Our team uses Vue JS to develop interactive web applications that load quickly and work across multiple devices. 
    </p>
    <a href="{{ url('product-design/ui-ux-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
            </div>
          <div class="col-lg-4 col-12 mt-4">
                <div class="card-service-equal h-100 card service-content line3">
                <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                <h4>HTML 5 Development</h4>
                <p>
                HTML 5 offers developers a multitude of new elements and abilities to make websites more rich and interactive. Our HTML 5 Development Services use these new features to develop cleaner, faster sites. The new code is better for accessibility and readability, too. The standards are designed to work on any device that has access to an internet connection—from desktop computers down to mobile phones.     
    </p>
    <a href="{{ url('product-design/ui-ux-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <div class="common-heading  ">
            <h3>Industries We Served</h3>  
            <p>We serve clients in a large number of enterprises, including monetary services, training services, and banking services, and that's only the tip of the iceberg. No matter what your industry or organization size, we have a group that can assist you with arriving at your objectives.</p>  
        </div>
      </div>
      <div class="row justify-content-center">
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Finance</h4>
            <p>
            Front-end development is a great way to add functionality to your website, making it more interactive and user-friendly. In financial services such as accounting and investment management, a well-designed interface can improve productivity by providing users with direct access to the information they need.
        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Education Services</h4>
            <p>
            Front-end development services are still a new industry but it is gaining popularity in the education sector. We have been providing our service to various educational institutes for many years now and we have seen that they have benefited immensely from our services.
        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>eCommerce Development</h4>
            <p>
            In eCommerce Development, we have an expert team to develop your website. Whether you want to build a new store or revamp your existing one, our team of dedicated professionals will create an intuitive and user-friendly shopping experience for your customers.        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Banking Services</h4>
            <p>
            Banking Services are an important aspect of any business. Banks are liable for overseeing cash, and they need to have a decent connection point that makes it simple for clients to get to their records. This is where front-end developers come in. Front-end developers specialize in making user interfaces that are clean, simple, and user-friendly.    
        </p>
      </div>
      </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
          <div class="common-heading">
            <h3> Why Prilient is Best For Your Next Project?</h3>    
            <p>
            Prilient is your one-stop solution for all your front-end needs. With us, you have a dedicated team of expert UI and UX designers, developers, content writers, and customer support agents who will create an experience that works seamlessly on any device.
            </p>
        </div>
      </div>
      <div class="row justify-content-center pb-5">
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Streamline Process</h4>
            <p>
            Our expert team takes pride in its streamlined process. The moment you decide to work with us, we will assign you a project manager who will provide you with regular updates and handle your communications. We also have an open-door policy that allows you to come to talk directly with our developers if there are any questions or concerns about your project.
        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Hassel-Free Onboarding</h4>
            <p>
            We want your experience with our team to be awesome. That’s why we offer hassle-free onboarding—we want you to succeed and enjoy working with us. From setting up your account so that managing content is super easy, to set expectations for project duration (just put your finger on those dates and let us know when you’re ready), we aim to make your first experience a positive one. 
        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>Affordable Pricing</h4>
            <p>
            Not all professionals are created equal, which is why it’s important to do your research and find a web design company that offers great value for money. Our team offers affordable pricing, but our high-quality work guarantees results and ensures a return on investment. We won’t leave you hanging. If we make an error, we will pay for it—guaranteed. We also offer special deals to customers who request volume discounts and multiple projects at once.
        </p>
      </div>
      </div>
      <div class="col-lg-4 col-12 mt-4">
        <div class="card-service-equal h-100">
            <h4>24/7 Customer Support</h4>
            <p>
            We offer 24/7 client care so you can reach us at whatever point you want help. Our group of engineers, designers, and developers are dependably on reserve to assist you with any various forms of feedback.
        </p>
      </div>
      </div>
      </div>
    
    

    </div>
  <!-- content end -->
@endsection