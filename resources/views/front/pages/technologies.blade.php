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
                <h1>Our Technoligies</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
  	<div class="container pt-4">
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>DevOps</h4>
      	</div>
      	<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" loading="lazy" src="{{ asset('public/images/technology/Jenkins.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/OpenVPN.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Percona.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Cloudflare.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Zabbix.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Ancible.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Monit.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Kubernets.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/OpenShift.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Apache-Cloudstack.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Chef.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Ngnix.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Window-Server.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/tomcat.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Ubuntu.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/AWS.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/RedHat.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/New-relic.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/CPanel.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Docker.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Openstack-1.png') }}">
					      </div>   
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Front End Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/JQuery.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/TypeScript.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/angular.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/VB-Script.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/HTML5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/bootstrap.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/css.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/React-native.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/javascript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/ajax.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Dart-js.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Vue.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/ecmascript.png') }}">
					      </div>   
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Back End Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/node-js-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/spring.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/django-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Hibernate.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/cakephp-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/codeigniter.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/spring-boot.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Go-Logo.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/playframework.png') }}">
					      </div>  
					         
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Testing Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Selenium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/IBM-RFT.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Postman.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Calabash.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Jira.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/trello.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/TestPad.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/SoapUI.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Swagger.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Rest-assured.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/SonarQube.png') }}">
					      </div>  
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Blockchain Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Hyperledger-Fabric.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/IPFS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/solidity.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/credits.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/BigchainDB-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Truffle.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/web3j.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Tierion-1.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/hedera.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Steem.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Hyperledger-Sawtooth.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/NEM-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/quantum.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/stellar.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Ethereum-classic-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/ethereum-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/WAVES.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/OpenZeppelin.png') }}">
					      </div>  
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Mobility</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/WatchOS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Framework7.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Jquery-Mobile.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Mobile-Angular-UI-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Adobe-Phonegap.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/coronasdk.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Ionic.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Appcelerator-Titanium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Swift.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/React-native.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/WebGL.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Flutter-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/C.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/NativeScript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Unity.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Unreal-Engine.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/HTML5.png') }}">
					      </div>  
				      </div>
				</div>
			</div>
      	</div>

      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>OTT Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Kaltura.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Mencoder.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Red5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/FFmpeg.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Roku.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Elastic-Transcoder.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/SmartV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/CloudFront.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/AppleTV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/AmazonFire.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Webrtc.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/kurento.png') }}">
					      </div>  
				      </div>
				</div>
			</div>
      	</div>

      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>AI and IoT Development</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/TensorfLow.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/raspberry.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Pytorch_logo.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/google-voice.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/mahout.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Alexa.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/datumbox.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/OpenCV.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/PredictionIO.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/DL4J.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/openhab.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/pytest.png') }}">
					      </div>  
				      </div>
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Project Management Tools</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/trello-1.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Taiga.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Slack.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/asana.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Confluence.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Jira.png') }}">
					      </div>     
				      </div>
				      
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Code Versioning</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Gitlab.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Bitbucket.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/mercurial.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/AWS-Codecommit.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Github.png') }}">
					      </div>     
				      </div>
				      
				</div>
			</div>
      	</div>
      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Database</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/MySQL.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/BigchainDB.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/PostgreSQL.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Amazon-QLDB-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/SQLite.png') }}">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Hadoop-HDFS.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Neo4j.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/MongoDB.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Redis.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Cassandra.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/CouchDB-1.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Memcache.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Cloudera.png') }}">
					      </div>   
				      </div>
				</div>
			</div>
      	</div>

      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Web Content Management</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Drupal.png') }}">
					      </div> 
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Sitecore.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/WordPress.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Magento.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Joomla.png') }}">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Broadleaf.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/prestashop.png') }}">
					      </div>    
				      </div>
				</div>
			</div>
      	</div>

      	<hr>
      	<div class="py-3">
  		<div class="col-lg-12 py-3">
            <h4>Big Data And Analytics</h4>
      	</div>
      		<div class="owl-slider">
				<div class="owl-carousel technologies_slider">
					<div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Apache-Hadoop.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/RabbitMQ.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Elasticsearch.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Kafka.png') }}">
					      </div>      
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Apache-Hbase.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Solr.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/kibana.png') }}">
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/apache-pig.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Jasper.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/NoSQL.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Qlikview.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/PowerBi.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Cloudera-impala.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Apache-Spark.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/AWS-Kinesis.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img loading="lazy" src="{{ asset('public/images/technology/Apache_Hive-copy.png') }}">
					      </div>    
				      </div>
				</div>
			</div>
      	</div>







  	</div>
  </section>
 

  <!-- content end -->
  
@endsection

<style type="text/css">
	.card_technology{
		width: auto;
		max-height: 100px;
		margin: 10px;
		padding: 10px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.card_technology  img{
		width: 100px !important;
		height: auto;
	}

	.owl-dots{
		text-align: center;
		padding: 10px;
	}
</style>