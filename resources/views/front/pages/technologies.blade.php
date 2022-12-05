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
					      	<img src="{{ asset('images/technology/Jenkins.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/OpenVPN.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Percona.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Cloudflare.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Zabbix.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Ancible.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Monit.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Kubernets.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/OpenShift.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Apache-Cloudstack.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Chef.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Ngnix.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Window-Server.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/tomcat.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Ubuntu.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/AWS.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/RedHat.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/New-relic.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/CPanel.png') }}">
					      </div>   
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Docker.png') }}">
					      </div>   
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Openstack-1.png') }}">
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
					      	<img src="{{ asset('images/technology/JQuery.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/TypeScript.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/angular.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/VB-Script.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/HTML5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/bootstrap.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/css.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/React-native.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/javascript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/ajax.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Dart-js.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Vue.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/ecmascript.png') }}">
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
					      	<img src="{{ asset('images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/node-js-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/spring.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/django-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Hibernate.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/cakephp-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/codeigniter.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/laravel-2.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/java-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/express.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/python-2.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/grails.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/spring-boot.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Go-Logo.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/playframework.png') }}">
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
					      	<img src="{{ asset('images/technology/Selenium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/IBM-RFT.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Postman.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Calabash.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Jira.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/trello.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/TestPad.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/SoapUI.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Swagger.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Rest-assured.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/SonarQube.png') }}">
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
					      	<img src="{{ asset('images/technology/Hyperledger-Fabric.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/IPFS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/solidity.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/credits.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/BigchainDB-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Truffle.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/web3j.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Tierion-1.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/hedera.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Steem.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Hyperledger-Sawtooth.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/NEM-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/quantum.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/stellar.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Ethereum-classic-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/ethereum-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/WAVES.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/OpenZeppelin.png') }}">
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
					      	<img src="{{ asset('images/technology/php-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/WatchOS.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Framework7.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Jquery-Mobile.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Mobile-Angular-UI-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Adobe-Phonegap.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/coronasdk.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Ionic.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Appcelerator-Titanium.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Swift.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/React-native.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/WebGL.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Flutter-1.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/C.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/NativeScript.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Unity.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Unreal-Engine.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/HTML5.png') }}">
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
					      	<img src="{{ asset('images/technology/Kaltura.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Mencoder.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Red5.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/FFmpeg.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Roku.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Elastic-Transcoder.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/SmartV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/CloudFront.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/AppleTV.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/AmazonFire.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Webrtc.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/kurento.png') }}">
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
					      	<img src="{{ asset('images/technology/TensorfLow.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/raspberry.png') }}">
					      </div>     
				      </div>
				  
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Pytorch_logo.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/google-voice.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/mahout.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Alexa.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/datumbox.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/OpenCV.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/PredictionIO.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/DL4J.png') }}">
					      </div>     
				      </div>

				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/openhab.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/pytest.png') }}">
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
					      	<img src="{{ asset('images/technology/trello-1.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Taiga.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Slack.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/asana.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Confluence.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Jira.png') }}">
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
					      	<img src="{{ asset('images/technology/Gitlab.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Bitbucket.png') }}">
					      </div>     
				      </div>
				     <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/mercurial.png') }}">
					      </div>        
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/AWS-Codecommit.png') }}">
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Github.png') }}">
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
					      	<img src="{{ asset('images/technology/MySQL.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/BigchainDB.png') }}">
					      </div>    
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/PostgreSQL.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Amazon-QLDB-1.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/SQLite.png') }}">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Hadoop-HDFS.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Neo4j.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/MongoDB.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Redis.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Cassandra.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/CouchDB-1.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Memcache.png') }}">
					      </div>     
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Cloudera.png') }}">
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
					      	<img src="{{ asset('images/technology/Drupal.png') }}">
					      </div> 
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Sitecore.png') }}">
					      </div>     
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/WordPress.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Magento.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Joomla.png') }}">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Broadleaf.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/prestashop.png') }}">
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
					      	<img src="{{ asset('images/technology/Apache-Hadoop.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/RabbitMQ.png') }}">
					      </div>  
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Elasticsearch.png') }}">
					      </div> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Kafka.png') }}">
					      </div>      
				      </div>
				      <div class="item"> 
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Apache-Hbase.png') }}">
					      </div>     
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Solr.png') }}">
					      </div>  
				      </div>
				      <div class="item">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/kibana.png') }}">
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/apache-pig.png') }}">
					      </div>  
					      </div>       
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Jasper.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/NoSQL.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Qlikview.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/PowerBi.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Cloudera-impala.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Apache-Spark.png') }}">
					      </div>    
				      </div>
				      <div class="item">      
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/AWS-Kinesis.png') }}">
					      </div>  
					      <div class="card_technology">
					      	<img src="{{ asset('images/technology/Apache_Hive-copy.png') }}">
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