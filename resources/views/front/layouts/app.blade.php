<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
      <meta charset="utf-8"/>
    <title>@yield('title', config('app.name') ) </title>
    <meta name="keywords" content="@yield('meta_keywords','Best Cloud Services | DevOps | Cybersecurity Services | Web Development')">
    <meta name="description" content="@yield('meta_description','We are Indian firm that continues to move forward in the development of IT solutions for mobile,web,desktop,Server Management,DevOps,Security,Game Development.')">
      <meta content name="Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.Get your business website and Mobile Application Development solutions by certified, experienced developers in Jaipur, India.Prilient serving best DevOps, Cyber security, Digital Marketing and SEO services affordable for Business Outsourcing.">
      <meta name="google-site-verification" content="ePRKnCa5lWVO9Szr-1J2YPqxDTW_LSUGbjwbXCvUuO8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#2e2a8f"> 
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- @include('front.includes.links') -->
      @yield('link')
      <link href="{{ URL::to('public/assets/images/favicon.png') }}" rel="icon">
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/bootstrap.min.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/plugin.min.css') }}?{{ rand() }}" />
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" defer />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/style.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/responsive.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/darkmode.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/assets/css/font-awesome.min.css') }}?{{ rand() }}" />
      <link rel='stylesheet' type='text/css' href="{{ URL::to('public/frontent/bootrap/css/bootstrap.min.css') }}?{{ rand() }}" />
      <script src="{{ URL::to('public/frontent/bootrap/js/jquery.min.js') }}"></script>
      <script src="{{ URL::to('public/frontent/bootrap/js/utils.min.js') }}" defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" ></script>
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
         phone: {
            required: true,
            number:true,
            maxlength:10
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
         phone: {
            required: "Please enter phone number",
            maxlength: "Please enter max 10 digit",
            number:"Please enter numbers Only"
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
<script>
    if ($("#RequestQuoteForm").length > 0) {
      $("#RequestQuoteForm").validate({
      rules: {
         name: {
            required: true,
         },
         email: {
            required: true,
            email: true,
         },
         phone: {
            required: true,
            number:true,
            maxlength:10
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
         phone: {
            required: "Please enter phone number",
            maxlength: "Please enter max 10 digit",
            number:"Please enter numbers Only"
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
               data: $('#RequestQuoteForm').serialize(),
               success: function( response ) {
                  document.getElementById("RequestQuoteForm").reset(); 
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
