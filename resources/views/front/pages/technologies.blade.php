@extends('front.layouts.app')
@section('title', "Technologies | Prilient Technologies")
@section('meta_keywords', "Technologies")

@section('link') 
@if (Session::has('ifWww'))
@section('meta_description', "We are a company established in India that is dedicated to creating specialised IT solutions for mobile, web, desktop, server management, DevOps, Cyber security")
  <link rel="canonical" href="https://www.prilient.com/technologies" />
@else  
@section('meta_description', "We are an India-based firm that continues to move forward by specialising in the development of custom IT solutions for mobile, web, desktop,DevOps & Security.")
  <link rel="canonical" href="https://prilient.com/technologies" />
@endif
@stop

@section('content') 
  <section class="breadcrumb-area banner-1" data-background="{{ url('assets/images/banner/9.jpg') }}">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h1>Our Technologies</h1>
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
					      	<img alt="Jenkins" loading="lazy" src="{{ asset('public/images/technology/Jenkins.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="OpenVPN" loading="lazy" src="{{ asset('public/images/technology/OpenVPN.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Percona" loading="lazy" src="{{ asset('public/images/technology/Percona.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Cloudflare" loading="lazy" src="{{ asset('public/images/technology/Cloudflare.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Zabbix" loading="lazy" src="{{ asset('public/images/technology/Zabbix.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Ancible" loading="lazy" src="{{ asset('public/images/technology/Ancible.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Monit" loading="lazy" src="{{ asset('public/images/technology/Monit.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Kubernets" loading="lazy" src="{{ asset('public/images/technology/Kubernets.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="OpenShift" loading="lazy" src="{{ asset('public/images/technology/OpenShift.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Apache Cloudstack" loading="lazy" src="{{ asset('public/images/technology/Apache-Cloudstack.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Chef" loading="lazy" src="{{ asset('public/images/technology/Chef.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Ngnix" loading="lazy" src="{{ asset('public/images/technology/Ngnix.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Window Server" loading="lazy" src="{{ asset('public/images/technology/Window-Server.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img alt="tomcat" loading="lazy" src="{{ asset('public/images/technology/tomcat.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Ubuntu" loading="lazy" src="{{ asset('public/images/technology/Ubuntu.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img alt="AWS" loading="lazy" src="{{ asset('public/images/technology/AWS.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="RedHat" loading="lazy" src="{{ asset('public/images/technology/RedHat.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img alt="New relic" loading="lazy" src="{{ asset('public/images/technology/New-relic.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="CPanel" loading="lazy" src="{{ asset('public/images/technology/CPanel.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img alt="Docker" loading="lazy" src="{{ asset('public/images/technology/Docker.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Openstack 1" loading="lazy" src="{{ asset('public/images/technology/Openstack-1.png') }}">
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
					      	<img alt="JQuery" loading="lazy" src="{{ asset('public/images/technology/JQuery.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="TypeScript" loading="lazy" src="{{ asset('public/images/technology/TypeScript.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="angular" loading="lazy" src="{{ asset('public/images/technology/angular.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="VB-Script" loading="lazy" src="{{ asset('public/images/technology/VB-Script.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="HTML5" loading="lazy" src="{{ asset('public/images/technology/HTML5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="bootstrap" loading="lazy" src="{{ asset('public/images/technology/bootstrap.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="css" loading="lazy" src="{{ asset('public/images/technology/css.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="React-native" loading="lazy" src="{{ asset('public/images/technology/React-native.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="javascript" loading="lazy" src="{{ asset('public/images/technology/javascript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="ajax" loading="lazy" src="{{ asset('public/images/technology/ajax.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Dart-js" loading="lazy" src="{{ asset('public/images/technology/Dart-js.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Vue-js" loading="lazy" src="{{ asset('public/images/technology/Vue.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="ecmascript" loading="lazy" src="{{ asset('public/images/technology/ecmascript.png') }}">
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
					      	<img alt="php" loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="laravel" loading="lazy" src="{{ asset('public/images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="java" loading="lazy" src="{{ asset('public/images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="express" loading="lazy" src="{{ asset('public/images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="python" loading="lazy" src="{{ asset('public/images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="grails" loading="lazy" src="{{ asset('public/images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="node-js" loading="lazy" src="{{ asset('public/images/technology/node-js-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="spring" loading="lazy" src="{{ asset('public/images/technology/spring.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="django-2" loading="lazy" src="{{ asset('public/images/technology/django-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Hibernate" loading="lazy" src="{{ asset('public/images/technology/Hibernate.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="cakephp" loading="lazy" src="{{ asset('public/images/technology/cakephp-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="codeigniter" loading="lazy" src="{{ asset('public/images/technology/codeigniter.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="php" loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="laravel" loading="lazy" src="{{ asset('public/images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="java-2" loading="lazy" src="{{ asset('public/images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="express" loading="lazy" src="{{ asset('public/images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="python" loading="lazy" src="{{ asset('public/images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="grails" loading="lazy" src="{{ asset('public/images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="spring-boot" loading="lazy" src="{{ asset('public/images/technology/spring-boot.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Go-Logo" loading="lazy" src="{{ asset('public/images/technology/Go-Logo.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="playframework" loading="lazy" src="{{ asset('public/images/technology/playframework.png') }}">
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
					      	<img alt="Selenium" loading="lazy" src="{{ asset('public/images/technology/Selenium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="IBM-RFT" loading="lazy" src="{{ asset('public/images/technology/IBM-RFT.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Postman" loading="lazy" src="{{ asset('public/images/technology/Postman.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Calabash" loading="lazy" src="{{ asset('public/images/technology/Calabash.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Jira" loading="lazy" src="{{ asset('public/images/technology/Jira.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="trello" loading="lazy" src="{{ asset('public/images/technology/trello.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="TestPad" loading="lazy" src="{{ asset('public/images/technology/TestPad.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="SoapUI" loading="lazy" src="{{ asset('public/images/technology/SoapUI.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Swagger" loading="lazy" src="{{ asset('public/images/technology/Swagger.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Rest-assured" loading="lazy" src="{{ asset('public/images/technology/Rest-assured.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="SonarQube" loading="lazy" src="{{ asset('public/images/technology/SonarQube.png') }}">
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
					      	<img alt="Hyperledger Fabric" loading="lazy" src="{{ asset('public/images/technology/Hyperledger-Fabric.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="IPFS" loading="lazy" src="{{ asset('public/images/technology/IPFS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="solidity" loading="lazy" src="{{ asset('public/images/technology/solidity.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="credits" loading="lazy" src="{{ asset('public/images/technology/credits.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="BigchainDB-1" loading="lazy" src="{{ asset('public/images/technology/BigchainDB-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Truffle" loading="lazy" src="{{ asset('public/images/technology/Truffle.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="web3j" loading="lazy" src="{{ asset('public/images/technology/web3j.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Tierion-1" loading="lazy" src="{{ asset('public/images/technology/Tierion-1.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="hedera" loading="lazy" src="{{ asset('public/images/technology/hedera.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Steem" loading="lazy" src="{{ asset('public/images/technology/Steem.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Hyperledger-Sawtooth" loading="lazy" src="{{ asset('public/images/technology/Hyperledger-Sawtooth.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="NEM-1" loading="lazy" src="{{ asset('public/images/technology/NEM-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="quantum" loading="lazy" src="{{ asset('public/images/technology/quantum.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="stellar" loading="lazy" src="{{ asset('public/images/technology/stellar.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Ethereum classic" loading="lazy" src="{{ asset('public/images/technology/Ethereum-classic-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="ethereum" loading="lazy" src="{{ asset('public/images/technology/ethereum-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="WAVES" loading="lazy" src="{{ asset('public/images/technology/WAVES.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="OpenZeppelin" loading="lazy" src="{{ asset('public/images/technology/OpenZeppelin.png') }}">
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
					      	<img alt="php" loading="lazy" src="{{ asset('public/images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="WatchOS" loading="lazy" src="{{ asset('public/images/technology/WatchOS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Framework7" loading="lazy" src="{{ asset('public/images/technology/Framework7.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Jquery Mobile" loading="lazy" src="{{ asset('public/images/technology/Jquery-Mobile.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Mobile Angular UI" loading="lazy" src="{{ asset('public/images/technology/Mobile-Angular-UI-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Adobe Phonegap" loading="lazy" src="{{ asset('public/images/technology/Adobe-Phonegap.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="coronasdk" loading="lazy" src="{{ asset('public/images/technology/coronasdk.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Ionic" loading="lazy" src="{{ asset('public/images/technology/Ionic.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Appcelerator Titanium" loading="lazy" src="{{ asset('public/images/technology/Appcelerator-Titanium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Swift" loading="lazy" src="{{ asset('public/images/technology/Swift.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="React-native" loading="lazy" src="{{ asset('public/images/technology/React-native.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="WebGL" loading="lazy" src="{{ asset('public/images/technology/WebGL.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Flutter" loading="lazy" src="{{ asset('public/images/technology/Flutter-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="C" loading="lazy" src="{{ asset('public/images/technology/C.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="NativeScript" loading="lazy" src="{{ asset('public/images/technology/NativeScript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Unity" loading="lazy" src="{{ asset('public/images/technology/Unity.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Unreal Engine" loading="lazy" src="{{ asset('public/images/technology/Unreal-Engine.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="HTML5" loading="lazy" src="{{ asset('public/images/technology/HTML5.png') }}">
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
					      	<img alt="Kaltura" loading="lazy" src="{{ asset('public/images/technology/Kaltura.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Mencoder" loading="lazy" src="{{ asset('public/images/technology/Mencoder.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Red5" loading="lazy" src="{{ asset('public/images/technology/Red5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="FFmpeg" loading="lazy" src="{{ asset('public/images/technology/FFmpeg.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Roku" loading="lazy" src="{{ asset('public/images/technology/Roku.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Elastic-Transcoder" loading="lazy" src="{{ asset('public/images/technology/Elastic-Transcoder.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="SmartV" loading="lazy" src="{{ asset('public/images/technology/SmartV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="CloudFront" loading="lazy" src="{{ asset('public/images/technology/CloudFront.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="AppleTV" loading="lazy" src="{{ asset('public/images/technology/AppleTV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="AmazonFire" loading="lazy" src="{{ asset('public/images/technology/AmazonFire.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Webrtc" loading="lazy" src="{{ asset('public/images/technology/Webrtc.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="kurento" loading="lazy" src="{{ asset('public/images/technology/kurento.png') }}">
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
					      	<img alt="TensorfLow" loading="lazy" src="{{ asset('public/images/technology/TensorfLow.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="raspberry" loading="lazy" src="{{ asset('public/images/technology/raspberry.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Pytorch logo" loading="lazy" src="{{ asset('public/images/technology/Pytorch_logo.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="google voice" loading="lazy" src="{{ asset('public/images/technology/google-voice.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="mahout" loading="lazy" src="{{ asset('public/images/technology/mahout.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Alexa" loading="lazy" src="{{ asset('public/images/technology/Alexa.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="datumbox" loading="lazy" src="{{ asset('public/images/technology/datumbox.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="OpenCV" loading="lazy" src="{{ asset('public/images/technology/OpenCV.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="PredictionIO" loading="lazy" src="{{ asset('public/images/technology/PredictionIO.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="DL4J" loading="lazy" src="{{ asset('public/images/technology/DL4J.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="openhab" loading="lazy" src="{{ asset('public/images/technology/openhab.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="pytest" loading="lazy" src="{{ asset('public/images/technology/pytest.png') }}">
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
					      	<img alt="trello-1" loading="lazy" src="{{ asset('public/images/technology/trello-1.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="Taiga" loading="lazy" src="{{ asset('public/images/technology/Taiga.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="Slack" loading="lazy" src="{{ asset('public/images/technology/Slack.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img alt="asana" loading="lazy" src="{{ asset('public/images/technology/asana.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Confluence" loading="lazy" src="{{ asset('public/images/technology/Confluence.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="Jira" loading="lazy" src="{{ asset('public/images/technology/Jira.png') }}">
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
					      	<img alt="Gitlab" loading="lazy" src="{{ asset('public/images/technology/Gitlab.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="Bitbucket" loading="lazy" src="{{ asset('public/images/technology/Bitbucket.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img alt="mercurial" loading="lazy" src="{{ asset('public/images/technology/mercurial.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img alt="AWS-Codecommit" loading="lazy" src="{{ asset('public/images/technology/AWS-Codecommit.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Github" loading="lazy" src="{{ asset('public/images/technology/Github.png') }}">
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
					      	<img alt="MySQL" loading="lazy" src="{{ asset('public/images/technology/MySQL.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="BigchainDB" loading="lazy" src="{{ asset('public/images/technology/BigchainDB.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="PostgreSQL" loading="lazy" src="{{ asset('public/images/technology/PostgreSQL.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img alt="Amazon-QLDB-1" loading="lazy" src="{{ asset('public/images/technology/Amazon-QLDB-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img alt="SQLite" loading="lazy" src="{{ asset('public/images/technology/SQLite.png') }}">
					      </div>
					      <div class="card_technology">
					      	<img alt="Hadoop-HDFS" loading="lazy" src="{{ asset('public/images/technology/Hadoop-HDFS.png') }}">
					      </div>  
					      </div> 
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Neo4j" loading="lazy" src="{{ asset('public/images/technology/Neo4j.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="MongoDB" loading="lazy" src="{{ asset('public/images/technology/MongoDB.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Redis" loading="lazy" src="{{ asset('public/images/technology/Redis.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="Cassandra" loading="lazy" src="{{ asset('public/images/technology/Cassandra.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="CouchDB-1" loading="lazy" src="{{ asset('public/images/technology/CouchDB-1.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="Memcache" loading="lazy" src="{{ asset('public/images/technology/Memcache.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Cloudera" loading="lazy" src="{{ asset('public/images/technology/Cloudera.png') }}">
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
					      	<img alt="Drupal" loading="lazy" src="{{ asset('public/images/technology/Drupal.png') }}">
					      </div> 
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Sitecore" loading="lazy" src="{{ asset('public/images/technology/Sitecore.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="WordPress" loading="lazy" src="{{ asset('public/images/technology/WordPress.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img alt="Magento" loading="lazy" src="{{ asset('public/images/technology/Magento.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img alt="Joomla" loading="lazy" src="{{ asset('public/images/technology/Joomla.png') }}">
					      <div class="card_technology">
					      	<img alt="Broadleaf" loading="lazy" src="{{ asset('public/images/technology/Broadleaf.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="prestashop" loading="lazy" src="{{ asset('public/images/technology/prestashop.png') }}">
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
					      	<img alt="Apache Hadoop" loading="lazy" src="{{ asset('public/images/technology/Apache-Hadoop.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="RabbitMQ" loading="lazy" src="{{ asset('public/images/technology/RabbitMQ.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Elasticsearch" loading="lazy" src="{{ asset('public/images/technology/Elasticsearch.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img alt="Kafka" loading="lazy" src="{{ asset('public/images/technology/Kafka.png') }}">
					      </div>      
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img alt="Apache-Hbase" loading="lazy" src="{{ asset('public/images/technology/Apache-Hbase.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img alt="Solr" loading="lazy" src="{{ asset('public/images/technology/Solr.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img alt="kibana" loading="lazy" src="{{ asset('public/images/technology/kibana.png') }}">
					      <div class="card_technology">
					      	<img alt="apache-pig" loading="lazy" src="{{ asset('public/images/technology/apache-pig.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Jasper" loading="lazy" src="{{ asset('public/images/technology/Jasper.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="NoSQL" loading="lazy" src="{{ asset('public/images/technology/NoSQL.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Qlikview" loading="lazy" src="{{ asset('public/images/technology/Qlikview.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="PowerBi" loading="lazy" src="{{ asset('public/images/technology/PowerBi.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="Cloudera-impala" loading="lazy" src="{{ asset('public/images/technology/Cloudera-impala.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Apache Spark" alt="Apache-Spark" loading="lazy" src="{{ asset('public/images/technology/Apache-Spark.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img alt="AWS Kinesis" loading="lazy" src="{{ asset('public/images/technology/AWS-Kinesis.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img alt="Apache Hive copy" loading="lazy" src="{{ asset('public/images/technology/Apache_Hive-copy.png') }}">
					      </div>    
				      </div>
				</div>
			</div>
      	</div>







  	</div>
  </section>
 

  <!-- content end -->
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
@endsection

