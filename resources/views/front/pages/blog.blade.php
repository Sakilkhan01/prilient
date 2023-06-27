@extends('front.layouts.app')
@section('title',__('Blog | Prilient Technologies'))

@section('link')
  @if (Session::has('ifWww'))
      <link rel="canonical" href="https://www.prilient.com/blog" />
  @else
      <link rel="canonical" href="https://prilient.com/blog" />
  @endif
@stop
@section('content')
<link href="{{ url('public/frontent/blog/bootstrap/blog.css') }}?{{ rand() }}" type='text/css' rel="stylesheet">
<div class="container">
    <div class="category-tab">
      <span class="btn">Categories</span>
      <ul id="" class="scrolling-wrapper flex">
        <li><a class="active" href="">All</a></li>
        <li><a class="" href="">Technology</a></li>
        <li><a class="" href="">Cyber Security</a></li>
        <li><a class="" href="">Graphic Design</a></li>
        <li><a class="" href="">Digital Marketing</a></li>
        <li><a class="" href="">Business</a></li>
        <li><a class="" href="">Cyber Security</a></li>
        <li><a class="" href="">Graphic Design</a></li>
        <li><a class="" href="">Digital Marketing</a></li>
        <li><a class="" href="">Business</a></li>
      </ul>
    </div>

    <div class="row mb-5">
        <div class="col-lg-8 col-12 col-md-8 py-4 mt-3">
            <h4>Latest Blogs</h4>
            <div class="row">
                <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fab198c24.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments </h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>


              <!-- popular blog -->
            <h4 class="mt-5">Popular Blogs</h4>
            <div class="row">
                <div class="col-lg-6 col-12 mt-4 ">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fab198c24.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments </h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 mt-4">
                  <div class="blog-card">
                      <div class="inner-card">
                          <div class="img-wrapper"> 
                            <img src="https://prilient.com/public/upload/blog/62f1fb4de9714.jpg" alt="What you should know about Cybersecurity risk assessments"> 
                          </div>
                          <div class="p-3">
                            <div class="entry-meta">
                                <ul class="d-flex justify-content-between">
                                  <li class=""><i class="fa fa-pencil-square text-gray"></i> <a href="" class="text-gray"> Sakil</a></li>
                                  <li class=""><i class="fa fa-user-circle-o text-gray"></i> <a href="" class="text-gray">5530</a></li>
                                </ul>
                            </div>
                            <div class="content mt-3">
                                <h4>What you should know about Cybersecurity risk assessments</h4>
                                <p>Now you understand how vital cybersecurity is for small companies and why they are the most targeted. We also provide cybersecurity solutions . We have an innovative approach, as we offer a single dashboard that lets you manage all your security solutions that are in synergy. </p>
                            </div>
                            <div class="d-flex justify-content-between">
                            <div class="btn-wrapper"> 
                                <a href="" class="mt-3 lnk">Read More <i class="fa fa-chevron-right fa-icon"></i><i class="fa fa-chevron-right fa-icon ml-0"></i><span class="circle"></span></a>
                            </div>
                            <div class="d-flex align-items-center blog-social-icon mt-3"> 
                                <span>Share Now :</span>
                                <ul class="d-flex">
                                  <li><a href=""><i class="text-gray fa fa-linkedin-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-twitter-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-facebook-square"></i></a></li>
                                  <li><a href=""><i class="text-gray fa fa-plus-square"></i></a></li>
                                </ul>
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>

          </div>
        <div class="col-lg-4 col-12 col-md-4 py-4">
            <div class="sidebar-item search-form">
              <form method="get" action=""> <input type="text" id="txtSearch" name="txtSearch" placeholder="Search.."> 
                <button type="submit"><i class="fa fa-search"></i></button> 
              </form>
            </div>
            <div class="blog_form_callback mt-4 mb-5">
                <h5>Get A Callback</h5>
                <p>Our representative will contact you soon.</p>
                <div class="form-group">
                  <label for="name">enter Your Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Enter Your Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="phone">Enter Your phone No. <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="phone">
                </div>
                 <div class="form-group">
                  <label for="message">Write Your Message/Query <span class="text-danger">*</span></label>
                  <textarea type="text" class="form-control" name="message"></textarea>
                </div>
                <div class="form-group text-center">
                  <button class="mt-3 lnk">Submit <span class="circle"></span></button>
                </div>
            </div>

            <div class="blog-post-card p-4">
                <div class="d-flex justify-content-between">
                    <div>
                      <h5>Recent Posts</h5>
                    </div>
                    <div>
                      <i class="fa fa-file text-gray"></i>
                    </div>
                </div>
                <div class="recent-posts">
                  <div class="undeline my-2 mb-3"></div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62fb6ec985666.jpg" alt="Latest Trends in Cybersecurity 2022">
                    <h4><a href="blog/latest_trends_in_cybersecurity_2022">Latest Trends in Cybersecurity 2022</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fa35b83f3.jpg" alt="What are Cloud Management Services? Know Everything About It.">
                    <h4><a href="blog/what_are_cloud_management_services__know_everything_about_it_">What are Cloud Management Services? Know Everything About It.</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fa738e7bb.jpg" alt="What is DevOps? Tools and Benefits">
                    <h4><a href="blog/what_is_devops__tools_and_benefits">What is DevOps? Tools and Benefits</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fab198c24.jpg" alt="What you should know about Cybersecurity risk assessments">
                    <h4><a href="blog/what_you_should_know_about_cybersecurity_risk_assessments">What you should know about Cybersecurity risk assessments</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1faf2b2486.jpg" alt="Best Cybersecurity Solutions for Small Businesses">
                    <h4><a href="blog/best_cybersecurity_solutions_for_small_businesses">Best Cybersecurity Solutions for Small Businesses</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fb4de9714.jpg" alt="Tips on Implementing Cybersecurity for small Businesses">
                    <h4><a href="blog/tips_on_implementing_cybersecurity_for_small_businesses">Tips on Implementing Cybersecurity for small Businesses</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="read-more-pst text-center pt-3">
                    <a href="">View More...</a>
                 </div>
              </div>
            </div>
            <div class="blog_add mt-5" style="background-image: url({{asset('public/assets/images/blog/ad_bg.png')}});">
                <h3>Here is<br> The <br> Advertisement</h3>
            </div>

              <div class="blog-post-card p-4 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                      <h5>Trending Post</h5>
                    </div>
                    <div>
                      <i class="fa fa-file text-gray"></i>
                    </div>
                </div>
                <div class="recent-posts">
                  <div class="undeline my-2 mb-3"></div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62fb6ec985666.jpg" alt="Latest Trends in Cybersecurity 2022">
                    <h4><a href="blog/latest_trends_in_cybersecurity_2022">Latest Trends in Cybersecurity 2022</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fa35b83f3.jpg" alt="What are Cloud Management Services? Know Everything About It.">
                    <h4><a href="blog/what_are_cloud_management_services__know_everything_about_it_">What are Cloud Management Services? Know Everything About It.</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fa738e7bb.jpg" alt="What is DevOps? Tools and Benefits">
                    <h4><a href="blog/what_is_devops__tools_and_benefits">What is DevOps? Tools and Benefits</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fab198c24.jpg" alt="What you should know about Cybersecurity risk assessments">
                    <h4><a href="blog/what_you_should_know_about_cybersecurity_risk_assessments">What you should know about Cybersecurity risk assessments</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1faf2b2486.jpg" alt="Best Cybersecurity Solutions for Small Businesses">
                    <h4><a href="blog/best_cybersecurity_solutions_for_small_businesses">Best Cybersecurity Solutions for Small Businesses</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="post-item clearfix">
                    <img src="public/upload/blog/62f1fb4de9714.jpg" alt="Tips on Implementing Cybersecurity for small Businesses">
                    <h4><a href="blog/tips_on_implementing_cybersecurity_for_small_businesses">Tips on Implementing Cybersecurity for small Businesses</a></h4>
                    <span class="time"><i class="text-gray fa fa-clock-o"></i> 22-Mar-2022</span>
                 </div>
                 <div class="read-more-pst text-center pt-3">
                    <a href="">View More...</a>
                 </div>
              </div>
            </div>
        </div>
    </div>
</div>
<style>
  .fa-pencil-square:before {
    content: "\f14b";
  }
  .fa-user-circle-o:before {
  content: "\f2be";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-search:before {
  content: "\f002";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file:before {
  content: "\f15b";
}
.fa-clock-o:before {
  content: "\f017";
}
</style>

@endsection
