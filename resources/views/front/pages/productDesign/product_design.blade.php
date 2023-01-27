@extends('front.layouts.app')
@section('title', "Product design services")
@section('meta_keywords', "product design")
@section('meta_description', "The definition of product design describes the process of imagining, creating, products that solve users' problems or specific needs. Our product design services create experiences.")
<style>
      .alignCenter{
            display: flex;
            align-items:center;
            justify-content:center;
      }
      .service-content{
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            border-radius:10px;
            padding: 25px;
            text-align:center;
      }
      .line3 p{
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3; 
            white-space: pre-wrap; 
      }
      .service-content img{
            transition: width .5s,height .5s;
            height: 60px;
            width: 60px;
            margin-bottom: 10px;
      }
      .btn-main-2 {
            padding: 0 32px;
            line-height: 48px;
            outline: 0;
            background-color: #ff1f8e;
            border: none;
            -webkit-border-radius: 100px;
            border-radius: 100px;
            display: inline-block;
            position: relative;
            -webkit-box-shadow: 0 10px 15px 0 rgb(233 30 99 / 15%);
            box-shadow: 0 10px 15px 0 rgb(233 30 99 / 15%);
            color:#fff;
            margin-top:12px
      }
</style>
@section('content') 
<section class="hero-card-web bg-gradient12 shape-bg3">
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div class="col-lg-5 alignCenter">
                  <div class="hero-heading-sec text-center">
                     <h2 class="wow fadeIn name-text" data-wow-delay="0.3s"><span>Product Design</span> </h2>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 wow fadeIn mt-5" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
               </div>
               <div class="col-lg-2"></div>
               <div class="col-lg-4">
                   @include('front.pages.request_quote')
               </div>
            </div>
         </div>
      </section>

<div class="container pb-5">
            <div class="frem-banner-img mt-5">
                  <img src="{{ url('assets/images/banner/UI-Ux-design.jpg') }}">
            </div>
            <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>Designing Products that People Will Love</h3>
            <p>Our designers utilize their mastery to make products that are aesthetically pleasing, yet in addition functional and easy to understand.</p>    
        </div>
      </div>
      <div class="col-lg-12 text-center">
          <div class="common-heading  ">
            <h3>We Make Your Dreams Come True</h3>
             <p>We have our own product design strategies to ensure that we are designing products that customers will adore. At the point when we start a project, every item needs a methodology before it goes into improvement. We really want to understand what it will do, how it will look and function, who will use it, and what its necessities are. When we comprehend these components, then, at that point, we can continue on and make ideas that tackle issues in astute ways. </p>
             <p>Our developers work as a group so they can guarantee nothing is overlooked or left out. We achieve both useful and appealing designs through this approach. Designing products should be tailored to our clients' needs. It doesn't matter whether you're working with us on one product or 100 products, we will always provide a fantastic experience.</p>
          </div>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>How Do We Achieve Our Goal?</h3>
             <p>In order to make products that people love, we must focus on our customers and what they need. Focusing on your user will help you in terms of both design decisions and functional decisions. </p>
           </div>
      </div>
      <div class="col-lg-12">
            <h4>Market Research & Development</h4>
            <p>
            In order to develop a successful product, we must first learn everything we can about your product and your target market. We want to know who you’re designing for, what they need, and how they use their products. In some cases, we may even conduct focus groups or surveys with your potential customers to get a sense of what they’re looking for in a new product.
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>Create a Solid Concept</h4>
            <p>
            The second stage of any project is establishing a solid concept, which comes in many forms. Whether it’s a written brief or verbal discussion with your client, you want to be on the same page from day one. This will also allow you to get an idea of what your clients are looking for and what their true needs and wants are. We always set up meetings with our clients early on so we can start creating meaningful concepts together as quickly as possible.
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>Taking the Prototype into Production</h4>
            <p>
            The third step is to take a prototype into production. Once we have a working prototype, then we can move on to making our product in bulk and delivering it to customers. We’ll take your prototype and create a fully functional, optimized version. Your website or application will be ready to launch, without being changed or butchered by a programmer, with all features working perfectly.
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>Getting Feedback From Your Customers</h4>
            <p>
            Whether you have a product idea or a need for assistance, our product designers are ready to help. Using your feedback, we'll create a prototype and then send it to your customers. This process will ensure that your product solves real problems and will be something people love using.
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>Feedforward to Final Product</h4>
            <p>
            Feedback from customers and users is very important to design a product. We get feedback from our customers so we can make the final product better.
            </p>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h1 class="text-radius text-light text-animation bg-b">Our Areas of Specialization</h1>
          </div>
      </div>
      <div class="row">
            <div class="col-lg-4 col-12">
                  <div class="card service-content line3">
                  <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                  <h5 class="mb10">UI/UX Design</h5>
                     <p>User Interface/User Experience (UI/UX) design services are a vital component of a company’s success in an increasingly technological world. For example, a website’s UI is what draws new customers in—its ease of use and overall look and feel—while UX design focuses on making sure that those same users have a seamless experience with the site once they actually make it to their intended destination. Both types of design are our specialty, so we can help you develop products that people will enjoy.</p>
                    <a href="{{ url('product-design/ui-ux-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="card service-content line3">
                  <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                     <h5 class="mb10">App Design</h5>
                     <p>
                        A lot of companies make their app to match specific products and services, and it’s something we really don’t recommend. Your app should be designed in such a way that it can stand on its own, or serve as an additional tool to your product/service offering. By offering exceptional experiences, you won’t need to rely on convincing users they need your app; they will use it because they want to use it.
                        </p>
                    <a href="{{ url('product-design/app-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="card service-content line3">
                  <img  loading="lazy" src="{{ url('assets/images/icons/Web development.svg') }}" alt="service">
                     <h5 class="mb10">Web Design</h5>
                     <p>
                        An effective web presence requires good web design. Whether you need a mobile, desktop, or tablet website, we provide both front-end and back-end development services. Our designers are equipped with best practices to create beautiful websites that function flawlessly on any device. When we design your website, you can be sure that it will not only look good but also convert traffic into leads or sales online.
                    </p>
                    <a href="{{ url('product-design/web-design') }}" class="btn-main-2 bg-btn2 lnk">Read More<i class="fa fa-chevron-right fa-icon"></i><span class="circle"></span></a>
              </div>
            </div>
            </div>

      <div class="col-lg-12 mt-5">
            <h4>How Can The Best Product Enable You to be a Market Leader?</h4>
            <p>
            Ultimately, you want a product that solves your customer’s problems and helps you stand out from your competitors. This is why it’s so important to ensure that you’re designing an optimal user experience (UX) and user interface (UI). UX/UI designers are experts in visual and interaction designers who are responsible for making sure a product or app looks as good as it works. From mobile apps to websites, their designs create rich, engaging experiences for customers and users alike.
            </p>
            <ul class="p-3" style="list-style-type: circle;">
                <li class="mb-3">Enhances Your Customer’s Satisfaction Rate</li>
                <li class="mb-3">Increases Market Share</li>
                <li class="mb-3">Offers Best Customers Services</li>
                <li class="mb-3">Real-time Customer Support</li>
                <li class="mb-3">Manage Your User Data Efficiently</li>
            </ul>
      </div>
      <div class="col-lg-12 text-center py-5">
          <div class="common-heading  ">
            <h3>Why Prilient is Most Suited For Your Product Design?</h3>
            <p>Prilient’s product design services ensure that you get exactly what you need to make your project a success.</p>
          </div>
      </div>
      <div class="col-lg-12">
            <h4>1. On-time Delivery</h4>
            <p>
            We are proud of our commitment to on-time delivery. We have an extensive network in multiple locations, meaning that we can get your product to you quickly and efficiently. 
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>2. Collaborative Work Culture</h4>
            <p>
            Collaboration is the key to success for companies in today's competitive environment. The collaborative work culture has been around for some time now. It is a work culture that promotes collaboration and teamwork among employees.
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>3. Goal-Oriented Team</h4>
            <p>
            Our goal is to help companies build great digital products with the help of our team of product designers. Our team is focused on the user experience and our main goal is to make sure that the product we design is intuitive and easy to use. 
            </p>
      </div>
      <div class="col-lg-12 mt-4">
            <h4>4. 24/7 Customer Assistance</h4>
            <p>
            For any questions or concerns, you may have, our customer support team is available 24/7. In the event of a technical issue, we are available to take your call and help solve the problem as soon as possible.
            </p>
      </div>
      <div class="col-lg-12 mt-4 mb-5">
            <h4>5. Chatbot Facility</h4>
            <p>
            It is a great way to interact with our customers and provide them with the best possible customer service. The live chat facility allows us to have a conversation with you in real-time.
            </p>
      </div>
            </div>
      </div>
    </div>
  <!-- content end -->
@endsection