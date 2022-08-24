<!DOCTYPE html>
<html lang="en" class="no-js">
   
<head>
      <meta charset="utf-8"/>
      <title>@yield('title') {{ config('app.name') }}</title>
      <meta name="description" content="We are an India-based firm that continues to move forward by specialising in the development of custom IT solutions for mobile, web, desktop, Server Management, DevOps, Security, Game Development.">
      <meta name="keywords" content=" Best Cloud Services | DevOps | Cybersecurity Services | Web Development">
      <meta content name="Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.">
      <meta name="google-site-verification" content="ePRKnCa5lWVO9Szr-1J2YPqxDTW_LSUGbjwbXCvUuO8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#2e2a8f"> 
      <!--website-favicon-->
      <link href="{{ url('assets/images/favicon.png') }}" rel="icon">
      <!--plugin-css-->
      <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/plugin.min.css') }}" rel="stylesheet">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <!-- template-style-->
      <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
      <link href="{{ url('assets/css/darkmode.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
<body>
    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
   </body>
</html>