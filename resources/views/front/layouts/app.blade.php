<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
      <meta charset="utf-8"/>
    <title>@yield('title', config('app.name') ) </title>
    <meta name="keywords" content="@yield('meta_keywords','Best Cloud Services | DevOps | Cybersecurity Services | Web Development')">
    <meta name="description" content="@yield('meta_description','We are an India-based firm that continues to move forward by specialising in the development of custom IT solutions for mobile, web, desktop, Server Management, DevOps, Security, Game Development.')">
      <meta content name="Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.">
      <meta name="google-site-verification" content="ePRKnCa5lWVO9Szr-1J2YPqxDTW_LSUGbjwbXCvUuO8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#2e2a8f"> 
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link href="{{ URL::to('assets/images/favicon.png') }}" rel="icon">
      <link rel='stylesheet' type='text/css' href="{{ URL::to('assets/css/bootstrap.min.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('assets/css/plugin.min.css') }}?{{ rand() }}" />
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('assets/css/style.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('assets/css/responsive.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('assets/css/darkmode.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('frontent/bootrap/css/bootstrap.min.css') }}?{{ rand() }}" />
      <script src="{{ URL::to('frontent/bootrap/js/jquery.min.js') }}"></script>
      <script src="{{ URL::to('frontent/bootrap/js/utils.min.js') }}"></script>
      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-S4NVKB3R1W');
</script>
   <style type="text/css">
       a:hover{
        text-decoration: none;
       }
   </style>  
</head>
   
   <style type="text/css">
       a:hover{
        text-decoration: none;
       }
   </style>
<body>
    @include('front.includes.header')

    @yield('content')
    <script>
    if ($("#contactForm").length > 0) {
      $("#contactForm").validate({
      rules: {
         name: {
            required: true,
         },
         email: {
            required: true,
            email: true,
         },
         message: {
            required: true,
         },   
      },
      messages: {
         name: {
            required: "Please enter name",
         },
         email: {
            required: "Please enter valid email",
            email: "Please enter valid email",
         },  
         message: {
            required: "Please enter message",
         },
      },
      submitHandler: function(form) {
      $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });
      $('.submit').html('Please Wait...');
      $(".submit"). attr("disabled", true);
            $.ajax({
               url: "{{ route('send-request-a-quote') }}",
               type: "POST",
               data: $('#contactForm').serialize(),
               success: function( response ) {
                  document.getElementById("contactForm").reset(); 
                  $('.submit').html('Submit');
                  $(".submit"). attr("disabled", false);
                  $('.message_success').html(response.success);
                  $("#myPopup").removeClass("hide");
               }
            });
         }
      })
   }

</script>
    @include('front.includes.footer')
   </body>
</html>