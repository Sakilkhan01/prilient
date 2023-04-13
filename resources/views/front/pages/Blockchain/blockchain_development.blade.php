@extends('front.layouts.app')
@section('title', "Blockchain development")
@section('meta_keywords', "Blockchain development")
@section('meta_description', "Blockchain development is the process of creating shared, unchangeable, distributed ledger technology (DLT) that securely records transactions and tracks assets")

<style type="text/css">
  .web-development-bg{
  background: url('{{ asset('public/assets/images/banner/bg-gray.png') }}') 0 0 / cover;
}
.web-development-bg2{
  background: url('{{ asset('public/assets/images/banner/web-development-bg.png') }}') 0 0 / cover;
}
.fontWt30{
  font-weight: 400 !important;
}
.common-color-heading{
  background: linear-gradient(90.21deg, #024A99 13.01%, #E43C5C 65.38%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 30px;
}
.request-quote-card-body{
border-radius: 36px 36px 0px 0px; 
}
.iconCircle{
  padding: 12px!important;
}
</style>

@section('content') 
<section class="hero-card-web-2 web-development-bg web-development-bg2">
      <div class="hero-main-rp container-fluid">
         <div class="container">
            <div class="row">
                  <div class="col-lg-7 col-12 text-lg-left text-center mb-5">
                        <h1 class="fontWt30"><span class="fontWt50 common-color-heading">BLOCKCHAIN DEVELOPMENT </span>  SERVICES</h1>
                        <p class="mt-3">Ensure the high security of data, sensitive information, and application from Hacker with our Blockchain Development service</p>
                     <a href="{{ url('contact-us') }}" class="niwax-btn2 get-start-btn wow fadeIn">Get Started <i class="fa fa-chevron-right fa-ani"></i></a>
                  </div>
                  <div class="col-lg-5 col-12 mt-4 mb-5">
                        
                  </div>
            </div>
         </div>
      </div>
</section>
@include('front.pages.rq')
<section class="service-content-body">
    <div class="container pb-5">
      <div class="row">
       <div class="col-lg-5 col-12 text-center mt-5">
            <!-- <img src="{{ asset('public/assets/services/Group143.svg') }}"> -->
      </div>
      <div class="col-lg-7 col-12 mt-5">
          <div class="comman-service-heading">
            <h2><span class="textRed fontWt50">Develop</span> A Secure Platform On The <span class="textPrim fontWt50">Blockchain Network</span></h2>
             <p>In the era of this digital world, every people want privacy and security of their information. A decentralized blockchain network is an alternative option that provides top security, reliability, transparency, and robustness to your ecosystem. Blockchain is a peer-to-peer decentralized network system. Blockchain includes many things like cryptography, smart contract, NFT, tokenization, and coins.</p>
             <p>We have trusted IT professionals with enough experience who are capable of developing many things like smart contracts, tokens, cryptocurrency, metaverse, 3D design, NFT, blockchain networks, and dApps. They keep updated with market updates, automation tools, and advanced techniques to build reliable blockchain solutions.</p>
          </div>
      </div>
      </div>
   </div>
 </section>
   <div class="hiredevlopercard py-5 text-center" style="bottom: 0px">
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="text-white mb-0">Hire a <span class="fontWt50">Blockchain Developer</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('dedicated-developer') }}" class="hire-butn">Hire Now <i class="fa fa-chevron-right fa-ani"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="bgYellow py-5 bottomUp" style="position:unset;">
            <div class="container">
                  <div class="col-lg-9 col-12 text-center">
                        <h1 class="service_heading_text" style="line-height: 58px;">Blockchain Development Services <br>Offered By Us</h1>
                  </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img src="{{ asset('public/assets/services/Group164.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Smart contracts Development</h5>
                                          <p>
                                              Automate the execution of any function in your system by setting up a predetermined agreement. A smart,... <a href="{{ url('blockchain_development/smart-contracts-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5  offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle d-flex">
                                           <img src="{{ asset('public/assets/services/Group165.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Blockchain wallets Development</h5>
                                          <p>
                                              Transfer your fund securely with a blockchain wallet. A blockchain wallet helps to access your account ...  <a href="{{ url('blockchain_development/blockchain-wallet-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              </div>
                              <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img src="{{ asset('public/assets/services/Group166.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Decentralized Apps (dApps) Development</h5>
                                          <p>
                                            Develop your own public or private blockchain network as per your business requirement. We have lots of... <a href="{{ url('blockchain_development/decentralized-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img src="{{ asset('public/assets/services/Group167.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Private Blockchain Development</h5>
                                          <p>
                                             Develop your own private blockchain network as per your business requirement. We have lots of...<a href="{{ url('/blockchain_development/private-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                        </div>
                        <div class="row justify-content-center">
                              <div class="col-lg-5 col-12 mt-5">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img src="{{ asset('public/assets/services/Group168.svg') }}">
                                         </div>
                                         <div>
                                           <h5>Tokenization</h5>
                                          <p>
                                            Provide better customer experience, great security, the minimum risk from data breaches, and a smooth payment ... <a href="{{ url('blockchain_development/tokenization-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              <div class="col-lg-5 col-12 mt-5 offset-lg-1">
                                    <div class="services_card bg_card_yellow bg-hover-white text-center card-service-equal h-100">
                                         <div class="iconCircle">
                                           <img src="{{ asset('public/assets/services/Group169.svg') }}">
                                         </div>
                                         <div>
                                           <h5>NFT</h5>
                                          <p>
                                            The non-fungible token is a piece of digital information in the format of a picture, gif, clip, and song. Our...  <a href="{{ url('blockchain_development/NFT-development') }}" class="readMoreService">Read More</a>
                                          </p>
                                         </div>
                                    </div>
                              </div>
                              
                        </div>
            </div>
      </div>

     
      <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-12 text-center mt-3">
                        <h1 class="service_heading_text" style="line-height: 58px;">Benefits of getting Blockchain<br> Development Service</h1>
              </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <img src="{{ asset('public/assets/services/Group84.png') }}">
                                </div>
                                </div>
                                <h5>Greater transparency</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">
                              Blockchain technology enables every transaction to be stored in a decentralized ledger, an ideal example being Bitcoin’s blockchain. This way, people and businesses can track transactions with more transparency and security. With proper usage of cryptographic protocols, 
                                </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img src="{{ asset('public/assets/services/Group85.png') }}">
                                </div>
                                </div>
                                <h5>Better reliability</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Some businesses have been crippled, even destroyed, by bugs in their code. If you can’t be sure your program will work when you click publish, it’s better to have someone else build it. Today’s development services come with guarantees on everything from uptime to compatibility.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <!-- <img src="{{ asset('public/assets/services/Group34.png') }}"> -->
                                </div>
                                </div>
                                <h5>Faster transactions</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">With no intermediaries, blockchain transactions can be processed much faster. This process is time-consuming because multiple parties are involved. Since every block gets added at once in a blockchain system, they get validated almost instantaneously.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-pink">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-pink">
                                  <!-- <img src="{{ asset('public/assets/services/Group34.png') }}"> -->
                                </div>
                                </div>
                                <h5>Lower risk of fraud and error</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">There’s no way to change or edit information on a blockchain, making it far more difficult for fraudsters to steal your data. That doesn’t mean it can’t be hacked, but with blockchain technology, it would require an unfathomably large amount of computing power to pull off. A government.</p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-5">
                        <div class="card-with-icon text-center card-service-equal h-100  p-0">
                              <div class="header_card bg-header-card-blue">
                                <div class="img-liner">
                                <div class="header_icon bg-header-card-blue">
                                  <img src="{{ asset('public/assets/services/Group89.png') }}">
                                </div>
                                </div>
                                <h5>Better security</h5>
                              </div>
                              <div class="p-3">
                                <p class="m-0">Since a blockchain is a decentralized database, it’s much harder for hackers to break in and steal valuable information. Its decentralized structure also makes tampering almost impossible. As it is stored in millions of places across its network</p>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
       <div class="text-center py-5">
            <div class="container">
                  <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                              <h2 class="mb-0 fontWt40">We <span class="fontWt50">Promise.</span> We <span class="fontWt50">Deliver.</span></h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('contact-us') }}" class="promiseBtn">Let’s Work Together <i class="fa fa-chevron-right"></i></a>
                        </div>
                  </div>
            </div>
      </div>
      <div class="container pb-5">
            <div class="col-lg-10 col-12 text-center ml-auto mr-auto">
              <h2>Why Prilient is Best<br> <span class="fontWt70 common-color-heading">Option for Blockchian Development?</span></h2>
            </div>
            <div class="col-lg-11 col-12 ml-auto mr-auto">
                  <div class="col-12 col-lg-12 mt-5">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{ asset('public/assets/services/Group90.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Skilled Developers</h5> 
                                         <p>Blockchain developers are hard to find. There’s such a high demand for them, companies can afford to be picky. This isn’t true of most other tech jobs. If you want an iOS developer, for example, there are tons of companies who need your skills—they just need you to make your phone work on their network. Blockchain development, on the other hand, is complex and risky; it requires specific expertise, and that means you have options when it comes to hiring a company.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{ asset('public/assets/services/Group91.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Transparency</h5> 
                                         <p>At Prilient, we offer full transparency. From showing you our work to giving you access to it via Call, skype, FTP or Git, you know what’s going on at all times. You can even see who’s working on your project and when they started. And if you have any questions about your project, just ask! We’re here to help.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{ asset('public/assets/services/Group92.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Save Money</h5>
                                         <p>We have solved high money charge problem by bringing in a team of highly experienced and talented blockchain developers at a fraction of the cost. Our employees are here to stay, not to fill up our books or pocket your money. We deliver high-quality products every time at an affordable price, so you’ll never have to look elsewhere.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{ asset('public/assets/services/Group23.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Support</h5> 
                                         <p>When you work with Prilient, our team will have your back. We pride ourselves on providing superior customer service that keeps you informed and updated at every step of your project. Our customer support channels are open to all clients 24/7, and we’re here to answer any questions you may have about custom development services.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-12 mt-4">
                        <div class="bottom_card_product">
                              <div class="row">
                                   <div class="col-lg-2 col-12 d-flex justify-content-center align-items-center">
                                         <img src="{{ asset('public/assets/services/Group83.png')}}">
                                   </div> 
                                   <div class="col-lg-10 col-12 borderLeft">
                                         <h5>Deliver on time</h5> 
                                         <p>If your services or product are not delivered on time, then your customer will never trust you. On-time delivery and execution give a clear idea to the customer that they are dealing with a professional company. It also builds trust between both parties. It’s important for every business to deliver products or services on time. You can also use it as a competitive advantage over other companies in your industry.</p>   
                                   </div> 
                              </div>
                        </div>
                  </div>
                  
            </div>
      </div>
      <div class="pb-5 text-center">
            <div class="container">
                  <div class="row justify-content-center align-items-center">
                        <div class="col-lg-8 col-12">
                              <h2 class="mb-0 fontWt40">We Love to Listen to Your Requirements</h2>
                        </div>
                        <div class="col-lg-4 col-12 mt-4 mt-lg-0 justify-content-lg-left justify-content-center align-items-center d-flex">
                              <a href="{{ url('contact-us') }}" class="promiseBtn">Estimate Project <i class="fa fa-chevron-right"></i></a>
                        </div>
                  </div>
            </div>
      </div>
@endsection
